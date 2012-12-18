<?php
class SchoolsController extends AppController {

	var $name = 'Schools';
	var $helpers = array('Html', 'Form');
	function beforeFilter(){
		$this->School->bindModel(
			array('hasMany' =>
				array(
					'Kecamatan' => array(
						'className' => 'Kecamatan'
					),
					'Kelurahan' => array(
						'className' => 'Kelurahan'
					)
				)
			)
		);
		//find kecamatan
		$kelurahanList = $this->School->Kelurahan->find('list',array('fields'=>'Kelurahan.nama'));
		$kecamatanList = $this->School->Kecamatan->find('list',array('fields'=>'Kecamatan.nama'));
		$sekolahList = array();
		$this->set(compact('kelurahanList','kecamatanList','sekolahList'));
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
		//$kelurahans = $this->School->Kelurahan->find('list');
		//$this->set(compact('kelurahans'));
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

	function jenis($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','jenis');
		$this->set('kelas',$kelas);
		$this->set('url_controler','jenis');
		$this->set('url_rekap','rekap_sekolah');

		//Set session tahun ajaran
		//$tahunAjaran = $this->data['User']['tahun_ajaran'];
		$tahunAjaran = 2012;
		$triwulan = 4;
		$this->Session->write('tahunAjaran', $tahunAjaran);
		//$namatahunAjaran2 = $this->User->TahunAjaran->find('all',array('conditions'=>array('TahunAjaran.id'=>$this->data['User']['tahun_ajaran'])));
		//$namatahunAjaran = $namatahunAjaran2[0]['TahunAjaran']['tahun'];
		$this->Session->write('triwulan', $triwulan);



		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}


		$conditions = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>1,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
		$regular = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$conditions2 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>2,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
		$madrasah = $this->School->find('all',array('conditions'=>$conditions2,'order'=>'MasterSekolah.nama ASC'));

		$conditions3 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>3,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
		$slb = $this->School->find('all',array('conditions'=>$conditions3,'order'=>'MasterSekolah.nama ASC'));



		$this->set(compact('regular','madrasah','slb'));
	}


	function jenis_ajax(){

		$kelas = $this->data['MasterSekolah']['kelas'];
		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		if(!empty($this->data['MasterSekolah']['kecamatan_id']) || !empty($this->data['MasterSekolah']['kelurahan_id']) || $this->data['MasterSekolah']['kecamatan_id']!=null || $this->data['MasterSekolah']['kelurahan_id']!=null){

			$kecamatanInt = $this->data['MasterSekolah']['kecamatan_id'];
			$kelurahanInt = $this->data['MasterSekolah']['kelurahan_id'];

			$conditions = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>1,'MasterSekolah.kecamatan_id'=>$kecamatanInt,'MasterSekolah.kelurahan_id'=>$kelurahanInt,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
			$regular = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

			$conditions2 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>2,'MasterSekolah.kecamatan_id'=>$kecamatanInt,'MasterSekolah.kelurahan_id'=>$kelurahanInt,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
			$madrasah = $this->School->find('all',array('conditions'=>$conditions2,'order'=>'MasterSekolah.nama ASC'));

			$conditions3 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>3,'MasterSekolah.kecamatan_id'=>$kecamatanInt,'MasterSekolah.kelurahan_id'=>$kelurahanInt,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
			$slb = $this->School->find('all',array('conditions'=>$conditions3,'order'=>'MasterSekolah.nama ASC'));
		}

		$this->set(compact('regular','madrasah','slb','kelas'));
		$this->render('jenis_ajax','ajax');

	}

	function status($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','status');
		$this->set('kelas',$kelas);
		$this->set('url_controler','status');
		$this->set('url_rekap','rekap_sekolah');

		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}


		$conditions = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>array(1,3),'MasterSekolah.status'=>1,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
		$regularNegeri = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$conditions2 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>2,'MasterSekolah.status'=>1,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
		$madrasahNegeri = $this->School->find('all',array('conditions'=>$conditions2,'order'=>'MasterSekolah.nama ASC'));

		$conditions3 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>array(1,3),'MasterSekolah.status'=>2,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
		$regularSwasta = $this->School->find('all',array('conditions'=>$conditions3,'order'=>'MasterSekolah.nama ASC'));

		$conditions4 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>3,'MasterSekolah.status'=>2,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
		$madrasahSwasta = $this->School->find('all',array('conditions'=>$conditions4,'order'=>'MasterSekolah.nama ASC'));


		$this->set(compact('regularNegeri','regularSwasta','madrasahNegeri','madrasahSwasta'));
	}

	function status_ajax(){

		$kelas = $this->data['MasterSekolah']['kelas'];
		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		if(!empty($this->data['MasterSekolah']['kecamatan_id']) || !empty($this->data['MasterSekolah']['kelurahan_id']) || $this->data['MasterSekolah']['kecamatan_id']!=null || $this->data['MasterSekolah']['kelurahan_id']!=null){

			$kecamatanInt = $this->data['MasterSekolah']['kecamatan_id'];
			$kelurahanInt = $this->data['MasterSekolah']['kelurahan_id'];

			$conditions = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>array(1,3),'MasterSekolah.status'=>1,'MasterSekolah.kecamatan_id'=>$kecamatanInt,'MasterSekolah.kelurahan_id'=>$kelurahanInt,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
			$regularNegeri = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

			$conditions2 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>2,'MasterSekolah.status'=>1,'MasterSekolah.kecamatan_id'=>$kecamatanInt,'MasterSekolah.kelurahan_id'=>$kelurahanInt,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
			$madrasahNegeri = $this->School->find('all',array('conditions'=>$conditions2,'order'=>'MasterSekolah.nama ASC'));

			$conditions3 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>array(1,3),'MasterSekolah.status'=>2,'MasterSekolah.kecamatan_id'=>$kecamatanInt,'MasterSekolah.kelurahan_id'=>$kelurahanInt,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
			$regularSwasta = $this->School->find('all',array('conditions'=>$conditions3,'order'=>'MasterSekolah.nama ASC'));

			$conditions4 = array('MasterSekolah.jenjang_pendidikan'=>$kelasInt,'MasterSekolah.jenis'=>3,'MasterSekolah.status'=>2,'MasterSekolah.kecamatan_id'=>$kecamatanInt,'MasterSekolah.kelurahan_id'=>$kelurahanInt,'School.year_entry'=>$this->Session->read('tahunAjaran'),'School.month_entry'=>$this->Session->read('triwulan'));
			$madrasahSwasta = $this->School->find('all',array('conditions'=>$conditions4,'order'=>'MasterSekolah.nama ASC'));

		}

		$this->set(compact('regularNegeri','regularSwasta','madrasahNegeri','madrasahSwasta','kelas'));
		$this->render('status_ajax','ajax');
	}

	function mutu($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','mutu');
		$this->set('kelas',$kelas);
		$this->set('url_controler','mutu');
		$this->set('url_rekap','rekap_sekolah');
	}

	function akreditasi($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','akreditasi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','akreditasi');
		$this->set('url_rekap','rekap_sekolah');
	}

	function sertifikasi($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','sertifikasi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','sertifikasi');
		$this->set('url_rekap','rekap_sekolah');
	}

	function gugus($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','gugus');
		$this->set('kelas',$kelas);
		$this->set('url_controler','gugus');
		$this->set('url_rekap','rekap_sekolah');
	}

	function satuatap($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','satuatap');
		$this->set('kelas',$kelas);
		$this->set('url_controler','satuatap');
		$this->set('url_rekap','rekap_sekolah');
	}

	function wilayah($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','wilayah');
		$this->set('kelas',$kelas);
		$this->set('url_controler','wilayah');
		$this->set('url_rekap','rekap_sekolah');
	}

	function inklusi($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','inklusi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','inklusi');
		$this->set('url_rekap','rekap_sekolah');
	}

	function listrik($kelas){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','listrik');
		$this->set('kelas',$kelas);
		$this->set('url_controler','listrik');
		$this->set('url_rekap','rekap_sekolah');
	}



	function rekap_sekolah(){
		$this->set('mainNav','sekolah');
		$this->set('secondarynav','sekolah');
		$this->set('thirdNav','rekap_sekolah');
		$this->set('kelas');
		$this->set('url_controler','rekap_sekolah');
		$this->set('url_rekap','rekap_sekolah');
	}

	function siswa_kelas($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_kelas');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_kelas');
		$this->set('url_rekap','rekap_siswa');


		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));


	}

	function siswa_agama($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_agama');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_agama');
		$this->set('url_rekap','rekap_siswa');

		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));

	}

	function siswa_umur($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_umur');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_umur');
		$this->set('url_rekap','rekap_siswa');


		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));
	}

	function siswa_ekonomi($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_ekonomi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_ekonomi');
		$this->set('url_rekap','rekap_siswa');


		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));

	}

	function siswa_khusus($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_khusus');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_khusus');
		$this->set('url_rekap','rekap_siswa');

		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));
	}

	function siswa_putus($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_putus');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_putus');
		$this->set('url_rekap','rekap_siswa');

		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));
	}

	function siswa_prestasi($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_prestasi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_prestasi');
		$this->set('url_rekap','rekap_siswa');


		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));

	}

	function siswa_beasiswa($kelas){
		$this->set('mainNav','siswa');
		$this->set('secondarynav','siswa');
		$this->set('thirdNav','siswa_beasiswa');
		$this->set('kelas',$kelas);
		$this->set('url_controler','siswa_beasiswa');
		$this->set('url_rekap','rekap_siswa');

		//start find kelas
		if($kelas == 'sd'){
			$kelasInt = 2;
		}elseif($kelas == 'smp') {
			$kelasInt = 3;
		}elseif($kelas == 'sma') {
			$kelasInt = 4;
		}elseif($kelas == 'smk') {
			$kelasInt = 5;
		}

		$conditions = array(
			'MasterSekolah.jenjang_pendidikan'=>$kelasInt,
			'School.year_entry'=>$this->Session->read('tahunAjaran'),
			'School.month_entry'=>$this->Session->read('triwulan')
		);

		$records = $this->School->find('all',array('conditions'=>$conditions,'order'=>'MasterSekolah.nama ASC'));

		$this->set(compact('records'));
	}

	//find each rekap

	function rekap_siswa_satuan_sd($urlController){
		$this->School->bindModel(
			array('hasMany' =>
				array(
					'SiswaRekapSd' => array(
						'className' => 'SiswaRekapSd'
					),
				)
			)
		);

		$conditions = array(
			'SiswaRekapSd.year_entry'=>$this->Session->read('tahunAjaran'),
			'SiswaRekapSd.month_entry'=>$this->Session->read('triwulan')
		);

		//find
		$rekap = $this->School->SiswaRekapSd->find('first', array('conditions'=>$conditions));
		 if (!empty($this->params['requested'])) {
		 	$this->set('rekap',$rekap);
		 	$this->set(compact('urlController'));
			return $rekap;

		} else {
			$this->set('rekap',$rekap);
			$this->set(compact('urlController'));
		}

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

	function prasarana_teori_kelas($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_teori_kelas');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_teori_kelas');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function prasarana_lab_ipa($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_ipa');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_ipa');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function prasarana_lab_kimia($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_kimia');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_kimia');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function prasarana_lab_fisika($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_fisika');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_fisika');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function prasarana_lab_biologi($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_biologi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_biologi');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function prasarana_lab_bahasa($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_bahasa');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_bahasa');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function prasarana_lab_ips($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_ips');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_ips');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

		function prasarana_lab_komputer($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_komputer');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_komputer');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}


	function prasarana_lab_multimedia($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lab_multimedia');
		$this->set('kelas',$kelas);
		$this->set('url_controler','prasarana_lab_multimedia');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_perpus($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_perpus');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_perpus');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_perpus_multi($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_perpus_multi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_perpus_multi');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_keterampilan($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_keterampilan');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_keterampilan');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_serbaguna($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_serbaguna');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_serbaguna');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_uks($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_uks');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_uks');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_praktik_kerja($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_praktik_kerja');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_praktik_kerja');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function bengkel($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','bengkel');
		$this->set('kelas',$kelas);
		$this->set('url_controler','bengkel');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_diesel($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_diesel');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_diesel');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_pameran($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_pameran');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_pameran');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_gambar($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_gambar');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_gambar');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_bpbk($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_bpbk');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_bpbk');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_koperasi($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_koperasi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_koperasi');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_kepsek($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_kepsek');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_kepsek');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_guru($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_guru');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_guru');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_tu($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_tu');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_tu');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_osis($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_osis');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_osis');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_multi($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_multi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_multi');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_ibadah($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_ibadah');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_ibadah');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_gudang($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_gudang');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_gudang');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_olahraga($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_olahraga');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_olahraga');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_unit_produksi($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_unit_produksi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_unit_produksi');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function ruang_belajar_guru($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','ruang_belajar_guru');
		$this->set('kelas',$kelas);
		$this->set('url_controler','ruang_belajar_guru');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function kamarmandi_guru_laki($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','kamarmandi_guru_laki');
		$this->set('kelas',$kelas);
		$this->set('url_controler','kamarmandi_guru_laki');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function kamarmandi_guru_perempuan($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','kamarmandi_guru_perempuan');
		$this->set('kelas',$kelas);
		$this->set('url_controler','kamarmandi_guru_perempuan');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function kamarmandi_siswa($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','kamarmandi_siswa');
		$this->set('kelas',$kelas);
		$this->set('url_controler','kamarmandi_siswa');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function kamarmandi_siswi($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','kamarmandi_siswi');
		$this->set('kelas',$kelas);
		$this->set('url_controler','kamarmandi_siswi');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function rumah_dinas_kepsek($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','rumah_dinas_kepsek');
		$this->set('kelas',$kelas);
		$this->set('url_controler','rumah_dinas_kepsek');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function rumah_dinas_guru($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','rumah_dinas_guru');
		$this->set('kelas',$kelas);
		$this->set('url_controler','rumah_dinas_guru');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function rumah_penjaga($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','rumah_penjaga');
		$this->set('kelas',$kelas);
		$this->set('url_controler','rumah_penjaga');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function sanggar_mgmp($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','sanggar_mgmp');
		$this->set('kelas',$kelas);
		$this->set('url_controler','sanggar_mgmp');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function sanggar_pkg($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','sanggar_pkg');
		$this->set('kelas',$kelas);
		$this->set('url_controler','sanggar_pkg');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function asrama_siswa($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','asrama_siswa');
		$this->set('kelas',$kelas);
		$this->set('url_controler','asrama_siswa');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function prasarana_lain($kelas){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','prasarana_lain');
		$this->set('kelas',$kelas);
		$this->set('url_controler','pr');
		$this->set('url_rekap','rekap_prasarana');
		$this->render('prasarana');
	}

	function rekap_prasarana(){
		$this->set('mainNav','prasarana');
		$this->set('secondarynav','prasarana');
		$this->set('thirdNav','rekap_prasarana');
		$this->set('kelas');
		$this->set('url_controler','rekap_prasarana');
		$this->set('url_rekap','rekap_prasarana');

	}

	function sarana(){
		$this->set('mainNav','sarana');
		$this->set('secondarynav','sarana');
		$this->set('thirdNav','sarana');

		$this->set('kelas');
		$this->set('url_controler','sarana');


	}

	function saranabuku(){
		$this->set('mainNav','saranabuku');
		$this->set('secondarynav','saranabuku');
		$this->set('thirdNav','saranabuku_siswa');
		$this->set('kelas');
		$this->set('url_controler','saranabuku_siswa');
		$this->set('url_rekap',"rekap_saranabuku");


	}

	function saranabuku_siswa($kelas){
		$this->set('mainNav','saranabuku');
		$this->set('secondarynav','saranabuku');
		$this->set('thirdNav','saranabuku_siswa');
		$this->set('kelas',$kelas);
		$this->set('url_controler','saranabuku_siswa');
		$this->set('url_rekap',"rekap_saranabuku");


	}

	function saranabuku_guru($kelas){
		$this->set('mainNav','saranabuku');
		$this->set('secondarynav','saranabuku');
		$this->set('thirdNav','saranabuku_guru');
		$this->set('kelas',$kelas);
		$this->set('url_controler','saranabuku_guru');
		$this->set('url_rekap',"rekap_saranabuku");


	}
	function saranabuku_penunjang($kelas){
		$this->set('mainNav','saranabuku');
		$this->set('secondarynav','saranabuku');
		$this->set('thirdNav','saranabuku_penunjang');
		$this->set('kelas',$kelas);
		$this->set('url_controler','saranabuku_penunjang');
		$this->set('url_rekap',"rekap_saranabuku");


	}

	function rekap_saranabuku(){
		$this->set('mainNav','saranabuku');
		$this->set('secondarynav','saranabuku');
		$this->set('thirdNav','rekap_saranabuku');
		$this->set('kelas');
		$this->set('url_controler','rekap_saranabuku');
		$this->set('url_rekap',"rekap_saranabuku");


	}

	function sarana_alat($kelas){
		$this->set('mainNav','sarana_alat');
		$this->set('secondarynav','sarana_alat');
		$this->set('thirdNav','sarana_alat');
		$this->set('kelas',$kelas);
		$this->set('url_controler','sarana_alat');
		$this->set('url_rekap',"rekap_sarana_alat");


	}

	function rekap_sarana_alat(){
		$this->set('mainNav','sarana_alat');
		$this->set('secondarynav','sarana_alat');
		$this->set('thirdNav','rekap_sarana_alat');
		$this->set('kelas');
		$this->set('url_controler','rekap_sarana_alat');
		$this->set('url_rekap',"rekap_sarana_alat");


	}

	function saranatik($kelas){
		$this->set('mainNav','saranatik');
		$this->set('secondarynav','saranatik');
		$this->set('thirdNav','saranatik');
		$this->set('kelas',$kelas);
		$this->set('url_controler','saranatik');
		$this->set('url_rekap',"rekap_saranatik");


	}

	function rekap_saranatik(){
		$this->set('mainNav','saranatik');
		$this->set('secondarynav','saranatik');
		$this->set('thirdNav','rekap_saranatik');
		$this->set('kelas');
		$this->set('url_controler','rekap_saranatik');
		$this->set('url_rekap',"rekap_saranatik");
	}

	function import(){
		$this->set('secondarynav','nav_import');
		$this->set('thirdNav','import');
	}

}
?>