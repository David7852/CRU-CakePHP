<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mensualidades Controller
 *
 * @property \App\Model\Table\MensualidadesTable $Mensualidades
 */
class MensualidadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mensualidades = $this->paginate($this->Mensualidades);

        $this->set(compact('mensualidades'));
        $this->set('_serialize', ['mensualidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Mensualidad id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mensualidad = $this->Mensualidades->get($id, [
            'contain' => ['Abonos']
        ]);

        $this->set('mensualidad', $mensualidad);
        $this->set('_serialize', ['mensualidad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mensualidad = $this->Mensualidades->newEntity();
        if ($this->request->is('post')) {
            $mensualidad = $this->Mensualidades->patchEntity($mensualidad, $this->request->data);
            if ($this->Mensualidades->save($mensualidad)) {
                $this->Flash->success(__('The mensualidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mensualidad could not be saved. Please, try again.'));
        }
        $this->set(compact('mensualidad'));
        $this->set('_serialize', ['mensualidad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mensualidad id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mensualidad = $this->Mensualidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mensualidad = $this->Mensualidades->patchEntity($mensualidad, $this->request->data);
            if ($this->Mensualidades->save($mensualidad)) {
                $this->Flash->success(__('The mensualidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mensualidad could not be saved. Please, try again.'));
        }
        $this->set(compact('mensualidad'));
        $this->set('_serialize', ['mensualidad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mensualidad id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mensualidad = $this->Mensualidades->get($id);
        if ($this->Mensualidades->delete($mensualidad)) {
            $this->Flash->success(__('The mensualidad has been deleted.'));
        } else {
            $this->Flash->error(__('The mensualidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
