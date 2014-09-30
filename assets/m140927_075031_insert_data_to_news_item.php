<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m140927_075031_insert_data_to_news_item
 *
 * @author Admin
 */
class m140927_075031_insert_data_to_news_item extends CDbMigration {
    public function up(){
        
        $newsItem = new NpNewsItem();
        $newsItem->title = 'ЛИГА ЧЕМПИОНОВ. Групповой турнир. 2-й тур. Группа Е. Сегодня ЦСКА - "БАВАРИЯ" КОГО ПУСТЯТ НА "АРЕНУ ХИМКИ" ';
        $newsItem->text = 'При вынесении вердикта контрольного, этического и дисциплинарного комитета Союза европейских футбольных ассоциаций в решение о проведении матча без зрителей обычно включают и пояснение, кто вправе пройти на стадион. Как сообщили корреспонденту "СЭ" в УЕФА, доступ на арену во время матча Лиги чемпионов ЦСКА - "Бавария" получат:   - максимум 75 человек от каждого из клубов, включая футболистов;   - журналисты, при условии, что их имена вошли в список аккредитованных, переданный в УЕФА не позднее, чем за 24 часа до начала игры';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;
        
        $newsItem = new NpNewsItem();
        $newsItem->title = 'ПАС ИЗ-ЗА ГРАНИЦЫ ТРИ РЕЗУЛЬТАТИВНЫЕ ОШИБКИ ВИДИЧА';
        $newsItem->text = 'Отдельного упоминания заслуживает один из худших игроков поединка - экс-защитник "Спартака" Видич, из-за действий которого на 43-й минуте в ворота "Интера" был назначен 11-метровый удар. Серб наступил на ногу Сау, и Банти без колебаний указал на "точку". Кроме того, Неманья стал виновником трех из четырех пропущенных голов, а когда Экдаль оформлял дубль, он попросту выступил в роли статиста. "Видич относится к тем, кого я использовал слишком часто, - сказал главный тренер "Интера" Вальтер Маццарри. ';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;
       
        $newsItem = new NpNewsItem();
        $newsItem->title = 'КАРАГУНИС ПОМОЖЕТ РАНЬЕРИ ';
        $newsItem->text = '37-летний Гиоргос Карагунис, минувшим летом после поражения на чемпионате мира от Коста-Рики завершивший выступления за сборную Греции, стал помощником главного тренера национальной команды Клаудио Раньери, сообщает AFP . Совет директоров греческой федерации единогласно одобрил предложение президента ГФФ Гиоргоса Сарриса и предложил Карагунису контракт на 2 года. Греческие СМИ предполагают, что тот станет своеобразным мостиком между футболистами и итальянским специалистом.   ';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;
        
        $newsItem = new NpNewsItem();
        $newsItem->title = 'ФЕРДИНАНД ПРЕТЕНДУЕТ НА ПОСТ В ФИФА';
        $newsItem->text = 'Бывший защитник "Манчестер Юнайтед" и сборной Англии Рио Фердинанд, выступающий сейчас за КПР, может быть выдвинут Футбольной ассоциацией страны на пост вице-президента ФИФА. В числе других кандидатов помимо Фердинанда называются бывшие игроки национальной команды Грэм Ле Со, Дэвид Джеймс и Пол Эллиот. Претенденту от Англии в марте придется соперничать с представителями Шотландии и Уэльса. Кто-то из них должен заменить в ФИФА североирландца Джима Бойса, который в июне 2015 года уходит в отставку';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;

        $newsItem = new NpNewsItem();
        $newsItem->title = '"МАРСЕЛЬ": 35 ЛЕТ БЕЗ ПОРАЖЕНИЙ ';
        $newsItem->text = 'В последний раз он потерпел поражение от него на своем поле 10 августа 1979 года (3:5). Очевидно, что теперь, когда команда лидирует, было не время нарушать традицию.   Успех в первом тайме принес высокий прессинг. Если до сих пор в чемпионате "Марсель" обыгрывал аутсайдеров и середняков ("Генгам", "Ниццу", "Эвиан", "Ренн", "Реймс"), то теперь он взял верх над клубом, который в прошлом сезоне финишировал 4-м, в то время как "Марсель" был 6-м';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;
        
        $newsItem = new NpNewsItem();
        $newsItem->title = '"ГАМБУРГ": НОВЫЙ РЕКОРД  ГЕРМАНИЯ';
        $newsItem->text = '"Гамбург" не забивал на старте сезона 507 минут подряд, что является новым антирекордом бундеслиги. Прежнее "достижение" принадлежало "Бохуму", который с начала чемпионата-1979/80 не мог поразить ворота 474 минуты. И вот, наконец, Н.Мюллер покончил с голевой засухой северян, однако это большой радости им не принесло - в концовке матча взятый франкфуртцами в аренду у "Челси" бразилец Пиазон со "стандарта" с 32 метров послал мяч в сетку хозяев, и те потерпели четвертое в сезоне поражение.  ';
        $newsItem->publishDate = date('Y-m-d H:i:s');
        $newsItems[] = $newsItem;

// $newsItem->delete();
        // $newsItem->insert();
        // $newsItem->update();
        
        foreach ( $newsItems as $newsItem) {
            if($newsItem->save()) { //сам определяет update (если задан id) или insert
                echo "Inserted: ". $newsItem->newsId;
                return true;
          
            } else {
             echo "Not inserted: " . print_r($newsItem->getErrors(), 1);
            return false;
            }
      
        }
    }
    
    public function down(){
        $this->truncateTable(NpNewsItem::model()->tableName()); // очищаем таблцу
        return true;
    }
}
