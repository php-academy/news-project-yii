<?php
?>
<div class="comment" id="c<?php echo $data->id; ?>">

	<?php echo CHtml::link("#{$data->id}", $data->url, array(
		'class'=>'cid',
		'title'=>'Permalink to this comment',
	)); ?>

	<div class="author">
		<?php echo $data->userId; ?> says on
		<?php echo CHtml::link(CHtml::encode($data->post->title), $data->post->url); ?>
	</div>

	<div class="time">
		<?php if($data->status==Comment::STATUS_PENDING): ?>
			<span class="pending">Pending approval</span> |
			<?php echo CHtml::linkButton('Одобрить', array(
				'submit'=>array('comment/approve','id'=>$data->id),
			)); ?> |
		<?php endif; ?>
		<?php echo CHtml::link('Обновить',array('comment/update','id'=>$data->id)); ?> |
		<?php echo CHtml::link('Удалить',array('comment/delete','id'=>$data->id),array('class'=>'delete')); ?> |
		<?php echo date('F j, Y \a\t h:i a',$data->create_time); ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($data->content)); ?>
	</div>

</div><!-- comment -->