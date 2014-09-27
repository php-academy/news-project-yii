<?php
/**
 * Created by PhpStorm.
 * User: nasedkin
 * Date: 27.09.14
 * Time: 8:06
 */

class NewsController extends Controller{

    public function actionIndex() {

        $criteria = new CDbCriteria;
        $criteria->order = 'publish_date DESC';

        $pages=new CPagination(NewsItem::model()->count($criteria));
        $pages->pageSize = 2;
        $pages->applyLimit($criteria);

        $newsItems = NewsItem::model()->findAll($criteria);

        $this->render('index', array(
            'items' => $newsItems,
            'pages' => $pages,
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