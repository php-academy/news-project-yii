<?php
/* @var $this NpCommentNewsController */
/* @var $data NpCommentNews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('commentId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->commentId), array('view', 'id'=>$data->commentId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('newsId')); ?>:</b>
	<?php echo CHtml::encode($data->newsId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publishDate')); ?>:</b>
	<?php echo CHtml::encode($data->publishDate); ?>
	<br />


</div>