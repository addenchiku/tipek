<?php 
/* SVN FILE: $Id$ */
/* Kelurahan Test cases generated on: 2012-10-15 01:34:52 : 1350239692*/
App::import('Model', 'Kelurahan');

class KelurahanTestCase extends CakeTestCase {
	var $Kelurahan = null;
	var $fixtures = array('app.kelurahan', 'app.kecamatan', 'app.school');

	function startTest() {
		$this->Kelurahan =& ClassRegistry::init('Kelurahan');
	}

	function testKelurahanInstance() {
		$this->assertTrue(is_a($this->Kelurahan, 'Kelurahan'));
	}

	function testKelurahanFind() {
		$this->Kelurahan->recursive = -1;
		$results = $this->Kelurahan->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Kelurahan' => array(
			'id'  => 1,
			'nama'  => 'Lorem ipsum dolor sit amet',
			'kecamatan_id'  => 1,
			'created'  => '2012-10-15 01:34:52',
			'modified'  => '2012-10-15 01:34:52'
		));
		$this->assertEqual($results, $expected);
	}
}
?>