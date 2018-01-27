<?php 
error_reporting(E_ALL);

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/func.object.php");

$func = new func();

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/main.object.php");

$main = new main();
 


$main->delete_photo();
$main->storefront();
$main->in_photo("foto");

?>
<html>
<head>
<title>Менеджер фотографий</title>
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
    <td><div class="logo" style="margin-left: 7px;">Менеджер фотографий <?php if (isset($gpage) && $gpage!=="") echo "(слайдинг ".$main->get_record("photosgal",$gpage,"galname").")"; ?></div></td>
    <td width="1"><input name="button" type="button" onClick="window.close()" value="Закрыть окно"></td>
  </tr>
</table>
<?php

if (isset($gpage) && $gpage!=="")
{

?>
<table width="100%"  border="0" cellpadding="4" cellspacing="8">
<form action="<?php isset($edit_photo)?$add="?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&edit_photo=$edit_photo":$add=false; echo $PHP_SELF.$add."?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&gpage=".$gpage; ?>" method="POST" ENCTYPE="multipart/form-data">
 &nbsp;&nbsp;<a href="/admin/moduls/gallery.php?id=<?php echo $_GET["id"]; ?>&upd_rec=<?php echo $_GET["upd_rec"]; ?>">К списку слайдингов</a>
	<tr>
      <td width="150" align="right" valign="top">
	 	  <strong class="text">Загрузка фотографий:</strong><br>
	  <strong class="text">Подпись:</strong>
	  </td>

      <td><table width="490"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
		     <input name="dfile" type="file" style="width: 190px;" class="box"><br>
			 <input name="photo_title" type="text" value="<?php echo @$main->get_record("photos",$_GET["editph"],"title"); ?>" style="width: 190px;" class="box"><br><INPUT TYPE="checkbox" NAME="halig" <?php
			 
			 if (isset($_GET["editph"]) && $_GET["editph"]!=="")
			 {
				 if ($main->get_record("photos",$_GET["editph"],"halig")=="1") echo "checked";
			 }
			 
			 
			 ?> value="1"> - Выравнивание по рамке
		  </td>
          <td><input type="submit" value="Внести изображение" class="boxBut"></td>
		


        </tr>
		
      </table>
	  <br>       
        <div align="left" style="margin-bottom: 3px;">
        У вас загружено <?php echo $main->get_photo("count"); ?> фотографий(ия) в слайдинге <?php echo "<b>".$main->get_record("photosgal",$gpage,"galname")."</b>"; ?></div>
      
	  
	  <!-- Таблица с фотками СТАРТ -->
	  
	    <table border="0" cellspacing="3" cellpadding="3">
		

		 <?php $main->out_photo(); ?>

		
        </table>
		
	<!-- Таблица с фотками ЕНД -->
		
		
		</td>
	</tr>
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td><input type="submit" name="submin" value="Обновить"></td>
  </tr>
  </form>
</table>
<br>
<?php
} else
{
			?>
			<table width="100%"  border="0" cellpadding="4" cellspacing="8">
			<tr>
			<td>
			
<div><b>Создать слайдинг</b></div>
<form action="/admin/moduls/gallery.php?id=<?php echo $_GET["id"]; ?>&upd_rec=<?php echo $_GET["upd_rec"]; ?>" method="post">
<INPUT TYPE="hidden" NAME="editgal" value="<? if (isset($_GET["editgal"])) echo $_GET["editgal"]; ?>">
 <input name="galname" type="text" value="<? if (isset($_GET["editgal"])) echo $main->get_record("photosgal",$_GET["editgal"],"galname"); ?>" style="width: 190px;" class="box">
<br><br>
<INPUT TYPE="submit" value="Сохранить"></form>
<br>
<?php
echo $main->html("adm_gal_head",false);

 $sql_q = "SELECT * FROM photosgal WHERE cata='".$_GET["id"]."' AND id_cat='".$_GET["upd_rec"]."' ORDER BY id DESC";
 $sql_res = $main->q($sql_q);

while ($rows = mysql_fetch_array($sql_res))
	{
	$arrcyc = array(
		"galname"=>$rows["galname"],
		"id"=>$rows["id"],
		"cat"=>$_GET["id"],
		"id_cat"=>$_GET["upd_rec"]
		);
echo $main->html("adm_gal_cycle",$arrcyc);
	}
echo $main->html("adm_gal_foot",false);
?>
			</td>
			</tr>
			</table>
			<?php
}
?>
</body>
</html>