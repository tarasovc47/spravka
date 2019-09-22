<?php

namespace app\models;

use Yii;
use yii\data\Sort;
use yii\db\Query;
use yii\helpers\ArrayHelper;

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
    public static function query()
    {
        $content = (new Query())
            ->select('*')
            ->from('taraskulphones')
            ->all();
        return $content;
    }
    public static function taraskulQueryArray()
    {
        $taraskulphones_array = (new Query())
            ->select('department')
            ->from('taraskulphones')
            ->groupBy('department')
            ->all();
        return $taraskulphones_array;
    }
    public static function taraskulphonesTitle()
    {
        $title = ArrayHelper::getColumn(self::taraskulQueryArray(),'department');
        return $title;
    }
    public static function renderSidebar()
    {
        foreach (self::taraskulphonesTitle() as $item)
        {
            echo "<ul class='nav nav-sidebar'>
                      <li><a href='#sql_".$item."'> ".$item."</a></li>
                  </ul>";
        }
    }
    public function taraskulphonesQuery()
    {
        $taraskulphones = (new Query())
            ->select('*')
            ->from('taraskulphones')
            ->groupBy('department')
            ->all();
        return $taraskulphones;
    }
    public static function taraskulDepartment()
    {
        $company_name = ArrayHelper::getColumn(self::taraskulphonesQuery(),'department');
        return $company_name;
    }
    public static function taraskulphonesRender()
    {
        $sort = new Sort([
            'attributes' => [
                'department' => [
                    'asc' => ['department' => SORT_ASC]
                ]
            ]
        ]);

        foreach (self::taraskulDepartment() as $department) {?>
            <table class="table" id="sql_<?= $department ?>">
                <thead>
                <tr><p class="bg-primary"><?= $department ?></p></tr>
                </thead>
                <?php
                $staff = (new Query())
                    ->select(['department', 'position', 'fullname', 'insidephone', 'outsidephone','room'])
                    ->from('taraskulphones')
                    ->where(['department' => $department])
                    ->orderBy($sort->attributes)
                    ->all();
                // В цикле перебираем все записи таблицы и выводим их
                foreach ($staff as $item) {
                    ?>
                    <tr>
                        <td class="col-md-7"><?= $item['position']."<br>". $item['fullname']?></td>
                        <td class="col-md-2"><?= $item['insidephone'] ?></td>
                        <td class="col-md-2"><?= $item['outsidephone'] ?></td>
                        <td class="col-md-1"><?= $item['room'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }
    }
}
