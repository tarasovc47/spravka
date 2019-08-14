<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\data\Sort;

require '../config/db.php';

/**
 * This is the model class for table "rkphones".
 *
 * @property int $id
 * @property string $department
 * @property string $subdepartment
 * @property string $position
 * @property string $fullname
 * @property string $phone
 * @property string $email
 * @property string $shedule
 */
class Rkphones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rkphones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department', 'position', 'fullname', 'phone', 'email'], 'required'],
            [['department', 'subdepartment', 'position', 'fullname', 'phone', 'email', 'shedule'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department' => 'Компания',
            'subdepartment' => 'Отдел',
            'position' => 'Должность',
            'fullname' => 'ФИО',
            'phone' => 'Телефон',
            'email' => 'Email',
            'shedule' => 'График работы',
        ];
    }

    public static function rkphonesQueryArray()
    {
        $companies_array = (new Query())
            ->select('department')
            ->from('rkphones')
            ->groupBy('department')
            ->all();
        return $companies_array;
    }
    public static function rkphonesCompanyName()
    {
        $company_name = ArrayHelper::getColumn(self::rkphonesQueryArray(),'department');
        return $company_name;
    }
    public static function renderSidebar()
    {
        foreach (self::rkphonesCompanyName() as $item)
        {
            echo "<ul class='nav nav-sidebar'>
                      <li><a href='#sql_".$item."'> ".$item."</a></li>
                  </ul>";
        }
    }
    public static function renderTable()
    {
        $sort = new Sort([
                'attributes' => [
                        'subdepartment' => [
                                'asc' => ['subdepartment' => SORT_ASC]
                        ]
                ]
        ]);

        foreach (self::rkphonesCompanyName() as $company) {?>
            <table class="table" id="sql_<?= $company ?>">
                <thead>
                    <tr><?= $company ?></tr>
                </thead>
                <th>Отдел</th>
                <th>Должность</th>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>email</th>
                <th>График работы</th>
                <?php
                $staff = (new Query())
                    ->select(['department', 'subdepartment', 'position', 'fullname', 'phone', 'email','shedule'])
                    ->from('rkphones')
                    ->where(['department' => $company])
                    ->orderBy($sort->attributes)
                    ->all();
                // В цикле перебираем все записи таблицы и выводим их
                foreach ($staff as $item) {
                    ?>
                    <tr>
                        <td><?= $item['subdepartment'] ?></td>
                        <td><?= $item['position'] ?></td>
                        <td><?= $item['fullname'] ?></td>
                        <td><?= $item['phone'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['shedule'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }
    }
}
