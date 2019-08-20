<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%transaction}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190819_195550_add_user_id_column_to_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%transaction}}', 'user_id', $this->integer(11));

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-transaction-user_id}}',
            '{{%transaction}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-transaction-user_id}}',
            '{{%transaction}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-transaction-user_id}}',
            '{{%transaction}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-transaction-user_id}}',
            '{{%transaction}}'
        );

        $this->dropColumn('{{%transaction}}', 'user_id');
    }
}
