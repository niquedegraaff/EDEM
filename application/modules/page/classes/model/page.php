<?php 
namespace Page;

class Model_Page extends \Orm\Model
{
	protected static $_table_name	= 'page';
	//protected static $_primary_key	= 'id';
	protected static $_properties	= array(
		'id', 
		'title' => array(
			'data_type'		=> 'varchar',
			'label'			=> 'Title',
			'validation'	=> array('required', 'min_length' => array(2), 'max_length'=> array(127)),
			'form'			=> array('type' => 'text'),
			'default'		=> 'New Page',
		), 
		'content' => array(
			'data_type' 	=> 'text',
			'label'			=> 'Content',
			'validation'	=> array(),
			'form'			=> array('type' => 'textarea'),
		),
		'slug' => array(
			'data_type' 	=> 'varchar',
			'label'			=> 'Slug',
			'form'			=> array('type' => false),
		),
		'created_at' => array(
			'data_type' 	=> 'datetime',
			'label' 		=> 'Created At',
			'form' 			=> array('type' => false),
		),
		'updated_at' => array(
			'data_type'		=> 'datetime',
			'label'			=> 'Updated at',
			'form'			=> array('type' => false),
		),
	);

	protected static $_observers = array(
		'Orm\\Observer_Slug' => array(
			'events' => array('before_insert'),
			'source' => 'title',
			'property' => 'slug',
		),
	);
}