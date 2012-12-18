<?php
class KecamatansController extends AppController {

	var $name = 'Kecamatans';
	var $helpers = array('Html', 'Form');
	function beforeFilter(){
		$this->set('secondarynav','config');
		$this->set('thirdNav','kecamatan');
	}


	function index() {
		$this->Kecamatan->recursive = 0;
		$this->set('kecamatans',$this->Kecamatan->find('all'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Kecamatan.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('kecamatan', $this->Kecamatan->read(null, $id));
	}


	function add() {
		if (!empty($this->data)) {
			$this->Kecamatan->create();
			if ($this->Kecamatan->save($this->data)) {
				$this->Session->setFlash('Data berhasil disimpan','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Kecamatan could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Kecamatan', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Kecamatan->save($this->data)) {
				$this->Session->setFlash('Data berhasil disimpan','flash_success');

				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Kecamatan->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Kecamatan', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Kecamatan->del($id)) {
			$this->Session->setFlash(__('Kecamatan deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function home(){
		$this->layout='default_home';
	}

	function findKelurahan() {
	    // Fill select form field after Ajax request.
	    $this->set('options',
	        $this->Kecamatan->Kelurahan->find('list',
	            array(
		       'fields'=>'Kelurahan.nama',
	                'conditions' => array(
	                    'Kelurahan.kecamatan_id' => $this->data['MasterSekolah']['kecamatan_id']
	                )
	            )
	        )
	    );
	    $this->render('/elements/kelurahanDropdown');
	}

	function findSekolah() {
	    // Fill select form field after Ajax request.
	    $this->set('options',
	        $this->Kecamatan->MasterSekolah->find('list',
	            array(
		       'fields'=>'MasterSekolah.nama',
	                'conditions' => array(
	                    //'MasterSekolah.kecamatan_id' => $this->data['MasterSekolah']['kecamatan_id'],
	                    'MasterSekolah.kelurahan_id' => $this->data['MasterSekolah']['kelurahan_id']
	                ),
	                'order'=>'MasterSekolah.nama ASC',
	            )
	        )
	    );
	    $this->render('/elements/sekolahDropdown');
	}

	function findSekolahTingkat() {
		$this->set('options',
	        $this->Kecamatan->MasterSekolah->find('list',
	            array(
		       'fields'=>'MasterSekolah.nama',
	                'conditions' => array(
	                    'MasterSekolah.kecamatan_id' => $this->data['MasterSekolah']['kecamatan_id'],
	                    'MasterSekolah.kelurahan_id' => $this->data['MasterSekolah']['kelurahan_id'],
	                    'MasterSekolah.jenjang_pendidikan' => $this->data['MasterSekolah']['tingkat']
	                ),
	                'order'=>'MasterSekolah.nama ASC',
	            )
	        )
	    );
	    $this->render('/elements/sekolahDropdown');
	}

}
?>