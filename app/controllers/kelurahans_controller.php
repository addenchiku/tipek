<?php
class KelurahansController extends AppController {

	var $name = 'Kelurahans';
	var $helpers = array('Html', 'Form');

	function beforeFilter(){
		$this->set('secondarynav','config');
		$this->set('thirdNav','kelurahan');
	}

	function index() {
		$this->Kelurahan->recursive = 0;
		$this->set('kelurahans', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Kelurahan.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('kelurahan', $this->Kelurahan->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Kelurahan->create();
			if ($this->Kelurahan->save($this->data)) {
				$this->Session->setFlash(__('The Kelurahan has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Kelurahan could not be saved. Please, try again.', true));
			}
		}
		$kecamatans = $this->Kelurahan->Kecamatan->find('list');
		$this->set(compact('kecamatans'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Kelurahan', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Kelurahan->save($this->data)) {
				$this->Session->setFlash(__('The Kelurahan has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Kelurahan could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Kelurahan->read(null, $id);
		}
		$kecamatans = $this->Kelurahan->Kecamatan->find('list');
		$this->set(compact('kecamatans'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Kelurahan', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Kelurahan->del($id)) {
			$this->Session->setFlash(__('Kelurahan deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>