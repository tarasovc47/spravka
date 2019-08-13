<?php
?>
<A NAME="TD_WIFI_Connect"></A>
<H3>Подключение к сети </H3>

<table align="center" class="tablesize">
	<TR class="warning">
		<td>
			<div class="well wellwhite">
                <a name="TD_WiFi_SU"></a>
                <h4>WiFi.su</h4>
				<ol>
					Для подключения услуги доступа к беспроводной сети WiFi.su нужно выполнить несколько шагов:
                            
<li> Заказать <a href="?page=aowifi_fl#aowifi_Technical_expertise">техэкспертизу</a>.
<li> Приобрести <a href="http://192.168.78.33/?page=aowifi_fl#aowifi_terminals">абонентский терминал</a> (устройство для усиления сигнала WiFi), настроить его.
<li> Зарегистрировать <a href="#TD_WiFi_SMS_registration">новый логин</a>.
<li> Пополнить баланс логина в соответствии с <a href="http://192.168.78.33/?page=tariffs_wifi#WiFi_SU">тарифным планом</a>
<li> Настроить <a href="#TD_WiFi_Configure_connection">беспроводное WiFi-подключение</a> на компьютере/КПК .</ol>

<hr>
                <a name="TD_WiFi_MED"></a>
    <h4>WiFi.med</h4>
				<ol>
					Для подключения услуги доступа к беспроводной сети WiFi.med нужно выполнить несколько шагов:
<li> Зарегистрировать <a href="#TD_WiFi_SMS_registration">новый логин</a>.
<li> Пополнить баланс логина в соответствии с <a href="http://192.168.78.33/?page=tariffs_wifi#WiFi_med">тарифным планом</a>.
<li> Настроить <a href="#TD_WiFi_Configure_connection">беспроводное WiFi-подключение</a> на компьютере/КПК .
                </ol>
                <div class="label label-default pull-right"> Создание нового логина выполняется абонентом путем <strong>«SMS-регистрации»</strong>.</div>
<a name="TD_WiFi_SMS_registration"></a>
			<hr>
                 <h4>SMS-регистрация</h4>
   <? include "content/TehDiff/wifi_reg.php"?>
            </div>		
		</td>
	</tr>
</table>

<hr> 
<A NAME="TD_WiFi_user_terminal"></A>
<a href="#top" class="btn btn-default">Вверх</a>
<H3>Настройка абонентского терминала</H3>
<table align="center" class="tablesize">
	<TR class="warning">
		<td>
			<div class="well wellwhite">				
                <P>
					Рекомендуемое <a href="http://192.168.78.33/?page=aowifi_fl#aowifi_terminals">терминальное оборудование</a>: «Nanostation», производство Ubiquiti.</P>
				<P>
Абонент может использовать любой другой абонентский терминал, предварительно установив следующие параметры (настройки):</p>
				<table align="center" class="tablesize table table-bordered table-striped table-hover" >
                    <tr>
                        <td>Режим работы</td><td><b>«Station»</b> (устройство подключается к точке доступа (Клиент))</td>
                    </tr>
                    <tr>
                        <td>SSID (имя сети)</td><td><b>www.WiFi.su</b></td>
                    </tr>
                    <tr>
                        <td>Канал</td><td><b>с 1 по 11</b>(частоты 2412 - 2462 МГц)</td>
                    </tr>
                    <tr>
                        <td>Режим работы сети (Network Mode)</td><td><b>Router</b> (режим работы при котором Wan-интерфейсом является беспроводная сеть, то есть подключение к провайдеру)</td>
                    </tr>
                    <tr>
                        <td>Обязательные условия</td><td>должен быть включен <b>DHCP Server</b> и <b>NAT</b> (в некоторых устройствах других производителей включается автоматически)</td>
                    </tr>
                </table>
                
			</div>		
		</td>
	</tr>
</table>
<hr> 
<A NAME="TD_WiFi_Configure_connection"></A>
<a href="#top" class="btn btn-default">Вверх</a>
<h3>Настройка подключения к WiFi сети</h3>
<table align="center" class="tablesize">
	<TR class="warning">
		<td>
			<div class="well wellwhite">
                <a name="TD_WiFi_WinXP"></a>
                <h4>Windows XP</h4>
                <p>Для установки WiFi подключения требуется открыть двойным кликом мыши папку «Сетевые подключения» в меню <strong>«Пуск»→ «Настройка»→ «Сетевые подключения»</strong>:</p>
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/1.jpg" title="Рисунок 1. «Сетевые подключения» Windows XP">
                                    <img class="thumbnail" src="img/TehDif_wifi/1.jpg" alt="" width="640"/>
                                </a>
                            </td>
                        </tr>
                </table>                
                
                <p>В открывшейся папке <b>«Сетевые подключения»</b> нужно кликнуть правой кнопкой мыши на значке <b>«Беспроводное сетевое соединение»</b> и выбрать <b>«Просмотр доступных беспроводных сетей»</b>:</p>               
                
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/2.jpg" title="Рисунок 2. «Просмотр доступных беспроводных сетей» Windows XP">
                                    <img class="thumbnail" src="img/TehDif_wifi/2.jpg" alt="" width="640"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>В открывшемся списке выбрать беспроводную сеть <b>«www.WiFi.su»/ «www.WiFi.med»</b> и нажать <b>«Подключить»</b>:</p>
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/3.jpg" title="Рисунок 3. «Просмотр доступных беспроводных сетей» Windows XP">
                                    <img class="thumbnail" src="img/TehDif_wifi/3.jpg" alt="" width="480"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>После этого появится процесс подключения:</p>
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/4.jpg" title="Рисунок 4. Процесс подключения Windows XP">
                                    <img class="thumbnail" src="img/TehDif_wifi/4.jpg" alt="" width="320"/>
                                </a>
                            </td>
                        </tr>
                </table>
               
                
                <p>Для проверки подключения в папке <b>«Сетевые подключения»</b> нужно кликнуть правой кнопкой мыши на значке <b>«Беспроводное сетевое соединение»</b> и выбрать <b>«Состояние»</b>:
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/5.jpg" title="Рисунок 5. «Сетевые подключения» Windows XP">
                                    <img class="thumbnail" src="img/TehDif_wifi/5.jpg" alt="" width="480"/>
                                </a>
                            </td>
                        </tr>
                </table>
               
                <p>Для корректной работы требуется достижение максимальной мощности сигнала путём перемещения абонентского устройства (КПК, ноутбук и пр.). Если необходимо, подвинуть его ближе к окну, либо при наличии внешней антенны найти её оптимальный угол поворота. Уверенный приём достигается при мощности сигнала более двух делений:</p>
                
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/6.jpg" title="Рисунок 6. «Состояние Беспроводное сетевое соединение» Windows XP">
                                    <img class="thumbnail" src="img/TehDif_wifi/6.jpg" alt="" width="320"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>Далее требуется открыть Web-браузер (к примеру, Internet Explorer) и попробовать открыть любой сайт. Запрос автоматически будет перенаправлен на страницу WEB-аутентификации. При запросе сертификата нажать кнопку <b>«Продолжить»</b>:</p>
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/7.jpg" title="Рисунок 7. Internet Explorer">
                                    <img class="thumbnail" src="img/TehDif_wifi/7.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>Указать логин и пароль абонента для доступа в сеть Интернет, полученные ранее <a href="#TD_WiFi_SMS_registration">при регистрации</a>: </p>
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/8.jpg" title="Рисунок 8. Internet Explorer">
                                    <img class="thumbnail" src="img/TehDif_wifi/8.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>При условии правильно введённых логина и пароля и достаточном уровне приёма сигнала Вы сможете указать адрес интересующего сайта и выйти в сеть Интернет.</p>
            <p class="alert alert-danger"><b>Примечание</b>: в режиме тестирования или при отсутствии денег на балансе абонент может указать в качестве логина «reg» и пароль «reg». В этом режиме Вам будет доступен только сайт компании ИНФО-Магистраль (http://www.wifi.su) для получения информации об услугах и функции пополнения баланса картой оплаты.</p>
            <p class="alert alert-info">После окончания работы рекомендуем абоненту <a href="#TD_WIFI_Disconnect">отключиться от сети WiFi</a>.</p>
		      <hr>
            <a name="TD_WiFi_Win7"></a>
            <a href="#top" class="btn btn-default">Вверх</a>
              <h4>Windows Vista/Windows 7</h4>
                <p>В правом нижнем углу панели задач находим значок отображающий подключение к беспроводным сетям:</p>
                
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/9.jpg" title="Рисунок 9. панель уведомлений Windows 7">
                                    <img class="thumbnail" src="img/TehDif_wifi/9.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>Нажимаем на него левой кнопкой мыши и среди доступных беспроводных сетей находим www.WiFi.Su и нажимаем кнопку <b>«Подключение»</b>.</p>
                
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/10.jpg" title="Рисунок 10. Панель уведомлений Windows 7">
                                    <img class="thumbnail" src="img/TehDif_wifi/10.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>Далее требуется открыть Web-браузер (к примеру, Internet Explorer) и попробовать открыть любой сайт. Запрос автоматически будет перенаправлен на страницу WEB-аутентификации. При запросе сертификата нажать кнопку <b>«Продолжить»</b>:</p>
                
                <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/7.jpg" title="Рисунок 11. Internet Explorer">
                                    <img class="thumbnail" src="img/TehDif_wifi/7.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                </table>
                
                <p>Указать логин и пароль абонента для доступа в сеть Интернет, полученные ранее <a href="#TD_WiFi_SMS_registration">при регистрации</a>: </p>
                 <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/8.jpg" title="Рисунок 12. Internet Explorer">
                                    <img class="thumbnail" src="img/TehDif_wifi/8.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                </table>
            <hr>
            <p class="alert alert-info">После окончания работы рекомендуем абоненту <a href="#TD_WIFI_Disconnect">отключиться от сети WiFi</a>.</p>
            </div>		
		</td>
	</tr>
</table>
<p align="center">
    <hr>
<a name="TD_WIFI_Disconnect"></a>
<a href="#top" class="btn btn-default">Вверх</a>
<h3>Отключение от сети</h3>
<table align="center" class="tablesize">
	<TR class="warning">
		<td>
			<div class="well wellwhite">
				<P>
					
                    <h4>Windows XP</h4>
                    <p>Для этого в папке «Сетевые подключения» щёлкните правой кнопкой мыши на значке «Беспроводное сетевое соединение» и выберите «Отключить»:</p>
                     <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/13.jpg" title="Рисунок 13. «Сетевые подключения» Windows XP">
                                    <img class="thumbnail" src="img/TehDif_wifi/13.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                    </table>
                     
                    <hr>
                    <h4>Windows Vista/Windows 7</h4>
                    <p>Для отключения Wi-Fi-соединения находим значок отображающий подключение к беспроводным сетям в правом нижнем углу панели задач:</p>
                
                    <table align="center">
                        <tr>
                            <td>
                                <a class="fancybox-effects-a"  href="img/TehDif_wifi/14.jpg" title="Рисунок 14. «Сетевые подключения» Windows 7">
                                    <img class="thumbnail" src="img/TehDif_wifi/14.jpg" alt="" width="360"/>
                                </a>
                            </td>
                        </tr>
                    </table>
                                
                    <p>Нажимаем на него левой кнопкой мыши, кликаем на подключении WiFi.Su и среди доступных беспроводных сетей находим www.WiFi.Su, кликаем по ней один раз левой кнопкой мыши, нажимаем появившуюся кнопку <b>«Отключение»</b>.</p>
				</p>
			</div>		
		</td>
	</tr>
</table>				
<hr>
<a name="TD_WIFI_Password_Clarification"></a>
<a href="#top" class="btn btn-default">Вверх</a>
<h3>Уточнение пароля для доступа в WiFi сеть</h3>
<table align="center" class="tablesize">
	<TR class="warning">
		<td>
			<div class="well wellwhite">
				<P>Восстановление (уточнение) пароля возможно только с того номера телефона, с которого абонентом выполнялась регистрация в сети WiFi.su/ WiFi.med. </P>
                <ul>Для этого необходимо отправить sms-сообщение со словом, соответствующим используемому тарифному плану («mir»/«rubl»/«teoriya»/«practika») на номер: 8 919 955 0700, ответное sms-сообщение будет содержать:
                <li>номер лицевого счета, </li>
                <li>логин, </li>
                <li>пароль.</li>
                </ul>
                <p>Если у абонента нет возможности восстановить пароль (в виду отсутствия того номера телефона, с которого производилась первичная регистрация), то он должен по новой пройти процедуру <a href="#TD_WiFi_SMS_registration">регистрации</a> в сети WiFi.su/ WiFi.med.</p>
                <P class="alert alert-danger"><b>ВАЖНО!</b> Обязательно обращаем внимание абонента на то, что в этом случае измениться номер лицевого счета, и абонент должен будет производить оплату услуг на изменившийся номер л/сч.</p>
			</div>		
		</td>
	</tr>
</table>
<hr>
<a name="TD_WIFI_Difficulties"></a>
<a href="#top" class="btn btn-default">Вверх</a>
<h3>Технические сложности при работе в сетях WiFi.su/WiFi.med</h3>
<table align="center" class="tablesize">
	<TR class="warning">
		<td>
			<div class="well wellwhite">
				<P>При возникновении технических сложностей у абонента выполняем следующий порядок действий:</P>
                <h4>Шаг №1. Проверка баланса абонента</h4>
                <ul>Проверку баланса выполняем в биллинге (<font color="#0000ff">ссылка на инструкцию по биллингу</font>):
                    <li>Если баланс отрицательный, сообщаем абоненту о необходимости пополнения лицевого счета (<font color="#0000ff">ссылка на способы оплаты и тарифы</font>)</li>
                    <li>Если баланс положительный, <b>переводим звонок оператору 2-го уровня</b>.</li>
                </ul>
                <h4>Шаг №2. Перевод звонка оператору 2-го уровня</h4>
                    <p>Перевод звонка абонента осуществляем с коротким пересказом оператору 2-го уровня истории разговора с абонентом.
В случае, если перевод сигнала на оператора 2-го уровня невозможен (например, занято) оформляем трабл-тикет (<font color="#0000ff">ссылка на инструкцию по созданию трабл-тикета</font>).</p>
			</div>		
		</td>
	</tr>
</table>						

