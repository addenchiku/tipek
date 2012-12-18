<?php
class SchoolsController extends AppController {

	var $name = 'Schools';
	var $helpers = array('Html', 'Form');


	function home(){
		$this->layout='default_home';
	}

	function index() {
		$this->School->recursive = 0;
		$this->set('schools', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid School.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('school', $this->School->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->School->create();
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(__('The School has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The School could not be saved. Please, try again.', true));
			}
		}
		$kelurahans = $this->School->Kelurahan->find('list');
		$this->set(compact('kelurahans'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid School', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(__('The School has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The School could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->School->read(null, $id);
		}
		$kelurahans = $this->School->Kelurahan->find('list');
		$this->set(compact('kelurahans'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for School', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->School->del($id)) {
			$this->Session->setFlash(__('School deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function jenis($kelas=null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','jenis');
		$this->set('url_controler','jenis');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);

	}

	function status($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','status');
		$this->set('url_controler','status');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}


	function mutu($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','mutu');
		$this->set('url_controler','mutu');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function akreditasi($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','akreditasi');
		$this->set('url_controler','akreditasi');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function sertifikasi($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','sertifikasi');
		$this->set('url_controler','sertifikasi');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function gugus($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','gugus');
		$this->set('url_controler','gugus');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function satuatap($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','satuatap');
		$this->set('url_controler','satuatap');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function wilayah($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','wilayah');
		$this->set('url_controler','wilayah');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function inklusi($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','inklusi');
		$this->set('url_controler','inklusi');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function listrik($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','listrik');
		$this->set('url_controler','listrik');
		$this->set('url_rekap','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function rekap_sekolah($kelas =null){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','rekap_sekolah');
		$this->set('url_controler','rekap_sekolah');
		$this->set('kelas',$kelas);
	}

	function siswa_kelas($kelas){
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_kelas');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_kelas');
		$this->set('url_rekap','rekap_siswa');


		//find SD
		$conditions = array('School.jenjang_pendidikan'=>$kelasInt);
		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'School.nama ASC'));
		$this->set(compact('records'));

	}

	function siswa_agama($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_agama');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_agama');
		$this->set('url_rekap','rekap_siswa');

		//convert level by int
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		//find SD
		$conditions = array('School.jenjang_pendidikan'=>$kelasInt);
		$sdRecords = $this->School->find('all',array('conditions'=>$conditions,'order'=>'School.nama ASC'));
		$this->set(compact('sdRecords'));

	}

	function siswa_umur($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_umur');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_umur');
		$this->set('url_rekap','rekap_siswa');

		//convert level by int
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		//find SD
		$conditions = array('School.jenjang_pendidikan'=>$kelasInt);
		$sdRecords = $this->School->find('all',array('conditions'=>$conditions,'order'=>'School.nama ASC'));
		$this->set(compact('sdRecords'));

	}

	function siswa_ekonomi($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_ekonomi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_ekonomi');
		$this->set('url_rekap','rekap_siswa');
	}

	function siswa_khusus($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_khusus');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_khusus');
		$this->set('url_rekap','rekap_siswa');
	}

	function siswa_putus($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_putus');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_putus');
		$this->set('url_rekap','rekap_siswa');
	}

	function siswa_prestasi($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_prestasi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_prestasi');
		$this->set('url_rekap','rekap_siswa');
	}

	function siswa_beasiswa($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_beasiswa');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_beasiswa');
		$this->set('url_rekap','rekap_siswa');
	}

	function rekap_siswa(){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','rekap_siswa');
		$this->set('kelas');
		$this->set('url_controler','rekap_siswa');
		$this->set('url_rekap','rekap_siswa');
	}

	function ptk_jabatan($kelas){
		$this->set('mainNav','ptk');
		$this->set('secondarynav','ptk');
		$this->set('thirdNav','ptk_jabatan');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ptk_jabatan');
		$this->set('url_rekap','rekap_ptk');
	}

	function ptk_didik($kelas){
		$this->set('mainNav','ptk');
		$this->set('secondarynav','ptk');
		$this->set('thirdNav','ptk_didik');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ptk_didik');
		$this->set('url_rekap','rekap_ptk');
	}

	function ptk_status($kelas){
		$this->set('mainNav','ptk');
		$this->set('secondarynav','ptk');
		$this->set('thirdNav','ptk_status');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ptk_status');
		$this->set('url_rekap','rekap_ptk');
	}

	function ptk_studi($kelas){
		$this->set('mainNav','ptk');
		$this->set('secondarynav','ptk');
		$this->set('thirdNav','ptk_studi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ptk_studi');
		$this->set('url_rekap','rekap_ptk');
	}

	function rekap_ptk(){
		$this->set('mainNav','ptk');
		$this->set('secondarynav','ptk');
		$this->set('thirdNav','rekap_ptk');
		$this->set('kelas');
		$this->set('url_controler','rekap_ptk');
		$this->set('url_rekap','rekap_ptk');
	}

	function biaya_penerimaan($kelas){
		$this->set('mainNav','biaya');
		$this->set('secondarynav','biaya');
		$this->set('thirdNav','biaya_penerimaan');
		$this->set('kelas',$kelas);
		$this->set('url_controler','biaya_penerimaan');
		$this->set('url_rekap','rekap_biaya');
	}

	function biaya_pengeluaran($kelas){
		$this->set('mainNav','biaya');
		$this->set('secondarynav','biaya');
		$this->set('thirdNav','biaya_pengeluaran');
		$this->set('kelas',$kelas);
		$this->set('url_controler','biaya_pengeluaran');
		$this->set('url_rekap','rekap_biaya');
	}

	function biaya_tw1($kelas){
		$this->set('mainNav','biaya');
		$this->set('secondarynav','biaya');
		$this->set('thirdNav','biaya_tw1');
		$this->set('kelas',$kelas);
		$this->set('url_controler','biaya_tw1');
		$this->set('url_rekap','rekap_biaya');
	}

	function biaya_tw2($kelas){
		$this->set('mainNav','biaya');
		$this->set('secondarynav','biaya');
		$this->set('thirdNav','biaya_tw2');
		$this->set('kelas',$kelas);
		$this->set('url_controler','biaya_tw2');
		$this->set('url_rekap','rekap_biaya');
	}

	function biaya_tw3($kelas){
		$this->set('mainNav','biaya');
		$this->set('secondarynav','biaya');
		$this->set('thirdNav','biaya_tw3');
		$this->set('kelas',$kelas);
		$this->set('url_controler','biaya_tw3');
		$this->set('url_rekap','rekap_biaya');
	}

	function biaya_tw4($kelas){
		$this->set('mainNav','biaya');
		$this->set('secondarynav','biaya');
		$this->set('thirdNav','biaya_tw4');
		$this->set('kelas',$kelas);
		$this->set('url_controler','biaya_tw4');
		$this->set('url_rekap','rekap_biaya');
	}

	function rekap_biaya(){
		$this->set('mainNav','biaya');
		$this->set('secondarynav','biaya');
		$this->set('thirdNav','rekap_biaya');
		$this->set('kelas');
		$this->set('url_controler','rekap_biaya');
		$this->set('url_rekap','rekap_biaya');
	}

	function rekap_kelulusan(){
		$this->set('mainNav','kelulusan');
		$this->set('secondarynav','kelulusan');
		$this->set('thirdNav','rekap_kelulusan');
		$this->set('kelas');
		$this->set('url_controler','rekap_kelulusan');
		$this->set('url_rekap','rekap_kelulusan');
	}

	function input_data(){
		$this->set('mainNav','');
		$this->set('secondarynav','');
		$this->set('thirdNav','');
		$this->set('kelas');
		$this->set('url_controler','');
		$this->set('url_rekap','');

		//Find Kecamatan
		$this->School->bindModel(array(
		    'hasOne' => array(
		        'Kecamatan' => array(
		            'foreignKey' => false,
		        ),
		    )
		));
		$kecamatan = $this->School->Kecamatan->find('list',array('fields'=>'nama'));
		$this->set(compact('kecamatan'));
    	}

    	function get_kelurahan() {
    		Configure::write('debug',0);
		if(!empty($this->data['Kecamatan']['kecamatan_id'])) {
			$kecamatan_id = (int)$this->data['Kecamatan']['kecamatan_id'];
			$conditions = array('Kelurahan.kecamatan_id' => $kecamatan_id);
			$options = $this->School->Kelurahan->find('all',array('conditions' => $conditions,'order'=>'Kelurahan.nama ASC'));
			$this->set('options',$options);
			$this->render('get_kelurahan','ajax');
		}
	}
}
?>