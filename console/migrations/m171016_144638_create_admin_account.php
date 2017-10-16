<?php

use yii\db\Migration;
use dektrium\user\helpers\Password;

class m171016_144638_create_admin_account extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%user%}}', [
            'username' => 'admin',
            'email' => 'admin',
            'password_hash' => Password::hash('123123q'),
            'confirmed_at' => time(),
        ]);
    }

    public function safeDown()
    {
        $this->delete('{{%user%}}', ['username' => 'admin']);
        return true;
    }
}
