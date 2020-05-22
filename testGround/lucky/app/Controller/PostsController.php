<?php
	class PostsController extends AppController{
		public $helpers = array('Html', 'Form', 'Session');
		public $components = array('Session');

		public function index(){
			$this->set('posts', $this->Post->find('all'));
		}

		public function view($id=null){
			if(!$id){
				throw new NotFoundException(_('Invalid Post'));
			}

			$post = $this->Post->findById($id);
			if(!$post){
				throw new NotFoundException(_('Invalid Post'));
			}
			$this->set('post', $post);
		}

		public function add(){
			if($this->request->is('post')){
				$this->Post->create();
				if($this->Post->save($this->request->data)){
					$this->Session->setFlash('Your post has been saved.');
					$this->redirect(array('action'=>'index'));
				}
				else{
					$this->Session->setFlash('Unable to save your post.');
				}
			}
		}

		public function edit($id=null){
			if(!$id){
				throw new NotFoundException(__('Invalid post'));
			}

			$post = $this->Post->findById($id);
			if(!$post){
				throw new NotFoundException(__('Invalid post'));
			}

			if($this->request->is('post') || $this->request->is('put')){
				$this->Post->id = $id;
				if($this->Post->save($this->request->data)){
					$this->Session->setFlash('Your post was updated.');
					$this->redirect(array('action' => 'index'));
				}
				else{
					$this->Session->setFlash('Unable to update your post.');
				}
			}

			if(!$this->request->data){
				$this->request->data = $post;
			}
		}

		public function delete($id=null){
			if($this->request->is('get')){
				throw new MethodNotAllowedException();
			}

			if($this->Post->delete($id)){
				$this->Session->setFlash('Post ID #'. $id. ' was deleted successfully.');
				$this->redirect(array('action'=>'index'));
			}
		}
	}
?>