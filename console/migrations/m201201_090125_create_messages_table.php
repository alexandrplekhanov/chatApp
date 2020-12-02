<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%messages}}`.
 */
class m201201_090125_create_messages_table extends Migration
{
    CONST tableName = 'messages';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::tableName, [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'text' => Schema::TYPE_TEXT,
            'send_at' => Schema::TYPE_DATETIME,
            'active' => Schema::TYPE_BOOLEAN
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::tableName);
    }
}
