
<? 
//----------------------------------------//
//Общие вопросы
if ($page=='gen')
{
?>
	Общие вопросы
	
<?
}

//----------------------------------------//
//Услуги для Физических лиц
//Тарифы

elseif($page=='tariffs_wifi_fl') 
{
?>
	Тарифы WiFi ФЛ
<?
}
elseif($page=='tariffs_inet_fl') 
{
?>
	Тарифы Интернет ФЛ
<?
}
elseif($page=='tariffs_tel_fl') 
{
?>
	Тарифы Телефония ФЛ
<?
}
elseif($page=='tariffs_tv_fl') 
{
?>
	Тарифы Телевидение ФЛ
<?
}

//----------------------------------------//
//Услуги для Юридических лиц
//Тарифы
 elseif($page=='tariffs_inet_ul') //Тарифы Инет ЮЛ
{
?>
    Тарифные планы Интернет, ЮЛ
<?
}
elseif($page=='tariffs_channels_ul') //Тарифы на каналы связи ЮЛ
{
?>
    Тарифы на каналы связи
<?
}
elseif($page=='tariffs_tv_ul') //Тарифы ТВ ЮЛ
{
?>
	Тарифы Телевидение ЮЛ
<?
}
elseif($page=='tariffs_tel_ul') //Тарифы ТВ ЮЛ
{
?>
	Тарифы Телефония ЮЛ
<?
}
elseif($page=='tariff_DDoS_ul') //Тарифы DDoS ЮЛ
{
?>
	Тарифы «Защита от DDoS-атак»
<?
}
elseif($page=='tariff_collocation_ul') //Тарифы Collocation ЮЛ
{
?>
    Тарифы «Collocation»
<?
}

////
//Техсложности ФЛ
elseif ($page=='tehdifinet_fl') 
{
?>
	Техсложности Интернет ФЛ
<?;  
}
elseif ($page=='tehdifwifi_fl') 
{
?>
	Техсложности WiFi ФЛ
<?;  
}
elseif ($page=='tehdiftel_fl') 
{
?>
	Техсложности Телефония ФЛ
<?;  
}    
elseif ($page=='tehdiftv_fl') 
{
?>
	 Техсложности Телевидение ФЛ
<?;  
}

////
//Техсложности ЮЛ
elseif ($page=='tehdifinet_ul') 
{
?>
	Техсложности Интернет ЮЛ
<?;  
}
elseif ($page=='tehdiftel_ul') 
{
?>
	Техсложности Телефония ЮЛ
<?;  
}    
elseif ($page=='tehdiftv_ul') 
{
?>
	 Техсложности Телевидение ЮЛ
<?;  
}
////
//------------------------------//
 // Телефонный справочник
elseif($page=='ts') 
{
?>
	Телефонный справочник
<?
}	
////
//Абонентское обслуживание ЮЛ
elseif($page=='aowifi_fl')
{
?>
	Абонентское обслуживание WiFi ФЛ
<?
} 
elseif($page=='aoinet_fl')
{
?>
	Абонентское обслуживание Интернет ФЛ
<?
} 
elseif($page=='aotv_fl')
{
?>
	Абонентское обслуживание Телевидение ФЛ
<?
} 
elseif($page=='aotel_fl')
{
?>
	Абонентское обслуживание Телефония ФЛ
<?
} 
////
//------------------------------//
 // Приложения
elseif ($page=='billing') 
{
?>
    Биллинг, информационно-расчетная система
<? 
}
elseif ($page=='support') 
{
?>
	Техподдержка
<? 
}
elseif ($page=='twinkle') 
{
?>
	Twinkle, приложение для перевода звонков
<? 
}
elseif ($page=='zimbra') 
{
?>
    Zimbra, почтовый сервер
<? 
}
////
//------------------------------//
 // Коммутатор тараскуль
elseif ($page=='tarask') 
{
?>
    Коммутатор санаторий "Тараскуль"
<? 
}
////
//------------------------------//
 // Коммутатор тараскуль
elseif ($page=='tsg-service') 
{
?>
    ТСЖ-Сервис
<? 
}
//------------------------------//
 // Зона присутствия
elseif ($page=='zonerk') 
{
?>
    Зона присутствия РК<br>

<? 
}
else 
{
?>
	ИНСТРУКЦИИ для оператора техподдержки 1-го уровня
<?
}
?>