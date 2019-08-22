<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\Html;

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
            [['name', 'typeofactivity', 'numberresource', 'presencezone', 'clients', 'services'], 'required'],
            [['name', 'typeofactivity', 'numberresource', 'presencezone', 'clients', 'services'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'name' => 'Название',
            'typeofactivity' => 'Вид деятельности',
            'numberresource' => 'Ресурс нумерации',
            'presencezone' => 'Зона присутствия',
            'clients' => 'Конечные пользователи',
            'services' => 'Услуги',
        ];
    }
    public function reestrofcompanyArray()
    {
        $reestrofcompanyArray = (new Query())
            ->select('*')
            ->from('reestrofcompanies')
            ->all();
        return $reestrofcompanyArray;
    }
    public function renderTable()
    {
        foreach (self::reestrofcompanyArray() as $item) {
            $name = $item['name'];
            $typeofactivity = $item['typeofactivity'];
            $numberresource = $item['numberresource'];
            $presencezone = $item['presencezone'];
            $clients = $item['clients'];
            $services = $item['services'];
            echo "
                $name, $typeofactivity,$numberresource, 
            ";
        }
    }
}
