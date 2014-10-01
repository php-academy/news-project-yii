<?php

class NewsController extends Controller{
    
    public function actionIndex() {
        
        $criteria = new CDbCriteria();
        $criteria->order = "publishDate desc";
        
        $pages = new CPagination( NpNewsItem::model()->count($criteria) );
        $pages->pageSize = 2;
        $pages->applyLimit($criteria);
                
        $newsItems = NpNewsItem::model()->findAll($criteria);
        
        $this->render('index', array(
            'newsItems' => $newsItems,
            'pages' => $pages, 
        ));
    }
    
    public function actionView( $newsId ){
        $item = NpNewsItem::model()->findByPk($newsId);
        $accomment = new CDbCriteria();
        $comment = NpCommentNews::model()->findAll($accomment);
        if( $item ) {
            $this->render('view', array( 
                'newsItem' => $item,
                'comment'=> $comment,
            ));
        } else {
            throw new CHttpException(404, 'Запрашиваемая вами новость не найдена');
        }           
    }
}
class CommentController extends NewsController
{
	public function actionIndex()
	{
		$this->render('index');
                
	}
}
