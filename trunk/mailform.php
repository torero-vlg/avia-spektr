		<?php
        $name = $_SESSION['_name'];
        $telephone = $_SESSION['_telephone'];
		$email = $_SESSION['_email'];
		$region = $_SESSION['_region'];
		$district = $_SESSION['_district'];
        $city = $_SESSION['_city'];
		$worktype = $_SESSION['_worktype'];
        $paytype = $_SESSION['_paytype'];
        $volume = $_SESSION['_volume'];
        $contractattr =	$_SESSION['_contractattr'];
		$deadline =	$_SESSION['_deadline'];
		$chemistryname1 =	$_SESSION['_chemistryname1'];
		$chemistryvolume1 =	$_SESSION['_chemistryvolume1'];
		$chemistryname2 =	$_SESSION['_chemistryname2'];
		$chemistryvolume2 =	$_SESSION['_chemistryvolume2'];
		$chemistryname3 =	$_SESSION['_chemistryname3'];
		$chemistryvolume3 =	$_SESSION['_chemistryvolume3'];
        $detail =	$_SESSION['_detail'];
		$detail2 =	$_SESSION['_detail2'];
        $error = $_SESSION['_error'];
        $result = $_SESSION['_result'];
        ?>
        <?php 
            if($error <> "") {echo "<br><font color='red'>".$error."</font><br><br>";} 
            if($result == 1) 
            {
                echo "<br><font color='green'><p class = 'text2' >"."Заявка успешно отправлена."."</p></font><br>
                <p class = 'text2' ><a href='index.php'>На главную</a></p><br>";
                DestroySessionParams();
                //echo "<br><br>Через 10 секунд, вы будете перенаправлены на главную страницу.";
                //echo "<meta http-equiv=\"refresh\" content=\"10; url=index.php\">";
                exit();
            }
            if($result == -1) {echo "<br><font color='red'>"."Ошибка. Заявка не отправлена."."</font><br><br>";}
        ?>
        <p class="text">
         <form name='sendForm' method='post' action='mail.php' onSubmit="return checkForm(this)"> 
					<table>
                          <input name='session_id' type='hidden' value="<?php echo session_id();?>"> 
                          <tr>
                            <td><div align="left"><p class = 'text'>Хозяйство:</p></div></td><td><input type='text' name='name' id='namefield' maxlength='200' value="<?php echo $name; ?>"></td>
                          </tr>
						  <tr>
                            <td><div align="right"><p class = "text" >Область:</p></div></td>
							<td>
								<p class = "text3" >
									<label><input name="RadioGroup1" type="radio" id="vlgregionfield" value="vlg" checked onclick="EnableDisable('radiobutton')" />Волгоградская </label>
									<label><input name="RadioGroup1" type="radio" id="otherregionfield" value="other" onclick="EnableDisable('radiobutton')"/>Другая </label> 
									<input type='text' name='region' id='regionfield' maxlength='50' value="<?php echo $region; ?>">
								</p>
							</td>
                         </tr>
						 <tr>
                            <td>
								<div align="right"><p class = "text" >Район:</p></div>
							</td>
							<td>
								<input type='text' name='district1' id='districtfield' maxlength='50' value="<?php echo $district; ?>">
								<select name="district2" id="districtselect" class="selectlist"></select>
							</td>
                         </tr>
                         <tr>
                            <td><div align="left"><p class = "text" >Населенный пункт:</p></div></td><td><input type='text' name='city' id='cityfield' maxlength='50' value="<?php echo $city; ?>"></td>
                         </tr>
                          <tr>
                            <td><div align="right"><p class = "text" >Телефон:</p></div></td><td><input type='text' name='telephone' id='telephonefield' maxlength='15' value="<?php echo $telephone; ?>"></td>
                         </tr>
						 <tr>
                            <td><div align="right"><p class = "text" >Электронная почта:</p></div></td><td><input type='text' name='email' id='emailfield' maxlength='100' value="<?php echo $email; ?>"></td>
                         </tr>
						 <tr>
                            <td><div align="right"><p class = "text" >Реквизиты: </p></div></td><td><textarea cols="50" rows="5" name="contractattr" id="contractattrfield" type="text"><?php echo $contractattr; ?></textarea></td>
                         </tr>
					</table>
					<fieldset>
					<legend class="text3">Заказ на выполнение работ</legend>
					<table>
						 <tr>
                            <td><div align="right"><p class = "text" >Вид работ:</p></div></td><td><select name="worktype">
								<option value="Аэросев масличных культур"><p class = "text" >Аэросев масличных культур</p></option>
								<option value="бработка гербицидами"><p class = "text" >Обработка гербицидами</p></option>
								<option value="Обработка против вредителей"><p class = "text" >Обработка против вредителей</p></option>
								<option value="Внесение внекорневой подкормки"><p class = "text" >Внесение внекорневой подкормки</p></option>
								<option value="Самолетом АН-2 расход 10л/га"><p class = "text" >Самолетом АН-2 расход 10л/га</p></option>
								<option value="Самолетом АН-2 расход 25л/га"><p class = "text" >Самолетом АН-2 расход 25л/га</p></option>
								<option value="Самолетом АН-2 расход 50л/га"><p class = "text" >Самолетом АН-2 расход 50л/га</p></option>
								<option value="Самолетом АН-2 расход 100л/га"><p class = "text" >Самолетом АН-2 расход 100л/га</p></option>
								<option value="Самолетом АН-2 расход 150л/га"><p class = "text" >Самолетом АН-2 расход 150л/га</p></option>
								<option value="Самолетом АН-2 расход 200л/га"><p class = "text" >Самолетом АН-2 расход 200л/га</p></option>
								</select></td>
                         </tr>
						<tr>
                            <td><div align="right"><p class = "text" >Дата начала работ:</p></div></td><td><input name="deadline" id="popup_container" type="text" value="<?php echo $deadline; ?>" /></td>
                         </tr>
						<tr>
                            <td><div align="right"><p class = "text" >Объем, га:</p></div></td><td><p class = "text3" ><input type='text' name='volume' id='paytypefield' maxlength='15' value="<?php echo $volume; ?>"> <i>(например: 8.0 или 7,87)</i></p></td>
                         </tr>
                         <tr>
                            <td><div align="right"><p class = "text" >Условия оплаты:</p></div></td><td><select name="paytype">
								<option value="предоплата"><p class = "text" >предоплата</p></option>
								<option value="оплата по факту"><p class = "text" >оплата по факту</p></option>
								<option value="отсрочка"><p class = "text" >отсрочка</p></option>
								</select></td>
                         </tr>
						<tr>
                            <td><div align="right"><p class = "text" >Примечание:</p></div></td><td><input name="detail" id="detailfield" type="text" value="<?php echo $detail; ?>" /></td>
                         </tr>
					</table>
					</fieldset>
					<fieldset>
					<legend class="text3">Заказ на поставку химпрепаратов</legend>
					<table border="0">
					<font align="left">
						 <tr>
                            <td><div align="right"><p class = "text" >Химпрепараты:</p></div></td><td><p class = "text3">Наименование: </p><input type='text' name='chemistryname1' id='chemistryname1field' maxlength='50' value="<?php echo $chemistryname1; ?>"></td><td><p class = "text3" > Объем, л: </p><input type='text' name='chemistryvolume1' id='chemistryvolume1field' maxlength='15' value="<?php echo $chemistryvolume1; ?>"></td>
                         </tr>
						 <tr>
                            <td><div align="right"><p class = "text" ></p></div></td><td><p class = "text3" >Наименование: </p><input type='text' name='chemistryname2' id='chemistryname2field' maxlength='50' value="<?php echo $chemistryname2; ?>"></td><td><p class = "text3" > Объем, л: </p><input type='text' name='chemistryvolume2' id='chemistryvolume2field' maxlength='15' value="<?php echo $chemistryvolume2; ?>"></td>
                         </tr>
						 <tr>
                            <td><div align="right"><p class = "text" ></p></div></td><td><p class = "text3" >Наименование: </p><input type='text' name='chemistryname3' id='chemistryname3field' maxlength='50' value="<?php echo $chemistryname3; ?>"></td><td><p class = "text3" > Объем, л: </p><input type='text' name='chemistryvolume3' id='chemistryvolume3field' maxlength='15' value="<?php echo $chemistryvolume3; ?>"></td>
                         </tr>
						 <tr>
                            <td><div align="right"><p class = "text" >Примечание:</p></div></td><td colspan = "2"><input name="detail2" id="detailfield2" type="text" value="<?php echo $detail2; ?>" size="44"/></td>
                         </tr>
					</font>
					</table>
					</fieldset>
					<table>
                         <tr>
                            <td><br></td><td><br></td>
                         </tr> 
                          <tr>
                            <td><div align="center"><img src="secpic.php" alt="защитный код"></div></td><td></td>
                         </tr>
                         <tr>
                            <td><div align="right"><p class = "text" >Код с картинки:</p></div></td><td><input type='text' name='secpic' id='secpicfield' maxlength='15'> </td>
                         </tr>
                         <tr>
                            <td><br></td><td><br></td>
                         </tr> 
        
                         <tr>
                            <td><div align="center"></div></td><td><div align="right">
                              <input type='submit' name='send' id='btnSend' value='Отправить'>
                          </div></td>
                         </tr>
					</table>						 
            </form> 
        </p>
        <?php
            DestroySessionParams();
        ?>
<?php
function DestroySessionParams()
{ 
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
	
	if(isset($_SESSION['_contractattr']))
	{unset($_SESSION['_contractattr']);}
	
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
	
	if(isset($_SESSION['_detail']))
	{unset($_SESSION['_detail']);}
	
	if(isset($_SESSION['_error']))
	{unset($_SESSION['_error']);}
	
	if(isset($_SESSION['_result']))
	{unset($_SESSION['_result']);}
}
?>