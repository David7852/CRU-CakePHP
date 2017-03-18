<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coordinaciones Controller
 *
 * @property \App\Model\Table\CoordinacionesTable $Coordinaciones
 */
class CoordinacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $coordinaciones = $this->paginate($this->Coordinaciones);

        $this->set(compact('coordinaciones'));
        $this->set('_serialize', ['coordinaciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Coordinacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordinacion = $this->Coordinaciones->get($id, [
            'contain' => ['Miembros', 'Funciones']
        ]);

        $this->set('coordinacion', $coordinacion);
        $this->set('_serialize', ['coordinacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordinacion = $this->Coordinaciones->newEntity();
        if ($this->request->is('post')) {
            $coordinacion = $this->Coordinaciones->patchEntity($coordinacion, $this->request->data);
            if ($this->Coordinaciones->save($coordinacion)) {
                $this->Flash->success(__('The coordinacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinacion could not be saved. Please, try again.'));
        }
        $miembros = $this->Coordinaciones->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('coordinacion', 'miembros'));
        $this->set('_serialize', ['coordinacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordinacion id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordinacion = $this->Coordinaciones->get($id, [
            'contain' => ['Miembros']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordinacion = $this->Coordinaciones->patchEntity($coordinacion, $this->request->data);
            if ($this->Coordinaciones->save($coordinacion)) {
                $this->Flash->success(__('The coordinacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinacion could not be saved. Please, try again.'));
        }
        $miembros = $this->Coordinaciones->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('coordinacion', 'miembros'));
        $this->set('_serialize', ['coordinacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordinacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordinacion = $this->Coordinaciones->get($id);
        if ($this->Coordinaciones->delete($coordinacion)) {
            $this->Flash->success(__('The coordinacion has been deleted.'));
        } else {
            $this->Flash->error(__('The coordinacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
