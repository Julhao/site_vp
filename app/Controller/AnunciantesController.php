<?php
App::uses('AppController', 'Controller');
/**
 * Anunciantes Controller
 *
 * @property Anunciante $Anunciante
 * @property PaginatorComponent $Paginator
 */
class AnunciantesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Anunciante->recursive = 0;
		$this->set('anunciantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Anunciante->exists($id)) {
			throw new NotFoundException(__('Invalid anunciante'));
		}
		$options = array('conditions' => array('Anunciante.' . $this->Anunciante->primaryKey => $id));
		$this->set('anunciante', $this->Anunciante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Anunciante->create();
			if ($this->Anunciante->save($this->request->data)) {
				$this->Session->setFlash(__('The anunciante has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anunciante could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Anunciante->Usuarios->find('list');
		//$usuarios = $this->Anunciante->Usuarios->find('list', array('fields' => array('Usuarios.id', 'Usuarios.name')));
		$this->set(compact('usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Anunciante->exists($id)) {
			throw new NotFoundException(__('Invalid anunciante'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Anunciante->save($this->request->data)) {
				$this->Session->setFlash(__('The anunciante has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anunciante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Anunciante.' . $this->Anunciante->primaryKey => $id));
			$this->request->data = $this->Anunciante->find('first', $options);
		}
		$usuarios = $this->Anunciante->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Anunciante->id = $id;
		if (!$this->Anunciante->exists()) {
			throw new NotFoundException(__('Invalid anunciante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Anunciante->delete()) {
			$this->Session->setFlash(__('Anunciante deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Anunciante was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
