<?php
/**
 * Created by PhpStorm.
 * User: nasedkin
 * Date: 27.09.14
 * Time: 8:09
 *
 * @var NewsController $this
 * @var array $items
 * @var NewsItem $item
 * @var CPagination $pages
 */

foreach( $items as $item ) {
    $this->renderPartial('_newsItem', array('item' => $item));
}

$this->widget('CLinkPager',array(
    'pages' => $pages,
    'maxButtonCount' => 5,
));