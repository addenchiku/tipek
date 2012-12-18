<?php 
/* SVN FILE: $Id$ */
/* KelurahansController Test cases generated on: 2012-10-15 01:35:22 : 1350239722*/
App::import('Controller', 'Kelurahans');

class TestKelurahans extends KelurahansController {
	var $autoRender = false;
}

class KelurahansControllerTest extends CakeTestCase {
	var $Kelurahans = null;

	function startTest() {
		$this->Kelurahans = new TestKelurahans();
		$this->Kelurahans->constructClasses();
	}

	function testKelurahansControllerInstance() {
		$this->assertTrue(is_a($this->Kelurahans, 'KelurahansController'));
	}

	function endTest() {
		unset($this->Kelurahans);
	}
}
?>