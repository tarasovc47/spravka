<nav class="navbar navbar-static-top navbar-xs ">
</nav>
<nav class="navbar navbar-default navbar-fixed-top navbar-xs ">
  <div class="navbar-inner">
	 <ul class="nav navbar-nav">
         <li <? if ($page=='') { ?> class="active" <? } ?>>
             <a href="http://192.168.78.33">
                 <font color="red">
                 <i class="glyphicon glyphicon-home"></i>&nbsp;
                 <strong>Инструкция оператора</strong>
                 </font></a>
         </li>
         <li <? if ($page=='ts') { ?> class="btn-info" <? } ?>>
             <a href="http://192.168.78.33/?page=ts">Телефонный справочник</a>
         </li>
         <li class="<? if ($page=='gen') { ?> btn-info <? } ?>">
             <a href="http://192.168.78.33/?page=gen">Общие вопросы</a>
         </li>
         <li  class="dropdown drophover 
<? if (substr_count($page, "ul") == 1 ){?> btn-info <? } ?> ">
             <a href="#" class="dropdown-toggle" data-toggle="drophover">
                 Юридические лица
             </a>   
                    <ul class="dropdown-menu drophover-menu" role="menu">
                  <?
                        include "content/navbarul.html";
                  ?>
                    </ul>
             
         </li>
         <li class="dropdown drophover
  <? if (substr_count($page, "fl") == 1 ){?> btn-info <? } ?> ">
             <a  href="#" class="dropdown-toggle" data-toggle="drophover">
                 Физические лица 
             </a>    
                  <ul class="dropdown-menu drophover-menu" role="menu">
                      <? 
                        include "content/navbarfl.html";
                    ?> 
                  </ul>  
             
         </li>   
         
         
         <li class="dropdown drophover
                   <?if (($page=='billing')||($page=='support')||($page=='twinkle')||($page=='zimbra')){
                    ?> 
                    btn-info 
                    <? } ?> 
                    ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Приложения</a>
          <ul class="dropdown-menu drophover-menu" role="menu">             
                <li class="<?if ($page=='billing'){?> btn-success <? } ?>">
                    <a href="http://192.168.78.33/?page=billing">Биллинг</a>
                </li>
                <li class="<?if ($page=='support'){?> btn-success <? } ?>">
                    <a href="http://192.168.78.33/?page=support">Техподдержка</a>
                </li>
                <li class="<?if ($page=='twinkle'){?> btn-success <? } ?>">
                    <a href="http://192.168.78.33/?page=twinkle">Twinkle</a>
                </li>
                <li class="<?if ($page=='zimbra'){?> btn-success <? } ?>">
                    <a href="http://192.168.78.33/?page=zimbra">Zimbra</a>
                </li>
            </ul>
         </li>
         <li>
             <a href="#action" role="button" data-toggle="modal" ><b>Акции</b></a>
         </li>
         
         
         <li>
            <a role="button"  href="?page=zonerk">Зона присутствия</a>
         </li>
         
            
         
    </ul> 

      
  </div>
</nav>

<!-- Tab panes -->


      

