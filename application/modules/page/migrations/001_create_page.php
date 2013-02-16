<?php namespace Fuel\Migrations;

class Create_Page
{
	function up()
	{
		\DBUtil::create_table('page', array(
			'id'			=> array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
			'title'			=> array('type' => 'varchar', 'constraint' => 128),
			'content'		=> array('type' => 'text'),
			'slug'			=> array('type' => 'varchar', 'constraint' => 192),
			'created_at'	=> array('type' => 'datetime'),
			'updated_at'	=> array('type' => 'datetime'),
		), array('id'));
	}

	function down()
	{
		\DBUtil::drop_table('page');
	}
}