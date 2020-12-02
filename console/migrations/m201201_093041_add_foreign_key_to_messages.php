<?php

use yii\db\Migration;

/**
 * Class m201201_093041_add_foreign_key_to_messages
 */
class m201201_093041_add_foreign_key_to_messages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'user_messages_key',
            'messages',
            'user_id',
            'user',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('user_messages_key','messages');
    }
}
