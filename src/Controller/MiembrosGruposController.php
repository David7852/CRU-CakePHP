<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MiembrosGrupos Controller
 *
 * @property \App\Model\Table\MiembrosGruposTable $MiembrosGrupos
 */
class MiembrosGruposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Miembros', 'Grupos']
        ];
        $miembrosGrupos = $this->paginate($this->MiembrosGrupos);

        $this->set(compact('miembrosGrupos'));
        $this->set('_serialize', ['miembrosGrupos']);
    }

    /**
     * View method
     *
     * @param string|null $id Miembros Grupo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $miembrosGrupo = $this->MiembrosGrupos->get($id, [
            'contain' => ['Miembros', 'Grupos']
        ]);

        $this->set('miembrosGrupo', $miembrosGrupo);
        $this->set('_serialize', ['miembrosGrupo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $miembrosGrupo = $this->MiembrosGrupos->newEntity();
        if ($this->request->is('post')) {
            $miembrosGrupo = $this->MiembrosGrupos->patchEntity($miembrosGrupo, $this->request->data);
            if ($this->MiembrosGrupos->save($miembrosGrupo)) {
                $this->Flash->success(__('The miembros grupo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros grupo could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosGrupos->Miembros->find('list', ['limit' => 200]);
        $grupos = $this->MiembrosGrupos->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('miembrosGrupo', 'miembros', 'grupos'));
        $this->set('_serialize', ['miembrosGrupo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Miembros Grupo id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $miembrosGrupo = $this->MiembrosGrupos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $miembrosGrupo = $this->MiembrosGrupos->patchEntity($miembrosGrupo, $this->request->data);
            if ($this->MiembrosGrupos->save($miembrosGrupo)) {
                $this->Flash->success(__('The miembros grupo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros grupo could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosGrupos->Miembros->find('list', ['limit' => 200]);
        $grupos = $this->MiembrosGrupos->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('miembrosGrupo', 'miembros', 'grupos'));
        $this->set('_serialize', ['miembrosGrupo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Miembros Grupo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $miembrosGrupo = $this->MiembrosGrupos->get($id);
        if ($this->MiembrosGrupos->delete($miembrosGrupo)) {
            $this->Flash->success(__('The miembros grupo has been deleted.'));
        } else {
            $this->Flash->error(__('The miembros grupo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
