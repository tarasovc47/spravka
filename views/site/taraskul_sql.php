<?php
use app\models\Taraskulcorpus;
use app\models\Taraskulinfo;
use app\models\Taraskulphones;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main taraskul-main">
    <div class="taraskul-table"> <!--"общий див с данными трёх таблиц"-->
        <div class="taraskul-info"> <!--див с общей информацией-->
            <h4>Общая информация</h4>
            <table class="table">
                <tr>
                    <th>Номер телефона</th>
                    <th>Содержание</th>
                </tr>
                <?php
                    Taraskulinfo::commutatorRender();
                ?>
            </table>
            <h4>Контакты</h4>
            <table class="table">
                <?php
                    Taraskulinfo::contactRender();
                ?>
            </table>
            <h4>Справочная информация</h4>
            <table class="table">
                <?php
                    Taraskulinfo::spravRender();
                ?>
            </table>
            <h4>Звонки из санатория "Тараскуль"</h4>
            <table class="table">
                <?php
                    Taraskulinfo::callingRender();
                ?>
            </table>
            <h3>Персонал санатория</h3>
            <table class="table">
                <tr>
                    <th class="col-md-7">Должность, Ф.И.О.</th>
                    <th class="col-md-2">Внут. номер</th>
                    <th class="col-md-2">Город. номер</th>
                    <th class="col-md-1">Каб.</th>
                </tr>
            </table>
            <?php
                Taraskulphones::taraskulphonesRender();
            ?>
            </table>
        </div>
    </div>
</div>