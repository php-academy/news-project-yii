<?php
/* @var $this NpCommentNewsController */
/* @var $model NpCommentNews */

$this->breadcrumbs=array(
	'Np Comment News'=>array('index'),
	$model->commentId=>array('view','id'=>$model->commentId),
	'Update',
);

$this->menu=array(
	array('label'=>'List NpCommentNews', 'url'=>array('index')),
	array('label'=>'Create NpCommentNews', 'url'=>array('create')),
	array('label'=>'View NpCommentNews', 'url'=>array('view', 'id'=>$model->commentId)),
	array('label'=>'Manage NpCommentNews', 'url'=>array('admin')),
);
?>

<h1>Update NpCommentNews <?php echo $model->commentId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>