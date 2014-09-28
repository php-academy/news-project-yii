<?php
class NewsController extends Controller {
    
    public function actionIndex() {
        
        $criteria = new CDbCriteria();
        $criteria->order = "publishDate desc";
        
        $pages = new CPagination(NpNewsItem::model()->count($criteria));
        $pages->pageSize = 2;
        $pages->applyLimit($criteria);
        
        $newsItems = NpNewsItem::model()->findAll($criteria);
        $this->render('index', array(
            'newsItems' => $newsItems,
            'pages' => $pages,
        ));
       
    }
    
    public function actionView($newsId) {   //принимаем айдишник
       $item = NpNewsItem::model()->findByPk($newsId);
       if($item) {
           $this->render('view', array(
               'newsItem' => $item 
           ));
       }
        else {
           throw new CHttpException(404, 'Запрашиваемая Вами новость не найдена');
           //выбрасываем исключение опред класса
       }
    }
}

