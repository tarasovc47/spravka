
    <? 
        switch ($content_type)
        {
         case 'common_issue':
                    ?>
                    <div class="section table-of-contents right fixed">                 
                        <a href="#tabl">Вход</a><br>
                        <a href="#requisite">Реквизиты</a><br>
                        <a href="#ts">Контакты</a><br>
                       <a href="#lsnumber">Лицевой счет</a><br>
                       <a href="#balance">Баланс</a><br>
                       <a href="#ways_of_pay">Способы оплаты</a><br>
                       <a href="#trusteetransfer">Доверительный доступ</a><br>       
                       <a href="#AreaPresence">Зона присутствия РК</a><br>    
                       <a href="#lcab2">Личный кабинет</a><br>
                       <a href="#lcabauth">Авторизация в ЛК</a><br>
                       <a href="#lcabmain">Главная страница ЛК</a><br>
                       <a href="#lcabbillandpay">Счета и платежи</a><br>
                       <a href="#lcabpayment">Платеж</a><br>
                       <a href="#lcabtelephone">Вкладка «Телефония»</a><br>
                       <a href="#lcabdetailtel">Детализация исходящих соединений</a><br>
                       <a href="#lcabinternet">Вкладка «Интернет с динамическим IP»</a><br>
                       <a href="#lcabdetailinternet">Детализация Интернет-трафика</a><br>
                       <a href="#lcabchangetp">Смена тарифного плана</a><br>
                       <a href="#lcabchangepass">Изменение пароля для доступа в сеть Интернет</a><br>
                       <a href="#lcabtv">Вкладка «Кабельное TV»</a><br>
                    </div> 
                    <?
                break;
        
        case 'tarask':
            ?>
<div  class="section  confixed" style="font-variant:small-caps; overflow-y:auto; height:80vh;">
    <div class="section table-of-contents blue lighten-5">
       <a href="#taraskul_aup">Администрация</a>
       <a href="#taraskul_zam">Заместители директора</a>
       <a href="#taraskul_mash">Документы, Машбюро</a>
       <a href="#taraskul_buhi">Бухгалтерская слжуба</a>
       <a href="#taraskul_peo">Планово-экономический отдел</a>
       <a href="#taraskul_opr">Отдел планирования и размещения</a>
       <a href="#taraskul_urist">Юридическая служба</a>
       <a href="#taraskul_kadry">Отдел кадров</a>
       <a href="#taraskul_torgi">Отдел по организации торгов и договорной работы</a>
       <a href="#taraskul_obchepit">Отдел по работе торговых точек и общепита</a>
       <a href="#taraskul_mathoz">Отдел материально-технического снабжения,складского хозяйства и договорной работы</a>
       <a href="#taraskul_it">Отдел информационных технологий и телекоммуникаций</a>
       <a href="#taraskul_hydra">Гидрологическая служба</a>
       <a href="#taraskul_security">Служба охраны</a>
       <a href="#taraskul_garage">Гараж</a>
       <a href="#taraskul_engeener">Инженерная служба</a>
       <a href="#taraskul_enenergy">Энергетическая служба</a>
       <a href="#taraskul_hoz">Хозяйственная служба</a>
       <a href="#taraskul_med">Медицинская служба</a>
       <a href="#taraskul_stol">Столовая административного корпуса</a>
       <a href="#taraskul_uzi">Отделение функциональной и звуковой диагностики</a>
       <a href="#taraskul_beds">Спальный корпус</a>
       <a href="#taraskul_med2">Медицинская служба</a>
       <a href="#taraskul_ovlpimoraiivs">Отделение восстановительного лечения после инфаркта миокарда, операции радиочастотной аблации, имплантации искусственного  водителя сердца</a>
       <a href="#taraskul_odns">Отделение по долечиванию нестабильной стенокардии</a>
       <a href="#taraskul_profpatalogiya">Отделение профпатологии</a>
       <a href="#taraskul_odbalsd">Отделение по долечиванию больных после лечения сахарного диабета</a>
       <a href="#taraskul_vodogryaz">Водогрязелечебница</a>
       <a href="#taraskul_loo">Лечебно-оздоровительное отделение</a>
       <a href="#taraskul_sodbptsm">Специализированное отделение по долечиванию больных после травмы спинного мозга</a>
       <a href="#taraskul_vgl">Вгл спинального корпуса</a>
       <a href="#taraskul_ldc">Лечебно-досуговый центр</a>
       <a href="#taraskul_stol2">Столовая</a>
       <a href="#taraskul_vodozkom">Водно-оздоровительный комплекс</a>
       <a href="#taraskul_sport">Спортивно-досуговые службы</a>        
            <ul>
               <a href="#taraskul_culture_mass">Отделение культурно-массового обслуживания</a>
               <a href="#taraskul_culture">Культурно-досуговое отделение</a>
               <a href="#taraskul_sport2">Спортивное отделение</a>
            </ul>
        
       <a href="#taraskul_foodservices">Службы питания</a>
       <a href="#taraskul_zodiac">Ресторан «зодиак»</a>
       <a href="#taraskul_hoztech">Хозяйственно-технические службы</a>
       <a href="#taraskul_other">Прочие</a>
       <a href="#taraskul_spalnie">Спальные корпуса</a> 
    </div>
</div> 
            <?      
            break;
            
        case 'editor':
            ?>
            <form method="POST">
                    <p>
                    <input onChange="this.form.submit()" name="edit" type="radio" id="test1" />
        
                    <label for="test1">Редактировать группу</label>
                    </p>
                    <p>
                    <input onChange="this.form.submit()" name="add" type="radio" id="test2" />
                    <label for="test2">Добавить группу</label>
                    </p>
                    <p>
                    <input onChange="this.form.submit()" name="del" type="radio" id="test3" <? if ($_SESSION['privilege']!='15') { ?> disabled="disabled" <? }; ?> />
                    <label for="test3">Удалить группу</label>
                    </p>
            </form>
            <?
            break;
        
        case 'app':
            switch ($page) 
            {
           
            case 'billing':
                ?>
            <ul class="section table-of-contents right fixed">                 
                    <li><a href="#Bill_enter">Вход</a></li>
                    <li><a href="#Bill_balance">Баланс</a></li>
                    <li><a href="#Bill_requisite">Реквизиты клиента</a></li>
                    <li><a href="#Bill_services">Сервисы</a></li>
                    <li><a href="#Bill_payments">Платежи</a></li>
                    <li><a href="#Bill_bills">Счета</a></li>
                    <li><a href="#Bill_reconciliation">Акты сверки</a></li>       
                    <li><a href="#Bill_contract">Договоры</a></li>       
                    <li><a href="#Bill_history">История</a></li>       
                
                </ul> 
    
                <?
                break;
            case 'support':
                ?>
                <ul class="section table-of-contents right fixed">
                    <li><a href="#support_tab">Вкладка "Техподдержка"</a></li>
                    <li><a href="#support_truble_ticket">Создание трабл-тикета</a></li>
                    <li><a href="#support_close_ticket">Закрытие трабл-тикета</a></li>
                    <li><a href="#support_rep_ref">Повторное обращение</a></li>
                </ul> 
                <?
                break;
            case 'twinkle':
                ?>
                <ul class="section table-of-contents right fixed">
                    <li><a href="#Login_creation">Учетная запись</a></li>
                    <li><a href="#Call_transfer">Перевод звонков</a></li>
                </ul> 
                <?
                break;
            case 'zimbra':
                ?>
                <ul class="section table-of-contents right fixed">
                    <li><a href="#zimbra_reg">Регистрация</a></li>
                    <li><a href="#zimbra_sign">Подпись</a></li>
                    <li><a href="#zimbra_new">Новое письмо</a></li>
                    <li><a href="#zimbra_sort">Сортировка писем</a></li>
                    <li><a href="#zimbra_filtering">Фильтры</a></li>
                    <li><a href="#zimbra_address">Адресная книга</a></li>               
                </ul> 
                <?
                break;
           
            };
            break;
         
   
         case 'steps':
             ?>
            <ul class="section table-of-contents right fixed">
                <li><a href="#step_1">Шаг 1. «Приветствие»</a></li>
                <li><a href="#step_2">Шаг 2. «Абонент ли это?»</a></li>
                <li><a href="#step_3">Шаг 3. «Номер лицевого счета»</a></li>
                <li><a href="#step_4">Шаг 4. «ЮЛ или ФЛ?»</a></li>
                <li><a href="#step_5f">Шаг 5 ЮЛ.</a></li>
                <li><a href="#step_5u">Шаг 5 ФЛ.</a></li>
                <li><a href="#step_6">Шаг 6. «Завершение разговора»</a></li>       
                
            </ul> 
            
            <?
            break;
            
         
    
        };
    ?>
        
</ul>


