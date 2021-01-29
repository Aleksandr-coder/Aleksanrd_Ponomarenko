<?php 

//Получим данные с формы
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];


//Обработаем полученные данные


$name = htmlspecialchars($name);		//преоброзование символов в сущности
$email = htmlspecialchars($email);
$date = htmlspecialchars($date);
$time = htmlspecialchars($time);
$people = htmlspecialchars($people);

$name = urldecode($name);			//декодирование в url
$email = urldecode($email);
$date = urldecode($date);
$time = urldecode($time);
$people = urldecode($people);

$name = trim($name);				//удаление пробельній символов с обоих сторон
$email = trim($email);
$date = trim($date);
$time = trim($time);
$people = trim($people);

//отправка данных до адресата

if (mail("ponomarenko1988aa@gmail.com",
			"Новое письмо с сайта",
			"Имя:" .$name."\n".
			"Почта:" .$email."\n".
			"Дата:" .$date."\n".
			"Время:" .$time."\n".
			"Люди:" .$people."\n",
			"From: ponomarenko1988aa@gmail.com \r\n")
			) {

			echo ('Письмо успешно отправлено!');
			}
			else{
				echo ('Есть ошибки! Проверте данные...');
			}

?>