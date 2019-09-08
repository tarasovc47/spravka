<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "taraskulinfo".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $site
 */
class Taraskulinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taraskulinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'address', 'phone', 'email', 'site'], 'string'],
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
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'site' => 'Site',
        ];
    }
    public static function query()
    {
        $content = (new Query())
            ->select('*')
            ->from('taraskulinfo')
            ->all();
        return $content;
    }
    public static function taraskulQueryArray()
    {
        $taraskulinfo_array = (new Query())
            ->select('title')
            ->from('taraskulinfo')
            ->groupBy('title')
            ->all();
        return $taraskulinfo_array;
    }
    public static function taraskulinfoTitle()
    {
        $title = ArrayHelper::getColumn(self::taraskulQueryArray(),'title');
        return $title;
    }
    public static function renderSidebar()
    {
        foreach (self::taraskulinfoTitle() as $item)
        {
            echo "<ul class='nav nav-sidebar'>
                      <li><a href='#sql_".$item."'> ".$item."</a></li>
                  </ul>";
        }
    }
    public function commutatorQuery()
    {
        $commutator = (new Query())
            ->select('*')
            ->from('taraskulinfo')
            ->where(['like', 'title', 'коммутатор'])
            ->all();
        return $commutator;
    }
    public static function commutatorRender()
    {
        foreach (self::commutatorQuery() as $item) {
            $title = $item['title'];
            $content = $item['content'];
            $phone = $item['phone'];
            echo "
                <tr id='sql_".$title."'>
                    <td>".$phone."</td>
                    <td>".$content."</td>
                </tr>
            ";
        }
    }
    public function contactQuery()
    {
        $contact = (new Query())
            ->select('*')
            ->from('taraskulinfo')
            ->where(['like', 'address', '625058'])
            ->all();
        return $contact;
    }
    public static function contactRender()
    {
        foreach (self::contactQuery() as $item) {
            $title = $item['title'];
            $address = $item['address'];
            $phone = $item['phone'];
            $email = $item['email'];
            $site = $item['site'];
            echo "
                <tr id='sql_".$title."'>
                    <td>Адрес</td>
                    <td>".$address."</td>
                </tr>
                <tr>
                    <td>телефон<br>факс</td>
                    <td>".$phone."</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>".$email."</td>
                </tr>
                <tr>
                    <td>Сайт</td>
                    <td><a href='http://тараскуль72.рф/'>".$site."</td>
                </tr>
            ";
        }
    }
    public function spravQuery()
    {
        $sprav = (new Query())
            ->select('*')
            ->from('taraskulinfo')
            ->where(['like', 'title', '<!--Справочная'])
            ->all();
        return $sprav;
    }
    public static function spravRender()
    {
        foreach (self::spravQuery() as $item) {
            $spravochnaya_tyumen = $item['content'];
            $spravochnaya_roschino = $item['address'];
            $spravochnaya_rzd = $item['phone'];
            $zakazbiletov = $item['email'];
            echo "
                <tr id='sql_".$spravochnaya_tyumen."'>
                    <td>Справочная г.Тюмень</td>
                    <td>".$spravochnaya_tyumen."</td>
                </tr>
                <tr>
                    <td>Справочная аэропорта Рощино</td>
                    <td>".$spravochnaya_roschino."</td>
                </tr>
                <tr>
                    <td>Справочная ж/д вокзала</td>
                    <td>".$spravochnaya_rzd."</td>
                </tr>
                <tr>
                    <td>Заказ билетов с доставкой</td>
                    <td>".$zakazbiletov."</td>
                </tr>
            ";
        }
    }
    public function callingQuery()
    {
        $calling = (new Query())
            ->select('*')
            ->from('taraskulinfo')
            ->where(['like', 'title', '<!--Звонки'])
            ->all();
        return $calling;
    }
    public static function callingRender()
    {
        foreach (self::callingQuery() as $item) {
            $gts = $item['content'];
            $amts = $item['address'];
            $commutator = $item['phone'];
            $autocommutator = $item['email'];
            echo "
                <tr id='sql_" . $gts . "'>
                    <td>Выход на ГТС Тюмени</td>
                    <td>" . $gts . "</td>
                </tr>
                <tr>
                    <td>Выход на АМТС</td>
                    <td>" . $amts . "</td>
                </tr>
                <tr>
                    <td>Телефон оператора</td>
                    <td>" . $commutator . "</td>
                </tr>
                <tr>
                    <td>Автокоммутатор</td>
                    <td>" . $autocommutator . "</td>
                </tr>
            ";
        }
    }
}