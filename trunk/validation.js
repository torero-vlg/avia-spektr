// JavaScript Document
// Функция, разрешающая ввод только цифр
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
		alert("Разрешен ввод только цифр.");
		return false;
	}
}

// Функция, разрешающая ввод только латиницы и кириллицы
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
		alert("Разрешен ввод только символов латиницы и кириллицы.");
		return false;
	}
}

// Функция проверки введенных данных
function checkForm(form) 
{
	var err="";
	//Проверка поля Хозяйство
	if (isEmpty(form.name.value))
		err += "Не заполнено поле 'Хозяйство'"+"\n";	
	//Проверка поля Телефон
	if (isEmpty(form.telephone.value))
		err += "Не заполнено поле 'Телефон'"+"\n";
	//Проверка поля Область
	if (isEmpty(form.region.value))
		err += "Не заполнено поле 'Область'"+"\n";
	//Проверка поля Район
	if (isEmpty(form.district1.value) && isEmpty(form.district2.value))
		err += "Не заполнено поле 'Район'"+"\n";
	//Проверка поля Населенный пункт
	if (isEmpty(form.city.value))
		err += "Не заполнено поле 'Населенный пункт'"+"\n";	
	//Проверка поля Условия оплаты
	if (isEmpty(form.paytype.value))
		err += "Не заполнено поле 'Условия оплаты'"+"\n";
	// Проверка введенных данных в поле E-mail
		var errEmail = checkEmail(form.email.value);
	if (errEmail)
		err += errEmail+"\n";
	// Проверка введенных данных в поле Объём
	var errVal = checkNumber(form.volume.value);
	if (errVal)
		err += errVal+"\n";
	// Проверка введенных данных в поле Дата
	var errData = checkDate(form.deadline.value);
	if (errData)
		err += errData+"\n";

	// Проверка введенных данных в текстовое поле
	/*
	var errTxt = checkTxt(form.txt.value);
	if (errTxt)
		err += errTxt+"\n";
	*/
	if (err=="") return true; // Возврат true, если ошибок не найдено
	else
	{
		alert(err);
		return false; // Возврат false
	}
}
//Фуункция проверки, что поле не пустое
function isEmpty(value)
{
	if (value == "")
		return true;
	return false
}
//Функция проверки правильности e-mail
function checkEmail(value)
{
	// Проверка, не пустое ли значение
	if (value == "") return "He введен e-mail"
	//if (!value.match(/[^\s]/g)) return "He введен e-mail"
	var re = /^[\w-]+(\.[\w-]+)*@([\w-]+)\.+[a-zA-Z]{2,3}$/;
	if (!value.match (re))
		return "Неправильный формат адреса электронной почты"
	return false;
}

//Функция проверки правильности даты
function checkDate(value)
{
	// Проверка, не пустое ли значение
	if (value == "") return "He введена дата"
	//if (!value.match(/[^\s]/g)) return "He введена дата"
	// Регулярное выражение для проверки правильности ввода
	// формата даты dd.mm.yyyy
	//var re = /^[\d]{l,2}(\.)[\d]{1,2}(\.)[\d]{4}$/i
	var re = /^[0-9]{2}.[0-9]{2}.[0-9]{4}$/i
	if (!value.match(re))
		return "Неправильный формат даты. Введите дату в формате дд.мм.гггг"
	pos1 = value.indexOf(".");
	pos2 = value.lastIndexOf(".");
	dd = value.substring(0, pos1); // день
	mm = value.substring(pos1 + 1, pos2); // месяц
	yyyy = value.substring(pos2 + 1,10); // год
	tmpData = new Date(yyyy, mm - 1, dd); // тестовая дата
	var err = "";
	if (tmpData.getDate()!=dd) return "Неправильно записан день."
	if (tmpData.getMonth()!=mm-1) return "Неправильно записан месяц."
	if (tmpData.getFullYear()!=yyyy) return "Неправильно записан год." + yyyy
	return false;
	
}
//Функция проверки ввода числа
function checkNumber(value)
{
	var re = /^[-+]?[\d]+[\.,][\d]+$/i
	if (!value.match(re))
		return "Неправильный формат объёма."
	return false;
}