<?php

class m140927_0850031_insert_users_to_tht_user extends CDbMigration{
  public function up(){
        
        $newsItem = new NpUser();
        $user->login = 'vasya';
        $user->salt = md5(time());
        $usr->password = md5($user->salt . 'qwerty');
        $user->role = 'user';
        
        if(!$user->save()) {
            print_r($user->getErrors());
            return false;
        }
        return true;
        
        
    }
    
    public function down(){
        $this->truncateTable(NpNewsItem::model()->tableName()); // очищаем таблцу
        return true;
    }
}
