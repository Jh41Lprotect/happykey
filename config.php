<?php
$config = array (
    'site' => 'newcard.ru',
	'socket.io' => 'http://localhost:3433',
	'apikey' => 'F11B264B88B90C237C13853D9D8A7404',
	'client_id' => "", // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
    'client_secret' => "", // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
	'db' => array (
	'host' => '127.0.0.1', 
	'user' => 'root',
	'pass' => '',
	'base' => 'happy'
	),
	'freekasa' => array (
	'id' => '', // Логин фрикассы
	'secret1' => '',    // secret1
	'secret2' => ''         // secret2
	),
	'mysql_driver' => 'PDO',		 							// Драйвер для подключения к бд//			 					
/////////////////////////////////////////////////////////////////////////////////////////////////
	'table' => 'users', 			 							// Таблица с валютой/////////////
	'column_money' => 'money',   	 							// Столбик рублей////////////////
	'column_user' => 'id',      							    // Столбик имён//////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
	'path' => 'lc', 		 									// Путь до файла payment.php///// 
	'user_param' => $_SESSION['steamid'], 					// Уникальный параметр///////////
/////////////////////////////////////////////////////////////////////////////////////////////////
	'description' => 'Пополнение счёта игрока - ',  			// Описание платежа//////////////
	'max_pay' => 100000, 											// Максимальная сумма пополнения/
/////////////////////////////////////////////////////////////////////////////////////////////////	
	'message' => array (										/////////////////////////////////
		'success' => 'Успешно.', 								// сообщение  успешной оплаты////
		'fail' => 'Ошибка!', 									// сообщение неудачной оплаты////
	),															/////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
	'pay_system' => array (										/////////////////////////////////
		'interkassa' => array( 									// Настройки InterKassa//////////
			'enable' => false, 									// Принимать платежи InterKassa//
			'shop_id' => '579d91f53d1eaf621e8b4569',			 						// ID магазина InterKassa////////
			'cur' => 'RUB', 									// Тип валюты (RUB UAH USD EUR)//
			'key' => '', 										// Секретный ключ////////////////
			'test_key' => '', 									// Тестовый секретный ключ///////
			'testing' => true 									// Включить режим тестирования?//
		),														/////////////////////////////////		
/////////////////////////////////////////////////////////////////////////////////////////////////
		'unitpay' => array( 									// Настройки UnitPay/////////////
			'enable' => true, 									// Принимать платежи UnitPay/////
			'project_id' => '', 								// ID(Номер) проекта || demo - в случае тестого платежа
			'key' => '', 										// Секретный ключ
		),
		
		/*'robokassa' => array( // Настройки RoboKassa
			'enable' => false, // Принимать платежи данной системы?
			'password1' => '', // Пароль #1								В следующей версии.
			'password2' => '', // Пароль #2
			'login' => '', // Логин (Имя проекта) || demo - в случае тестого платежа
		),*/
	)
	
	
	
);

?>
