<?php

class CommentController extends Controller
{
	
	public function actionIndex()
	{
            $dataProvider=new CActiveDataProvider('Comment', array(
                'criteria'=>array(
                'with'=>'post',
                'order'=>'t.status, t.create_time DESC')
                ));
		
         
                $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
}
