<?php
class MasterSekolahsController extends AppController {

	var $name = 'MasterSekolahs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MasterSekolah->recursive = 0;
		$this->set('masterSekolahs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MasterSekolah.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('masterSekolah', $this->MasterSekolah->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MasterSekolah->create();
			if ($this->MasterSekolah->save($this->data)) {
				$this->Session->setFlash(__('The MasterSekolah has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MasterSekolah could not be saved. Please, try again.', true));
			}
		}
		$kelurahans = $this->MasterSekolah->Kelurahan->find('list');
		$this->set(compact('kelurahans'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MasterSekolah', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MasterSekolah->save($this->data)) {
				$this->Session->setFlash(__('The MasterSekolah has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MasterSekolah could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MasterSekolah->read(null, $id);
		}
		$kelurahans = $this->MasterSekolah->Kelurahan->find('list');
		$this->set(compact('kelurahans'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MasterSekolah', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MasterSekolah->del($id)) {
			$this->Session->setFlash(__('MasterSekolah deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>