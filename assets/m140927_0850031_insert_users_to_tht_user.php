<?php

class m140927_0850031_create_table_user extends CDbMigration{
  public function up(){
        $this->createTable('np_comments', array(
            'commId' => 'int(32) not null auto_increment',
            'userId'=> 'int(32) not null',
            'text' => 'text default null',
            'newsId' => 'int(32) not null',
            'PRIMARY KEY (commId)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }
    
    public function down(){
        $this->dropTable('np_comments');
    }
}
