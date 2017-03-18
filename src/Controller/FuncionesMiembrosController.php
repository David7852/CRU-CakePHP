<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FuncionesMiembros Controller
 *
 * @property \App\Model\Table\FuncionesMiembrosTable $FuncionesMiembros
 */
class FuncionesMiembrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Funciones', 'Miembros']
        ];
        $funcionesMiembros = $this->paginate($this->FuncionesMiembros);

        $this->set(compact('funcionesMiembros'));
        $this->set('_serialize', ['funcionesMiembros']);
    }

    /**
     * View method
     *
     * @param string|null $id Funciones Miembro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionesMiembro = $this->FuncionesMiembros->get($id, [
            'contain' => ['Funciones', 'Miembros']
        ]);

        $this->set('funcionesMiembro', $funcionesMiembro);
        $this->set('_serialize', ['funcionesMiembro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionesMiembro = $this->FuncionesMiembros->newEntity();
        if ($this->request->is('post')) {
            $funcionesMiembro = $this->FuncionesMiembros->patchEntity($funcionesMiembro, $this->request->data);
            if ($this->FuncionesMiembros->save($funcionesMiembro)) {
                $this->Flash->success(__('The funciones miembro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funciones miembro could not be saved. Please, try again.'));
        }
        $funciones = $this->FuncionesMiembros->Funciones->find('list', ['limit' => 200]);
        $miembros = $this->FuncionesMiembros->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('funcionesMiembro', 'funciones', 'miembros'));
        $this->set('_serialize', ['funcionesMiembro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Funciones Miembro id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionesMiembro = $this->FuncionesMiembros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionesMiembro = $this->FuncionesMiembros->patchEntity($funcionesMiembro, $this->request->data);
            if ($this->FuncionesMiembros->save($funcionesMiembro)) {
                $this->Flash->success(__('The funciones miembro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funciones miembro could not be saved. Please, try again.'));
        }
        $funciones = $this->FuncionesMiembros->Funciones->find('list', ['limit' => 200]);
        $miembros = $this->FuncionesMiembros->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('funcionesMiembro', 'funciones', 'miembros'));
        $this->set('_serialize', ['funcionesMiembro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Funciones Miembro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionesMiembro = $this->FuncionesMiembros->get($id);
        if ($this->FuncionesMiembros->delete($funcionesMiembro)) {
            $this->Flash->success(__('The funciones miembro has been deleted.'));
        } else {
            $this->Flash->error(__('The funciones miembro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
