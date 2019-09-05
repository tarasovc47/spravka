<?php
use app\models\Taraskulcorpus;
use app\models\Taraskulinfo;
use app\models\Taraskulphones;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main taraskul-main">
    <?php
        foreach (Taraskulinfo::query() as $item) {
            echo ""$item['title']."<br>";
            echo $item['content']."<br>";
            echo $item['address']."<br>";
            echo $item['phone']."<br>";
            echo $item['email']."<br>";
            echo $item['site']."<br>";
        }
    ?>
</div>