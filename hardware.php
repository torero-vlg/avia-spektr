<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title> ��� "������" - ����������� ��������</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<LINK href="index_files/style.css" type="text/css" rel=stylesheet>
<link rel="stylesheet" type="text/css" href="calendar/epoch_styles.css" />
        <script type="text/javascript" src="calendar/epoch_classes.js"></script>
        <script type="text/javascript" src="validation.js"></script>
        <script type="text/javascript">
        /*You can also place this code in a separate file and link to it like epoch_classes.js*/
            var dp_cal;      
        window.onload = function () {
            dp_cal  = new Epoch('epoch_popup','popup',document.getElementById('popup_container'));
        };
		</script>
<script type="text/javascript" src="jsibox/jsibox_basic.js"></script>		
</head>
<body background="index_files/bc.png";>

<table id="Table_main" width="960" height="288" align="center" border="0" cellpadding="0" cellspacing="0">
<tr valign="top" height="288"><td width="960" height="288">

<table id="Table_01" width="960" height="288" align="center" border="0" cellpadding="0" cellspacing="0">
<tr valign="bottom">
	<td width="960" height="288"><a href="HTTP://AVIA-SPEKTR.RU"><img src="index_files/banner.png" width="960" height="288" border="0" alt=""></a></td>
</tr>
</table>

<?php $currentPage = "hardware.php"; include("menu.html")?>

<table id="Table_03" width="960" align="center" border="0" cellpadding="0" cellspacing="10"  bgcolor="#ffffff">
<tr valign="top">
	<td width="960" align="center"><?php include("work_menu.php")?>
		</td>
</tr>
<tr valign="top">
	<td width="960" height="400"><p class = "text2"><b>����������� ��������</b></p>
	   <table border = 0 align="center" width="100%">
       	<tr>
       		<td><a href="foto/hardware/sower.JPG" rel="1" onclick="return jsiBoxOpen(this)" title=""><img src="foto/hardware/sower.JPG" width="460" height="360"/></a></td>
       		<td><a href="foto/hardware/hardware.jpg" rel="1" onclick="return jsiBoxOpen(this)" title=""><img src="foto/hardware/hardware.jpg" width="460" height="360"/></a></td>
		</tr>
       </table>
    </td>
</tr>
<tr valign="bottom">
	<td width="960" height="48" align="center">	<?php include("bottommenu.php")?>
	</td>
</tr>

<tr valign="middle">
	<td width="960" height="48" align="center"><?php include("bottom.php")?>
	</td>
</tr>
</table>

</td></tr>
</table>
</body>
</html>