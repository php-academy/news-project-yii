<?php

class m140929_054349_insert_user extends CDbMigration
{
	public function up(){
        
        $user = new NpUser();
        $user->login = 'vasya';
        $user->salt = md5(time());
        $user->password = md5($user->salt . 'qwerty');
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