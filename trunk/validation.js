// JavaScript Document
// �������, ����������� ���� ������ ����
function enterNumber(event)
{
	if (event.charCode)
		var charCode = event.chatCode;
	else if (event.keyCode)
		var charCode = event.keyCode;
	else if (event.which)
		var charCode = event.which;
	else
		var charCode = 0;
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	{
		alert("�������� ���� ������ ����.");
		return false;
	}
}

// �������, ����������� ���� ������ �������� � ���������
function enterLetter(event)
{
	if (event.charCode)
		var charCode = event.chatCode;
	else if (event.keyCode)
		var charCode = event.keyCode;
	else if (event.which)
		var charCode = event.which;
	else
		var charCode = 0;
	if (charCode > 31 &&
	(charCode < 65 || charCode > 90) &&
	(charCode < 97 || charCode > 122) &&
	(charCode < 1040 || charCode > 1103))
	{
		alert("�������� ���� ������ �������� �������� � ���������.");
		return false;
	}
}

// ������� �������� ��������� ������
function checkForm(form) 
{
	var err="";
	//�������� ���� ���������
	if (isEmpty(form.name.value))
		err += "�� ��������� ���� '���������'"+"\n";	
	//�������� ���� �������
	if (isEmpty(form.telephone.value))
		err += "�� ��������� ���� '�������'"+"\n";
	//�������� ���� �������
	if (isEmpty(form.region.value))
		err += "�� ��������� ���� '�������'"+"\n";
	//�������� ���� �����
	if (isEmpty(form.district1.value) && isEmpty(form.district2.value))
		err += "�� ��������� ���� '�����'"+"\n";
	//�������� ���� ���������� �����
	if (isEmpty(form.city.value))
		err += "�� ��������� ���� '���������� �����'"+"\n";	
	//�������� ���� ������� ������
	if (isEmpty(form.paytype.value))
		err += "�� ��������� ���� '������� ������'"+"\n";
	// �������� ��������� ������ � ���� E-mail
		var errEmail = checkEmail(form.email.value);
	if (errEmail)
		err += errEmail+"\n";
	// �������� ��������� ������ � ���� �����
	var errVal = checkNumber(form.volume.value);
	if (errVal)
		err += errVal+"\n";
	// �������� ��������� ������ � ���� ����
	var errData = checkDate(form.deadline.value);
	if (errData)
		err += errData+"\n";

	// �������� ��������� ������ � ��������� ����
	/*
	var errTxt = checkTxt(form.txt.value);
	if (errTxt)
		err += errTxt+"\n";
	*/
	if (err=="") return true; // ������� true, ���� ������ �� �������
	else
	{
		alert(err);
		return false; // ������� false
	}
}
//�������� ��������, ��� ���� �� ������
function isEmpty(value)
{
	if (value == "")
		return true;
	return false
}
//������� �������� ������������ e-mail
function checkEmail(value)
{
	// ��������, �� ������ �� ��������
	if (value == "") return "He ������ e-mail"
	//if (!value.match(/[^\s]/g)) return "He ������ e-mail"
	var re = /^[\w-]+(\.[\w-]+)*@([\w-]+)\.+[a-zA-Z]{2,3}$/;
	if (!value.match (re))
		return "������������ ������ ������ ����������� �����"
	return false;
}

//������� �������� ������������ ����
function checkDate(value)
{
	// ��������, �� ������ �� ��������
	if (value == "") return "He ������� ����"
	//if (!value.match(/[^\s]/g)) return "He ������� ����"
	// ���������� ��������� ��� �������� ������������ �����
	// ������� ���� dd.mm.yyyy
	//var re = /^[\d]{l,2}(\.)[\d]{1,2}(\.)[\d]{4}$/i
	var re = /^[0-9]{2}.[0-9]{2}.[0-9]{4}$/i
	if (!value.match(re))
		return "������������ ������ ����. ������� ���� � ������� ��.��.����"
	pos1 = value.indexOf(".");
	pos2 = value.lastIndexOf(".");
	dd = value.substring(0, pos1); // ����
	mm = value.substring(pos1 + 1, pos2); // �����
	yyyy = value.substring(pos2 + 1,10); // ���
	tmpData = new Date(yyyy, mm - 1, dd); // �������� ����
	var err = "";
	if (tmpData.getDate()!=dd) return "����������� ������� ����."
	if (tmpData.getMonth()!=mm-1) return "����������� ������� �����."
	if (tmpData.getFullYear()!=yyyy) return "����������� ������� ���." + yyyy
	return false;
	
}
//������� �������� ����� �����
function checkNumber(value)
{
	var re = /^[-+]?[\d]+[\.,][\d]+$/i
	if (!value.match(re))
		return "������������ ������ ������."
	return false;
}