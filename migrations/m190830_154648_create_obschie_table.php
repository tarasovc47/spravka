<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obschie}}`.
 */
class m190830_154648_create_obschie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obschie}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'content' => $this->text(),
            'image' => $this->text(),
            'note' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obschie}}');
    }
}
