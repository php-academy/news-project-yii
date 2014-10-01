<?php
/**
 * @var NpNewsItem  $newsItem
 * @var NpComments $commItems, $comm, $comment
 * @var NpUser $user
 */
?>
<p><a href="<?php echo Yii::app()->request->baseUrl; ?>">Все новости</a></p>
<h1><?=$newsItem->title ?></h1>
<p><?=$newsItem->text ?></p>
<p><?=$newsItem->publishDate ?></p>

<h3>Комментарии</h3>
    
<?php
if($commItems) {

    foreach ($commItems as $comm) {
  
    $user =  NpUser::model()->findByPk($comm->userId);
    ?>
    <i><?=$comm->formatPublishDate()?></i>
    <b>Добавил <?= $user->login ?></b>
    <p><?=$comm->text?></p>

        <?php }
}
else { ?> <p>Никто не комментировал</p>


 <?php
}
 
if(!Yii::app()->user->isGuest) { 
     
    $link = CHtml::link('Оставить комментарий');
            echo CHtml::tag('span', array(
                'id' => "setCommLink",
                'onclick'=>"showCommentForm()"
           
                ),  $link . "\n");
  
    ?>
    <div id="commentForm" class="form" style="display: none">
   <?php $form=$this->beginWidget('CActiveForm', array(  //активные формы валидируются Ajaxом
	'id'=>'login-form',
	'enableClientValidation'=>true,  
	'clientOptions'=>array(
		'validateOnSubmit'=>true, 
	),
)); ?>

	<div class="row">
            <span>Комментировать:</span>
		
		<?php echo $form->textField($model, 'text'); ?>
		<?php echo $form->error($model, 'error'); ?>
        
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Добавить комментарий'); ?>
    
        </div>
    
    
<?php $this->endWidget();  ?>


 
        </div>
<?php } ?>
   
    
        
      
 