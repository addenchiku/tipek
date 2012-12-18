<?php 
/* SVN FILE: $Id$ */
/* Kelurahan Fixture generated on: 2012-10-15 01:34:52 : 1350239692*/

class KelurahanFixture extends CakeTestFixture {
	var $name = 'Kelurahan';
	var $table = 'kelurahans';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'primary'),
		'nama' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'kecamatan_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nama'  => 'Lorem ipsum dolor sit amet',
		'kecamatan_id'  => 1,
		'created'  => '2012-10-15 01:34:52',
		'modified'  => '2012-10-15 01:34:52'
	));
}
?>