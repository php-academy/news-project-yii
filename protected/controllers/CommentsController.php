<?php

class CommentsController extends Controller
{
	const DEFAULT_DATE_FORMAT = 'H:i:s d.m.Y';
        
        public function actionCreate()
	{
		$model = new NpComments();
                echo $newsId = $_GET['newsId'];

		
		if(isset($_POST['NpComments']))
		{
			
                        $model->text = $_POST['NpComments']['text'];
                        $model->createTime = $model->formatPublishDate();
                        $model->userId = Yii::app()->user->id;
                        $model->newsId = $newsId;
                        
			if($model->save()) {
                            $this->redirect(Yii::app()->request->baseUrl."news/view/$newsId");
                        }
                     
		}

	}
        
}
