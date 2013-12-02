<?php
App::uses('AppController', 'Controller');
/**
 * Revendas Controller
 *
 * @property Revenda $Revenda
 * @property PaginatorComponent $Paginator
 */
class RevendasController extends AppController {

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
		$this->Revenda->recursive = 0;
		$this->set('revendas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Revenda->exists($id)) {
			throw new NotFoundException(__('Invalid revenda'));
		}
		$options = array('conditions' => array('Revenda.' . $this->Revenda->primaryKey => $id));
		$this->set('revenda', $this->Revenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Revenda->create();
			if ($this->Revenda->save($this->request->data)) {
				$this->Session->setFlash(__('The revenda has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revenda could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Revenda->Usuarios->find('list');
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
		if (!$this->Revenda->exists($id)) {
			throw new NotFoundException(__('Invalid revenda'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Revenda->save($this->request->data)) {
				$this->Session->setFlash(__('The revenda has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revenda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Revenda.' . $this->Revenda->primaryKey => $id));
			$this->request->data = $this->Revenda->find('first', $options);
		}
		$usuarios = $this->Revenda->Usuario->find('list');
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
		$this->Revenda->id = $id;
		if (!$this->Revenda->exists()) {
			throw new NotFoundException(__('Invalid revenda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Revenda->delete()) {
			$this->Session->setFlash(__('Revenda deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Revenda was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
