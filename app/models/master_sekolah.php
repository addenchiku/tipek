<?php
class MasterSekolah extends AppModel {

	var $name = 'MasterSekolah';
	var $useTable = 'master_sekolah';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Kelurahan' => array(
			'className' => 'Kelurahan',
			'foreignKey' => 'kelurahan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Kecamatan' => array(
			'className' => 'Kecamatan',
			'foreignKey' => 'kecamatan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'master_sekolah_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>