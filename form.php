<?php

$totalprice = array();

$sql_q = "SELECT * FROM ".$main->temptable()." WHERE id!='1' GROUP BY id1,id2 ORDER BY id ASC";
$sql_res = $main->q($sql_q);

$order1[] = $main->html("adm_order_head",false);

while ($rows = mysql_fetch_array($sql_res))
{
	$cat_price = $rows["param1"];

	$arr_cycle = array(
		"page_name"=>$main->get_record($main->pre."pages",$rows["id1"],"pages_name"),
		"id1"=>$rows["id1"],
		"id2"=>$rows["id2"],
		"cat_title"=>$main->upfirst($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_title")),
		"cat_reserve"=>$main->upfirst($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_reserve")),
		"param1"=>$rows["param1"],
		"param2"=>$rows["param2"],
		"cat_number"=>$main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_number"),
		"price"=>str_replace(" ","",$cat_price)*$main->shtuk($rows["id2"],$rows["id1"])." ".$main->get_record("catalog_".$rows["id1"],$rows["id2"],"valute"),
		"count"=>$main->shtuk($rows["id2"],$rows["id1"])
		);

	$order2[] = $main->html("adm_order_cycle",$arr_cycle);


$totalprice[]= str_replace(" ","",$cat_price)*$main->shtuk($rows["id2"],$rows["id1"]);
}
$order3[] = $main->html("adm_order_foot",array("sum"=>array_sum ($totalprice)));

$order = implode($order1).implode($order2).implode($order3);



if (isset($_POST['send_form']) && $_POST['send_form']==1)
{
	//$main->show($HTTP_POST_VARS);

	$person = strip_tags(trim($_POST["person"]));
	$phone = strip_tags(trim($_POST["phone"]));
	$email = strip_tags(trim($_POST["email"]));
	$comments = strip_tags(trim($_POST["comments"]));
	$formcity = strip_tags(trim($_POST["formcity"]));
	$formindx = strip_tags(trim($_POST["formindx"]));
	$formstreet = strip_tags(trim($_POST["formstreet"]));
	$formhouse = strip_tags(trim($_POST["formhouse"]));
	$formkorp = strip_tags(trim($_POST["formkorp"]));
	$formkv = strip_tags(trim($_POST["formkv"]));
	$formdost = strip_tags(trim($_POST["formdost"]));
	$formopl = strip_tags(trim($_POST["formopl"]));

	$headers="From: $email\n";
	$headers.="Content-type: text/html; charset=windows-1251\n";

	$ordernum = trim(implode(file($DOCUMENT_ROOT.'/ordernum.txt')));

	$ordernum_next = $ordernum + 1;

	

	

	// $ordernum = date("md/y");

    $form_title = "<b>Заказ № $ordernum с test2.dostavkakresel.ru</b><br><br>";
	$send_date = "<b>Контактное лицо:</b>&nbsp;$person<br><b>Телефон:</b>&nbsp;$phone<br><b>Email:</b>&nbsp;$email<br><b>Город:</b>&nbsp;$formcity<br><b>Индекс:</b>&nbsp;$formindx<br><b>Улица:</b>&nbsp;$formstreet<br><b>Дом:</b>&nbsp;$formhouse<br><b>Корпус:</b>&nbsp;$formkorp<br><b>Квартира:</b>&nbsp;$formkv<br><b>Доставка:</b>&nbsp;$formdost<br><b>Оплата:</b>&nbsp;$formopl<br><br><b>Пожелания:</b>&nbsp;$comments<br><br><b>Дата отправки заявки:</b>&nbsp;".date("d.m.y")." в ".date("H:i:s");
    
	unset($HTTP_POST_VARS["send_form"]);

	$send_form_string = $form_title.$order.$send_date;
		
	$send_to = "levendeevp@gmail.com";

	//$send_to3 = "tim@levbrothers.ru";

	mail($send_to, "Заказ № $ordernum с test2.dostavkakresel.ru", $send_form_string, $headers);
	//mail($send_to2, "Заказ № $ordernum с pikato.ru", $send_form_string, $headers);
	//mail($send_to3, "Заказ № $ordernum с garant-systems.ru", $send_form_string, $headers);

	echo $message="Спасибо! Номер Вашего заказа <b>$ordernum</b>.<br>В течение 1 часа с Вами свяжется наш сотрудник.<br><br><a href='/'>Вернуться в магазин</a><br>";

	$fp = fopen($DOCUMENT_ROOT.'/ordernum.txt', 'w');
	fwrite($fp, $ordernum_next);
	fclose($fp);
	
}
else
{
?>



<table width="100%"  class="price_price2">
  <tr align="left" bgcolor=black>

<!--<td class="catalogTit"></td>-->

<td  align=center><font >Наименование</font></div></td>

<td  align=center><font >Цена</font></div></td>

<td  align=center><font>Количество</font>&nbsp;&nbsp;</div></td>

</tr>

<?php

$totalprice = array();

$sql_q = "SELECT * FROM ".$main->temptable()." WHERE id!='1' GROUP BY id1,id2 ORDER BY id ASC";
$sql_res = $main->q($sql_q);

while ($rows = mysql_fetch_array($sql_res))
{
	$id2 = $main->get_l1($main->get_record($main->pre."pages",$rows["id1"],"pages"),"id");

	$category = $main->get_record($main->pre."pages",$rows["id1"],"pages");
	
	
	$cat_price = $rows["param1"];

	?>
	<tr align="left">




<td align=center><div>&nbsp;&nbsp;<a href="/products.php?category=<? echo $category; ?>&id=<? echo $rows["id1"]; ?>&cid=<? echo $rows["id2"]; ?>"><font color=black><?php echo $main->upfirst($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_title")); ?></font></a></div></td>



<td align=center><div>&nbsp;&nbsp;<?php echo $main->CartPrice ($rows["id1"],$rows["id2"])." руб."; ?></div>


</td>




<td align=center>&nbsp;&nbsp;

<?php echo $main->shtuk($rows["id2"],$rows["id1"]); ?> шт.&nbsp;&nbsp;</td>



</tr>
<?php


$totalprice[]= $main->CartPrice ($rows["id1"],$rows["id2"]);
		}
?>
    </tr></table>
	<div align=right><b>Итого:</b> <? echo array_sum ($totalprice); ?> руб.</div>

<br><br>


<FORM  METHOD=POST ACTION="/?page=sendform" onSubmit="return check_form();" NAME="add" >
<INPUT TYPE="hidden" name="send_form" value=1>


<div><font>ФИО</font> <font color=red>*</font></div>
<INPUT TYPE="text" NAME="person" size=70>

<br><br><div><font >Телефон</font> <font color=red>*</font></div>
<INPUT TYPE="text" NAME="phone" size=70>

<br><br><div><font >Email</font></div>
<INPUT TYPE="text" NAME="email" size=70>

<br><br><div><font >Город</font></div>
<INPUT TYPE="text"  NAME="formcity" size=70>

<br><br><div><font >Индекс</font></div>
<INPUT TYPE="text" NAME="formindx" size=70>

<br><br><div><font >Адрес</font></div>
<INPUT TYPE="text" NAME="formstreet" size=70>



<br><br>
<SELECT NAME="formdost">
	<OPTION VALUE="">Выберете способ доставки</option>
	<OPTION value="Доставка курьером">Доставка курьером</option>
	<OPTION value="Самовывоз">Самовывоз</option>
</SELECT>
<!--
<br>
<br><br>
<SELECT NAME="formopl">
	<OPTION VALUE="">Выберете способ оплаты</option>
	<OPTION VALUE="Наличными деньгами курьеру">Наличными деньгами курьеру</option>
	<OPTION VALUE="Наличными  в магазине">Наличными  в магазине</option>
	<OPTION VALUE="Яндекс Деньги">Яндекс Деньги</option>
</SELECT>
-->
<br>
<br>
<br><div><font>Пожелания к заказу</font></div>
<TEXTAREA NAME="comments" ROWS="3" COLS="43"></TEXTAREA><br>


     <br><INPUT TYPE="button" class="btn btn-secondary" onclick="if (document.add.person.value=='' || document.add.phone.value=='')  window.alert('ФИО и телефон обязательны для заполнения!'); else add.submit();" value="Оформить заказ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 
	 <INPUT TYPE="button" onclick="add.reset();" class="btn btn-secondary" value="Очистить">
	 
	 
	 

</FORM>

</TD>
</TR>
</TABLE><br><br><br><br><br><br><br><br><br>

<? } ?>