<?php



$to = 'ShuSashi@yandex.ru, balconi.store@inbox.ru';
$from = "From: Заявка на замер с сайта Балконы Столицы <admin@balconi-stolicy.ru>\n\r";
$name = $_POST['username'];
$email = $_POST['useremail'];
$phone = $_POST['userphone'];
$umess = $_POST['usermess'];
$page = $_POST['mestosita'];
$idpage = $_POST['idmesta'];


$message = '
<html>
<body>
<center>	
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
 <tr>
  <td><b>Откуда</b></td>
  <td>'.$page.'</td>
 </tr>
 <tr>
  <td><b>От кого</b></td>
  <td>'.$name.'</td>
 </tr>
 <tr>
  <td><b>Адрес почты</b></td>
  <td><a href="mailto:'.$email.'">'.$email.'</a></td>
 </tr>
 <tr>
  <td><b>Телефон</b></td>
  <td><a href="tel:'.$phone.'">'.$phone.'</a></td>
 </tr>
 <tr>
  <td><b>Сообщение</b></td>
  <td>'.$umess.'</a></td>
 </tr>
</table>
</center>
</body>
</html>';

$headers = "Content-type: text/html; charset=utf-8\r\n";
$headers .= $from;

/*
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	mail($to, $name.' подписался на подарок', $message, $headers);
} else {
	echo 1;
}*/
function validate_russian_phone_number($tel) {
	$tel = trim((string)$tel);
	if (!$tel) return false;
	$tel = preg_replace('#[^0-9+]+#uis', '', $tel);
	if (!preg_match('#^(?:\\+?7|8|)(.*?)$#uis', $tel, $m)) return false;
	$tel = '+7' . preg_replace('#[^0-9]+#uis', '', $m[1]);
	if (!preg_match('#^\\+7[0-9]{10}$#uis', $tel, $m)) return false;
	return $tel;
}

if (false == validate_russian_phone_number($phone)) {
	echo 2;
} else {

	if ($idpage == 1 || $idpage == 2) {
	// Отправка с Главной, балконов, форма-героя
		mail($to, $name.' - Заказ на балконы под ключ с главной', $message, $headers);
	} elseif ($idpage == 3) {
	// Отправка с Окон, форма-героя
	mail($to, $name.' - Заказ со страницы пластиковых окон', $message, $headers);
	} elseif ($idpage == 4) {
	// Отправка с Дверей, форма-героя
	mail($to, $name.' - Заказ со страницы дверей', $message, $headers);
	} elseif ($idpage == 5) {
	// Отправка с Ремонта, форма-героя
	mail($to, $name.' - Заказ со страницы ремонта', $message, $headers);
	} elseif ($idpage == 6) {
	// Отправка - форма попапа
	mail($to, $name.' - Заказ замера, консультации, обратного звонка', $message, $headers);
	} elseif ($idpage == 8) {
	$domain = substr(strrchr($email, "@"), 1);
	$res = getmxrr($domain, $mx_records, $mx_weight);
	if (false == $res || 0 == count($mx_records) || (1 == count($mx_records) && ($mx_records[0] == null || $mx_records[0] == "0.0.0.0" ) ) ){
		echo 1;
	} else {
		mail($to, $name.' подписался на замер', $message, $headers);
		#wp_mail($to, $name.' подписался на замер', $message, $headers);
	}
	}
}



?>