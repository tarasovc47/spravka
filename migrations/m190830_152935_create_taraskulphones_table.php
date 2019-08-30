<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%taraskulphones}}`.
 */
class m190830_152935_create_taraskulphones_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%taraskulphones}}', [
            'id' => $this->primaryKey(),
            'department' =>$this->text(),
            'position' =>$this->text(),
            'fullname' =>$this->text(),
            'insidephone' =>$this->text(),
            'outsidephone' =>$this->text(),
            'floor' =>$this->integer(),
            'room' =>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%taraskulphones}}');
    }
}
