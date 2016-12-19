<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);


/*$address = "aleksandr.ezhkin@mail.ru";
$sub = "Сообщение с сайта Парогенераторы";


$mes = "Сообщение с сайта Парогенераторы.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Текст сообщения:
$message";

        $name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$tel = trim($_POST["tel"]);
		$message = trim($_POST["message"]);

		/* Создаем соединение */
		$link = mysqli_connect('localhost', 'root', '', 'site-base') or die('Cant connect: ');
	 
		/* Составляем запрос для вставки информации в таблицу
		name...date - название конкретных полей в базе;
		в $_POST["test_name"]... $_POST["test_mess"] - в этих переменных содержатся данные, полученные из формы */
		$query = "INSERT INTO `site_base` VALUES ('$name','$email','$tel','$message')";
	    
			/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
		mysqli_query($link, $query) or die('Cant query: ');
		
		include("/new 1.html");
						/* Закрываем соединение */
		/*mysqli_close();
		


/*if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
/*{
/* Отправляем сообщение, используя mail() функцию */
/*$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 
/*if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; file:index.html');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт MOTO!';}
else {
	header('Refresh: 5; file:index1.html');
	echo 'Письмо не отправлено, через 5 секунд вы сможете повторить попытку еще раз';}
}
exit;*/
?>