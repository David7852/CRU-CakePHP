<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Miembros Controller
 *
 * @property \App\Model\Table\MiembrosTable $Miembros
 */
class MiembrosController extends AppController
{


    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout','signup','reset','login','add']);
        $this->set('title', 'Miembros');
    }

    /**
     * Logout  method
     *
     *
     */
    public function logout()
    {
        $this->Flash->success('Has cerrado sesion.');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Login  method
     *
     *
     */
    public function login($nombre = null)
    {
        if($this->request->session()->read('Auth.User'))
            return $this->redirect(['action' => 'view', $this->request->session()->read('Auth.User.id')]);
        $this->set(compact('nombre'));
        if($this->request->is('post'))
            if (array_key_exists('btn',$this->request->data)&&$this->request->data['btn'] == 'Ingresar') {
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Flash->error('El nombre de usuario o contraseña son incorrectos.');
            }else
            {
                $usuarios = TableRegistry::get('Miembros');
                $query = $usuarios->find();
                $found=false;
                foreach ($query as $userrow){
                    if(strtolower($userrow->nombre_de_usuario)==strtolower($this->request->data['nombre_de_usuario']))
                    {$found=$userrow->id;
                        break;}
                }
                if($found)                {
                    return $this->redirect(['action' => 'reset',$found]);
                }
                $this->Flash->error('Ningun nombre de usuario coincide con el nombre ingresado');
            }
    }



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
        $miembros = $this->paginate($this->Miembros);

        $this->set(compact('miembros'));
        $this->set('_serialize', ['miembros']);
    }

    /**
     * View method
     *
     * @param string|null $id Miembro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $miembro = $this->Miembros->get($id, [
            'contain' => ['Contactos', 'Funciones', 'Clases', 'Coordinaciones', 'Cursos', 'Eventos', 'Grupos', 'Abonos', 'Solicitudes', 'Utilerias']
        ]);

        $this->set('miembro', $miembro);
        $this->set('_serialize', ['miembro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $miembro = $this->Miembros->newEntity();
        if ($this->request->is('post')) {
            $miembro = $this->Miembros->patchEntity($miembro, $this->request->data);
            if ($this->Miembros->save($miembro)) {
                $this->Flash->success(__('The miembro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembro could not be saved. Please, try again.'));
        }
        $contactos = $this->Miembros->Contactos->find('list', ['limit' => 200]);
        $funciones = $this->Miembros->Funciones->find('list', ['limit' => 200]);
        $clases = $this->Miembros->Clases->find('list', ['limit' => 200]);
        $coordinaciones = $this->Miembros->Coordinaciones->find('list', ['limit' => 200]);
        $cursos = $this->Miembros->Cursos->find('list', ['limit' => 200]);
        $eventos = $this->Miembros->Eventos->find('list', ['limit' => 200]);
        $grupos = $this->Miembros->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('miembro', 'contactos', 'funciones', 'clases', 'coordinaciones', 'cursos', 'eventos', 'grupos'));
        $this->set('_serialize', ['miembro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Miembro id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $miembro = $this->Miembros->get($id, [
            'contain' => ['Funciones', 'Clases', 'Coordinaciones', 'Cursos', 'Eventos', 'Grupos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $miembro = $this->Miembros->patchEntity($miembro, $this->request->data);
            if ($this->Miembros->save($miembro)) {
                $this->Flash->success(__('The miembro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miembro could not be saved. Please, try again.'));
        }
        $contactos = $this->Miembros->Contactos->find('list', ['limit' => 200]);
        $funciones = $this->Miembros->Funciones->find('list', ['limit' => 200]);
        $clases = $this->Miembros->Clases->find('list', ['limit' => 200]);
        $coordinaciones = $this->Miembros->Coordinaciones->find('list', ['limit' => 200]);
        $cursos = $this->Miembros->Cursos->find('list', ['limit' => 200]);
        $eventos = $this->Miembros->Eventos->find('list', ['limit' => 200]);
        $grupos = $this->Miembros->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('miembro', 'contactos', 'funciones', 'clases', 'coordinaciones', 'cursos', 'eventos', 'grupos'));
        $this->set('_serialize', ['miembro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Miembro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $miembro = $this->Miembros->get($id);
        if ($this->Miembros->delete($miembro)) {
            $this->Flash->success(__('The miembro has been deleted.'));
        } else {
            $this->Flash->error(__('The miembro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
