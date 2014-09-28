<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m140927_075031_insert_data_to_news_item
 *
 * @author Admin
 */
class m140927_075031_insert_data_to_news_item extends CDbMigration {
    public function up(){
        
        $newsItem = new NpNewsItem();
        $newsItem->title = 'Метро закопали';
        $newsItem->text = 'Запланированный на овень';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;
        
        $newsItem = new NpNewsItem();
        $newsItem->title = 'Упал из окна';
        $newsItem->text = 'На спину';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;
        // $newsItem->delete();
        // $newsItem->insert();
        // $newsItem->update();
        
        foreach ( $newsItems as $newsItem) {
            if($newsItem->save()) { //сам определяет update (если задан id) или insert
                echo "Inserted: ". $newsItem->newsId;
                return true;
          
            } else {
             echo "Not inserted: " . print_r($newsItem->getErrors(), 1);
            return false;
            }
      
        }
    }
    
    public function down(){
        $this->truncateTable(NpNewsItem::model()->tableName()); // очищаем таблцу
        return true;
    }
}
