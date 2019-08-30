<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reestrofcompanies}}`.
 */
class m190830_154705_create_reestrofcompanies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reestrofcompanies}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'typeofactivity' => $this->text(),
            'numberresource' => $this->text(),
            'presencezone' => $this->text(),
            'clients' => $this->text(),
            'services' => $this->text(),
            'colspan' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reestrofcompanies}}');
    }
}
