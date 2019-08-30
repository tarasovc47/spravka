<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taraskulinfo".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $site
 */
class Taraskulinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taraskulinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'address', 'phone', 'email', 'site'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'site' => 'Site',
        ];
    }
}
