<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Utilerias Controller
 *
 * @property \App\Model\Table\UtileriasTable $Utilerias
 */
class UtileriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Eventos', 'Miembros']
        ];
        $utilerias = $this->paginate($this->Utilerias);

        $this->set(compact('utilerias'));
        $this->set('_serialize', ['utilerias']);
    }

    /**
     * View method
     *
     * @param string|null $id Utileria id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utileria = $this->Utilerias->get($id, [
            'contain' => ['Eventos', 'Miembros']
        ]);

        $this->set('utileria', $utileria);
        $this->set('_serialize', ['utileria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utileria = $this->Utilerias->newEntity();
        if ($this->request->is('post')) {
            $utileria = $this->Utilerias->patchEntity($utileria, $this->request->data);
            if ($this->Utilerias->save($utileria)) {
                $this->Flash->success(__('The utileria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utileria could not be saved. Please, try again.'));
        }
        $eventos = $this->Utilerias->Eventos->find('list', ['limit' => 200]);
        $miembros = $this->Utilerias->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('utileria', 'eventos', 'miembros'));
        $this->set('_serialize', ['utileria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Utileria id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utileria = $this->Utilerias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utileria = $this->Utilerias->patchEntity($utileria, $this->request->data);
            if ($this->Utilerias->save($utileria)) {
                $this->Flash->success(__('The utileria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utileria could not be saved. Please, try again.'));
        }
        $eventos = $this->Utilerias->Eventos->find('list', ['limit' => 200]);
        $miembros = $this->Utilerias->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('utileria', 'eventos', 'miembros'));
        $this->set('_serialize', ['utileria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Utileria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utileria = $this->Utilerias->get($id);
        if ($this->Utilerias->delete($utileria)) {
            $this->Flash->success(__('The utileria has been deleted.'));
        } else {
            $this->Flash->error(__('The utileria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
