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
       
        //подключаю скрипт, который делает возможность открывать блок с формой
        $cs = Yii::app()->clientScript;
        $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/funcs.js');
       
        $item = NpNewsItem::model()->findByPk($newsId);                      
       
        $model = new NpComments();
        
        if($item) {
            
            if(isset($_POST['NpComments']))
		{
			
                        $model->text = $_POST['NpComments']['text'];
                        $model->createTime = $model->formatPublishDate();
                        $model->userId = Yii::app()->user->id;
                        $model->newsId = $newsId;
                        
                        if( $model->validate()) {
                            $model->save();
                        }
                }
            
                $commItems = NpComments::model()->findAllByAttributes(array('newsId'=>$newsId));
                
         
                
            if((!Yii::app()->user->isGuest && $commItems) || !Yii::app()->user->isGuest) {
                $this->render('view', array(
                    'model'=>$model,
                    'newsItem' => $item,
                    'commItems' => $commItems,
                    
                ));
                }
                
                elseif (Yii::app()->user->isGuest) {
                    $this->render('view', array(
                    
                    'newsItem' => $item,
                    'commItems' => $commItems,
                    
                    ));
                }
                
                else  {
                    $this->render('view', array(
                    'newsItem' => $item,
                    'commItems' => 0,
                   
                
                ));
                } 
                
                
            
        }
        else {
           throw new CHttpException(404, 'Запрашиваемая Вами новость не найдена');
           //выбрасываем исключение опред класса
        }
        
    }
    
    
    
}

