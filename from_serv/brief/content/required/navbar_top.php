<nav class="top-nav <? echo $nav_top_color; ?> <? echo $nav_top_text_color; ?>">
            <div class="container">
                <div class="nav-wrapper  ">
                    
                        <ul id="nav-mobile" class="right hide-on-med-and-down"> 
                            <li><div class="center brand-logo"><? echo $title; ?></div></li>
                           
                                <? if (($_SESSION['auth'])&($page=='zone')) { ?>
                                    <li><div><a class="btn-floating btn-large waves-effect waves-light red z-depth-4" title="Редактировать таблицу Зона присутствия" href="?page=zone_editor"><i class="mdi-editor-mode-edit"></i></a></div></li>
                                <? } ?>
                            
                            
                                <?  
                                    if ($page!='main') { ?>
                                    <li><div><a href="http://192.168.78.33/brief" class="waves-effect waves-yellow" title="Вернуться на главную"> На главную</a></div></li>
                                <? } ?> 
                                
                                
                        </ul>                   
                </div>
             </div>
     
            
  </nav>

