<?php

class m140927_045801_add_users extends CDbMigration
{
	public function up()
	{
        $user = new User();
        $user->login = 'vasya';
        $user->salt = md5(time());
        $user->password = md5($user->salt . 'qwerty' );
        $user->role = 'user';

        if( !$user->save() ){
            print_r($user->getErrors());
            return false;
        }
        return true;
	}

	public function down()
	{
        $this->truncateTable(User::model()->tableName());
		return true;
	}
}