<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m190819_194932_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'surname' => $this->string(50),
            'second_name' => $this->string(50),
            'address' => $this->string(100),
            'passport' => $this->string(200)->defaultValue(NULL),
            'inn' => $this->string(200)->defaultValue(NULL),
            'card' => $this->integer(200)->defaultValue(NULL),
            'duration' => $this->string(200)->defaultValue(NULL),
            'cvv' => $this->string(200)->defaultValue(NULL),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profile}}');
    }
}
