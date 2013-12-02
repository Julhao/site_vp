<?php
App::uses('AppController', 'Controller');
/**
 * QuemSomos Controller
 *
 * @property QuemSomo $QuemSomo
 * @property PaginatorComponent $Paginator
 */
class QuemSomosController extends AppController {

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
	public function admin_index() {
		$this->QuemSomo->recursive = 0;
		$this->set('quemSomos', $this->Paginator->paginate());
		$this->layout = false;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->QuemSomo->exists($id)) {
			throw new NotFoundException(__('Invalid quem somo'));
		}
		$options = array('conditions' => array('QuemSomo.' . $this->QuemSomo->primaryKey => $id));
		$this->set('quemSomo', $this->QuemSomo->find('first', $options));
		$this->layout = false;
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->QuemSomo->create();
			if ($this->QuemSomo->save($this->request->data)) {
				$this->Session->setFlash(__('The quem somo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quem somo could not be saved. Please, try again.'));
			}
		}
		$this->layout = false;
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->QuemSomo->exists($id)) {
			throw new NotFoundException(__('Invalid quem somo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->QuemSomo->save($this->request->data)) {
				$this->Session->setFlash(__('The quem somo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quem somo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuemSomo.' . $this->QuemSomo->primaryKey => $id));
			$this->request->data = $this->QuemSomo->find('first', $options);
		}
		$this->layout = false;
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QuemSomo->id = $id;
		if (!$this->QuemSomo->exists()) {
			throw new NotFoundException(__('Invalid quem somo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->QuemSomo->delete()) {
			$this->Session->setFlash(__('Quem somo deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quem somo was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}


	public function index() {
		$this->QuemSomo->recursive = 0;
		$this->set("quem_somos", $this->QuemSomo->find("all"));

	}
}
