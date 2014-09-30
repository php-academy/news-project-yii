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
    
    public function actionView($newsId) {   
        $cs = Yii::app()->clientScript;
        $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/funcs.js');
        
        $item = NpNewsItem::model()->findByPk($newsId);
        
        $commItems = NpComments::model()->findByAttributes(array('newsId'=>$newsId));
        var_dump($commItems);
       if($item && $commItems) {echo 888;
           $this->render('view', array(
               'newsItem' => $item,
               'commItems' => $commItems,
           ));
       }
       
       elseif($item ) { 
           $this->render('view', array(
               'newsItem' => $item,
               
           ));
       }
        else {
           throw new CHttpException(404, 'Запрашиваемая Вами новость не найдена');
           //выбрасываем исключение опред класса
       }
    }
    
    public function actionComm(){
        //$userId = NpUser::model()->findByPk($user);
        echo 555;
        
    }
    
}

