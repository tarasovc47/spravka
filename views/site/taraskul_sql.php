<?php
use app\models\Taraskulcorpus;
use app\models\Taraskulinfo;
use app\models\Taraskulphones;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main taraskul-main">
    <?php
/*        foreach (Taraskulinfo::query() as $item) {
            echo "TITLE ".$item['title']."<br>";
            echo "CONTENT ".$item['content']."<br>";
            echo "ADDRESS ".$item['address']."<br>";
            echo "PHONE ".$item['phone']."<br>";
            echo "EMAIL ".$item['email']."<br>";
            echo "SITE ".$item['site']."<br>";
        }

    */
    /*foreach (Taraskulinfo::query() as $item) {
        $taraskulinfoTitle = $item['title'];
        $taraskulinfoContent = $item['content'];
        $taraskulinfoAddress = $item['address'];
        $taraskulinfoPhone = $item['phone'];
        $taraskulinfoEmail = $item['email'];
        $taraskulinfoSite = $item['site'];
    }
    foreach (Taraskulphones::query() as $item) {
        $taraskulphonesDepartment = $item['department'];
        $taraskulphonesPosition = $item['position'];
        $taraskulphonesFullname = $item['fullname'];
        $taraskulphonesInsidephone = $item['insidephone'];
        $taraskulphonesOutsidephone = $item['outsidephone'];
        $taraskulphonesFloor = $item['floor'];
        $taraskulphonesRoom = $item['room'];
    }*/
?>
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
        </div>
    </div>
</div>