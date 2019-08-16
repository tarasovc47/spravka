<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

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
    public static function obschieArray()
    {
        $obschieArray = (new Query())
            ->select('*')
            ->from('obschie')
            ->all();
        return $obschieArray;
    }
    public static function obschieTitle()
    {
        $questions = ArrayHelper::getColumn(self::obschieArray(),'title');
        return $questions;
    }
    public static function renderSidebar()
    {
        foreach (self::obschieTitle() as $title) {
            echo "<ul class='nav nav-sidebar'>
                      <li><a href='#sql_".$title."'> ".$title."</a></li>
                  </ul>";
        }
    }
    public static function renderTable()
    {
        foreach (self::obschieArray() as $item) {
            $title = $item['title'];
            $content = $item['content'];
            $image = $item['image'];
            $note = $item['note'];
            echo "
                <div class='obschie_faq'>
                    <h4>".$title."</h4>
                    <div class='obschie-content'>".$content."</div>
                    <div class='obschie-image'></div>
                    <div class='obschie-note'></div>
                </div>
            ";
        }
    }
}
