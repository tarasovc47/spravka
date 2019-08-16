  <?
mysql_connect('localhost','root','77russcom77') or die(mysql_error());
mysql_select_db('web_data') or die(mysql_error());
mysql_query('SET NAMES utf8');

$result_z = mysql_query("SELECT * FROM `groups`;")
        or die(mysql_error());

#$result_y = mysql_query("SELECT * FROM `address_data`;")
#        or die(mysql_error());

$i=0;
$l=0;
if (!isset($tabs)) 
    {
        $tabs= array();
};



while ($data_z = mysql_fetch_array($result_z,1))
                {
                    $i++;
                    $tabs[$i]=$data_z;
                };

/*while ($data_y = mysql_fetch_array($result_y,1))    
                {
                    $l++;
                    $items[$l]=$data_y;
                    echo $l.'  -  '; print_r($items[$l]); echo "<br>";
                    
                    for ($k = 1; $k <= $i; $k++)
                    {   
                        if ($items[$l]['group_id']==$k)
                        {
                        $tab_count[$k]++;
                        };
                    };
                };*/


?>

<div class="row">
      <div class="col s12">
            <nav>
                <div class="nav-wrapper">
                    <form method="POST" onkeydown="if (event.keyCode == 13) this.submit ()">
                        <div class="input-field indigo darken-4">
                            <input id="search" type="search" required placeholder="Поиск..." name="search" title="Поиск по адресу...">
                            <label for="search"><i class="mdi-action-search"></i></label>
                            <i class="mdi-navigation-close"></i>
                        </div>
                    </form>
                </div>
            </nav>
        <ul class="tabs  ">
            <? 
                for ($j=1; $j <= $i;$j++)
                {                                       
                    $id=$tabs[$j]['id'];
                    $group_name=$tabs[$j]['group_name'];                    
                    echo '<li class="tab col s3 "><a href="#col'.$id.'">'.$group_name.'</a></li>';
                };
            ?>
        </ul>
      </div>
    <? 
    for ($j=1; $j <= $i;$j++) #цикл табов
        {                                       
            $id=$tabs[$j]['id'];
            $AOC=$tabs[$j]['aoc'];
            ?>
            <div id="<? echo 'col'.$id ?>" class="col s12">
                <?// echo 'j='.$j.'/ id='.$id.' aoc='.$AOC; ?>
                <table class=" hoverable responsive-table  bordered z-depth-1">              
                    <tr class="indigo lighten-5">
                        <th>#</th>
                        <? 
                            for ($k = 1; $k <= $AOC; $k++) #цикл заголовков таблиц
                            {
                                ?> <th><? echo $tabs[$j]['col_'.$k.''] ?></th> <?
                            };
                        ?>
                    </tr>
                    
                    <?       
                    $query_y="SELECT * FROM `address_data` WHERE group_id=".$id." ORDER BY col_1;";
                        
                    $result_y = mysql_query($query_y)
                    or die(mysql_error());
                    $tabmax=mysql_num_rows($result_y);
                    while ($data_y = mysql_fetch_array($result_y,1))    
                        {
                            $l++;
                            echo '<tr>';
                            echo '<td>'.$l.'</td>';
                                for ($k = 1; $k <= $AOC; $k++)
                                {   
                                   echo '<td>'.$data_y['col_'.$k].'</td>'; 
                                };
                            if ($l==$tabmax)
                            {
                                $l=0;
                            };
                            echo '</tr>';                            
                        };
                    ?>
                </table>
            </div>
            <?
        };
if (isset($_POST['search'])) 
    {
    if ($_POST['search']!='')
    {
        $test=$_POST['search'];
        $search_query="SELECT a.col_1,a.group_id,g.group_name FROM address_data a JOIN groups g  WHERE a.col_1 LIKE '%".$test."%' and a.group_id=g.id;";
        $result_search = mysql_query($search_query)
        or die(mysql_error());
        $r=0;
    
        if (mysql_num_rows($result_search)==0)
        {
            echo '<p class="flow-text">Запись, содержащая фразу "'.$_POST['search'].'" не обнаружена</p>';
        } else {
        ?>
    <br>&nbsp;
    <br>&nbsp;
    <br>&nbsp;
    <br>&nbsp;
    <br>
    <br><h5>Результат поиска</h5>
    <table class=" hoverable responsive-table  bordered z-depth-1"> 
        <thead>
        <tr class="indigo lighten-3">
                <th>#</th>
                <th>Адрес</th>
                <th>Вкладка</th>
            </tr>
    </thead>    
    <?
    
        while ($data_search = mysql_fetch_array($result_search,1))
                {
               # print_r($data_search);
                $r++;
                echo '<tr>
                <td>'.$r.'</td>
                <td>'.$data_search["col_1"].'</td>
                <td>'.$data_search["group_name"].'</td>
                </tr>';
                
            #print_r ($data_search);
            
            };
        };
    ?> 
        
    </table><?
}
    else
    {
        echo "<p class='flow-text'>Запрос пуст</p>";
    };
};
#print_r($test);
    ?>
      
    <!--input class="datepicker" type="date" / -->
</div>
<!--div class="video-container">
							<embed class="responsive-video" src="http://content.cam.t72.ru/smp/StrobeMediaPlayback.swf" 
								mce_src="http://content.cam.t72.ru/smp/StrobeMediaPlayback.swf" 
								type="application/x-shockwave-flash" allowscriptaccess="always" 
								play="true"
								allowfullscreen="true" wmode="direct"  
								flashvars="src=http://live.cam.t72.ru/Skver_Patsko/manifest.f4m?token=1445449975&amp;autoPlay=true"
	                                               poster="http://content.cam.t72.ru/img/Skver_Patsko.jpg">
							</embed>
                    </div-->
