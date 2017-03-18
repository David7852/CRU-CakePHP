<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MiembrosCoordinaciones Controller
 *
 * @property \App\Model\Table\MiembrosCoordinacionesTable $MiembrosCoordinaciones
 */
class MiembrosCoordinacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Miembros', 'Coordinaciones']
        ];
        $miembrosCoordinaciones = $this->paginate($this->MiembrosCoordinaciones);

        $this->set(compact('miembrosCoordinaciones'));
        $this->set('_serialize', ['miembrosCoordinaciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Miembros Coordinacione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $miembrosCoordinacione = $this->MiembrosCoordinaciones->get($id, [
            'contain' => ['Miembros', 'Coordinaciones']
        ]);

        $this->set('miembrosCoordinacione', $miembrosCoordinacione);
        $this->set('_serialize', ['miembrosCoordinacione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $miembrosCoordinacione = $this->MiembrosCoordinaciones->newEntity();
        if ($this->request->is('post')) {
            $miembrosCoordinacione = $this->MiembrosCoordinaciones->patchEntity($miembrosCoordinacione, $this->request->data);
            if ($this->MiembrosCoordinaciones->save($miembrosCoordinacione)) {
                $this->Flash->success(__('The miembros coordinacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros coordinacione could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosCoordinaciones->Miembros->find('list', ['limit' => 200]);
        $coordinaciones = $this->MiembrosCoordinaciones->Coordinaciones->find('list', ['limit' => 200]);
        $this->set(compact('miembrosCoordinacione', 'miembros', 'coordinaciones'));
        $this->set('_serialize', ['miembrosCoordinacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Miembros Coordinacione id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $miembrosCoordinacione = $this->MiembrosCoordinaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $miembrosCoordinacione = $this->MiembrosCoordinaciones->patchEntity($miembrosCoordinacione, $this->request->data);
            if ($this->MiembrosCoordinaciones->save($miembrosCoordinacione)) {
                $this->Flash->success(__('The miembros coordinacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros coordinacione could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosCoordinaciones->Miembros->find('list', ['limit' => 200]);
        $coordinaciones = $this->MiembrosCoordinaciones->Coordinaciones->find('list', ['limit' => 200]);
        $this->set(compact('miembrosCoordinacione', 'miembros', 'coordinaciones'));
        $this->set('_serialize', ['miembrosCoordinacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Miembros Coordinacione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $miembrosCoordinacione = $this->MiembrosCoordinaciones->get($id);
        if ($this->MiembrosCoordinaciones->delete($miembrosCoordinacione)) {
            $this->Flash->success(__('The miembros coordinacione has been deleted.'));
        } else {
            $this->Flash->error(__('The miembros coordinacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
