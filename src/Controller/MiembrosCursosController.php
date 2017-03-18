<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MiembrosCursos Controller
 *
 * @property \App\Model\Table\MiembrosCursosTable $MiembrosCursos
 */
class MiembrosCursosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cursos', 'Miembros']
        ];
        $miembrosCursos = $this->paginate($this->MiembrosCursos);

        $this->set(compact('miembrosCursos'));
        $this->set('_serialize', ['miembrosCursos']);
    }

    /**
     * View method
     *
     * @param string|null $id Miembros Curso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $miembrosCurso = $this->MiembrosCursos->get($id, [
            'contain' => ['Cursos', 'Miembros']
        ]);

        $this->set('miembrosCurso', $miembrosCurso);
        $this->set('_serialize', ['miembrosCurso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $miembrosCurso = $this->MiembrosCursos->newEntity();
        if ($this->request->is('post')) {
            $miembrosCurso = $this->MiembrosCursos->patchEntity($miembrosCurso, $this->request->data);
            if ($this->MiembrosCursos->save($miembrosCurso)) {
                $this->Flash->success(__('The miembros curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros curso could not be saved. Please, try again.'));
        }
        $cursos = $this->MiembrosCursos->Cursos->find('list', ['limit' => 200]);
        $miembros = $this->MiembrosCursos->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('miembrosCurso', 'cursos', 'miembros'));
        $this->set('_serialize', ['miembrosCurso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Miembros Curso id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $miembrosCurso = $this->MiembrosCursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $miembrosCurso = $this->MiembrosCursos->patchEntity($miembrosCurso, $this->request->data);
            if ($this->MiembrosCursos->save($miembrosCurso)) {
                $this->Flash->success(__('The miembros curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembros curso could not be saved. Please, try again.'));
        }
        $cursos = $this->MiembrosCursos->Cursos->find('list', ['limit' => 200]);
        $miembros = $this->MiembrosCursos->Miembros->find('list', ['limit' => 200]);
        $this->set(compact('miembrosCurso', 'cursos', 'miembros'));
        $this->set('_serialize', ['miembrosCurso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Miembros Curso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $miembrosCurso = $this->MiembrosCursos->get($id);
        if ($this->MiembrosCursos->delete($miembrosCurso)) {
            $this->Flash->success(__('The miembros curso has been deleted.'));
        } else {
            $this->Flash->error(__('The miembros curso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
