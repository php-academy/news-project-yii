<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class m140927_075031_insert_data_to_tbl_news_item extends CDbMigration {

    public function up() {

        $newsItems = array();

        $newsItem = new NpNewsItem();
        $newsItem->title = 'Пришла чучвара!';
        $newsItem->text = 'Узбекские блюда по праву считаются одними из самых сытных, восхитительно ароматных, насыщенных пряностями и теплом. Неудивительно, что из уличных забегаловок мода на узбекскую кухню перекочевала в ресторанную сферу. Пожалуй, одним из интереснейших свежих проектов для гурманов можно считать ресторан «Чучвара», который компания «РМ Консалтинг» открыла в ТЦ «Сан Сити» около месяца назад. Заведение совмещает в себе размеренную атмосферу восточного дома и динамику торгового центра. Блюда готовят на виду у гостей, исключительно под заказ и при этом очень быстро и по-настоящему вкусно. В ближайшие 2 года в новосибирских торговых центрах планируется открытие как минимум еще 4 ресторанов «Чучвара». Бренд будет также развиваться по франчайзингу.';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;

        $newsItem = new NpNewsItem();
        $newsItem->title = 'Метро закопали';
        $newsItem->text = 'Запланированный на осень инвестиционный конкурс на строительство продолжения Дзержинской ветки новосибирского метро отменен. Это означает, что новые станции на Гусинобродском шоссе и Волочаевском жилмассиве, которые два года назад рассчитывали открыть в 2015–2017-м, не будут построены — в лучшем случае — до 2018–2019 годов. В условиях экономического спада и неопределенности эксперты оценивают будущее новосибирского метростроения довольно пессимистично, а городские власти надеются на октябрьский визит в город Владимира Путина.';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;

        $newsItem = new NpNewsItem();
        $newsItem->title = 'Будем стоять';
     $newsItem->text = 'Вместе с летом закончилась свобода на дорогах Новосибирска. «9 баллов — город стоит», — уже неоднократно сообщал в сентябре сервис Яндекс.Пробки. Вереницы автомобилей с нервничающими водителями растянулись на многие километры. Станут ли этой зимой заторы на дорогах еще страшнее, чем прошлой, где образовались самые длительные и протяженные пробки сентября и чем грозит здоровью частое стояние в пробках — читайте в материале НГС.НОВОСТИ.';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;

        $newsItem = new NpNewsItem();
        $newsItem->title = 'Смерть в НГТУ: потерял равновесие';
        $newsItem->text = 'Следственный комитет не будет возбуждать уголовное дело по факту гибели преподавателя НГТУ Евгения Гаврилова. По версии следствия, 63-летний директор центра информационных технологий университета покончил с собой на фоне депрессии. Коллеги этой версии не верят — они рассказывают, что погибший был бесконфликтным и позитивным человеком, не помышлявшем о суициде. Подробности трагедии, разыгравшейся под стенами НГТУ, мнения психологов о том, почему суициды на работе редки и список профессий, представители которых чаще всего уходят из жизни по своей воле, — в материале корреспондента НГС.НОВОСТИ.';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;



        foreach( $newsItems as $newsItem ) {
            /**
             * @var NpNewsItem $newsItem
             */
            if ($newsItem->save()) {
                echo "Inserted: " . $newsItem->newsId . "\n";
            } else {
                echo "Can`t insert: " . print_r($newsItem->getErrors(), 1) . "\n";
                return false;
            }
        }
        return true;

    }

    public function down() {
        $this->truncateTable(NpNewsItem::model()->tableName());
        return true;
    }
}
