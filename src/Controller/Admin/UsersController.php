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

    public function auth()
    {
        return $this->redirect('/');
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__( '"'.$user->name.'" has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('"'.$user->name.'" could not be updated. Please, try again.'));
        }
        $this->set(compact('user'));
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