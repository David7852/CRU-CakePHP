<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Donaciones Controller
 *
 * @property \App\Model\Table\DonacionesTable $Donaciones
 */
class DonacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contactos']
        ];
        $donaciones = $this->paginate($this->Donaciones);

        $this->set(compact('donaciones'));
        $this->set('_serialize', ['donaciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Donacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donacion = $this->Donaciones->get($id, [
            'contain' => ['Contactos']
        ]);

        $this->set('donacion', $donacion);
        $this->set('_serialize', ['donacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donacion = $this->Donaciones->newEntity();
        if ($this->request->is('post')) {
            $donacion = $this->Donaciones->patchEntity($donacion, $this->request->data);
            if ($this->Donaciones->save($donacion)) {
                $this->Flash->success(__('The donacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donacion could not be saved. Please, try again.'));
        }
        $contactos = $this->Donaciones->Contactos->find('list', ['limit' => 200]);
        $this->set(compact('donacion', 'contactos'));
        $this->set('_serialize', ['donacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Donacion id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donacion = $this->Donaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donacion = $this->Donaciones->patchEntity($donacion, $this->request->data);
            if ($this->Donaciones->save($donacion)) {
                $this->Flash->success(__('The donacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donacion could not be saved. Please, try again.'));
        }
        $contactos = $this->Donaciones->Contactos->find('list', ['limit' => 200]);
        $this->set(compact('donacion', 'contactos'));
        $this->set('_serialize', ['donacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Donacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donacion = $this->Donaciones->get($id);
        if ($this->Donaciones->delete($donacion)) {
            $this->Flash->success(__('The donacion has been deleted.'));
        } else {
            $this->Flash->error(__('The donacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
