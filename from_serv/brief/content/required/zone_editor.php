<? if ($_SESSION['auth']) 
{
#print_r ($_POST);                          
                           
mysql_connect('localhost','root','77russcom77') or die(mysql_error());
mysql_select_db('web_data') or die(mysql_error());
mysql_query('SET NAMES utf8');

   // $group_name_array=array();
   // $selgroup=0;
    $i4=0;
 $p=0;  
#print_r($_POST);  

$item_add_array=array();   
#echo $_SESSION['group_id'];
    
#$redtype = $_POST;
    if(!isset($_POST['edit']))
    {
        $redtype['edit']='off';
    } 
    else
    {
        $redtype['edit']='on';
    };
    
    if(!isset($_POST['add']))
    {
        $redtype['add']='off';
    } 
    else
    {
        $redtype['add']='on';
    };
    if(!isset($_POST['del']))
    {
        $redtype['del']='off';
    } 
    else
    {
        $redtype['del']='on';
    };
    
#print_r ($redtype);

echo $group_name_const;    
    
if(isset($_POST['selgroup']))
{ 
   
    //print_r($_POST);
    $redtype['edit']='on';    
    
    
};
  
if(isset($_POST['adding'])) 
            {
                $redtype['add']='on';
                $group=$_POST['group'];
                $aoc=$_POST['aoc'];
                $col_2=$_POST['col_2'];
                $col_3=$_POST['col_3'];
                $col_4=$_POST['col_4'];
                $col_5=$_POST['col_5'];
                $col_6=$_POST['col_6'];
                $col_7=$_POST['col_7'];
                $col_8=$_POST['col_8'];
                $col_9=$_POST['col_9'];
                $col_10=$_POST['col_10'];
        
        
                mysql_query("INSERT INTO groups SET 
                    group_name='".$group."',                   
                    aoc='".$aoc."', 
                    col_1='Адрес',
                    col_2='".$col_2."',
                    col_3='".$col_3."',
                    col_4='".$col_4."',
                    col_5='".$col_5."',
                    col_6='".$col_6."',
                    col_7='".$col_7."',
                    col_8='".$col_8."',
                    col_9='".$col_9."',
                    col_10='".$col_10."'                                    
                ");    
                
    unset($_POST['adding']);
    echo "Группа ".$group." добавлена";
    header('Refresh: 3; URL=http://192.168.78.33/brief/index.php?page=zone_editor');
    mysql_query("COMMIT");
    };
  

if(isset($_POST['delgroup']))
{   
    $redtype['del']='on';
    if($_POST['confirm_del']!='on')
    {
        echo "Удаление не подтверждено";
        #header('Refresh: 3; URL=http://192.168.78.33/brief');
        unset($_POST['delgroup']);
    }
    else
    { 
        $del_id=$_POST['delgroup'];
        echo "Удалено ".$del_id;
        #header('Refresh: 3; URL=http://192.168.78.33/brief');
        unset($_POST['delgroup']);        
     mysql_query("DELETE FROM groups where id='".$del_id."'"); 
    };
    $_POST['confirm_del']='';
    unset($_POST['delgroup']);
    mysql_query("COMMIT");
     
};
  
if(isset($_POST['item_add']))
    { 
        $_POST['selgroup'] = $_SESSION['group_id'];
        $item_add_array=$_POST;
        $redtype['edit']='on';
        
        #print_r($item_add_array);
    
        $group_id=$item_add_array['selgroup'];
                $col_1=$_POST['col_1'];
                $col_2=$_POST['col_2'];
                $col_3=$_POST['col_3'];
                $col_4=$_POST['col_4'];
                $col_5=$_POST['col_5'];
                $col_6=$_POST['col_6'];
                $col_7=$_POST['col_7'];
                $col_8=$_POST['col_8'];
                $col_9=$_POST['col_9'];
                $col_10=$_POST['col_10'];
        
        $add_query="INSERT INTO address_data SET 
                    group_id='".$group_id."',                   
                    col_1='".$col_1."',
                    col_2='".$col_2."',
                    col_3='".$col_3."',
                    col_4='".$col_4."',
                    col_5='".$col_5."',
                    col_6='".$col_6."',
                    col_7='".$col_7."',
                    col_8='".$col_8."',
                    col_9='".$col_9."',
                    col_10='".$col_10."'";
        
        echo "<br>".$add_query;
    
        mysql_query($add_query);
    mysql_query("COMMIT");
    }; 
    
    
if ($redtype['edit']=='on')
       {  
        $result = mysql_query("SELECT * FROM `groups`;")
        or die(mysql_error());
         echo '<h5>Редактирование группы</h5><br>';
       
           #print_r ($data);
           ?>
            <form method="POST">
                <div class="input-field col s5 right">
                    <select onChange="submit()"  name="selgroup">
                        <option value="" disabled selected>Выберите группу</option>
                           <? while ($data = mysql_fetch_array($result,1))
                            {
                                  ?>  <option  value='<? echo $data['id'] ?>' > <? echo $data['group_name'] ?></option> <? 
                                      $group_name_array[$data['id']]=$data['group_name'];
                                      
                            }
                           ?>                     
                    </select>                   
                </div>
            </form>

            <?
        
                if(isset($_POST['selgroup']))
                    {
                    echo "<h6>Выбранная группа:</h6> <h4>".$group_name_array[$_POST['selgroup']]."</h4>";
                     $_SESSION['group_id'] = $_POST['selgroup'];
                      ?>
                        
                       
                        <table> 
                            <!-- thead>
                                <tr>
                                    <th>#</th>
                                    <?/*
                                    $select_query = "SELECT * FROM groups WHERE id=".$_POST['selgroup'].";";
                                    $result_select = mysql_query($select_query)
                                    or die(mysql_error());
                                    $data2 = mysql_fetch_array($result_select,0);
                                    
                                    #print_r($data2);
                                    #echo "<br>".$data2['aoc']."<br>";
                                    
                                    for ($i = 1; $i <= $data2['aoc']; $i++)
                                        {
                                            ?> <th><? echo $data2['col_'.$i.''] ?></th> <?
                                        };
                                    */
                                    ?>
                                    </tr>
                            </thead -->
                            <tbody>
                                <tr>
                                    <form method="POST">
                                        <td>
                                            <button class="btn-floating" type="submit" name="item_add" style="z-index:1!important;"><i class="mdi-content-add"></i></button>
                                        </td>
                                    <?
                                        $select_query = "SELECT * FROM groups WHERE id=".$_POST['selgroup'].";";
                                    $result_select = mysql_query($select_query)
                                    or die(mysql_error());
                                    $data2 = mysql_fetch_array($result_select,0);
                                        $imax=$data2['aoc'];
                                         for ($i = 1; $i <= $imax; $i++)
                                        {
                                            ?>
                                            <td>
                                                <div class="input-field">
                                                    <input name="<? echo 'col_'.$i; ?>" id="i<? echo $i ?>" type="text" class="validate">
                                                    <label for="i<? echo $i ?>"><? echo $data2['col_'.$i.''] ?></label>
                                                </div> 
                                            </td>
                                         <?
                                        };
                                    ?>
                                    </form>
                                </tr>
                                
                                    <? 
                                    $address_query = "SELECT * FROM address_data WHERE group_id=".$_POST['selgroup'].";";                                   
                                    $result_address = mysql_query($address_query) or die(mysql_error());
                                    #$data_address = mysql_fetch_array($result_address,2);
                                    #print_r( $data_address);
                                        while ($data_address = mysql_fetch_array($result_address,1))
                                        {
                                            $p++;
                                            echo "<tr>"; 
                                            echo "<td>".$p."</td>" ;
                                             for ($i = 1; $i <= $imax; $i++)
                                                {
                                                  echo "<td>".$data_address['col_'.$i]."</td>" ;
                                                };
                                            echo "</tr>";
                                        };
                                    ?>
                            </tbody>
                        </table>
                            
                            <?
                    
                    };


          
    };
  

if ($redtype['add']=='on')
   {
       
      $result = mysql_query("SELECT * FROM `groups`;")
        or die(mysql_error());  
       echo '<h5>Добавление группы</h5><br>';
        ?> <table class="bordered hoverable responsive-table">
                <thead>
                <tr>
                    <th class=" light-blue lighten-5" >#</th>
                    <th class=" light-blue lighten-4" >Имя группы</th>
                    <th class=" light-blue lighten-3" >Кол-во колонок</th>
                    <th class="  light-blue lighten-2 center" colspan="11">Название колонок</th>
                </tr>
                
                </thead>
                <tbody>
                    <tr>
                        <form method="POST">
                        <td>
                            <button class="btn-floating" type="submit" name="adding"><i class="mdi-content-add"></i></button>
                        </td>
                        
                        <td>
                            <div class="input-field">
                                <input name="group" id="i1" type="text" class="validate">
                                <label for="i1">Группа</label>
                            </div>
                        </td>
                        <td>
                            <div class="input-field">
                                <input name="aoc" id="i2" type="text" class="validate">
                                <label for="i2">Колонки</label>
                            </div>                        
                        </td>
                        <td>
                            Адрес
                        </td>
                        <? for ($i = 2; $i <= 10; $i++) { ?>
                        <td>
                            <div class="input-field">
                                <? $i4=$i+3; 
                                    echo '<input name="col_'.$i.'" id="'.$i4.'" type="text" class="validate">
                                <label for="'.$i4.'">'.$i.'</label>';
                                    
                                ?>
                            </div>
                        </td>
                            <? } ?>                       
                    
                    </form>
                    </tr>
                    
        <?
        while ($data = mysql_fetch_array($result,0))
            {
              ?>  <tr>
                    
                    <td><? echo $data['0']?></td>
                    <td><? echo $data['1']?></td>
                    <td><? echo $data['2']?></td>
                    <td><? echo $data['3']?></td>
                    <td><? echo $data['4']?></td>
                    <td><? echo $data['5']?></td>
                    <td><? echo $data['6']?></td>
                    <td><? echo $data['7']?></td>
                    <td><? echo $data['8']?></td>
                    <td><? echo $data['9']?></td>
                    <td><? echo $data['10']?></td>
                    <td><? echo $data['11']?></td>
                    <td><? echo $data['12']?></td> 
                  </tr>
              <? 
            }
        ?> 
                    
                    
                </tbody>
            </table><?
        
        
        
   };
    
if($redtype['del']=='on')
   {
    $result = mysql_query("SELECT * FROM `groups`;")
        or die(mysql_error());
         echo '<h5>Удаление группы</h5><br>';
       
    ?>
         <form method="POST">
                <div class="input-field col s12">
                    <select name="delgroup">
                        <option value="" disabled selected>Выберите группу</option>
                           <? while ($data = mysql_fetch_array($result,1))
                            {
                                  ?>  <option  value='<? echo $data['id'] ?>' > <? echo $data['group_name'] ?></option> <? 
                            }
                           ?>                     
                    </select>                   
                </div>
             <p>
                <input name='confirm_del' type="checkbox" class="filled-in" id="filled-in-box" />
                <label for="filled-in-box">Подтвердить удаление?</label>
             </p>
             <input class="btn btn-danger " name="del" type="submit" value="Удалить" onclick="confirm('Вы действительно хотите удалить?')" />
            </form>
        <?
   };   
                   

 } else { ?>

 <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Вы не авторизованы</span>
              <p>К сожалению у Вас нет доступа к этому сервису</p>
            </div>
            <div class="card-action">
              <a href="http://192.168.78.33/brief">Вернуться на главную страницу</a>
              
            </div>
          </div>
        </div>
      </div>
            

<? } ?>