<?php

/* @var $this yii\web\View */
use app\models\Rkphones;

?>
<div class="row">
    <div class="col-sm-2 col-md-1 my-sidebar">
        <ul class="nav nav-sidebar">
            <li>item1</li>
            <li>item2</li>
            <li>item3</li>
        </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
            Rkphones::renderTable();
        ?>
    </div>
</div>
