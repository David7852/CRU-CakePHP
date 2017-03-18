<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Componentes Controller
 *
 * @property \App\Model\Table\ComponentesTable $Componentes
 */
class ComponentesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modelos']
        ];
        $componentes = $this->paginate($this->Componentes);

        $this->set(compact('componentes'));
        $this->set('_serialize', ['componentes']);
    }

    /**
     * View method
     *
     * @param string|null $id Componente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $componente = $this->Componentes->get($id, [
            'contain' => ['Modelos', 'Solicitudes']
        ]);

        $this->set('componente', $componente);
        $this->set('_serialize', ['componente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $componente = $this->Componentes->newEntity();
        if ($this->request->is('post')) {
            $componente = $this->Componentes->patchEntity($componente, $this->request->data);
            if ($this->Componentes->save($componente)) {
                $this->Flash->success(__('The componente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The componente could not be saved. Please, try again.'));
        }
        $modelos = $this->Componentes->Modelos->find('list', ['limit' => 200]);
        $this->set(compact('componente', 'modelos'));
        $this->set('_serialize', ['componente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Componente id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $componente = $this->Componentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $componente = $this->Componentes->patchEntity($componente, $this->request->data);
            if ($this->Componentes->save($componente)) {
                $this->Flash->success(__('The componente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The componente could not be saved. Please, try again.'));
        }
        $modelos = $this->Componentes->Modelos->find('list', ['limit' => 200]);
        $this->set(compact('componente', 'modelos'));
        $this->set('_serialize', ['componente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Componente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $componente = $this->Componentes->get($id);
        if ($this->Componentes->delete($componente)) {
            $this->Flash->success(__('The componente has been deleted.'));
        } else {
            $this->Flash->error(__('The componente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
