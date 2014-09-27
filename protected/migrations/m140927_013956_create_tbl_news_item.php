<?php

class m140927_013956_create_tbl_news_item extends CDbMigration
{
	public function up()
	{
        $this->createTable('np_news_item',array(
            'newsId' => 'int(32) not null auto_increment',
            'title'  => 'text not null',
            'text'   => 'text not null',
            'publish_date' => 'datetime not null',
            'PRIMARY KEY (newsId)'
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
        return true;
	}

	public function down()
	{
        $this->dropTable('np_news_item');
        return true;
	}
}