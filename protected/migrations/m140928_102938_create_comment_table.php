<?php

class m140928_102938_create_comment_table extends CDbMigration
{
	public function up(){
        $this->createTable('np_comments', array(
            'commId' => 'int(32) not null auto_increment',
            'userId'=> 'int(8) not null',
            'text' => 'text not null',
            'createTime' => 'datetime not null',
            'PRIMARY KEY (commId)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }
    
        public function down(){
        $this->dropTable('np_comments');
    }
}