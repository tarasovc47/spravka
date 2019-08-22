<?php
use app\models\Obschie;
use app\models\Reestrofcompanies;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main obschie-main">
    <?php
        Obschie::renderTable();
        Reestrofcompanies::renderTable();
    ?>
</div>