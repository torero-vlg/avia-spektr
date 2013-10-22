<?php 
session_start(); 

if($_SESSION['secpic']!=strtolower($_POST['secpic']))
{
	$_SESSION['_name'] = $_POST['name'];
	$_SESSION['_telephone'] = $_POST['telephone'];
	$_SESSION['_email'] = $_POST['email'];
	$_SESSION['_region'] = $_POST['region'];
	$_SESSION['_district'] = ($_POST['RadioGroup1']=='vlg') ? $_POST['district2'] : $_POST['district1'];
	$_SESSION['_city'] = $_POST['city'];
	$_SESSION['_detail2'] = $_POST['detail2'];
	$_SESSION['_worktype'] = $_POST['worktype'];
	$_SESSION['_paytype'] = $_POST['paytype'];
	$_SESSION['_volume'] = $_POST['volume'];
	$_SESSION['_deadline'] = $_POST['deadline'];
	$_SESSION['_chemistryname1'] = $_POST['chemistryname1'];
	$_SESSION['_chemistryvolume1'] = $_POST['chemistryvolume1'];
	$_SESSION['_chemistryname2'] = $_POST['chemistryname2'];
	$_SESSION['_chemistryvolume2'] = $_POST['chemistryvolume2'];
	$_SESSION['_chemistryname3'] = $_POST['chemistryname3'];
	$_SESSION['_chemistryvolume3'] = $_POST['chemistryvolume3'];
	$_SESSION['_contractattr'] = $_POST['contractattr'];
	$_SESSION['_detail'] = $_POST['detail'];
	$_SESSION['_error'] = "Неверный код";
	header('Location: demand.php');
	exit();
}

if($_POST['session_id'] != session_id() ) 
{ 
    $_SESSION['_error'] = "Отправкой сообщений можно пользоваться  
              только на  сайте ".$_SERVER['HTTP_HOST'].".";
	header('Location: demand.php');
	exit();     
} 
else 
{ 
    // Обработка полей формы 
//    $name = htmlspecialchars(trim($_POST['name'])); 
	$name = trim($_POST['name']); 
    $telephone = htmlspecialchars(trim($_POST['telephone']));
	$email = htmlspecialchars(trim($_POST['email']));
	$region = htmlspecialchars(trim($_POST['region']));
	$district = htmlspecialchars(trim(($_POST['RadioGroup1']=='vlg') ? $_POST['district2'] : $_POST['district1']));
	$city = htmlspecialchars(trim($_POST['city']));
	$detail2 =	htmlspecialchars(trim($_POST['detail2']));
	$worktype = htmlspecialchars(trim($_POST['worktype']));
	$paytype = htmlspecialchars(trim($_POST['paytype']));
	$volume = htmlspecialchars(trim($_POST['volume']));
	$deadline =	htmlspecialchars(trim($_POST['deadline']));
	$chemistryname1 =	htmlspecialchars(trim($_POST['chemistryname1']));
	$chemistryvolume1 =	htmlspecialchars(trim($_POST['chemistryvolume1']));
	$chemistryname2 =	htmlspecialchars(trim($_POST['chemistryname2']));
	$chemistryvolume2 =	htmlspecialchars(trim($_POST['chemistryvolume2']));
	$chemistryname3 =	htmlspecialchars(trim($_POST['chemistryname3']));
	$chemistryvolume3 =	htmlspecialchars(trim($_POST['chemistryvolume3']));
	$deadline =	htmlspecialchars(trim($_POST['deadline']));
	$contractattr = htmlspecialchars(trim($_POST['contractattr']));
	$detail =	htmlspecialchars(trim($_POST['detail']));
     
    // здесь надо вставить email куда отправлять сообщение 
//    $to = "avia-spektr@yandex.ru"; 
    //$to = "stepanenkoigor1988@yandex.ru,torero-vlg@mail.ru";
    $to = "stepanenkoigor1988@yandex.ru,torero-vlg@mail.ru, avia-spektr@yandex.ru";
    $subject="Заявка от ".$name;
	$subject = str_replace("\\", "",$subject);  
     
    // конвертируем из windows-1251 в koi8-r 
    //$subject = convert_cyr_string($subject,'w','k'); <b>Реквизиты: </b>".$contractattr."<br>
     
    // это само письмо 
    $message ="<html> 
               <head></head> 
               <body> 
			   <table border='1'>
			   		<tr>
						<td>Дата заявки</td>
						<td>Хозяйство</td>
						<td>Область</td>
						<td>Район</td>
						<td>Населенный пункт</td>
						<td>Телефон</td>
						<td>Электронная почта</td>
						<td>Реквизиты</td>
						<td>Вид работ</td>
						<td>Условия оплаты</td>
						<td>Примечание</td>
						<td>Объем, га</td>
						<td>Дата выполнения</td>
						<td>Примечание</td>
					</tr>
			   		<tr>
						<td>".date("d.m.Y H:i:s")."</td>
						<td>".$name."</td>
						<td>".$region."</td>
						<td>".$district."</td>
						<td>".$city."</td>
						<td>".$telephone."</td>
						<td>".$email."</td>
						<td>".$contractattr."</td>
						<td>".$worktype."</td>
						<td>".$paytype."</td>
						<td>".$detail2."</td>
						<td>".$volume."</td>
						<td>".$deadline."</td>
						<td>".$detail."</td>
					</tr>
			    </table>
				<br>
				<br>
				<table border='1'>
			   		<tr>
						<td>Химпрепарат</td>
						<td>Объем</td>
					</tr>
					<tr>
						<td>".$chemistryname1."</td>
						<td>".$chemistryvolume1."</td>
					</tr>
					<tr>
						<td>".$chemistryname2."</td>
						<td>".$chemistryvolume2."</td>
					</tr>
					<tr>
						<td>".$chemistryname3."</td>
						<td>".$chemistryvolume3."</td>
					</tr>
			    </table>
               </body> 
               </html> 
               "; 
	$message = str_replace("\\", "",$message);
    // конвертируем из windows-1251 в koi8-r            
   // $message = convert_cyr_string($message,'w','k'); 
    // заголовки письма 
    $headers = "Content-Type: text/html; charset=windows-1251\r\n"; 
    // от кого письмо 
    $headers .= "From: avia-spektr.ru <LPHP.RU>\r\n\r\n"; 
	
	if(isset($_SESSION['_name']))
	{unset($_SESSION['_name']);}
	
	if(isset($_SESSION['_telephone']))
	{unset($_SESSION['_telephone']);}
	
	if(isset($_SESSION['_email']))
	{unset($_SESSION['_email']);}
	
	if(isset($_SESSION['_region']))
	{unset($_SESSION['_region']);}
	
	if(isset($_SESSION['_district']))
	{unset($_SESSION['_district']);}
	
	if(isset($_SESSION['_city']))
	{unset($_SESSION['_city']);}
	
	if(isset($_SESSION['_detail2']))
	{unset($_SESSION['_detail2']);}
	
	if(isset($_SESSION['_worktype']))
	{unset($_SESSION['_worktype']);}
	
	if(isset($_SESSION['_paytype']))
	{unset($_SESSION['_paytype']);}
	
	if(isset($_SESSION['_volume']))
	{unset($_SESSION['_volume']);}
	
	if(isset($_SESSION['_deadline']))
	{unset($_SESSION['_deadline']);}
	
	if(isset($_SESSION['_chemistryname1']))
	{unset($_SESSION['_chemistryname1']);}
	if(isset($_SESSION['_chemistryvolume1']))
	{unset($_SESSION['_chemistryvolume1']);}
	
	if(isset($_SESSION['_chemistryname2']))
	{unset($_SESSION['_chemistryname2']);}
	if(isset($_SESSION['_chemistryvolume2']))
	{unset($_SESSION['_chemistryvolume2']);}
	
	if(isset($_SESSION['_chemistryname3']))
	{unset($_SESSION['_chemistryname3']);}
	if(isset($_SESSION['_chemistryvolume3']))
	{unset($_SESSION['_chemistryvolume3']);}
	
	if(isset($_SESSION['_contractattr']))
	{unset($_SESSION['_contractattr']);}
	
	if(isset($_SESSION['_detail']))
	{unset($_SESSION['_detail']);}
	
	if(isset($_SESSION['_error']))
	{unset($_SESSION['_error']);}
	
	if(isset($_SESSION['_result']))
	{unset($_SESSION['_result']);}
	
    if(mail($to,$subject,$message,$headers)) 
    { 
      $_SESSION['_result'] = 1;
	  $_SESSION['_error'] = $message;
    } 
    else 
    { 
     $_SESSION['_result'] = -1;     
    } 
	
	header('Location: demand.php');
} 
?>