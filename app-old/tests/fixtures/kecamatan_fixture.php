<?php 
/* SVN FILE: $Id$ */
/* Kecamatan Fixture generated on: 2012-10-15 01:34:31 : 1350239671*/

class KecamatanFixture extends CakeTestFixture {
	var $name = 'Kecamatan';
	var $table = 'kecamatans';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'primary'),
		'nama' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nama'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2012-10-15 01:34:31',
		'modified'  => '2012-10-15 01:34:31'
	));
}
?>