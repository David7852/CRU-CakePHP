<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MiembrosEventos Controller
 *
 * @property \App\Model\Table\MiembrosEventosTable $MiembrosEventos
 */
class MiembrosEventosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Miembros', 'Eventos']
        ];
        $miembrosEventos = $this->paginate($this->MiembrosEventos);

        $this->set(compact('miembrosEventos'));
        $this->set('_serialize', ['miembrosEventos']);
    }

    /**
     * View method
     *
     * @param string|null $id Miembros Evento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $miembrosEvento = $this->MiembrosEventos->get($id, [
            'contain' => ['Miembros', 'Eventos']
        ]);

        $this->set('miembrosEvento', $miembrosEvento);
        $this->set('_serialize', ['miembrosEvento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $miembrosEvento = $this->MiembrosEventos->newEntity();
        if ($this->request->is('post')) {
            $miembrosEvento = $this->MiembrosEventos->patchEntity($miembrosEvento, $this->request->data);
            if ($this->MiembrosEventos->save($miembrosEvento)) {
                $this->Flash->success(__('The miembros evento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros evento could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosEventos->Miembros->find('list', ['limit' => 200]);
        $eventos = $this->MiembrosEventos->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('miembrosEvento', 'miembros', 'eventos'));
        $this->set('_serialize', ['miembrosEvento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Miembros Evento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $miembrosEvento = $this->MiembrosEventos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $miembrosEvento = $this->MiembrosEventos->patchEntity($miembrosEvento, $this->request->data);
            if ($this->MiembrosEventos->save($miembrosEvento)) {
                $this->Flash->success(__('The miembros evento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros evento could not be saved. Please, try again.'));
        }
        $miembros = $this->MiembrosEventos->Miembros->find('list', ['limit' => 200]);
        $eventos = $this->MiembrosEventos->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('miembrosEvento', 'miembros', 'eventos'));
        $this->set('_serialize', ['miembrosEvento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Miembros Evento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $miembrosEvento = $this->MiembrosEventos->get($id);
        if ($this->MiembrosEventos->delete($miembrosEvento)) {
            $this->Flash->success(__('The miembros evento has been deleted.'));
        } else {
            $this->Flash->error(__('The miembros evento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
