<?php

class m140930_012807_create_tbl_user_profile extends CDbMigration
{
    public function up()
    {
        $this->createTable(
            'np_user_profile', array(
                'userId' => 'int(32) not null',
                'name'   => 'varchar(255)',
                'age'    => 'int(32)',
                'avatar' => 'text',
            ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8'
        );

        return true;
    }

    public function down()
    {
        $this->dropTable('np_user_profile');
        return true;
    }

}