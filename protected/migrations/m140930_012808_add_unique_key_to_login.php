<?php

class m140930_012808_add_unique_key_to_login extends CDbMigration
{
    public function up()
    {
        $this->execute("ALTER TABLE " . User::model()->tableName() . " add UNIQUE KEY (login)");
        $this->execute("ALTER TABLE " . User::model()->tableName() . " add UNIQUE KEY (userId)");

        return true;
    }

    public function down()
    {
        return true;
    }

}