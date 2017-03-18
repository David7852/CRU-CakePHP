<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MiembrosClases Controller
 *
 * @property \App\Model\Table\MiembrosClasesTable $MiembrosClases
 */
class MiembrosClasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Miembros', 'Clases']
        ];
        $miembrosClases = $this->paginate($this->MiembrosClases);

        $this->set(compact('miembrosClases'));
        $this->set('_serialize', ['miembrosClases']);
    }

    /**
     * View method
     *
     * @param string|null $id Miembros Clase id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $miembrosClase = $this->MiembrosClases->get($id, [
            'contain' => ['Miembros', 'Clases']
        ]);

        $this->set('miembrosClase', $miembrosClase);
        $this->set('_serialize', ['miembrosClase']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $miembrosClase = $this->MiembrosClases->newEntity();
        if ($this->request->is('post')) {
            $miembrosClase = $this->MiembrosClases->patchEntity($miembrosClase, $this->request->data);
            if ($this->MiembrosClases->save($miembrosClase)) {
                $this->Flash->success(__('The miembros clase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros clase could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosClases->Miembros->find('list', ['limit' => 200]);
        $clases = $this->MiembrosClases->Clases->find('list', ['limit' => 200]);
        $this->set(compact('miembrosClase', 'miembros', 'clases'));
        $this->set('_serialize', ['miembrosClase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Miembros Clase id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $miembrosClase = $this->MiembrosClases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $miembrosClase = $this->MiembrosClases->patchEntity($miembrosClase, $this->request->data);
            if ($this->MiembrosClases->save($miembrosClase)) {
                $this->Flash->success(__('The miembros clase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros clase could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosClases->Miembros->find('list', ['limit' => 200]);
        $clases = $this->MiembrosClases->Clases->find('list', ['limit' => 200]);
        $this->set(compact('miembrosClase', 'miembros', 'clases'));
        $this->set('_serialize', ['miembrosClase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Miembros Clase id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $miembrosClase = $this->MiembrosClases->get($id);
        if ($this->MiembrosClases->delete($miembrosClase)) {
            $this->Flash->success(__('The miembros clase has been deleted.'));
        } else {
            $this->Flash->error(__('The miembros clase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
