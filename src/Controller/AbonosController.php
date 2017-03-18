<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Abonos Controller
 *
 * @property \App\Model\Table\AbonosTable $Abonos
 */
class AbonosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Miembros', 'Balances', 'Mensualidades']
        ];
        $abonos = $this->paginate($this->Abonos);

        $this->set(compact('abonos'));
        $this->set('_serialize', ['abonos']);
    }

    /**
     * View method
     *
     * @param string|null $id Abono id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $abono = $this->Abonos->get($id, [
            'contain' => ['Miembros', 'Balances', 'Mensualidades']
        ]);

        $this->set('abono', $abono);
        $this->set('_serialize', ['abono']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $abono = $this->Abonos->newEntity();
        if ($this->request->is('post')) {
            $abono = $this->Abonos->patchEntity($abono, $this->request->data);
            if ($this->Abonos->save($abono)) {
                $this->Flash->success(__('The abono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The abono could not be saved. Please, try again.'));
        }
        $miembros = $this->Abonos->Miembros->find('list', ['limit' => 200]);
        $balances = $this->Abonos->Balances->find('list', ['limit' => 200]);
        $mensualidades = $this->Abonos->Mensualidades->find('list', ['limit' => 200]);
        $this->set(compact('abono', 'miembros', 'balances', 'mensualidades'));
        $this->set('_serialize', ['abono']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Abono id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $abono = $this->Abonos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $abono = $this->Abonos->patchEntity($abono, $this->request->data);
            if ($this->Abonos->save($abono)) {
                $this->Flash->success(__('The abono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The abono could not be saved. Please, try again.'));
        }
        $miembros = $this->Abonos->Miembros->find('list', ['limit' => 200]);
        $balances = $this->Abonos->Balances->find('list', ['limit' => 200]);
        $mensualidades = $this->Abonos->Mensualidades->find('list', ['limit' => 200]);
        $this->set(compact('abono', 'miembros', 'balances', 'mensualidades'));
        $this->set('_serialize', ['abono']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Abono id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $abono = $this->Abonos->get($id);
        if ($this->Abonos->delete($abono)) {
            $this->Flash->success(__('The abono has been deleted.'));
        } else {
            $this->Flash->error(__('The abono could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
