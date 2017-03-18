<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solicitudes Controller
 *
 * @property \App\Model\Table\SolicitudesTable $Solicitudes
 */
class SolicitudesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Proyectos', 'Miembros', 'Componentes']
        ];
        $solicitudes = $this->paginate($this->Solicitudes);

        $this->set(compact('solicitudes'));
        $this->set('_serialize', ['solicitudes']);
    }

    /**
     * View method
     *
     * @param string|null $id Solicitud id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitud = $this->Solicitudes->get($id, [
            'contain' => ['Proyectos', 'Miembros', 'Componentes']
        ]);

        $this->set('solicitud', $solicitud);
        $this->set('_serialize', ['solicitud']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitud = $this->Solicitudes->newEntity();
        if ($this->request->is('post')) {
            $solicitud = $this->Solicitudes->patchEntity($solicitud, $this->request->data);
            if ($this->Solicitudes->save($solicitud)) {
                $this->Flash->success(__('The solicitud has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitud could not be saved. Please, try again.'));
        }
        $proyectos = $this->Solicitudes->Proyectos->find('list', ['limit' => 200]);
        $miembros = $this->Solicitudes->Miembros->find('list', ['limit' => 200]);
        $componentes = $this->Solicitudes->Componentes->find('list', ['limit' => 200]);
        $this->set(compact('solicitud', 'proyectos', 'miembros', 'componentes'));
        $this->set('_serialize', ['solicitud']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitud id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitud = $this->Solicitudes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitud = $this->Solicitudes->patchEntity($solicitud, $this->request->data);
            if ($this->Solicitudes->save($solicitud)) {
                $this->Flash->success(__('The solicitud has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitud could not be saved. Please, try again.'));
        }
        $proyectos = $this->Solicitudes->Proyectos->find('list', ['limit' => 200]);
        $miembros = $this->Solicitudes->Miembros->find('list', ['limit' => 200]);
        $componentes = $this->Solicitudes->Componentes->find('list', ['limit' => 200]);
        $this->set(compact('solicitud', 'proyectos', 'miembros', 'componentes'));
        $this->set('_serialize', ['solicitud']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitud id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitud = $this->Solicitudes->get($id);
        if ($this->Solicitudes->delete($solicitud)) {
            $this->Flash->success(__('The solicitud has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitud could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
