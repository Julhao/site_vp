<?php
App::uses('AppController', 'Controller');
/**
 * Anuncios Controller
 *
 * @property Anuncio $Anuncio
 * @property PaginatorComponent $Paginator
 */
class AnunciosController extends AppController {

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
		$this->Anuncio->recursive = 0;
		$this->set('anuncios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Anuncio->exists($id)) {
			throw new NotFoundException(__('Invalid anuncio'));
		}
		$options = array('conditions' => array('Anuncio.' . $this->Anuncio->primaryKey => $id));
		$this->set('anuncio', $this->Anuncio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	/*
	public function add() {
		if ($this->request->is('post')) {
			$this->Anuncio->create();
			if ($this->Anuncio->save($this->request->data)) {
				$this->Session->setFlash(__('The anuncio has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anuncio could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Anuncio->Usuarios->find('list');
		$this->set(compact('usuarios'));
	}
	*/
	public function add() {
    if ($this->request->is('post')) {
        $this->request->data['Anuncio']['usuarios_id'] = $this->Auth->user('id'); //Added this line
        if ($this->Anuncio->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            return $this->redirect(array('action' => 'index'));
        }
    }
}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Anuncio->exists($id)) {
			throw new NotFoundException(__('Invalid anuncio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Anuncio->save($this->request->data)) {
				$this->Session->setFlash(__('The anuncio has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anuncio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Anuncio.' . $this->Anuncio->primaryKey => $id));
			$this->request->data = $this->Anuncio->find('first', $options);
		}
		$usuarios = $this->Anuncio->Usuarios->find('list');
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
		$this->Anuncio->id = $id;
		if (!$this->Anuncio->exists()) {
			throw new NotFoundException(__('Invalid anuncio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Anuncio->delete()) {
			$this->Session->setFlash(__('Anuncio deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Anuncio was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
