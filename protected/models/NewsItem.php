<?php
/**
 * Created by PhpStorm.
 * User: nasedkin
 * Date: 27.09.14
 * Time: 8:55
 */

/**
 * Class NewsItem
 * @property integer $newsId
 * @property string  $title
 * @property string  $text
 * @property string  $publish_date
 */
class NewsItem extends CActiveRecord {

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'np_news_item';
    }
}