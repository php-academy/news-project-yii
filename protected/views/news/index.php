<?php
/**
 * Created by PhpStorm.
 * User: nasedkin
 * Date: 27.09.14
 * Time: 8:09
 *
 * @var array $items
 * @var NewsItem $item
 */

foreach( $items as $item ) { ?>
    <p><i><?=$item->formatDate()?></i> <b><?=$item->title?></b></p>
    <p>
        <?=$item->shortText()?>
    </p>
    <p><a href="/news/item/<?=$item->newsId?>">подробнее</a></p>
    <hr>
<? }