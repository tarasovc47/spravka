<div class="well col-xs-3" style="position:fixed; top:98px;<?if (($page!='ts')&($page!='tsg-service')) {  ?> overflow-y:scroll!important ; overflow-x:hidden ; height: 80% <? }  ?>; z-index:1000;">

<?
if ($page!='')
 { 	
    if (substr_count($page, "step") != 1 )
        {
        if (($page!='ts')&($page!='tsg-service')&($page!='zonerk'))
            
                    {
 	          ?>
            <h4 class="pull-left"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Оглавление</h4>
                <?
                    } 
                
            ?>
            <button  class="btn btn-danger  pull-right" onclick="javascript: history.back()">
                <i>Назад</i>
            </button>
  
            <?
        };
 }
if  ($page=='gen')
        {
	      ?>
<br><br>
    <nav  class="navbar navbar-default">
	   <ul class="nav nav-pills  nav-stacked ">
           <li <? if ($page=='gen') { ?> class="active" <? }; ?>>
            <a href="http://192.168.78.33/?page=gen">Общие вопросы</a>
            <? if ($page=='gen') { ?>
            <ul>
                <a class="label label-success" href="#top">Оператор связи РК</a>
   	            <a class="label label-success" href="http://192.168.78.33/?page=gen#tabl">Подразделения</a>
                <a class="label label-success" href="http://192.168.78.33/?page=gen#requisite">Реквизиты</a>
                <a class="label label-success" href="#ts">Контакты</a>
                <a class="label label-success" href="#tsent">ТС для служебного пользования</a>
		<a class="label label-success" href="#lsnumber">Лицевой счет</a>
		<a class="label label-info" href="#balance">Баланс</a>
                 <a class="label label-info" href="#ways_of_pay">Способы оплаты</a><br>
		 <a class="label label-success" href="#definitions">Определения</a>
                <a class="label label-success" href="#trusteetransfer" >«Доверительный доступ»</a>
                <a class="label label-success" href="#AreaPresence">«Зона присутствия»</a><br>
                <a class="label label-default" tabindex="-1" href="#lcab2">«Личный кабинет»</a>
                 <a class="label label-success" tabindex="-1" href="#lcab">Авторизация в ЛК</a>
                    <a class="label label-success" href="#mainpagelk">Внешний вид главной страницы ЛК</a>
                    <a class="label label-success" href="#payview">Просмотр счетов и платежей</a>
                    <a class="label label-success" href="#payment">Осуществление платежа</a>
                    <a class="label label-success" href="#telextview">Вкладка «Телефония»</a>                    
                    <a class="label label-info" href="#teldetail">Детализация исходящих тел. соединений</a>
                    <a class="label label-success" href="#dynipextview">Вкладка «Интернет с динамическим IP»</a>
                    <a class="label label-info" href="#dynipextview">Внешний вид</a>
                    <a class="label label-info" href="#dynipdetail">Детализация Интернет-трафика</a>
                    <a class="label label-info" href="#dyniptarifch">Смена тарифного плана</a>
                    <a class="label label-info" href="#DynIPPassChange">Изменение пароля для доступа в сеть Интернет</a>
                    <a class="label label-success" href="#CaTV">Вкладка «Кабельное TV»</a>
            </ul>   
 	        <? } ?>
            </li>
           
        
	<? 
 }
 elseif(($page=='lcab')||($page=='billing')||($page=='support')||($page=='twinkle')||($page=='zimbra'))
 { 
 ?>
   <br><br>
    <nav  class="navbar navbar-default">
	   <ul class="nav nav-pills  nav-stacked ">
           <li  <? if ($page=='billing') { ?> class="active" <? }; ?>>
   		       <a href="http://192.168.78.33/?page=billing">Биллинг</a>	
   		       <? if ($page=='billing') { ?>
   		       <ul>
                    <a class="label label-success" tabindex="-1" href="#Bill_enter">Вход</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_balance">Информация о балансе</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_requisite">Реквизиты клиента</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_services">Сервисы</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_payments">Платежи</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_bills">Счета</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_reconciliation">Акты сверки</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_contract">Договоры</a>
                    <a class="label label-success" tabindex="-1" href="#Bill_history">История</a>
                  
             </ul>
            <? } ?>
        </li>
        <li  <? if ($page=='support') { ?> class="active" <? }; ?>>
   		       <a href="http://192.168.78.33/?page=support">Техподдержка</a>	
   		       <? if ($page=='support') { ?>
   		       <ul>
                    <a class="label label-success" tabindex="-1" href="#support_truble_ticket">Создание трабл-тикета</a>
                    <a class="label label-success" tabindex="-1" href="#support_close_ticket">Закрытие трабл-тикета</a>
                    <a class="label label-success" tabindex="-1" href="#support_rep_ref">Повторное обращение</a>
                   
             </ul>
            <? } ?>
        </li>
        <li  <? if ($page=='twinkle') { ?> class="active" <? }; ?>>
   		       <a href="http://192.168.78.33/?page=twinkle">Twinkle</a>	
   		       <? if ($page=='twinkle') { ?>
   		       <ul>
                    <a class="label label-success" tabindex="-1" href="#Login_creation">Создание учетной записи</a>
                    <a class="label label-success" tabindex="-1" href="#Call_transfer">Перевод звонков</a>
                 
             </ul>
            <? } ?>
        </li>
        <li  <? if ($page=='zimbra') { ?> class="active" <? }; ?>>
   		       <a href="http://192.168.78.33/?page=zimbra">Zimbra, почта</a>	
   		       <? if ($page=='zimbra') { ?>
   		       <ul>
                    <a class="label label-success" tabindex="-1" href="#zimbra_reg">Регистрация</a>
                    <a class="label label-success" tabindex="-1" href="#zimbra_sign">подпись</a>
                    <a class="label label-success" tabindex="-1" href="#zimbra_new">новое письмо</a>
                    <a class="label label-success" tabindex="-1" href="#zimbra_search">Поиск</a>
                    <a class="label label-success" tabindex="-1" href="#zimbra_sort">Сортировка </a>
                    <a class="label label-success" tabindex="-1" href="#zimbra_filtering">Фильтры</a>
                    <a class="label label-success" tabindex="-1" href="#zimbra_address">Адресная книга</a>
                  
             </ul>
            <? } ?>
        </li>
    </ul>
 <?
 }
 elseif((substr_count($page, "tariff") == 1 )&&(substr_count($page, "fl") == 1 ))
 {
 	?>
 	    <br> 
<br>
    <nav  class="navbar navbar-default">
	<ul class="nav nav-pills  nav-stacked ">
   	<li  <? if ($page=='tariffs_inet_fl') { ?> class="active" <? }; ?>>
   		<a href="http://192.168.78.33/?page=tariffs_inet_fl">Интернет ФЛ</a>	
   		<? if ($page=='tariffs_inet_fl') { ?>
   		 <ul>
 	 		           
            <span class="label label-default"> Технологии</span>
            <a class="label label-info" href="#ADSLTec"> ADSL</a>
            <a class="label label-info" href="#EthernetTec"> Ethernet</a>
            <a class="label label-info" href="#PONTec"> PON</a><br>
            <a class="label label-default" href="#Tarifs_for_sale"> ТП для продажи</a>
            <a class="label label-success" href="#Active"> АКТИВ, безлимитные ТП</a>
             <a class="label label-info" href="#sActive50"> «Яркий Актив 50»</a>
            <a class="label label-info" href="#sActive100"> «Яркий Актив 100»</a>
 	 	    
                 
            <!-- с 28.11.14 -->  <a class="label label-success" href="#runo">
                  Золотое руно, пакетное подключение</a>            
            <a class="label label-success" href="#TP_reserv"> РЕЗЕРВ</a>             
            <a class="label label-success" href="#Social"> СОЦИАЛЬНЫЙ</a>
            <a class="label label-success" href="#TP_for_students"> 
                 ТП ДЛЯ СТУДЕНТОВ<br> ОБЩЕЖИТИЙ МЕДАКАДЕМИИ</a>
            <a class="label label-info" href="#TP_practika"> «Практика»</a>
            <a class="label label-info" href="#TP_theory"> «Теория»</a>
            <a class="label label-info" href="#TP_student_5"> «Студент 5»</a>
            <a class="label label-info" href="#TP_student_10"> «Студент 10»</a>
            <a class="label label-info" href="#TP_student_50"> «Студент 50»</a>
            <a class="label label-success" href="#TP_for_townhouse"> ТП ДЛЯ КОТТЕДЖНЫХ ПОСЕЛКОВ</a><a class="label label-success" href="#TP_Country"> КАНТРИ</a>
             <a class="label label-info" href="#Country15"> «Кантри 15»</a>
             <a class="label label-info" href="#Country50"> «Кантри 50»</a>
             <a class="label label-info" href="#Country100"> «Кантри 100»</a><br>
             <a class="label label-success" href="#TP_Argo"> АРГО</a>
             <a class="label label-info" href="#Argo15"> «Арго 15»</a>
             <a class="label label-info" href="#Argo50"> «Арго 50»</a>
             <a class="label label-info" href="#Argo100"> «Арго 100»</a><br>
             <a class="label label-success" href="#TP_Ozerniy"> ОЗЕРНЫЙ</a>
             <a class="label label-info" href="#Ozerniy10"> «Озерный 10»</a>
             <a class="label label-info" href="#Ozerniy20"> «Озерный 20»</a>
             <a class="label label-info" href="#Ozerniy30"> «Озерный 30»</a><br>
             <a class="label label-success" href="#TP_Andre_1"> АНДРЕЕВСКИЙ</a>
             <a class="label label-info" href="#TP_Andre_1"> «Андреевский 1»</a>
             <a class="label label-info" href="#TP_Andre_2"> «Андреевский 2»</a><br>
             <a class="label label-success" href="#TP_Optimus"> ОПТИМУС</a>
             <a class="label label-info" href="#Optimus32"> «Оптимус 32»</a>
             <a class="label label-info" href="#Optimus50"> «Оптимус 50»</a>
             <a class="label label-info" href="#Optimus100"> «Оптимус 100»</a><br>
            <a class="label label-success" href="#Hebrid_TP"> ГИБРИДНЫЙ ТАРИФНЫЙ ПЛАН</a><br>
            <a class="label label-warning" href="#TP_NetLine"> Тарифы NetLine</a>
            <a class="label label-default" href="#Supported_Tariffs">Поддерживаемые тарифы   </a>&nbsp;
           <a class="label label-info" href="#Olimp">
                  ОЛИМП, пакетное подключение</a>
             <a class="label label-info" href="#Active6"> «Актив 6»</a>
            <a class="label label-info" href="#Active8"> «Актив 8»</a>
          
             <a class="label label-info" href="#Active20"> «Актив 20»</a>
            <a class="label label-info" href="#Active40"> «Актив 40»</a>
               <a class="label label-info" href="#Active50"> «Актив 50»</a>
            <a class="label label-info" href="#Active100"> «Актив 100»</a>
           <a class="label label-info" href="#TP_olimp100"> «Олимп 100»</a>
            <a class="label label-info" href="#Gorodok6"> «Городок 6»</a>           
            <a class="label label-info" href="#Gorodok8"> «Городок 8»</a>
            <a class="label label-info" href="#Gorodok20"> «Городок 20»</a>
            <a class="label label-info" href="#Gorodok40"> «Городок 40»</a>
            
            <a class="label label-info" href="#Prigorod5"> «Пригородный 5»</a>
            <a class="label label-info" href="#Prigorod10"> «Пригородный 10»</a>
            <a class="label label-info" href="#Prigorod50"> «Пригородный 50»</a>
            <a class="label label-info" href="#Prigorod100"> «Пригородный 100»</a>
            <a class="label label-info" href="#Unlimited_line_2048_RRL">«Безлимитная линейка 2048 (РРЛ)»</a>
            <a class="label label-info" href="#Unlimited_line_2"> «Безлимитная линейка 2»</a>
            <a class="label label-info" href="#Unlimited_line_4"> «Безлимитная линейка 4»</a>
            <a class="label label-info" href="#Unlimited_line_6"> «Безлимитная линейка 6»</a>
            <a class="label label-info" href="#Unlimited_line_10"> «Безлимитная линейка 10»</a> 
            <a class="label label-info" href="#TP_homely"> «Домашний»</a>
            <a class="label label-info" href="#TP_Comet"> «Комета»</a>
            <a class="label label-info" href="#TP_Comfort"> «Комфорт»</a>
            <a class="label label-info" href="#TP_Comfortno"> «Комфортно»</a>
            <a class="label label-info" href="#TP_Easy"> «Легко»</a>
            <a class="label label-info" href="#TP_Amateur"> «Любитель»</a>
            <a class="label label-info" href="#TP_MAximal"> «Максимальный»</a> 
            <a class="label label-info" href="#TP_Maximum"> «Максимум»</a>
            <a class="label label-info" href="#TP_Metheor"> «Метеор»</a>
            <a class="label label-info" href="#TP_Dream"> «Мечта»</a>
            <a class="label label-info" href="#TP_Minimum"> «Минимум»</a>
            <a class="label label-info" href="#TP_Molodezhniy1"> «Молодежный 1»</a>
            <a class="label label-info" href="#TP_Molodezhniy2"> «Молодежный 2»</a>
            <a class="label label-info" href="#TP_Molodezhniy6"> «Молодежный 6»</a>
            <a class="label label-info" href="#TP_Molodezhniy10"> «Молодежный 10»</a>
            <a class="label label-info" href="#TP_Night_standart"> «Ночной стандарт»</a>
            <a class="label label-info" href="#TP_Nignt_for_maximum"> «Ночь по максимуму»</a>
            <a class="label label-info" href="#TP_Prigorod_1024"> «Пригородный 1024»</a>
            <a class="label label-info" href="#TP_Prigorod_2048"> «Пригородный 2048»</a>
            <a class="label label-info" href="#TP_Prigorod_5128"> «Пригородный 5128»</a>
            <a class="label label-info" href="#TP_Prigorod_10240"> «Пригородный 10240»</a>
            <a class="label label-info" href="#TP_Prosto"> «Просто»</a>
            <a class="label label-info" href="#TP_Profi"> «Профи»</a>
            <a class="label label-info" href="#TP_High-speed"> «Скоростной»</a>
            <a class="label label-info" href="#TP_Standart"> «Стандарт»</a>
            <a class="label label-info" href="#TP_Comfortably"> «Удобно»</a>
            <a class="label label-info" href="#TP_Tsunami2"> «Цунами 2»</a>
            <a class="label label-info" href="#TP_Tsunami4"> «Цунами 4»</a>
            <a class="label label-info" href="#TP_Xpert"> «Эксперт»</a>
            </ul>
        <? } ?>
        </li>
     <li  <? if ($page=='tariffs_wifi_fl') { ?> class="active" <? }; ?>>
    	<a href="http://192.168.78.33/?page=tariffs_wifi_fl">WiFI ФЛ</a>
    		<? if ($page=='tariffs_wifi_fl') { ?>
   		 <ul>
            <a class="label label-default" href="#WiFi_saled">Продаваемые тарифы</a>
            <a class="label label-success" href="#WiFi_SU">WiFi.su</a>
            <a class="label label-info" href="#WiFi_world">«Мир»</a>
            <a class="label label-info" href="#WiFi_ruble">«Рубль»</a>
            <a class="label label-success" href="#WiFi_med">WiFi.med</a>
            <a class="label label-info" href="#WiFi_praktika">«Практика»</a>
            <a class="label label-info" href="#WiFi_theory">«Теория»</a><br>
            <a class="label label-default" href="#WiFi_supported">Поддерживаемые тарифы</a>
            <a class="label label-info" href="#WiFi_kurort">«Курорт»</a>
            <a class="label label-info" href="#WiFi_freedom">«Свобода»</a>
         </ul>  
             
     <?}?>
     <li  <? if ($page=='tariffs_tel_fl') { ?> class="active" <? }; ?>>
    	<a href="http://192.168.78.33/?page=tariffs_tel_fl">Телефония ФЛ</a>
    		<? if ($page=='tariffs_tel_fl') { ?>
   		 <ul>
             <span class="label label-default"> Технологии</span>
             <a class="label label-info" href="#Tel_tech_local">Местная телефония</a>
             <a class="label label-info" href="#Tel_tech_SIP">SIP</a><br>
             <a class="label label-default" href="#Tel_for_sales"> ТП для продажи</a>
             
             <a class="label label-success" href="#Tel_unlim_local">Местная</a>          
             <a class="label label-info" href="#Tel_unlim_local">«Безлимитный»</a>
             <a class="label label-info" href="#Tel_Time-based_local">«Повременный»</a>
             <a class="label label-info" href="#Tel_minimal">«Минимальный»</a>
             <a class="label label-success" href="#Tel_SIP">SIP</a>
             <a class="label label-info" href="#Tel_chat">«Общайся»</a>
             <a class="label label-info" href="#Tel_popular_SIP">«Популярный»</a>
             <a class="label label-info" href="#Tel_associated_services">Сопутствующие услуги</a>
             <a class="label label-info" href="#Tel_Number_Selection">Выбор номера</a>
             <a class="label label-info" href="#Tel_signal">Сигнализация</a><br>
            <a class="label label-default" href="#Tel_supported">Поддерживаемые тарифы</a>&nbsp;
            <a class="label label-info" href="#Tel_time_based_other">«Повременный (для абонентов иных операторов)»</a>
         </ul>  
             
     <?}?>
     <li  <? if ($page=='tariffs_tv_fl') { ?> class="active" <? }; ?>>
    	<a href="http://192.168.78.33/?page=tariffs_tv_fl">ТВ ФЛ</a>
    		<? if ($page=='tariffs_tv_fl') { ?>
   		 <ul>
            <span class="label label-default"> ТП для продажи</span>
             <a class="label label-info" href="#TV_reserve">«Бронирование»</a>
             <a class="label label-info" href="#TV_country">«Загородный»</a>
             <a class="label label-info" href="#TV_standart">«Стандартный»</a>
             <a class="label label-info" href="#TV_ethereal">«Эфирный»</a>
             <a class="label label-success" href="#TV_olimp">«пакет ОЛИМП»</a>
            <a class="label label-default" href="#TV_supported">Поддерживаемые тарифы</a>&nbsp;
            <a class="label label-info" href="#TV_preferential">«Льготный»</a>
            <a class="label label-info" href="#TV_Optimal">«Оптимальный»</a>
            <a class="label label-info" href="#TV_social">«Социальный»</a>           
         </ul>  
             
     <?}
 }


 elseif(substr_count($page, "tehdif") == 1 )
 {
 	 	?>
     <br> 
<br>
    <nav  class="navbar navbar-default">
	<ul class="nav nav-pills  nav-stacked ">   
    	<li  <? if (substr_count($page, "tehdifinet") == 1 ) { ?> class="active" <? }; ?>>
    	<? if (substr_count($page, "ul") == 1 ){ ?>
            <a href="http://192.168.78.33/?page=tehdifinet_ul">Интернет ЮЛ 
        <? }?>
            <? if (substr_count($page, "fl") == 1 ){ ?>
                <a href="http://192.168.78.33/?page=tehdifinet_fl">Интернет ФЛ 
        <? }?>
            </a>
                
    		<? if (substr_count($page, "tehdifinet") == 1 ) { ?>
   		 <ul>
   		 	<li><a  href="#teh" >Технические сложности</a></li>
 	 		<li><a  href="#InsufficientBalance">Не работает Интернет в результате недостатка баланса</a></li>
 	 		<li><a  href="#DelPageHanged">Удаление зависшей страницы отключения за неуплату</a></li>
 	 		<li><a  href="#PassRecovery">Восстановление пароля</a></li>
 	 		<li><a  href="#NewConnection">Создание нового подключения (PPPoE)</a></li>
 	 		<li> <a class="label label-info"  href="#PPPoE_WinXP">Windows XP</a>
 	 			<a  class="label label-info" href="#PPPoE_WinVista">Windows Vista</a>
 	 		</li>
 	 		<li>
 	 			<a class="label label-info"  href="#PPPoE_Win7">Windows 7</a>
 	 			<a class="label label-info"  href="#PPPoE_Win8">Windows 8</a>(надо добавить)
 	 		</li>
			<li><A  HREF="#PONReset">Перезагрузка роутера/модема/ PON-оборудования</a></li>
			<li><A  HREF="#er691">691 ошибка при подключении</a></li>
			<li><A  HREF="#MAKChannge">Замена MAC – адреса</A></li>
			<li><A  HREF="#MAKReset">Сброс привязки по MAC – адресу</A></li>
			<li><A  HREF="#SecondMAKbind">Привязка второго MAC – адреса</A></li>
			<li><a  href="#SpeedMesWORouter" style="color: #dedede;">Замеры скорости при подключении кабеля напрямую</a></li>
			<li>
				<A class="label label-info"  HREF="#sp.t72.ru">sp.t72.ru</A>
				<A class="label label-info"  HREF="#sp.t72.ru.test">sp.t72.ru/test</A>
				<A class="label label-info"  href="#stat.t72.ru">stat.t72.ru</A> 	 		
			</li>
			<li><a  href="#ReportOverinflated">Отчет по перекачавшим</a></li>
			<li><a  href="#TicketRegistration">Оформление тикета</a></li>
			<li><a  href="#SpeedMesWRouter">Замеры скорости при использовании роутера</a></li>
   		 </ul>  		 
   		 <? } ?>
    	</li>
        <? if (substr_count($page, "fl") == 1 )
        { ?>
        	<li  <? if ($page=='tehdifwifi_fl') { ?> class="active" <? }; ?>>
                <a href="http://192.168.78.33/?page=tehdifwifi_fl">WiFi ФЛ
                </a>	
   		<? if ($page=='tehdifwifi_fl') { ?>
                
   		 <ul>
             
             <li>
             <a href="#TD_WIFI_Connect">Подключение к сети</a>
             <a class="label label-info" href="#TD_WiFi_SU">WiFi.su</a>
             <a class="label label-info" href="#TD_WiFi_MED">WiFi.med</a>
             </li>
             <li><a href="#TD_WiFi_SMS_registration">SMS-регистрация</a></li>
             <li><a href="#TD_WiFi_user_terminal">Настройка абонентского терминала</a></li>
             <li>
             <a href="#TD_WiFi_Configure_connection">Настройка подключения к WiFi сети</a>
             <a class="label label-info" href="#TD_WiFi_WinXP">Windows XP</a>
             <a class="label label-info" href="#TD_WiFi_Win7">Windows Vista/Windows 7</a>
             </li>
             <li><a href="#TD_WIFI_Disconnect">Отключение от сети</a></li>
             <li><a href="#TD_WIFI_Password_Clarification">Уточнение пароля для доступа в WiFi сеть</a></li>
   		 	 <li><a href="#TD_WIFI_Difficulties">Технические сложности при работе в сетях WiFi.su/WiFi.med</a></li>
   		 	  		 	
   		 </ul>  		 
   		 <? } ?>
                
   	</li>
        <? } ?>
        
    	<li  <? if (substr_count($page, "tehdiftv") == 1 ) { ?> class="active" <? }; ?>>
            <? if (substr_count($page, "ul") == 1 ){ ?>
            <a href="http://192.168.78.33/?page=tehdiftv_ul">Телевидение ЮЛ 
        <? }?>
            <? if (substr_count($page, "fl") == 1 ){ ?>
                <a href="http://192.168.78.33/?page=tehdiftv_fl">Телевидение ФЛ 
        <? }?>
            </a>
    		<? if (substr_count($page, "tehdiftv") == 1 ) { ?>
   		 <ul>
   		    <li><a  href="#TD_TV_Consulting">Консультации абоненту</a>
                <a class="label label-info"  href="#TD_TV_specific_channel" >По определенному каналу</a>
                <a class="label label-info" href="#TD_TV_black_white_image" >Черно-белое изображение(цифровое ТВ)</a>
             </li>
             <li><a  href="#TD_TV_Truble_ticket" >Оформление трабл-тикета</a>
                 <a class="label label-info" href="#TD_TV_Truble_ticket_1" >Шаг №1</a>
                 <a class="label label-info" href="#TD_TV_Truble_ticket_2" >Шаг №2</a>
                 <a class="label label-info" href="#TD_TV_Truble_ticket_3" >Шаг №3</a>
                 <a class="label label-info" href="#TD_TV_Truble_ticket_4" >Шаг №4</a>
                 <a class="label label-info" href="#TD_TV_Truble_ticket_5" >Шаг №5</a>
                 <a class="label label-info" href="#TD_TV_Truble_ticket_6" >Шаг №6</a>
             </li>   
            
   		 </ul>  		 
   		 <? } ?>
    	</li>
            
    	<li  <? if (substr_count($page, "tehdiftel") == 1 ) { ?> class="active" <? }; ?>>
            <? if (substr_count($page, "ul") == 1 ){ ?>
            <a href="http://192.168.78.33/?page=tehdiftel_ul">Телефония ЮЛ 
        <? }?>
            <? if (substr_count($page, "fl") == 1 ){ ?>
                <a href="http://192.168.78.33/?page=tehdiftel_fl">Телефония ФЛ 
        <? }?>
            </a>
    	
    		<? if (substr_count($page, "tehdiftel") == 1 ) { ?>
   		 <ul>
   		 	<li><a  href="#TD_Tel_Step_1" >Шаг №1. Выяснение баланса абонента</a></li> 
   		 	<li><a  href="#TD_Tel_Step_2" >Шаг №2. Выяснение технологии </a></li>
   		 	<b><a  href="#TD_Tel_Wired_phone" >Проводной телефон</a></b>
   		 	<li><a  href="#TD_Tel_Step_3_1" >Шаг №3.1 Выяснение режима набора номера</a></li>
   		 	<li><a  href="#TD_Tel_Step_4_1" >Шаг №4.1. Проверка целостности телефонного кабеля и соединений</a></li>
   		 	<li><a  href="#TD_Tel_Step_5_1" >Шаг №5.1. Создание трабл-тикета</a></li>
   		 	<li><a  href="#TD_Tel_Step_6_1" >Шаг №6.1. Проверка проводной ли телефон</a></li>	
            <b><a  href="#TD_Tel_Rusfon" >Русфон (SIP-телефония)</a>        </b>
   		 	<li>
                <a  href="#TD_Tel_Step_3_2" >Шаг №3.2. Консультации абоненту</a>
                <a  class="label label-info" href="#TD_Tel_MG" >Выход на МГ</a>
                <a  class="label label-info" href="#TD_Tel_MN" >Выход на МН</a>
                <a  class="label label-info" href="#TD_Tel_No_reg" >Не регистрируется</a>
                <a  class="label label-info" href="#TD_Tel_No_out_inc" >Нет входящих/исходящих</a>
                <a  class="label label-info" href="#TD_Tel_voice_interrupt" >Проблемы с голосом</a>
             </li>
             <li><a  href="#TD_Tel_Step_4_2" >Шаг №4.2. Создание трабл-тикета </a></li>
   		 	<b><a  href="#TD_Tel_Selected_line" >Выделенные линии сигнализаций</a></b>
   		 </ul>  		 
   		 <? } ?>
    	</li>
	</ul>
	</div>
	</nav>

 		 <!-- div class="mn well col-xs-2" -->
 	 	
					 
 		 <!-- /div -->
 	<?
 }
 elseif(($page=='ts')||($page=='tsg-service'))
 {
    //empty 
 }
 elseif($page=='zonerk')
 {
     //empty
 }
 elseif((substr_count($page, "tariff") == 1 )&&(substr_count($page, "ul") == 1 )) //Тарифы телефония ФЛ
{
?>
<br>
<br>
        <nav  class="navbar navbar-default">
	       <ul class="nav nav-pills  nav-stacked ">               
                <li <? if ($page=='tariffs_inet_ul') { ?> class="active" <? }; ?>>
                    <a href="http://192.168.78.33/?page=tariffs_inet_ul">Интернет ЮЛ</a>
                    <? if ($page=='tariffs_inet_ul') { ?>
                    <ul>
                     <span class="label label-default"> Технологии</span>
                        <a class="label label-info" href="#ADSLTec">ADSL</a>
                        <a class="label label-info" href="#EthernetTec">Ethernet</a>
                    <a class="label label-info" href="#PONTec">PON</a>
                        </ul>
                        <ul>
                    <a class="label label-success" href="#DynamicIP">ТП с динамическим IP</a>
                    <a class="label label-info" href="#Business">«Бизнес»</a>
                    <a class="label label-info" href="#SmallBusiness">«Малый Бизнес»</a>
                    <a class="label label-info" href="#Reservation">«Резервный»</a>
                    <a class="label label-info" href="#Hybrid">«Гибридный»</a>
                            
                        </ul>
                        <ul>
                            <a class="label label-success" href="#StaticIP">ТП с статическим IP</a>
                            <a class="label label-info" href="#BusinessStat">«БизнесСтат»</a>
                            <a class="label label-info" href="#ReservationProfi">«Резерв Профи»</a>
                        </ul>
                    <? }; ?>
                </li>
               
                <li <? if ($page=='tariffs_tel_ul') { ?> class="active" <? }; ?>>
                    <a href="http://192.168.78.33/?page=tariffs_tel_ul">Телефония ЮЛ</a>
                    <? if ($page=='tariffs_tel_ul') { ?>
                    <ul>
                        <span class="label label-default"> Технологии</span>
                        <a class="label label-info" href="#tek_local">Местная</a>
                        <a class="label label-info" href="#tek_sip">SIP</a>
                        <a class="label label-info" href="#tek_E1">E1</a><br>
                        <a class="label label-default" href="#tp_for_sale">ТП для продажи</a>
                        <a class="label label-success" href="#local_phone">Местная</a>
                        <a class="label label-info" href="#local_phone_unlim">«Безлимитный»</a>
                        <a class="label label-info" href="#local_phone_timed">«Повременный»</a>
                        <a class="label label-info" href="#minimal_ul">«Минимальный»</a>
                        <a class="label label-success" href="#sip">SIP</a>
                        <a class="label label-info" href="#sip_chat">«Общайся»</a>
                        <a class="label label-info" href="#sip_popular">«Популярный»</a>
                        <a class="label label-info" href="#sip_add">Дополнительная линия</a>
                        <a class="label label-success" href="#E1">E1</a>
                        <a class="label label-info" href="#E1_combine">Комбинированный</a><br>
                        <a class="label label-success" href="#mgmn">доступ к МГ/МН</a><br>
                        <a class="label label-success" href="#accompanying_services">Сопутствующие услуги</a>
                        <a class="label label-info" href="#fmc_w_number">FMC</a>
                        <a class="label label-info" href="#virtual_ats">Виртуальная АТС</a>
                        <a class="label label-info" href="#internal_number">Внутренний номер</a>
                        <a class="label label-info" href="#number_choice"> Выбор номера</a>
                        
                    </ul>
                    <? }; ?>
               </li>
               
               
               
                <li <? if ($page=='tariffs_channels_ul') { ?> class="active" <? }; ?>>
                    <a href="http://192.168.78.33/?page=tariffs_channels_ul">Каналы связи</a>
               </li>
               
                <li <? if ($page=='tariff_collocation_ul') { ?> class="active" <? }; ?>>
                    <a href="http://192.168.78.33/?page=tariff_collocation_ul">Collocation</a>
               </li>
               
               <li <? if ($page=='tariffs_tv_ul') { ?> class="active" <? }; ?>>
                   <a href="http://192.168.78.33/?page=tariffs_tv_ul">Телевидение ЮЛ</a>
                   <? if ($page=='tariffs_tv_ul') { ?>
                        <ul>
                            <a class="label label-info" href="#company">«Фирменный»</a>
                            <a class="label label-info" href="#Combine">«Комбинированный»</a>
                            <a class="label label-info" href="#Maximal">«Максимальный»</a>
                        </ul>
                   <? }; ?>
               </li>
               
                <li <? if ($page=='tariff_DDoS_ul') { ?> class="active" <? }; ?>>
                    <a href="http://192.168.78.33/?page=tariff_DDoS_ul">Защита от DDoS</a>
               </li>
               
            </ul>
        </nav> 
<? 
 }


elseif(substr_count($page, "ao") == 1 )
 {
 ?>
 <br> 
<br>
<nav  class="navbar navbar-default">
	<ul class="nav nav-pills  nav-stacked ">
   	
    	<li  <? if ($page=='aoinet_fl') { ?> class="active" <? }; ?>>
    	<a href="http://192.168.78.33/?page=aoinet_fl">Интернет ФЛ</a>
    		<? if ($page=='aoinet_fl') { ?>
   		 <ul>
   		 	<li><a href="#AO_Inet_reservation">Бронирование услуги</a></li>
   		 	<li><a href="#AO_Inet_Refunds">Возврат денежных средств</a></li>
   		 	<li><a href="#AO_Inet_pass_reset">Восстановление пароля</a></li>
   		 	<li><a href="#AO_Inet_Recovery_Services">Восстановление услуги</a></li>
   		 	<li><a href="#AO_Inet_Check_technique">Выезд техника платный</a></li>
   		 	<li><a href="#Price_list_of_paid_services">Прейскурант на платные услуги</a></li>
   		 	<li><a href="#AO_Inet_detailing_service">Детализация услуги</a></li>   		 	
   		 	<li><a href="#AO_Inet_Change_personal_data">Изменение личных данных абонента</a></li>
   		 	<li><a href="#AO_Inet_exec_auth">Оформление доверенности</a></li>
   		 	<li><a href="#AO_Inet_Transferring_funds">Перенос денежных средств</a></li>
   		 	
            <li><a href="#AO_Inet_Transfer_services">Перенос услуги на другой адрес</a></li>
   		 	<li><a href="#AO_Inet_Resigning_service">Переоформление услуги на другое ФЛ</a></li>
   		 	<li><a href="#AO_Inet_recalculation">Перерасчет</a></li>   		 	
   		 	<li><a href="#AO_Inet_static_ip">Предоставление фиксированного IP-адреса</a></li>
   		 	<li><a href="#AO_Inet_terminate_contract">Расторжение договора</a></li>
   		 	<li><a href="#AO_Inet_router">Роутер</a></li>
   		 	<li><a href="#AO_Inet_changing_tp">Смена тарифного плана</a></li>   		 	
   		 	<li><a href="#AO_Inet_changing_tech">Смена технологии подключения</a></li>		 	
   		 	<li><a href="#AO_Inet_tech_expertise">Техэкспертиза</a></li>  	
   		 
   		 </ul>  		 
   		 <? } ?>
    	</li>
        <li  <? if ($page=='aowifi_fl') { ?> class="active" <? }; ?>>
   		<a href="http://192.168.78.33/?page=aowifi_fl">WiFi ФЛ</a>	
   		<? if ($page=='aowifi_fl') { ?>
   		 <ul>
   		 	<li><a href="#aowifi_Refunds">Возврат денежных средств</a></li>
   		 	<li><a href="#aowifi_pass_reset">Восстановление пароля</a></li>
   		 	<li><a href="#aowifi_detailing_services">Детализация услуги</a></li>
   		 	<li>Подключение услуги
                <a href="#aowifi_WiFi.su" class="label label-info">WiFi.su</a>&nbsp;
                <a class="label label-info" href="#aowifi_WiFi.med">WiFi.med</a></li>
   		 	<li><a href="#aowifi_Transfer_funds">Перенос денежных средств</li>
   		 	<li><a href="#aowifi_recalculation">Перерасчет</a></li>   		 	
   		 	<li><a href="#aowifi_termination_of_agreement">Расторжение договора</a></li>
   		 	<li><a href="#aowifi_tp_changing">Смена тарифного плана</a></li>   		 	
   		 	<li><a href="#aowifi_terminals">Терминал абонентский для сети WiFi.su</a></li>		 	
   		 	<li><a href="#aowifi_Technical_expertise">Техэкспертиза</a></li>   		 	
   		 </ul>  		 
   		 <? } ?>
   	</li>
    	<li  <? if ($page=='aotv_fl') { ?> class="active" <? }; ?>>
    	<a href="http://192.168.78.33/?page=aotv_fl" >ТВ ФЛ</a>
    		<? if ($page=='aotv_fl') { ?>
   		 <ul>
   		 	<li><a href="#AO_tv_reservation">Бронирование услуги</a></li>
   		 	<li><a href="#AO_tv_Refunds">Возврат денежных средств</a></li>
   		 	<li><a href="#AO_tv_Recovery_Services">Восстановление услуги</a></li>
   		 	<li><a href="#AO_tv_Check_technique">Выезд техника платный</a></li>
            <li><a href="#AO_tv_Change_personal_data">Изменение личных данных абонента</a></li>
   		 	<li><a href="#AO_tv_exec_auth">Оформление доверенности</a></li>
   		 	<li><a href="#AO_tv_Transferring_funds">Перенос денежных средств</a></li>
   		 	<li><a href="#AO_tv_Transfer_services">Перенос услуги на другой адрес</a></li>
   		 	<li><a href="#AO_tv_Resigning_service">Переоформление услуги на другое ФЛ</a></li>
   		 	<li><a href="#AO_tv_recalculation">Перерасчет</a></li>   		 	
   		 	<li><a href="#AO_tv_terminate_contract">Расторжение договора</a></li>
   		 	<li><a href="#AO_tv_changing_tp">Смена тарифного плана</a></li>   		 	
   		 	<li><a href="#AO_tv_tech_expertise">Техэкспертиза</a></li>  
   		 </ul>  		 
   		 <? } ?>
    	</li>
    	<li  <? if ($page=='aotel_fl') { ?> class="active" <? }; ?>>
    	<a href="http://192.168.78.33/?page=aotel_fl" >Телефония ФЛ</a>
    		<? if ($page=='aotel_fl') { ?>
   		  <ul>
   		 	<li><a href="#AO_tel_reservation">Бронирование услуги</a></li>
   		 	<li><a href="#AO_tel_Refunds">Возврат денежных средств</a></li>
   		 	<li><a href="#AO_tel_Recovery_Services">Восстановление услуги</a></li>
   		 	<li><a href="#AO_tel_Check_technique">Выезд техника платный</a></li>
            <li><a href="#AO_tel_8_allow">Выход на «8» </a>
<!--              <a class="label label-info" href="#AO_tel_8_allow_local">Местная</a>-->
<!--              <a class="label label-info" href="#AO_tel_8_allow_sip">SIP</a>-->
            </li>
   		 	<li><a href="#AO_tel_detailing_service">Детализация услуги</a></li>   		 	
   		 	<li><a href="#AO_tel_Change_personal_data">Изменение личных данных абонента</a></li>
<!--   		 	<li><a href="#AO_tel_8_coding">Кодирование «8»</a>-->
<!--                <a class="label label-info" href="#AO_tel_8_coding_local">Местная</a>-->
<!--                <a class="label label-info" href="#AO_tel_8_coding_sip">SIP</a>              -->
<!--            </li>-->
   		 	<li><a href="#AO_tel_exec_auth">Оформление доверенности</a></li>
   		 	<li><a href="#AO_tel_redirect">Переадресация звонка</a>
<!--                <a class="label label-info" href="#AO_tel_redirect_local">Местная</a>-->
<!--                <a class="label label-info" href="#AO_tel_redirect_sip">SIP</a>               -->
            </li>
   		 	<li><a href="#AO_tel_Transferring_funds">Перенос денежных средств</a></li>
   		 	
            <li><a href="#AO_tel_Transfer_services">Перенос услуги на другой адрес</a></li>
   		 	<li><a href="#AO_tel_Resigning_service">Переоформление услуги на другое ФЛ</a></li>
   		 	<li><a href="#AO_tel_recalculation">Перерасчет</a></li>   		 	
   		 	
   		 	<li><a href="#AO_tel_terminate_contract">Расторжение договора</a></li>
   		 	
   		 	<li><a href="#AO_tel_changing_tp">Смена тарифного плана</a></li>   		 	
   		 	<li><a href="#AO_tel_changing_tech">Смена технологии подключения</a></li>		 	
   		 	<li><a href="#AO_tel_tech_expertise">Техэкспертиза</a></li>  	
   		 
   		 </ul>  	  		 
   		 <? } ?>
    	</li>
	</ul>
	</div>
	</nav>


 <?	 	
}
elseif ($page=='tarask')
{
    ?>
        <p><br><br></p>
        <li><a href="#taraskul_aup">Административно-управленческий персонал</a></li>
        <li><a href="#taraskul_zam">Заместители директора</a></li>
        <li><a href="#taraskul_mash">Документы, Машбюро</a></li>
        <li><a href="#taraskul_buhi">Бухгалтерская слжуба</a></li>
        <li><a href="#taraskul_peo">Планово-экономический отдел</a></li>
        <li><a href="#taraskul_opr">Отдел планирования и размещения</a></li>
        <li><a href="#taraskul_urist">Юридическая служба</a></li>
        <li><a href="#taraskul_kadry">Отдел кадров</a></li>
        <li><a href="#taraskul_torgi">Отдел по организации торгов и договорной работы</a></li>
        <li><a href="#taraskul_obchepit">Отдел по работе торговых точек и общепита</a></li>
        <li><a href="#taraskul_mathoz">Отдел материально-технического снабжения,складского хозяйства и договорной работы</a></li>
        <li><a href="#taraskul_it">Отдел информационных технологий и телекоммуникаций</a></li>
        <li><a href="#taraskul_hydra">Гидрологическая служба</a></li>
        <li><a href="#taraskul_security">Служба охраны</a></li>
        <li><a href="#taraskul_garage">Гараж</a></li>
        <li><a href="#taraskul_engeener">Инженерная служба</a></li>
        <li><a href="#taraskul_enenergy">Энергетическая служба</li>
        <li><a href="#taraskul_hoz">Хозяйственная служба</a></li>
        <li><a href="#taraskul_med">Медицинская служба</a></li>
        <li><a href="#taraskul_stol">Столовая административного корпуса</a></li>
        <li><a href="#taraskul_uzi">Отделение функциональной и звуковой диагностики</a></li>
        <li><a href="#taraskul_beds">Спальный корпус</a></li>
        <li><a href="#taraskul_med2">Медицинская служба</a></li>
        <li><a href="#taraskul_ovlpimoraiivs">Отделение восстановительного лечения после инфаркта миокарда, операции радиочастотной аблации, имплантации искусственного  водителя сердца</a></li>
        <li><a href="#taraskul_odns">Отделение по долечиванию нестабильной стенокардии
</a></li>
        <li><a href="#taraskul_profpatalogiya">Отделение профпатологии</a></li>
        <li><a href="#taraskul_odbalsd">Отделение по долечиванию больных после лечения сахарного диабета</a></li>
        <li><a href="#taraskul_vodogryaz">Водогрязелечебница</a></li>
        <li><a href="#taraskul_loo">Лечебно-оздоровительное отделение</a></li>
        <li><a href="#taraskul_sodbptsm">Специализированное отделение по долечиванию больных после травмы спинного мозга</a></li>
        <li><a href="#taraskul_vgl">Вгл спинального корпуса</a></li>
        <li><a href="#taraskul_ldc">Лечебно-досуговый центр</a></li>
        <li><a href="#taraskul_stol2">Столовая</a></li>
        <li><a href="#taraskul_vodozkom">Водно-оздоровительный комплекс</a></li>
        <li><a href="#taraskul_sport">Спортивно-досуговые службы</a>
            <ul>
                <li><a href="#taraskul_culture_mass">Отделение культурно-массового обслуживания</a></li>
                <li><a href="#taraskul_culture">Культурно-досуговое отделение</a></li>
                <li><a href="#taraskul_sport2">Спортивное отделение</a></li>
            </ul>
        </li>
        <li><a href="#taraskul_foodservices">Службы питания</a></li>
        <li><a href="#taraskul_zodiac">Ресторан «зодиак»</a></li>
        <li><a href="#taraskul_hoztech">Хозяйственно-технические службы</a></li>
        <li><a href="#taraskul_other">Прочие</a></li>
        <li><a href="#taraskul_spalnie">Спальные корпуса</a></li>
    <?
}
 else 
 {
?>
        <ul class="nav-justified">
            <li><a class="btn btn-primary" href="http://192.168.78.33/?page=tarask" role="button">Коммутатор Тараскуль</a></li>
            <li>&nbsp;</li>
    <li><a class="btn btn-primary" href="http://192.168.78.33/?page=tsg-service" role="button">ТСЖ-сервис</a></li>
        </ul>
 
<br>
        
	<ul class="nav navbar nav-pills  navbar-default nav-stacked">
	    <li> 
            <a href="http://192.168.78.33"><strong>Шаг 1</strong>. «Приветствие»</a>
        </li>
   	    <li>
            <a href="?page=step2"><strong>Шаг 2</strong>. «Абонент ли это?»</a>
        </li>
        <li>
            <a href="?page=step3"><strong>Шаг 3</strong>. «Номер лицевого счета»</a>
        </li>
        <li>
            <a href="?page=step4"><strong>Шаг 4</strong>. «ЮЛ или ФЛ?»</a>
        </li>
        <li>
            <a href="?page=step5u"><strong>Шаг 5 <font color="red">ЮЛ</font></strong>. Определение услуги, решение вопроса</a>
        </li>
        <li>
            <a href="?page=step5f"><strong>Шаг 5 <font color="red">ФЛ</font></strong>. Определение услуги, решение вопроса</a>
        </li>
        <li>
            <a href="?page=step6"><strong>Шаг 6</strong>. «Завершение разговора»</a>
        </li>
	</ul>
	<ul>
 <a href="content/instruction.docx">Скачать инструкцию одним файлом</a>
        <p><br></p>
	<div class="row"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-warning pull-left">Подсказки</a></div>
	
	<!-- Button to trigger modal -->
	
	
	     
<!-- div class="row">
    <a href="http://192.168.78.33/?page=tarask" role="button" class="btn btn-primary">Коммутатор Тараскуль</a>
&nbsp;
    <a href="http://192.168.78.33/?page=tsg-service" role="button" class="btn btn-primary">ТСЖ-сервис</a>	
</div -->   
    <p></p>
<!-- p>Контакты</p>
<div class="row"><a href="#ModAO" role="button" data-toggle="modal" class="btn btn-info pull-left">Абонентский отдел</a></div>
<p></p>
<div class="row"><a href="#ModOP" role="button" data-toggle="modal" class="btn btn-info  pull-left">Отдел продаж</a>	</div>
<p></p>
<div class="row"><a href="#ModSecr" role="button" data-toggle="modal" class="btn btn-info  pull-left">Секретариат</a>	</div -->



	
<?
 }
?>
         </div>
