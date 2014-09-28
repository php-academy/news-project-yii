<?php
/**
 * @var NpNewsItem  $newsItem
 */
?>
<h1><?=$newsItem->title ?></h1>
<p><?=$newsItem->text ?></p>
<p><?=$newsItem->formatPublishDate() ?></p>
<p><a href="/news/view/">Все новости</a></p>

