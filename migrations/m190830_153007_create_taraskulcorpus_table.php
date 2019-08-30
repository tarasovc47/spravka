<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%taraskulcorpus}}`.
 */
class m190830_153007_create_taraskulcorpus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%taraskulcorpus}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'floor' => $this->integer(),
            'room' => $this->text(),
            'insidephone' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%taraskulcorpus}}');
    }
}
