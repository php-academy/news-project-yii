<?php
/**
 * @var NpNewsItem  $newsItem
 * @var NpComm $comm
 * @var NpUser $user, $userIn
 */
?>
<h1><?=$newsItem->title ?></h1>
<p><?=$newsItem->text ?></p>
<p><?=$newsItem->formatPublishDate()
        ?></p>

    <?php if (!Yii::app()->user->isGuest) {
     
    
    if($commItems) 
        {  
    ?>

        <h3>Комментарии</h3>
    <?php


    foreach ($commItems as $comm) {
    $user =  NpUser::model()->findByPk($comm->userId);
    ?>
    <i><?=$comm->createTime?></i>
    <b><?= $user->login ?></b>
    <p><?=$comm->text?></p>
    

    <?php
         }

    }  
    else { 
        $userIn =  NpUser::model()->findByAttributes(array('login'=>Yii::app()->user->name));
        $newComment = NpComments::model();
        $newComment->userId = $userIn->userld;
        $newComment->newsId = $newsItem->itemId;
        
        $link = CHtml::link('Оставить комментарий');
            echo CHtml::tag('span', array(
                'id' => "setCommLink",
                'onclick'=>"showCommentForm()"
           
                ),  $link . "\n");
  
        ?>
    <div id="commentForm" style="display: none">
    <?php 
    
    $form = $this->beginWidget('CActiveForm', array(  
	'action'=> Yii::app()->request->baseUrl."/comments/create?newsId=$newsItem->itemId"
        )); 
   

    ?>

	<div class="row">
            <span>Комментировать:</span>
		
		<?php echo $form->textField($newComment, 'text', array('size'=>60, 'rows' => 3)); ?>
		<?php echo $form->error($newComment, 'text'); ?>
                <?php echo $form->hiddenField($newComment, 'userId'); ?>
                <?php echo $form->hiddenField($newComment, 'newsId'); ?>
            
                
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Добавить комментарий');
               
      ?>
    
    </div>
</div>
 <?php $this->endWidget(); ?>

<?php
    }
}       
 ?>
<p><a href="<?php echo Yii::app()->request->baseUrl; ?>">Все новости</a></p>

