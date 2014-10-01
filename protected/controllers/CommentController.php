<?php

class CommentController extends Controller
{

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	public function actionView($commentId)
	{
           
		
	}

	public function actionCreate()
	{
		$model=new NpComment;

        }
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NpComment']))
		{
			$model->attributes=$_POST['NpComment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->commentId));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}


	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('NpComment');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}



	
}

