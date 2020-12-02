<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m201201_082124_add_is_admin_column_to_user_table extends Migration
{
    CONST tableName = 'User';
    CONST columnName = 'is_admin';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(self::tableName, self::columnName, $this->boolean()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(self::tableName, self::columnName);
    }
}
