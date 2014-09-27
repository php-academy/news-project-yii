<?php

class m140927_044846_add_salt_to_tbl_user extends CDbMigration
{
	public function up()
	{
        $this->addColumn(User::model()->tableName(), 'salt', 'varchar(32) not null');
        return true;
	}

	public function down()
	{
		$this->dropColumn(User::model()->tableName(),'salt');
        return true;
	}
}