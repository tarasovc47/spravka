<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rkphones}}`.
 */
class m190830_154720_create_rkphones_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rkphones}}', [
            'id' => $this->primaryKey(),
            'department' => $this->text(),
            'subdepartment' => $this->text(),
            'position' => $this->text(),
            'fullname' => $this->text(),
            'phone' => $this->text(),
            'email' => $this->text(),
            'shedule' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rkphones}}');
    }
}
