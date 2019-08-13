<nav class="navbar navbar-default navbar-static-top">
  <div class="navbar-inner">
	 <ul class="nav navbar-nav">		
		<?
		if ($page=='gen')
			{
	   ?> 
    	<li><a  href="http://192.168.78.33"><font color="red"><strong>Инструкция оператора</strong></font></a></li>
      <li><a href="http://192.168.78.33/?page=ts">Телефонный справочник</a></li>
      <li class="active"><a href="http://192.168.78.33/?page=gen">Общие вопросы</a></li>
      <li><a href="http://192.168.78.33/?page=tarifs">Тарифы интернет ФЛ</a></li>
      <li><a href="http://192.168.78.33/?page=tehdif">Техсложности интернет ФЛ</a></li>
		<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Абонентское обслуживание<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Абонентское обслуживание WiFi ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Интернет ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание ТВ ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Телефония ФЛ</a></li>          
        </ul>
      </li>    
      <? 
      	}
      	elseif ($page=='ao')
			{
	   ?> 
    	<li><a  href="http://192.168.78.33"><font color="red"><strong>Инструкция оператора</strong></font></a></li>
      <li><a href="http://192.168.78.33/?page=ts">Телефонный справочник</a></li>
      <li><a href="http://192.168.78.33/?page=gen">Общие вопросы</a></li>
      <li><a href="http://192.168.78.33/?page=tarifs">Тарифы интернет ФЛ</a></li>
      <li><a href="http://192.168.78.33/?page=tehdif">Техсложности интернет ФЛ</a></li>
		<li class="dropdown active">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Абонентское обслуживание<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://192.168.78.33/?page=ao">Абонентское обслуживание WiFi ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Интернет ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание ТВ ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Телефония ФЛ</a></li>          
        </ul>
      </li>    
      <? 
      	}
      	elseif($page=='tarifs') 
      	{
      ?>
      <li ><a  href="http://192.168.78.33"><font color="red"><strong>Инструкция оператора</strong></font></a></li>
      <li><a href="http://192.168.78.33/?page=ts">Телефонный справочник</a></li>
      <li><a href="http://192.168.78.33/?page=gen">Общие вопросы</a></li>
      <li class="active"><a href="http://192.168.78.33/?page=tarifs">Тарифы интернет ФЛ</a></li>
      <li><a href="http://192.168.78.33/?page=tehdif">Техсложности интернет ФЛ</a></li>
      	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Абонентское обслуживание<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://192.168.78.33/?page=ao">Абонентское обслуживание WiFi ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Интернет ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание ТВ ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Телефония ФЛ</a></li>          
        </ul>
      </li>  
      <?
      	}
      	elseif($page=='tehdif') 
      	{
      ?>
      <li ><a  href="http://192.168.78.33"><font color="red"><strong>Инструкция оператора</strong></font></a></li>
      <li><a href="http://192.168.78.33/?page=ts">Телефонный справочник</a></li>
      <li><a href="http://192.168.78.33/?page=gen">Общие вопросы</a></li>
      <li><a href="http://192.168.78.33/?page=tarifs">Тарифы интернет ФЛ</a></li>
      <li  class="active"><a href="http://192.168.78.33/?page=tehdif">Техсложности интернет ФЛ</a></li>
      	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Абонентское обслуживание<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://192.168.78.33/?page=ao">Абонентское обслуживание WiFi ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Интернет ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание ТВ ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Телефония ФЛ</a></li>          
        </ul>
      </li>  
      <?
      	}
      	elseif($page=='ts') 
      	{
      ?>
      <li ><a  href="http://192.168.78.33"><font color="red"><strong>Инструкция оператора</strong></font></a></li>
      <li class="active"><a href="http://192.168.78.33/?page=ts">Телефонный справочник</a></li>
      <li><a href="http://192.168.78.33/?page=gen">Общие вопросы</a></li>
      <li><a href="http://192.168.78.33/?page=tarifs">Тарифы интернет ФЛ</a></li>
      <li ><a href="http://192.168.78.33/?page=tehdif">Техсложности интернет ФЛ</a></li>
      	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Абонентское обслуживание<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://192.168.78.33/?page=ao">Абонентское обслуживание WiFi ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Интернет ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание ТВ ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Телефония ФЛ</a></li>          
        </ul>
      </li>  
      <?
     	 }
      	else 
       {
      ?>
      <li  class="active"><a  href="http://192.168.78.33"><font color="red"><strong>Инструкция оператора</strong></font></a></li>
      <li><a href="http://192.168.78.33/?page=ts">Телефонный справочник</a></li>
      <li><a href="http://192.168.78.33/?page=gen">Общие вопросы</a></li>
      <li><a href="http://192.168.78.33/?page=tarifs">Тарифы интернет ФЛ</a></li>
      <li><a href="http://192.168.78.33/?page=tehdif">Техсложности интернет ФЛ</a></li>
      	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Абонентское обслуживание<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://192.168.78.33/?page=ao">Абонентское обслуживание WiFi ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Интернет ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание ТВ ФЛ</a></li>
          <li><a href="#">Абонентское обслуживание Телефония ФЛ</a></li>          
        </ul>
      </li>  
      <?
      	}     	
      ?>
    </ul>
    	
  </div>
</nav>
