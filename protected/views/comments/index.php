<?php
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */

foreach ($commItems as $comm) {
    ?>
<p><i><?=$comm->createTime?></i></p>
<b><?=$comm->userId?></b>
<p><?=$comm->text?></p>


<?php
}

