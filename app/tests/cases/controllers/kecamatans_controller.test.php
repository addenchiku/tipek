<?php 
/* SVN FILE: $Id$ */
/* KecamatansController Test cases generated on: 2012-10-15 01:35:05 : 1350239705*/
App::import('Controller', 'Kecamatans');

class TestKecamatans extends KecamatansController {
	var $autoRender = false;
}

class KecamatansControllerTest extends CakeTestCase {
	var $Kecamatans = null;

	function startTest() {
		$this->Kecamatans = new TestKecamatans();
		$this->Kecamatans->constructClasses();
	}

	function testKecamatansControllerInstance() {
		$this->assertTrue(is_a($this->Kecamatans, 'KecamatansController'));
	}

	function endTest() {
		unset($this->Kecamatans);
	}
}
?>