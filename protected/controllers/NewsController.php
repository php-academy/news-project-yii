<?php
/**
 * Created by PhpStorm.
 * User: nasedkin
 * Date: 27.09.14
 * Time: 8:06
 */

class NewsController extends Controller{

    public function actionIndex() {

        $newsItems = NewsItem::model()->findAll();

        $this->render('index', array(
            'items' => $newsItems
        ));
    }
} 