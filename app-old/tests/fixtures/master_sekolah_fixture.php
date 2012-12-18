<?php 
/* SVN FILE: $Id$ */
/* MasterSekolah Fixture generated on: 2012-11-02 12:15:51 : 1351833351*/

class MasterSekolahFixture extends CakeTestFixture {
	var $name = 'MasterSekolah';
	var $table = 'master_sekolah';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'primary'),
		'nama' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'alamat' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'kelurahan_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50),
		'jenjang_pendidikan' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 6),
		'nama_kepsek' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'jenis' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'status' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nama'  => 'Lorem ipsum dolor sit amet',
		'alamat'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'kelurahan_id'  => 1,
		'jenjang_pendidikan'  => 1,
		'nama_kepsek'  => 'Lorem ipsum dolor sit amet',
		'jenis'  => 1,
		'status'  => 1
	));
}
?>