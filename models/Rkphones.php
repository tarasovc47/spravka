<?php

namespace app\models;

use mysqli;
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

    public static function renderTable()
    {
        $sort = new Sort([
                'attributes' => [
                        'subdepartment' => [
                                'asc' => ['subdepartment' => SORT_ASC]
                        ]
                ]
        ]);
        /*$companies_array = Rkphones::find()->groupBy('department');*/
        $companies_array = (new Query())
            ->select('department')
            ->from('rkphones')
            ->groupBy('department')
            ->all();
        /*print_r(array_column($companies_array, 'department'));*/
        $company_name = ArrayHelper::getColumn($companies_array,'department');

        foreach ($company_name as $company) {?>
            <table class="table" id="sql_<?= $company ?>">
                <caption><?= $company ?></caption>
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
                /*$mysqli->query("SELECT * FROM `rkphones` WHERE `department` = '$company_name' ORDER BY `subdepartment`")*/;
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
