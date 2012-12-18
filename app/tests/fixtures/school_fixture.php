<?php 
/* SVN FILE: $Id$ */
/* School Fixture generated on: 2012-10-15 21:50:17 : 1350312617*/

class SchoolFixture extends CakeTestFixture {
	var $name = 'School';
	var $table = 'schools';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'primary'),
		'nama' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'kelurahan_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50),
		'jenjang_pendidikan' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 6),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nama'  => 'Lorem ipsum dolor sit amet',
		'kelurahan_id'  => 1,
		'jenjang_pendidikan'  => 1,
		'created'  => '2012-10-15 21:50:17',
		'modified'  => '2012-10-15 21:50:17'
	));
}
?>