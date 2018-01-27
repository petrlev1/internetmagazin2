<?php 
error_reporting(E_ALL);

include ("$DOCUMENT_ROOT/Lib/php/func.object.php");

$func = new func();

include ("$DOCUMENT_ROOT/Lib/php/main.object.php");

$main = new main();



if (isset($_POST['changecats']))
			{

		//print_r($change2);

		//print_r($dizayneri);

			foreach ($_POST['changecats'] as $key=>$value)
				{

				//echo "$key=>$value<br>";

				$arr = explode("#",$value);

				$sql_q = "UPDATE photos SET cat='$arr[0]', idc='$arr[1]' WHERE id='$key'";
				//echo "<br>";


				$sql_res = $main->q($sql_q);

				
				}
				 header ("Location: /admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]);
			}
		



 if (isset($_GET["sortcorr"]) && $_GET["sortcorr"]=="1")
	 {
		 $sql_q3 = "SELECT * FROM photos WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' ORDER BY sort DESC";
		 $sql_res3= $main->q($sql_q3);
		 
		 
		 $i = 1;
	
		 while ($rows3 = mysql_fetch_array($sql_res3))
			 {
			 $sql_q4 = "UPDATE photos SET sort='$i' WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' AND id='$rows3[id]' ORDER BY sort DESC";
			     $main->q($sql_q4);

			 $i++;
			 }

			 header ("Location: /admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]);
			
	}


function remove_recs2($table,$next_sort,$curr_id,$sort)
	{
		global $topic;

		//$topic == "ucatalog" ? $add = "AND pages='".$this->cat_name."'" : $add = "";
		$add = "";

		$sql_q2 = "SELECT id FROM $table WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' AND sort='$next_sort'";

		if (!$sql_res3 = mysql_query($sql_q2))print "ERR: ".mysql_error();
		
		$row2 = mysql_fetch_array($sql_res3);
		$next_id = $row2['id'];

		$sql_q3 = "UPDATE $table SET sort='$next_sort' WHERE id='$curr_id'";
		#echo "<br>";
		$sql_q4 = "UPDATE $table SET sort='$sort' WHERE id='$next_id'";

		if (!$sql_res3 = mysql_query($sql_q3))print "ERR: ".mysql_error();
		if (!$sql_res4 = mysql_query($sql_q4))print "ERR: ".mysql_error();
	}


function array_recs2($table)
	{
		global $main;

		$sql_q = $main->q("SELECT * FROM $table WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' ORDER BY sort ASC");
			
		while ($rows = mysql_fetch_array($sql_q))
		{
			$array[] = $rows["sort"];
		}
		return $array;
	}


if (isset($_GET['rec_up2']) && $_GET['rec_up2']!=="")
		{
			$array = array_recs2("photos");
			$array2 = array_flip($array);
			$next_sort_key = $array2[$_GET['rec_up2']]-1;

			if ($next_sort_key >=0)
			{
			$next_sort = $array[$next_sort_key];
			remove_recs2("photos",$next_sort,$_GET['curr_id2'],$_GET['rec_up2']);
			}
			
				header ("Location: /admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."");
		}
		if (isset($_GET['rec_dw2']) && $_GET['rec_dw2']!=="")
		{
			$array = array_recs2("photos");
			$array2 = array_flip($array);
			$next_sort_key = $array2[$_GET['rec_dw2']]+1;

			if (isset($array[$next_sort_key]))
			{
			$next_sort = $array[$next_sort_key];
			remove_recs2("photos",$next_sort,$_GET['curr_id2'],$_GET['rec_dw2']);
			}
		
				header ("Location: /admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."");
		}

		function GetCategs()
		{
			global $main;

			$sql_q = "SELECT * FROM pages WHERE id='".$_GET["id"]."'";
			$sql_res = mysql_query($sql_q);
			$rows = mysql_fetch_array($sql_res);

			$sql_q2 = "SELECT * FROM pages WHERE topics='$rows[topics]' AND pages='kollekcii' AND L1!=''";
			$sql_res2 = mysql_query($sql_q2);


			while ($rows2 = mysql_fetch_array($sql_res2))
			{
				$r = mysql_query("SELECT id FROM catalog_$rows2[id]");

				if ($r)
				{

				$array[] = "(SELECT *,'$rows2[id]' as tab FROM catalog_$rows2[id])";

				//echo $main->get_record("pages",$rows2["id"],"pages_name");
				//echo "<br>";
				}
			}

			$sql_res3 = $main->q(implode(" UNION ",$array));

			

			while ($rows3 = mysql_fetch_array($sql_res3))
			{
				//echo $rows3["tab"]."/".$rows3["id"]."<br>";

				if (($_GET["id"]==$rows3["tab"])&& ($_GET["upd_rec"]==$rows3["id"])) $sel = "selected"; else $sel = "";

				echo "<option value='$rows3[tab]#$rows3[id]' $sel>".$main->get_record("pages",$rows3["tab"],"pages_name")." / ".$rows3["cat_title"]."</option>";
				//echo "<br>";
			}

		
		}
// GetCategs();


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
    <td><div class="logo" style="margin-left: 7px;">Менеджер фотографий</div></td>
    <td width="1"><input name="button" type="button" onClick="window.close()" value="Закрыть окно"></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="4" cellspacing="8">
<form action="<?php isset($edit_photo)?$add="?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&edit_photo=$edit_photo":$add="?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]; echo $PHP_SELF.$add; ?>" method="POST" ENCTYPE="multipart/form-data">

	<tr>
      <td width="150" align="right" valign="top"><strong class="text">Загрузка фотографий:</strong><br>
	<!--  <strong class="text">Подпись:</strong>-->
	  </td>

      <td><table width="490"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
		     <input name="dfile" type="file" style="width: 190px;" class="box"><br>
			 Большое фото:<br><input name="photo_title" type="text" value="<?php echo @$main->get_record("photos",$_GET["editph"],"title"); ?>" style="width: 190px;" class="box">
		  </td>
          <td><input type="submit" value="Внести изображение" class="boxBut"></td>
		


        </tr>
		
      </table>
	  <br>       
        <div align="left" style="margin-bottom: 3px;">
        У вас загружено <?php echo $main->get_photo("count"); ?> фотографий(ия)</div>
      
	  
	  <!-- Таблица с фотками СТАРТ -->
	  
	    <table border="0" cellspacing="3" cellpadding="3">
		

		 <?php $main->out_photo(); 
		 
		 
		 
		 
		 
		 
		 
	
		 ?>

		
        </table>

		<?php

			 $sql_q = "SELECT * FROM photos WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' ORDER BY sort DESC";

		 $sql_res= $main->q($sql_q);

echo "<br><br><div style='margin-left: 200px;'><a href='/admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&sortcorr=1'>Включить сортировку</a></div>";
echo "<br><br><table border=0 cellspacing=3>";



			 echo "<tr>";
			 echo "<td></td>";
			 echo "<td><b>Перемещение</b></td>";
			 echo "<td>Вн</td>";
			
			 echo "<td>Вх</td>";


			 echo "</tr>";
			  echo "<tr>";
			 echo "<td></td>";
			 echo "<td></td>";
			 echo "<td></td>";
			
			 echo "<td></td>";


			 echo "</tr>";

$i = 1;
		 while ($rows = mysql_fetch_array($sql_res))
		 {


			 echo "<tr>";
			 echo "<td><img src='/downloads/$rows[photos]' height=20></td>";
			 echo "<td>";

			 echo "<select name='changecats[$rows[id]]'>";
			 
			 GetCategs();

			 echo "</select>";
			 
			 echo "</td>";
			 echo "<td><a href='/admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&rec_up2=$rows[sort]&curr_id2=$rows[id]'><img src='/admin/images/ArrowDown_2.gif' border=0></a></td>";
			
			 echo "<td><a href='/admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&rec_dw2=$rows[sort]&curr_id2=$rows[id]'><img src='/admin/images/ArrowUp_2.gif' border=0></a></td>";


			 echo "</tr>";

			
			 
			 $i++;
		 }
		 echo "</table>";

		?>
		
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
</body>
</html>