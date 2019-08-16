<?php


$content_type='';
if(!isset($_GET['page'])){
  $page = 'main';
}
else{
  $page = addslashes(strip_tags(trim($_GET['page'])));
};

$right_bar='false';

switch($page)
{
  case 'main':
      $title = 'Инструкция оператора';
      $meta_d = 'Описание страницы Главная';
      $meta_kw = 'Ключевые слова страницы Главная';
      $path = 'content/steps/step1.html';
     #$path = 'content/main.php';
      $right_bar='true';
      $content_type='steps';
      $nav_top_color='light-blue lighten-3';
       break;
  case 'contacts':
      $title = 'Контакты';
      $meta_d = 'Описание страницы О нас';
      $meta_kw = 'Ключевые слова страницы О нас';
      $path = 'content/contacts.php';
      $right_bar='true';
      $nav_top_color='teal darken-4';
  break;
  case 'genissue':
      $title = 'Общие вопросы';
      $meta_d = 'Описание страницы О нас';
      $meta_kw = 'Ключевые слова страницы О нас';
      $path = 'content/genissue.php';
      $right_bar='true';
      $nav_top_color='red darken-1';
      $content_type='common_issue';
  break;
 
  case 'zone':
      $title = 'Зона присутствия';
      $meta_d = 'Зона присутствия ЗАО РК';
      $meta_kw = 'Ключевые слова страницы Главная';
      $path = 'content/zone.php';
      $right_bar='false';
      $nav_top_color='indigo darken-4';
      
  break;
  case 'zone_editor':
      $title = 'Редактор';
      $meta_d = 'Описание страницы Наши контакты';
      $meta_kw = 'Ключевые слова страницы Наши контакты';
      $path = 'content/required/zone_editor.php';
      $right_bar='true';
      $content_type='editor'; 
      $nav_top_color='purple lighten-2';
      
  break;
  case 'billing':
      $title = 'Биллинг';
      $meta_d = 'Описание страницы Наши контакты';
      $meta_kw = 'Ключевые слова страницы Наши контакты';
      $path = 'content/applications/billing.html';
      $right_bar='true';
      $content_type='app';
      $nav_top_color=' light-green accent-4';
  break;
  case 'support':
      $title = 'Техподдержка';
      $meta_d = 'Описание страницы Наши контакты';
      $meta_kw = 'Ключевые слова страницы Наши контакты';
      $path = 'content/applications/support.html';
      $right_bar='true';
      $content_type='app';
      
  break;
  case 'twinkle':
      $title = 'Twinkle';
      $meta_d = 'Описание страницы Наши контакты';
      $meta_kw = 'Ключевые слова страницы Наши контакты';
      $path = 'content/applications/twinkle.html';
      $right_bar='true';
      $content_type='app';
      $nav_top_color='lime darken-4';
  break;
  case 'zimbra':
      $title = 'Zimbra';
      $meta_d = 'Описание страницы Наши контакты';
      $meta_kw = 'Ключевые слова страницы Наши контакты';
      $path = 'content/applications/zimbra.html';
      $right_bar='true';
      $content_type='app';
      $nav_top_color='light-blue accent-3';
  break;
    
  case 'taraskul':
      $title = 'Коммутатор Тараскуля';      
      $right_bar='true';
      $content_type='tarask';
      $nav_top_color='light-blue cyan';
      $path = 'content/taraskul.html';
  break;
        
   /* <?php

 if ($page == '') //Шаг 1 
    {
    include "content/steps/step1.html";
    }
elseif($page=='step2') //Шаг 2
    {        
        include "content/steps/step2.html";
    }
elseif($page=='step3') //Шаг 3
    {        
        include "content/steps/step3.html";
    }
elseif($page=='step4') //Шаг 4
    {        
        include "content/steps/step4.html";
    }
elseif($page=='step5u') //Шаг 5Ю
    {        
        include "content/steps/step5u.html";
    }
elseif($page=='step5f') //Шаг 5Ф
    {        
        include "content/steps/step5f.html";
    }
elseif($page=='step6') //Шаг 6
    {        
        include "content/steps/step6.html";
    }
*/

}
?>
