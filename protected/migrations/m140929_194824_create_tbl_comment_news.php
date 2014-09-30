<?php

class m140929_194824_create_tbl_comment_news extends CDbMigration{
    
    public function up()
    {
        $this->createTable('np_tbl_comment_new', array(
            'commentId'   => 'int(32) not null auto_increment',
            'userId'      => 'int(32) not null',
            'newsId'      => 'int(32) not null',
            'comment'     => 'text not null',
            'publishDate' => 'datetime not null',
            'PRIMARY KEY (commentId)'
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');

        return true;
    }
    
    public function down(){
        $this->dropTable('np_tbl_comment_new');
        return true;
    }
}
