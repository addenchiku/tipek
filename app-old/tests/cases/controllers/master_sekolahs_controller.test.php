<?php 
/* SVN FILE: $Id$ */
/* MasterSekolahsController Test cases generated on: 2012-11-02 12:15:59 : 1351833359*/
App::import('Controller', 'MasterSekolahs');

class TestMasterSekolahs extends MasterSekolahsController {
	var $autoRender = false;
}

class MasterSekolahsControllerTest extends CakeTestCase {
	var $MasterSekolahs = null;

	function startTest() {
		$this->MasterSekolahs = new TestMasterSekolahs();
		$this->MasterSekolahs->constructClasses();
	}

	function testMasterSekolahsControllerInstance() {
		$this->assertTrue(is_a($this->MasterSekolahs, 'MasterSekolahsController'));
	}

	function endTest() {
		unset($this->MasterSekolahs);
	}
}
?>