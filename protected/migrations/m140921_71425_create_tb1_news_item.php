<?php
/**
 * Description of m140921_71425_create_tb1_news_item
 *
 * @author Admin
 */
class m140927_074031_create_tb1_news_item extends CDbMigration {
    public function up(){
        $this->createTable('np_news_item', array(
            'newsId' => 'int(32) not nut auto_increment',
            'title'=> 'text not null',
            'text' => 'text not null',
            'publishDate' => 'datetime not null',
            'PRIMARY KEY (newsId)',
        ), 'ENGINE=InnoDB DEFAUT CHARSET=utf8');
    }
    
    public function down(){
        $this->dropTable('np_news_item');
    }
}
