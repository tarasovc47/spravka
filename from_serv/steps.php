<?php

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

      
//----------------------------------------//
//Услуги для Юридических лиц
//Тарифы
    elseif($page=='tariffs_tv_ul') //Тарифы ТВ ЮЛ
        {
            include "content/Tariffs/tariffTV_UL.php"; 
        }
    elseif($page=='tariffs_inet_ul') //Тарифы Инет ЮЛ
        {
            include "content/Tariffs/tariffInet_UL.php"; 
        }
    elseif($page=='tariff_collocation_ul') //Тарифы Collocation ЮЛ
        {
            include "content/Tariffs/Collocation.php"; 
        }
    elseif($page=='tariff_DDoS_ul') //Тарифы DDoS ЮЛ
        {
            include "content/Tariffs/ddos.html"; 
        }
    elseif($page=='tariffs_tel_ul') //Тарифы телефония ЮЛ
        {
            include "content/Tariffs/tariffTel_ul.php"; 
        }
    elseif($page=='tariffs_channels_ul') //Тарифы Каналы связи ЮЛ
        {
            include "content/Tariffs/channels.html"; 
        }
////
//Техсложности ЮЛ
    
    elseif ($page=='tehdiftv_ul') //техсложности тв
    	{
            include "content/TehDiff/tehdiftv.php";  
      	}
    elseif ($page=='tehdiftel_ul') //техсложности телефония
    	{
		  include "content/TehDiff/tehdiftel.php";  
      	}   
    elseif ($page=='tehdifinet_ul') //техсложности инет
        {
		  include "content/TehDiff/tehdifInet.php";  
      	}
////
//Абонентское обслуживание ЮЛ

////
//------------------------------//
//Услуги для Физических лиц
//Тарифы
    elseif($page=='tariffs_wifi_fl') //Тарифы WiFi ФЛ
        {
            include "content/Tariffs/tariffWiFi.php"; 
        }
    elseif($page=='tariffs_inet_fl') //Тарифы Инет ФЛ
        {
            include "content/Tariffs/tariffInet.php"; 
        }
    elseif($page=='tariffs_tel_fl') //Тарифы телефония ФЛ
        {
            include "content/Tariffs/tariffTel.php"; 
        }
    elseif($page=='tariffs_tv_fl') //Тарифы ТВ ФЛ
        {
            include "content/Tariffs/tariffTV.php"; 
        }

////
//Техсложности ФЛ
    elseif ($page=='tehdifinet_fl') //техсложности инет
        {
		  include "content/TehDiff/tehdifInet.php";  
      	}
    elseif ($page=='tehdifwifi_fl') //техсложности wifi    
    	{
            include "content/TehDiff/tehdifwifi.php";  
      	}
    elseif ($page=='tehdiftel_fl') //техсложности телефония
    	{
		  include "content/TehDiff/tehdiftel.php";  
      	} 
    elseif ($page=='tehdiftv_fl') //техсложности тв
    	{
            include "content/TehDiff/tehdiftv.php";  
      	}
////
//Абонентское обслуживание ЮЛ
    elseif ($page=='aowifi_fl') 
    	{
    		include "content/AO/AOWiFi.php";
    	}
    elseif ($page=='aoinet_fl') 
    	{
    		include "content/AO/AOInet.php";
 		}
    elseif ($page=='aotv_fl') 
    	{
		  include "content/AO/AOTV.php";  
      	}
    elseif ($page=='aotel_fl') 
        {
	       include "content/AO/AOTEL.php";  
      	}
////
//------------------------------//
 // Общие вопросы
    elseif ($page=='gen') // Общие вопросы
        {
            include "content/genquest.php";  
      	} 
////
//------------------------------//
 // Телефонный справочник
    elseif ($page=='ts')  
        {
            include "content/ts.php";  
      	}
////
//------------------------------//
 // Приложения
    elseif ($page=='billing') 
        {
	       include "content/application/billing.html";
        }
    elseif ($page=='support') 
        {
            include "content/application/support.html";
        }
    elseif ($page=='twinkle') 
        {
            include "content/application/twinkle.html";
        }
    elseif ($page=='zimbra') 
        {
            include "content/application/zimbra.html";
      	}
////
//------------------------------//
 // коммутатор Тараскуль
    elseif ($page=='tarask') 
        {
            include "content/taraskul.php";
      	}
//------------------------------//
 // коммутатор ТСЖ-Сервис
    elseif ($page=='tsg-service') 
        {
            include "content/tsg.php";
      	}
// зона присутствия      	
    elseif ($page=='zonerk') 
        {
            include "content/zonerk.php";
        }
    else 
    {    	
   	    
    }	         
?>


