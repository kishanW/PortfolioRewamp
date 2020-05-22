<?php
    class User extends AppModel
    {
        /**
         * Standard validation behaviour
         */
        var $validate = array(
            'username' => array(
                'email' => array(
                    'rule'      => 'email',
                    'message'   => 'Must be a valid email address',
                ),
                'unique' => array(
                    'rule'      => 'isUnique',
                    'message'   => 'Already taken',
                ),
            ),            
            'password' => array(
                'empty' => array(
                    'rule'      => 'notEmpty',
                    'message'   => 'Must not be blank',
                    'required'  => true,
                ),
                'Match passwords' => array(
                    'rule'      =>  'matchPasswords',
                    'message'   =>  'Your passwords did not match',
                    'required'  => true,
                )
            ),
            'password_confirmation' => array(
                'length' => array(
                    'rule'      => array('between', 8, 20),
                    'message'   => 'Use between 8 and 20 characters',
                ),
                'empty' => array(
                    'rule'      => 'notEmpty',
                    'message'   => 'Must not be blank',
                ),
            ),
        );
         
     
        public function matchPasswords($data){       
            if($data['password'] == $this->data['User']['password_confirmation']){
                return true;
            }
            $this->invalidate('password_confirmation', 'Your passwords did not match');
            return false;
        }

        public function beforeSave(){
            if(isset($this->data['User']['password'])){
                $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
                return true;
            }
        }
    }
?>