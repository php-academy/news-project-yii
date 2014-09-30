<?php

class CommentsController extends Controller
{
	const DEFAULT_DATE_FORMAT = 'H:i:s d.m.Y';
        
        public function actionCreate()
	{
		$model = new NpComments();
                echo $newsId = $_GET['newsId'];

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NpComments']))
		{
			
                        $model->text = $_POST['NpComments']['text'];
                        $model->createTime = $model->formatPublishDate();
                        $model->userId = $_POST['NpComments']['userId'];
                        $model->newsId = $_POST['NpComments']['newsId'];
                        
			if($model->save())
				
                        $this->redirect(array('news/view'));
                        
                        
		}

	}
        
}
