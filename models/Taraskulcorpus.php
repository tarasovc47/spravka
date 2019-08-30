<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taraskulcorpus".
 *
 * @property int $id
 * @property string $title
 * @property int $floor
 * @property string $room
 * @property string $insidephone
 */
class Taraskulcorpus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taraskulcorpus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'room', 'insidephone'], 'string'],
            [['floor'], 'integer'],
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
            'floor' => 'Floor',
            'room' => 'Room',
            'insidephone' => 'Insidephone',
        ];
    }
}
