<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taraskulphones".
 *
 * @property int $id
 * @property string $department
 * @property string $position
 * @property string $fullname
 * @property string $insidephone
 * @property string $outsidephone
 * @property int $floor
 * @property string $room
 */
class Taraskulphones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taraskulphones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department', 'position', 'fullname', 'insidephone', 'outsidephone', 'room'], 'string'],
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
            'department' => 'Department',
            'position' => 'Position',
            'fullname' => 'Fullname',
            'insidephone' => 'Insidephone',
            'outsidephone' => 'Outsidephone',
            'floor' => 'Floor',
            'room' => 'Room',
        ];
    }
}
