<? 

?>
<ul id="nav-mobile" class="side-nav fixed hide-on-med-and-down ">
    <li class="logo"><h5 id="logo-container" class="brand-logo" align=center>Русская компания</h5></li>
<?
     if(USER_LOGGED) { 
         if(!check_user($UserID)) logout(); 		      
         $_SESSION['auth']=true;
             ?>
                 <li  class="logo" align=center> Вы вошли как: <font color=blue><? echo $_SESSION['username']; ?></font></a></li>
                 
             <?
             } else {  $_SESSION['auth']=false; }; 
             ?> 
<l >&nbsp;</li>
<li class="<? if ($page=='contacts') { echo 'active'; }; ?>"><a href="?page=contacts" class="waves-effect waves-teal ">Контакты</a></li>
<li class="<? if ($page=='taraskul') { echo 'active'; }; ?>"><a href="?page=taraskul" class="waves-effect waves-teal ">Тараскуль</a></li>

<li><a href="?page=genissue" class="waves-effect waves-teal ">Общие вопросы</a></li>
<li><a class="waves-effect waves-yellow" href="#">Акции</a></li>
 

<ul class="collapsible" data-collapsible="accordion">
    <li>
        <a class="collapsible-header waves-effect waves-teal " >Юридическим лицам</a>
      <div class="collapsible-body">
        <ul>
            <li><a class='dropdown-button ' href='#' data-activates='dropdown1'>Интернет</a>          
                <ul id='dropdown1' class='dropdown-content ' style="width:15rem!important">
                 <li><a class="drop3" href="#!">Тарифы</a></li>
                 <li><a class="drop3" href="#!">Техсложности</a></li>                 
                 <li><a class="drop3" class="disabled" href="#!">Абонентское обслуживание</a></li>
                </ul>
            </li>     
            
            
            <li><a class='dropdown-button ' href='#' data-activates='dropdown1'>Телефония</a>          
                <ul id='dropdown1' class='dropdown-content ' style="width:15rem!important">
                 <li><a class="drop3" href="#!">Тарифы</a></li>
                 <li><a class="drop3" href="#!">Техсложности</a></li>                 
                 <li><a class="drop3" class="disabled" href="#!">Абонентское обслуживание</a></li>
                </ul>
            </li>  
            <li><a class='dropdown-button ' href='#' data-activates='dropdown1'>Телевидение</a>          
                <ul id='dropdown1' class='dropdown-content ' style="width:15rem!important; ">
                 <li><a class="drop3" href="#!">Тарифы</a></li>
                 <li><a class="drop3" href="#!">Техсложности</a></li>                 
                 <li><a class="drop3" class="disabled" href="#!">Абонентское обслуживание</a></li>
                </ul>
            </li>  
            <li><a href="#">Каналы связи</a></li>  
            <li><a href="#">Collocation</a></li>  
            <li><a href="#">Тарифы DDoS</a></li>  
             
        </ul>
      </div>
    </li>
    <li>
      <a class="collapsible-header waves-effect waves-teal ">Физическим лицам</a>
      <div class="collapsible-body">
          <ul>
            <li><a href="#">Интернет</a></li>  
            <li><a href="#">Wi-Fi</a></li>  
            <li><a href="#">Телефония</a></li>  
            <li><a href="#">Телевидение</a></li>   
        </ul>
      </div>
    </li> 
    <li>
      <a class="collapsible-header waves-effect waves-teal <? if ($content_type=='app') { echo 'active'; }; ?>">Приложения</a>
      <div class="collapsible-body">
          <ul>
            <li><a class="waves-effect waves-yellow <? if ($page=='billing') { echo 'light-green accent-1'; }; ?>" href="?page=billing">Биллинг</a></li>  
            <li><a class="waves-effect waves-yellow <? if ($page=='support') { echo 'light-green accent-1'; }; ?>" href="?page=support">Техподдержка</a></li>  
            <li><a class="waves-effect waves-yellow <? if ($page=='twinkle') { echo 'light-green accent-1'; }; ?>" href="?page=twinkle">Twinkle</a></li>  
            <li><a class="waves-effect waves-yellow <? if ($page=='zimbra') { echo 'light-green accent-1'; }; ?>" href="?page=zimbra">Zimbra</a></li>   
        </ul>
      </div>
    </li>
    
  </ul>      
    <li class="<? if ($page=='zone') { echo 'active'; }; ?>"><a class="waves-effect waves-yellow" href="?page=zone">Зона присутствия</a></li>
       
        
        <? if ($_SESSION['auth']) {?>
                
                        <li><a  class="waves-effect waves-red " href="?logout">Выход</a> </li>
    
             <? } else { ?>
                <li><a data-target="login_modal" class="aves-effect waves-yellow modal-trigger orange-text darken-1">Войти</a></li>

             <? } ?>
      </ul>