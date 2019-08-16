
<!DOCTYPE html>
<html>     
    <head>
         <title>Инструкция оператора</title>        
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>   
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>            

           
        <script src="js/jquery.min.js"></script>
        <!-- Compiled and minified CSS -->
        

        <!-- Compiled and minified JavaScript -->
        <script src="js/materialize.js"></script>
        
            <!-- Кнопка наверх-->
<script type="text/javascript">

$(function(){
  $.fn.scrollToTop=function(){
    $(this).hide().removeAttr("href");
    if($(window).scrollTop()!="0"){
        $(this).fadeIn("slow")
  }
  var scrollDiv=$(this);
  $(window).scroll(function(){
    if($(window).scrollTop()=="0"){
    $(scrollDiv).fadeOut("slow")
    }else{
    $(scrollDiv).fadeIn("slow")
  }
  });
    $(this).click(function(){
      $("html, body").animate({scrollTop:0},"slow")
    })
  }
});
$(function() {$("#toTop").scrollToTop();});

</script>

  <!-- Кнопка наверх-->  
        
        
        
        
        
    </head>    
<body>
    <a href="#" class="btn-floating btn-large waves-effect waves-light red" id="toTop"><i class="mdi-file-file-upload"></i></a>
<?php
header('Content-type: text/html; charset=utf-8');    
session_start();
mysql_connect('localhost','root','77russcom77') or die(mysql_error());
mysql_select_db('authbase') or die(mysql_error());
mysql_query('SET NAMES cp1251');

 
require 'content/required/router.php';
require('login.php');   
require 'content/required/navbar_top.php'; # Верхняя панель -->  
?> 
<div class="row">
    <div class="col s2"> 
    &nbsp;    
    <? # Боковая панель -->
    include 'content/required/navbar_left.php'; ?>
    </div>
    <div class="col s8">
        <div class="section no-pad-bot" id="index-banner">
            
            
            <?  
             include $path;    
            ?>
                
        </div>        
    </div>   
    
        <div class="col s2">
            <? if ($right_bar=='true') { 
                require 'content/required/navbar_right.php';    
             } ?>         
        </div>
     
</div>
  <!-- footer class="page-footer orange fixed-bottom">
      <div class="row">
        <div class="col s2">&nbsp;</div>
        <div class="col s10">
        <div class="col l6 s12">
          <h5 class="white-text">Оператор связи «Русская компания»</h5>
          <p class="grey-text text-lighten-4">Оператор связи РК – это группа компаний.

Общее количество клиентов оператора связи РК – свыше 20 тыс. юридических лиц (ЮЛ) и физических лиц (ФЛ).</p>

        </div>
        <div class="col l3 s12">
            
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
         
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Наш сайт</h5>
          <ul>
            <li><a class="white-text" href="http://t72.ru">T72.RU</a></li>
           
          </ul>
        </div>
      </div>
      </div>
    
    <div class="footer-copyright">
      <div class="container">
      Made by Ildar Asmandiyarov
      </div>
    </div>
  </footer -->   
    
 <!-- Modal Structure -->
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="col s12">
     <div id="login_modal" class="modal">
     <div class="modal-content">						
		                  <div >
			                 <h3 id="AuthLabel">Авторизация <? echo $title;  ?> </h3> 
		                  </div>
		                  <div  class="input-field col s6">		                     
    				              <label for="first_name">Имя пользователя</label><input id="first_name" class="validate" type="text" name="user" />
                         </div>
                         <div class="input-field col s6">
                                   <label for="password">Пароль</label><input id="password" class="form-control" type="password" name="pass"><br>
   						<!-- Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip" --><br>  
    				                <? //print_r($_SESSION); ?>  	
		                  </div>
		                  <div class="modal-footer">
                              <a href="#" class="modal-action modal-close waves-effect waves-green btn ">Закрыть</a>&nbsp;	
                              <input class="btn" type="submit" name="login" value="Войти"> 
                          </div> 			
			         </div
  </div>
      <br><br>

    </div>
</form>
<script>
$(document).ready(function() {
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
});
    
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
$('.dropdown-button').dropdown({
      inDuration: 50,
      outDuration: 25,
      constrain_width: true, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true // Displays dropdown below the button
    }
  );

$(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
$(document).ready(function() {
    $('select').material_select();
});
        
        
</script>
     
    </body>
</html>
<? 

mysql_close(); 
    ?>