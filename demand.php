<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php 
	// �������������� ������ 
	session_start(); 
?>
<html>
<head>
<title> ��� "������" - �������� ������ </title>
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
			EnableDisable('server');
        };
		</script>
		<script type="text/javascript">
        function EnableDisable(sender)
        {
            //���� �������� ������ ����������� �� �������
			if(document.getElementById("regionfield").value == "�������������" && sender != "radiobutton")
			{
				document.getElementById("vlgregionfield").checked = 1;
				document.getElementById("districtfield").style.display = 'none';
				document.getElementById("districtselect").style.display = '';
				document.getElementById("regionfield").style.display = 'none';
				FillList();
				$index = findIndex(document.getElementById("districtselect"), document.getElementById("districtfield").value);
				document.getElementById("districtselect").options[$index].selected = true;
				return;
			}
			else if(document.getElementById("regionfield").value != "" && sender != "radiobutton")
			{
				document.getElementById("otherregionfield").checked = 1
				document.getElementById("districtfield").style.display = '';
				document.getElementById("districtselect").style.display = 'none';
				document.getElementById("regionfield").style.display = ''
				return;
			}
			
			//���� ����������� radiobutton
			if(document.getElementById("vlgregionfield").checked == 1)
			{
				document.getElementById("regionfield").style.display = 'none';
				document.getElementById("regionfield").value = "�������������";
				document.getElementById("districtfield").style.display = 'none';
				document.getElementById("districtselect").style.display = '';
				FillList();
			}
			else
			{
				document.getElementById("regionfield").style.display = '';
				document.getElementById("regionfield").value = '';
				document.getElementById("districtfield").style.display = '';
				document.getElementById("districtselect").style.display = 'none';
			}
        }
		function addOption (oListbox, text, value, isDefaultSelected, isSelected)
		{
		  var oOption = document.createElement("option");
		  oOption.appendChild(document.createTextNode(text));
		  oOption.setAttribute("value", value);

		  if (isDefaultSelected) oOption.defaultSelected = true;
		  else if (isSelected) oOption.selected = true;

		  oListbox.appendChild(oOption);
		}
		
		function findIndex(oListbox, itemName)
		{
			$count = oListbox.options.length;
			for (i = 0; i < $count; i++)
			{
				if(oListbox.options[i].text == itemName) 
					return i;
				else continue;
			}
			return -1;
		}
		
		function FillList()
		{
				var $select = document.getElementById("districtselect");
				addOption($select, "������������", "������������", false, false);
				addOption($select, "�������������", "�������������", false, false);
				addOption($select, "�����������", "�����������", false, false);
				addOption($select, "���������", "���������", false, false);
				addOption($select, "��������", "��������", false, false);
				addOption($select, "����������", "����������", false, false);
				addOption($select, "�����������", "�����������", false, false);
				addOption($select, "�����������", "�����������", false, false);
				addOption($select, "�����������", "�����������", false, false);
				addOption($select, "�������������", "�������������", false, false);
				addOption($select, "��������", "��������", false, false);
				addOption($select, "���������������", "���������������", false, false);
				addOption($select, "���������", "���������", false, false);
				addOption($select, "������������", "������������", false, false);
				addOption($select, "���������", "���������", false, false);
				addOption($select, "������������", "������������", false, false);
				addOption($select, "����������", "����������", false, false);
				addOption($select, "������������", "������������", false, false);
				addOption($select, "�������������", "�������������", false, false);
				addOption($select, "����������������", "����������������", false, false);
				addOption($select, "�����������", "�����������", false, false);
				addOption($select, "����������", "����������", false, false);
				addOption($select, "������������", "������������", false, false);
				addOption($select, "����������", "����������", false, false);
				addOption($select, "������������", "������������", false, false);
				addOption($select, "���������������", "���������������", false, false);
				addOption($select, "�����������������", "�����������������", false, false);
				addOption($select, "���������������", "���������������", false, false);
				addOption($select, "�������������", "�������������", false, false);
				addOption($select, "����������", "����������", false, false);
				addOption($select, "�������������", "�������������", false, false);
		}
				
    </script>
</head>
<body background="index_files/bc.png";>

<table id="Table_main" width="960" height="288" align="center" border="0" cellpadding="0" cellspacing="0">
<tr valign="top" height="288"><td width="960" height="288">

<table id="Table_01" width="960" height="288" align="center" border="0" cellpadding="0" cellspacing="0">
<tr valign="bottom">
	<td width="960" height="288"><a href="HTTP://AVIA-SPEKTR.RU"><img src="index_files/banner.png" width="960" height="288" border="0" alt=""></a></td>
</tr>
</table>

<?php $currentPage = "demand.php"; include("menu.html")?>

<table id="Table_03" width="960" align="center" border="0" cellpadding="0" cellspacing="10"  bgcolor="#ffffff">
<tr valign="top">
	<td width="960" height="400">
<?php include ("mailform.php")?>
    </td>
</tr>
<tr valign="bottom">
	<td width="960" height="48" align="center"><?php include("bottommenu.php")?>
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