<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Funciones Controller
 *
 * @property \App\Model\Table\FuncionesTable $Funciones
 */
class FuncionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Coordinaciones']
        ];
        $funciones = $this->paginate($this->Funciones);

        $this->set(compact('funciones'));
        $this->set('_serialize', ['funciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Funcion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcion = $this->Funciones->get($id, [
            'contain' => ['Coordinaciones', 'Miembros']
        ]);

        $this->set('funcion', $funcion);
        $this->set('_serialize', ['funcion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcion = $this->Funciones->newEntity();
        if ($this->request->is('post')) {
            $funcion = $this->Funciones->patchEntity($funcion, $this->request->data);
            if ($this->Funciones->save($funcion)) {
                $this->Flash->success(__('The funcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcion could not be saved. Please, try again.'));
        }
        $coordinaciones = $this->Funciones->Coordinaciones->find('list', ['limit' => 200]);
        $miembros = $this->Funciones->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('funcion', 'coordinaciones', 'miembros'));
        $this->set('_serialize', ['funcion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcion id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcion = $this->Funciones->get($id, [
            'contain' => ['Miembros']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcion = $this->Funciones->patchEntity($funcion, $this->request->data);
            if ($this->Funciones->save($funcion)) {
                $this->Flash->success(__('The funcion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcion could not be saved. Please, try again.'));
        }
        $coordinaciones = $this->Funciones->Coordinaciones->find('list', ['limit' => 200]);
        $miembros = $this->Funciones->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('funcion', 'coordinaciones', 'miembros'));
        $this->set('_serialize', ['funcion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcion = $this->Funciones->get($id);
        if ($this->Funciones->delete($funcion)) {
            $this->Flash->success(__('The funcion has been deleted.'));
        } else {
            $this->Flash->error(__('The funcion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
