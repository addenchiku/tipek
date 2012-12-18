<?php 
/* SVN FILE: $Id$ */
/* MasterSekolah Test cases generated on: 2012-11-02 12:15:51 : 1351833351*/
App::import('Model', 'MasterSekolah');

class MasterSekolahTestCase extends CakeTestCase {
	var $MasterSekolah = null;
	var $fixtures = array('app.master_sekolah', 'app.kelurahan', 'app.school');

	function startTest() {
		$this->MasterSekolah =& ClassRegistry::init('MasterSekolah');
	}

	function testMasterSekolahInstance() {
		$this->assertTrue(is_a($this->MasterSekolah, 'MasterSekolah'));
	}

	function testMasterSekolahFind() {
		$this->MasterSekolah->recursive = -1;
		$results = $this->MasterSekolah->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('MasterSekolah' => array(
			'id'  => 1,
			'nama'  => 'Lorem ipsum dolor sit amet',
			'alamat'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'kelurahan_id'  => 1,
			'jenjang_pendidikan'  => 1,
			'nama_kepsek'  => 'Lorem ipsum dolor sit amet',
			'jenis'  => 1,
			'status'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>