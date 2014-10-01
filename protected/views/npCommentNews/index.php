<?php
/* @var $this NpCommentNewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Np Comment News',
);

$this->menu=array(
	array('label'=>'Create NpCommentNews', 'url'=>array('create')),
	array('label'=>'Manage NpCommentNews', 'url'=>array('admin')),
);
?>

<h1>Np Comment News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
