<?php

class m140927_0850031_create_table_user extends CDbMigration{
  public function up(){
        $this->createTable('np_user', array(
            'userId' => 'int(32) not nut auto_increment',
            'login'=> 'varchar(100) not null',
            'password' => 'varchar(100) not null',
            'salt' => 'varchar(100) not null',
            'PRIMARY KEY (newsId)',
        ), 'ENGINE=InnoDB DEFAUT CHARSET=utf8');
    }
    
    public function down(){
        $this->dropTable('np_user');
    }
}
