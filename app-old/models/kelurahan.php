<?php
class Kelurahan extends AppModel {

	var $name = 'Kelurahan';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
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
			'foreignKey' => 'kelurahan_id',
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