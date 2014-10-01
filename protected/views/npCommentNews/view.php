<?php
/* @var $this NpCommentNewsController */
/* @var $model NpCommentNews */

$this->breadcrumbs=array(
	'Np Comment News'=>array('index'),
	$model->commentId,
);

$this->menu=array(
	array('label'=>'List NpCommentNews', 'url'=>array('index')),
	array('label'=>'Create NpCommentNews', 'url'=>array('create')),
	array('label'=>'Update NpCommentNews', 'url'=>array('update', 'id'=>$model->commentId)),
	array('label'=>'Delete NpCommentNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->commentId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NpCommentNews', 'url'=>array('admin')),
);
?>

<h1>View NpCommentNews #<?php echo $model->commentId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'commentId',
		'userId',
		'newsId',
		'comment',
		'publishDate',
	),
)); ?>
