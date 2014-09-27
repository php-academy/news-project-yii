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

    public function actionView( $newsId ) {

        if( $item = NewsItem::model()->findByPk($newsId) ) {

            $this->render('view', array(
                'item' => $item,
            ));

        } else {
            throw new CHttpException(404, 'Запрашиваема новость не найдена');
        }
    }
} 