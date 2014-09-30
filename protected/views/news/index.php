<?php
/**
 * @var array $newsItems
 * @var NpNewsItem $newsitem
*/

foreach ($newsItems as $item) {
    ?>
<p><i><?=$item->formatPublishDate()?></i></p>
<b><?=$item->title?></b>
<p><?=$item->shotText()?></p>
<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/news/item/<?=$item->itemId?>">Подробнее</a></p>

<?php
}

$this->widget('CLinkPager', array(
    'pages' => $pages,
    'maxButtonCount' => 5,
    'header' => 'страница',
    'prevPageLabel' => '&laquo; назад',
    'nextPageLabel' => 'далее &raquo;'
));
        