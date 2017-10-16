<?php

use yii\db\Migration;

class m171016_224027_add_sessions_table extends Migration
{
    public function safeUp()
    {
        $this->execute('CREATE TABLE session (
            id CHAR(40) NOT NULL PRIMARY KEY,
            expire INTEGER,
            data BLOB
        )');
    }

    public function safeDown()
    {
        $this->dropTable('session');
        return true;
    }
}
