<?php 
/* SVN FILE: $Id$ */
/* School Test cases generated on: 2012-10-15 21:50:17 : 1350312617*/
App::import('Model', 'School');

class SchoolTestCase extends CakeTestCase {
	var $School = null;
	var $fixtures = array('app.school', 'app.kelurahan', 'app.profile');

	function startTest() {
		$this->School =& ClassRegistry::init('School');
	}

	function testSchoolInstance() {
		$this->assertTrue(is_a($this->School, 'School'));
	}

	function testSchoolFind() {
		$this->School->recursive = -1;
		$results = $this->School->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('School' => array(
			'id'  => 1,
			'nama'  => 'Lorem ipsum dolor sit amet',
			'kelurahan_id'  => 1,
			'jenjang_pendidikan'  => 1,
			'created'  => '2012-10-15 21:50:17',
			'modified'  => '2012-10-15 21:50:17'
		));
		$this->assertEqual($results, $expected);
	}
}
?>