<?php
class School extends AppModel {

	var $name = 'School';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'MasterSekolah' => array(
			'className' => 'MasterSekolah',
			'foreignKey' => 'master_sekolah_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>