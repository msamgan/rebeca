<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class UsersController extends AppController
{
	public function index()
    {
    	$users = $this->Users->find('all', [ 'conditions' => ['Users.role' => 'user' ], 'order' => 'Users.id DESC' ]);
    	$this->set(compact('users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->autoRender = false;
        $this->request->allowMethod('get');
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
            echo 'true';
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            echo 'false';
        }
    }
}