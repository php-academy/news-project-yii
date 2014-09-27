<?php
/**
 * @var array $newsItems
 * @var NpNewsItem $item
 */
foreach ( $newsItems as $item ){
    ?>
    <p><i><?=$item->formatPublishDate() ?></i> <b><?=$item->title?></b></p>
    <p><?=$item->shortText() ?></p>
    <p><a href="/news/item/<?=$item->newsId;?>">подробнее</a></p>
    <hr/>
    <?php
}

$this->widget('CLinkPager',array(
    'pages' => $pages,
    'maxButtonCount' => 5,
    'header' => 'страница: ',
    'prevPageLabel' => '&larr;',
    'nextPageLabel' => '&rarr;',
));