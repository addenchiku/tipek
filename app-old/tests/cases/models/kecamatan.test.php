<?php 
/* SVN FILE: $Id$ */
/* Kecamatan Test cases generated on: 2012-10-15 01:34:31 : 1350239671*/
App::import('Model', 'Kecamatan');

class KecamatanTestCase extends CakeTestCase {
	var $Kecamatan = null;
	var $fixtures = array('app.kecamatan', 'app.kelurahan');

	function startTest() {
		$this->Kecamatan =& ClassRegistry::init('Kecamatan');
	}

	function testKecamatanInstance() {
		$this->assertTrue(is_a($this->Kecamatan, 'Kecamatan'));
	}

	function testKecamatanFind() {
		$this->Kecamatan->recursive = -1;
		$results = $this->Kecamatan->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Kecamatan' => array(
			'id'  => 1,
			'nama'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2012-10-15 01:34:31',
			'modified'  => '2012-10-15 01:34:31'
		));
		$this->assertEqual($results, $expected);
	}
}
?>