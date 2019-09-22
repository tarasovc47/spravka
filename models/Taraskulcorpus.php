<?php

namespace app\models;

use Yii;
use yii\data\Sort;
use yii\db\Query;
use yii\helpers\ArrayHelper;

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
    public static function taraskulcorpusArray()
    {
        $taraskulcorpus_array = (new Query())
            ->select('floor')
            ->from('taraskulcorpus')
            ->groupBy('floor')
            ->all();
        return $taraskulcorpus_array;
    }
    public static function taraskulcorpusTitle()
    {
        $title = ArrayHelper::getColumn(self::taraskulcorpusArray(),'floor');
        return $title;
    }
    public static function renderSidebar()
    {
        foreach (self::taraskulcorpusArray() as $item)
        {
            echo "<ul class='nav nav-sidebar'>
                      <li><a href='#sql_".$item."'> ".$item."</a></li>
                  </ul>";
        }
    }
    public static function taraskulcorpusQuery()
    {
        $taraskulcorpus = (new Query())
            ->select('*')
            ->from('taraskulcorpus')
            ->groupBy('floor')
            ->all();
        return $taraskulcorpus;
    }
    public static function taraskulCorpus()
    {
        $title = ArrayHelper::getColumn(self::taraskulcorpusQuery(),'title');
        return $title;
    }
    public static function taraskulcorpusRender()
    {
        $sort = new Sort([
            'attributes' => [
                'title' => [
                    'asc' => ['title' => SORT_ASC]
                ]
            ]
        ]);

        foreach (self::taraskulCorpus() as $item) {?>
            <table class="table" id="sql_<?= $item ?>">
                <thead>
                <tr><p class="bg-primary"><?= $item ?></p></tr>
                </thead>
                <?php
                $title = (new Query())
                    ->select(['title', 'floor', 'room', 'insidephone'])
                    ->from('taraskulcorpus')
                    ->where(['title' => $item])
                    ->orderBy($sort->attributes)
                    ->all();
                // В цикле перебираем все записи таблицы и выводим их
                foreach ($title as $item) {
                    ?>
                    <tr>
                        <td class="col-md-1"><?= $item['floor'] ?></td>
                        <td class="col-md-5"><?= $item['room'] ?></td>
                        <td class="col-md-6"><?= $item['insidephone'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }
    }
}
