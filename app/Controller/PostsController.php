<?php 

class PostsController extends AppController {

   public $helpers = array('Html', 'Form');
   //public $helpers = array('Html', 'Form','Flash');
    public $name = 'Posts';
    //public $components = array('Flash');

    public function index() {
         $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        $this->set('post', $this->Post->findById($id));
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                //$this->Flash->success('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

}



?>