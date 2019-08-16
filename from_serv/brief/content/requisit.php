  
<h4>Реквизиты</h4>
<?
mysql_connect('localhost','root','77russcom77') or die(mysql_error());
mysql_select_db('web_data') or die(mysql_error());
mysql_query('SET NAMES utf8');


$query_y="SELECT * FROM `requisi`;";
                        
                    $result_y = mysql_query($query_y)
                    or die(mysql_error());
                    $tabmax=mysql_num_rows($result_y);
                    while ($data_y = mysql_fetch_array($result_y,1))    
                        {
                        ?> 
                            <a name="<? echo $data_y['id']?>"></a>
                            <h5><? echo $data_y['company_name']?></h5> 
                                <table align="center" class="hoverable responsive-table  bordered z-depth-1">
	                               <tr>
                                       <td>Наименование организации</td>
                                       <td><strong><? echo $data_y['company_name']?></strong></td>
                                    </tr>
                                    
                                    <? if ($data_y['inn']!=null) {?>
                                    <tr>
                                        <td>ИНН</td>
                                        <td><? echo $data_y['inn']?></td>
                                    </tr>
                                    <? }; 
                        
                                    if ($data_y['legal_address']!=null) {?>
                                    <tr  >
                                        <td>Юридический адрес</td>
                                        <td><? echo $data_y['legal_address']?></td>
                                    </tr>
                                    <? }; 
                        
                                    if ($data_y['actual_address']!=null) {?>
                                    <tr  >
                                        <td>Фактический адрес</td>
                                        <td><? echo $data_y['actual_address']?></td>
                                    </tr>
                                    <? }; 
                        
                                    if ($data_y['post_address']!=null) {?>
                                    <tr >                                        
                                        <td>Адрес для писем</td>
                                        <td><? echo $data_y['post_address']?></td>
                                    </tr>                                    
                                    <? }; 
                        
                                    if ($data_y['general_manager']!=null) {?>
                                    <tr >
                                        <td>Генеральный директор, <br>действующий на основании Устава</td>
                                        <td><? echo $data_y['general_manager']?></td>
                                    </tr>
                                    <? }; 
                        
                                    if ($data_y['licenses']!=null) {?>
                                    <tr>
                                   
                                        <td>Лицензии</td>
                                        <td  style="text-align:  justify;">
                                            
                                                <? echo $data_y['licenses']?>
                                            
                                        </td>
                                    </tr>
                                    <? };
                                                                                
                                    if ($data_y['contacts']!=null) {?>
                                    <tr>
                                        <td>Контакты</td>
                                        <td><? echo $data_y['contacts']?></td>
                                    </tr>
                                    <? }; 
                                    if ($data_y['opening_times']!=null) {?>
                                    <tr>
                                        <td>Режим работы</td>
                                        <td> <? echo $data_y['opening_times']?></td>
                                    </tr>
                                    <? }; ?>
                                </table>
<br>
                        <?                        
                    };
?>



