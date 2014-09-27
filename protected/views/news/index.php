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
    <p><i><?=$item->publish_date?></i> <b><?=$item->title?></b></p>
    <p>
        <?=$item->text?>
    </p>
<? }