<?php 
/* SVN FILE: $Id$ */
/* SiswaRekapSd Test cases generated on: 2012-11-07 11:18:13 : 1352261893*/
App::import('Model', 'SiswaRekapSd');

class SiswaRekapSdTestCase extends CakeTestCase {
	var $SiswaRekapSd = null;
	var $fixtures = array('app.siswa_rekap_sd');

	function startTest() {
		$this->SiswaRekapSd =& ClassRegistry::init('SiswaRekapSd');
	}

	function testSiswaRekapSdInstance() {
		$this->assertTrue(is_a($this->SiswaRekapSd, 'SiswaRekapSd'));
	}

	function testSiswaRekapSdFind() {
		$this->SiswaRekapSd->recursive = -1;
		$results = $this->SiswaRekapSd->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('SiswaRekapSd' => array(
			'id'  => 1,
			'sdn_laki'  => 1,
			'sdn_perempuan'  => 1,
			'sds_laki'  => 1,
			'sds_perempuan'  => 1,
			'slb_laki'  => 1,
			'slb_perempuan'  => 1,
			'slbs_laki'  => 1,
			'slbs_perempuan'  => 1,
			'min_laki'  => 1,
			'min_perempuan'  => 1,
			'mis_laki'  => 1,
			'mis_perempuan'  => 1,
			'negeri_laki'  => 1,
			'negeri_perempuan'  => 1,
			'swasta_laki'  => 1,
			'swasta_perempuan'  => 1,
			'sekolah_laki'  => 1,
			'sekolah_perempuan'  => 1,
			'madrasah_laki'  => 1,
			'madrasah_perempuan'  => 1,
			'jumlah_total_laki'  => 1,
			'jumlah_total_perempuan'  => 1,
			'jumlah_total_sdn'  => 1,
			'jumlah_total_sds'  => 1,
			'jumlah_total_slb'  => 1,
			'jumlah_total_slbs'  => 1,
			'jumlah_total_min'  => 1,
			'jumlah_total_mis'  => 1,
			'jumlah_total_negeri'  => 1,
			'jumlah_total_swasta'  => 1,
			'jumlah_total_sek'  => 1,
			'jumlah_total_madrasah'  => 1,
			'jumlah_total_sekolah'  => 1,
			'month_entry'  => 1,
			'year_entry'  => 1,
			'created'  => '2012-11-07 11:18:13',
			'modified'  => '2012-11-07 11:18:13'
		));
		$this->assertEqual($results, $expected);
	}
}
?>