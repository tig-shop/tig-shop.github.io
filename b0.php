
<meta charset="utf-8"> 
<?php
$urok="Урок 22";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['mail']))		{$mail		= $_POST['mail'];		if ($mail == '')	{unset($mail);}}
if (isset($_POST['message']))			{$message			= $_POST['message'];		if ($message == '')	{unset($message);}}
if (isset($_POST['send']))			{$send			= $_POST['send'];		if ($send == '')		{unset($send);}}
//стирание треугольных скобок из полей формы
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($mail) ) {
$mail=stripslashes($mail);
$mail=htmlspecialchars($mail);
}
if (isset($message) ) {
$message=stripslashes($message);
$message=htmlspecialchars($message);
}
// адрес почты куда придет письмо
$address="vwpolik@mail.ru";
// текст письма 
$note_text="Тема : $urok \r\nИмя : $name \r\n Email : $mail \r\n Дополнительная информация : $message";

if (isset($name)  &&  isset ($send) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$name</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b> $mail</b>.</p>";
}

?>