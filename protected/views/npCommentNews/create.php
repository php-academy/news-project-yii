<?php
/* @var $this NpCommentNewsController */
/* @var $model NpCommentNews */

$this->breadcrumbs=array(
	'Np Comment News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NpCommentNews', 'url'=>array('index')),
	array('label'=>'Manage NpCommentNews', 'url'=>array('admin')),
);
?>

<h1>Create NpCommentNews</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>