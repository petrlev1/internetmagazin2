<?php 
error_reporting(E_ALL);

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/func.object.php");

$func = new func();

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/main.object.php");

$main = new main();



 

?>
<html>
<head>
<title>Скидки</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="/Lib/css/admin.css" rel="stylesheet" type="text/css">

<link href="/Lib/css/adminframe.css" rel="stylesheet" type="text/css">

<link href="/Lib/css/catalog.css" rel="stylesheet" type="text/css">

<script language="javascript">

function checkit(field)
{
   for (i=1; i<form.elements.length; i++)
   {   
       var fld=document.form.elements[i];
        if (fld.name==field) {
        if (fld.checked) fld.checked=false;
        else fld.checked=true;} 
   }
}
</script>
</head>

<body marginwidth="0" marginheight="0" topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0">


<table width="100%" height="2"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0679BA"><img src="images/space.gif" width="1" height="2"></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="1" cellspacing="0" bgcolor="#0679BA">
  <tr>
    <td><div class="logo" style="margin-left: 7px;">Скидки</div></td>
    <td width="1"><input name="button" type="button" onClick="window.close()" value="Закрыть окно"></td>
  </tr>
</table>


			<table width="100%"  border="0" cellpadding="4" cellspacing="8">
			<tr>
			<td>
			<a href="/admin/moduls/skidki.php?id=<?php echo $_GET["id"]; ?>">Добавить новую скидку</a><br><br>

<form action="/admin/moduls/skidki.php?id=<?php echo $_GET["id"]; ?>" method="post">
<INPUT TYPE="hidden" NAME="editskidka" value="<? if (isset($_GET["upd_rec"])) echo $_GET["upd_rec"]; ?>">

<table>
<tr>
	<td>Цена от - <br><input name="skidka" type="text" value="<? echo $main->get_record("skidki",@$_GET["upd_rec"],"price"); ?>" style="width: 110px;" class="box2"></td>
	<td>&nbsp;</td>
	<td> Скидка, %<br><input name="proc" type="text" value="<? echo $main->get_record("skidki",@$_GET["upd_rec"],"proc"); ?>" style="width: 70px;" class="box2"></td>
</tr>
</table>




<br>

<INPUT TYPE="submit" value="Добавить/Сохранить скидку"></form>
<br>
<?php
echo $main->html("adm_skidki_head",array("id"=>$_GET["id"],"catalog"=>$main->get_record($main->pre."pages",$_GET["id"],"pages_name")));

 $sql_q = "SELECT * FROM skidki WHERE cata='".$_GET["id"]."'  ORDER BY price ASC";
 $sql_res = $main->q($sql_q);

while ($rows = mysql_fetch_array($sql_res))
	{
	$arrcyc = array(
        "price"=>$rows["price"],
		"proc"=>$rows["proc"],
		"id"=>$rows["id"],
		"cat"=>$_GET["id"]

		);
echo $main->html("adm_skidki_cycle",$arrcyc);
	}
echo $main->html("adm_skidki_foot",false);
?>
			</td>
			</tr>
			</table>


</body>
</html>