<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obschie".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $note
 */
class Obschie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obschie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['title', 'content', 'image', 'note'], 'string'],
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
            'image' => 'Image',
            'note' => 'Note',
        ];
    }
}
