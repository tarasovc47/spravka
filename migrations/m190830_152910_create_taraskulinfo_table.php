<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%taraskulinfo}}`.
 */
class m190830_152910_create_taraskulinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%taraskulinfo}}', [
            'id' => $this->primaryKey(),
            'title' =>$this->text(),
            'content' => $this->text(),
            'address' => $this->text(),
            'phone' => $this->text(),
            'email' => $this->text(),
            'site' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%taraskulinfo}}');
    }
}
