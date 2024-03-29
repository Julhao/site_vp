<?php
App::uses('AppController', 'Controller');
/**
 * Modelos Controller
 *
 * @property Modelo $Modelo
 * @property PaginatorComponent $Paginator
 */
class ModelosController extends AppController {

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
		$this->Modelo->recursive = 0;
		$this->set('modelos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Modelo->exists($id)) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		$options = array('conditions' => array('Modelo.' . $this->Modelo->primaryKey => $id));
		$this->set('modelo', $this->Modelo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modelo->create();
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
			}
		}
		$marcas = $this->Modelo->Marca->find('list');
		$anuncios = $this->Modelo->Anuncio->find('list');
		$this->set(compact('marcas', 'anuncios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Modelo->exists($id)) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Modelo.' . $this->Modelo->primaryKey => $id));
			$this->request->data = $this->Modelo->find('first', $options);
		}
		$marcas = $this->Modelo->Marca->find('list');
		$anuncios = $this->Modelo->Anuncio->find('list');
		$this->set(compact('marcas', 'anuncios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Modelo->delete()) {
			$this->Session->setFlash(__('Modelo deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Modelo was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
