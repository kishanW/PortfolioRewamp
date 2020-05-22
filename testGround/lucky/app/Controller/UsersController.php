<?php
    class UsersController extends AppController
    {
        
        public $components = array('Email');
         
        /**
         * Runs automatically before the controller action is called
         */
        public function beforeFilter()
        {
            parent::beforeFilter();
            $this->Auth->allow('register', 'recover', 'verify', 'login');            
        }

        public function isAuthorized($user){
            if(in_array($this->action, array('account', 'edit', 'delete'))){
                if($user['id'] != $this->request->params['pass'][0]){
                    return false;
                }
            }
            return true;
        }

        public function index(){
           $this->User->recursive = 0;
            $this->set('users', $this->User->find('all'));
        }

         public function view($id = null){
            $this->User->id = $id;

            if(!$this->User->exists()){
                throw new NotFoundException('Invalid User');
            }
            if(!$id){
                $this->Session->setFlash('Invalid user');
                $this->redirect(array('action'=>'index'));
            }
            $this->set('user', $this->User->read());
         }
        /**
        * Login mechanism
        */
        public function login()
        {
            if($this->request->is('post')){
                if($this->Auth->login()){
                    $this->redirect($this->Auth->redirect());
                }
                else{
                    $this->Session->setFlash('Your username/ password combination was incorrect.');
                }
            }
        }

        /**
         * Log a user out
         */
        public function logout()
        {
           $this->redirect($this->Auth->logout());
        }

        /**
         * Registration page for new users
         */
        public function register()
        {
            if($this->request->is('post')){
                if($this->User->save($this->data) && $this->User->savefield('user_role', 'regUser')){
                    $this->Session->setFlash('User account was created');
                    $this->redirect(array('action' => 'index'));
                }
                else{
                    $this->Session->setFlash('Unable to create user account');
                }
            }
        }
        
        /**
         * Allows the user to email themselves a password redemption token
         */
        public function recover()
        {
            if ($this->Auth->user()) {
                $this->redirect(array('controller' => 'users', 'action' => 'account'));
            }
             
            if (!empty($this->data['User']['email'])) {
                $Token = ClassRegistry::init('Token');
                $user = $this->User->findByEmail($this->data['User']['email']);
                 
                if ($user === false) {
                    $this->Session->setFlash('No matching user found');
                    return false;
                }
                 
                $token = $Token->generate(array('User' => $user['User']));
                $this->Session->setFlash('An email has been sent to your account, please follow the instructions in this email.');
                $this->Email->to = $user['User']['email'];
                $this->Email->subject = 'Password Recovery';
                $this->Email->from = 'Support <support@example.com>';
                $this->Email->template = 'recover';
                $this->set('user', $user);
                $this->set('token', $token);
                $this->Email->send();
            }
        }
         
        /**
         * Accepts a valid token and resets the users password
         */
        public function verify($token_str = null)
        {
            if ($this->Auth->user()) {
                $this->redirect(array('controller' => 'users', 'action' => 'account'));
            }
     
            $Token = ClassRegistry::init('Token');
             
            $res = $Token->get($token_str);
            if ($res) {
                // Update the users password
                $password = $this->User->generatePassword();
                $this->User->id = $res['User']['id'];
                $this->User->saveField('password', $this->Auth->password($password));
                $this->set('success', true);
     
                // Send email with new password
                $this->Email->to = $res['User']['email'];
                $this->Email->subject = 'Password Changed';
                $this->Email->from = 'Support <support@example.com>';
                $this->Email->template = 'verify';
                $this->set('user', $res);
                $this->set('password', $password);
                $this->Email->send();
            }
        }

        /**
         * Account details page (change password)
         */
        public function account($id=null){
            $this->User->id = $id;
            $flashText = "The following changes were made,";

            if(!$this->User->exists()){
                throw new NotFoundException('Invalid User');
            }

            if($this->request->is('post') || $this->request->is('put')){
                if($this->User->saveField('phone', $this->request->data['User']['phone'])){
                    $flashText = $flashText. "\nPhone number changed.";
                    //$this->Session->setFlash('User info saved');
                    //$this->redirect(array('action' => 'index'));
                }

                if($this->User->saveField('address', $this->request->data['User']['address'])){
                    $flashText = $flashText. "\nAddress changed.";
                    //$this->Session->setFlash('User info saved');
                    //$this->redirect(array('action' => 'index'));
                }                

                if($this->User->saveField('password', $this->request->data['User']['newPassword'])){
                    $flashText = $flashText. "\nPassword changed.";
                    //$this->Session->setFlash('User info saved');
                    //$this->redirect(array('action' => 'index'));
                }
                if($flashText != ""){
                    $this->Session->setFlash($flashText);
                    $this->redirect(array('action' => 'index'));
                }
            }
            else{
                $this->request->data = $this->User->read();
            }
        }

        public function delete($id=null){
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }

            if($this->User->delete($id)){
                $this->Session->setFlash('User'. $username. ' was deleted successfully.');
                $this->redirect($this->Auth->logout());
            }
               $this->Session->setFlash('Unable to delete the user.');
                 $this->redirect(array('action'=>'index'));  
        }
    }
?>