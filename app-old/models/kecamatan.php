<?php
class Kecamatan extends AppModel {

	var $name = 'Kecamatan';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Kelurahan' => array(
			'className' => 'Kelurahan',
			'foreignKey' => 'kecamatan_id',
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