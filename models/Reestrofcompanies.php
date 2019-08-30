<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reestrofcompanies".
 *
 * @property int $id
 * @property string $name
 * @property string $typeofactivity
 * @property string $numberresource
 * @property string $presencezone
 * @property string $clients
 * @property string $services
 * @property string $colspan
 */
class Reestrofcompanies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reestrofcompanies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'typeofactivity', 'numberresource', 'presencezone', 'clients', 'services', 'colspan'], 'required'],
            [['name', 'typeofactivity', 'numberresource', 'presencezone', 'clients', 'services', 'colspan'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'typeofactivity' => 'Typeofactivity',
            'numberresource' => 'Numberresource',
            'presencezone' => 'Presencezone',
            'clients' => 'Clients',
            'services' => 'Services',
            'colspan' => 'Colspan',
        ];
    }
}
