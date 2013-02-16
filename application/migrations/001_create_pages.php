<?php namespace Fuel\Migrations;

class Create_Pages
{
	function up()
	{
		\DBUtil::create_table('pages', array(
			'id'	=> array('type' => 'int', 'constraint' => 11),
			'title'	=> array('type' => 'varchar', 'constraint' => 128),
			'body'	=> array('type' => 'text'),
		), array('id'));
	}

	function down()
	{
		\DBUtil::drop_table('pages');
	}
}