<?php
/**
 * Created by PhpStorm.
 * User: nasedkin
 * Date: 27.09.14
 * Time: 10:33
 * @var NewsController $this
 * @var NewsItem $item
 */
?>
<h1><?=$item->title?></h1>
<p>
    <?=$item->text?>
</p>
<p><?=$item->formatDate() ?></p>
<p><a href="/news/">все новости</a></p>