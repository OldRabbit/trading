<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%request}}`.
 */
class m190819_192931_create_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'second_name' => $this->string(50),
            'surname' => $this->string(50),
            'company' => $this->string(50),
            'amount' => $this->float(11),
            'method' => $this->string(50),
            'lose' => $this->float(11),
            'comment' => $this->string(200),
            'is_invest' => $this->integer(1)->defaultValue(0),
            'date' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%request}}');
    }
}
