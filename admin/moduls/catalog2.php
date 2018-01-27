<?php 
include ("$DOCUMENT_ROOT/Lib/php/func.object.php");

$func = new func();

include ("$DOCUMENT_ROOT/Lib/php/main.object.php");

$main = new main();

$catalog_table = "c_".$main->get_record("pages",$id,"pages")."_".$main->get_record("pages",$id,"L1").
		"_".$main->get_record("pages",$id,"L2");

	$sql_q2 = "CREATE TABLE  IF NOT EXISTS `$catalog_table` (".
		"`id` int(11) unsigned NOT NULL auto_increment,".
		"`cat_title` tinytext NOT NULL,".
		"`cat_desc` text NOT NULL,".
		"`cat_price` tinytext NOT NULL,".
		"`cat_number` tinytext NOT NULL,".
		"`cat_reserve` tinytext NOT NULL,".
		"`cat_photo` tinytext NOT NULL,".
		"`curr_date` tinytext NOT NULL,".
		"`publ` int(1) NOT NULL,".
		"`sort` int(11) NOT NULL,".
		"PRIMARY KEY  (`id`)".
		") ENGINE=MyISAM;";
	if (!$sql_res2 = mysql_query($sql_q2)) print "ERR: ".mysql_error();

if (isset($make_desc) && $make_desc==1 && isset($_POST["cat_title"]) && $_POST["cat_title"]!=="")
{
	isset($publ) && $publ!=="" ? $cpubl = 1 : $cpubl = 0;

	//isset($dfile) && $dfile!=="" ? $cat_photo = ", cat_photo='".$main->download("foto")."'" : $cat_photo = false;

	//$sql_q = "UPDATE pages SET cat_title='".trim($cat_title)."', cat_price='".trim($cat_price)."', cat_desc='".trim($cat_desc)."', curr_date='".date("m.d.y")."  ".date("H:i:s")."', publ='$cpubl' $cat_photo WHERE id='$id'";
	//$sql_res = $main->q($sql_q);

	
		$curr_date = date("d.m.y")."  ".date("H:i:s");

		if (isset($_POST["upd_rec"]) && $_POST["upd_rec"]!=="")
		{
			isset($dfile) && $dfile!=="" ? $cat_photo = ", cat_photo='".$main->download("foto")."'" : $cat_photo = false;

			$sql_q3 = "UPDATE $catalog_table SET cat_title='".trim($cat_title)."',cat_desc='".trim($cat_desc)."', cat_price='".trim($cat_price)."',cat_number='".trim($cat_number)."' $cat_photo WHERE id='".$_POST["upd_rec"]."'";
		
		    $sql_res3 = $main->q($sql_q3);
		}
		else
		{
		isset($publ) && $publ!=="" ? $cpubl = 1 : $cpubl = 0;

		$sql_q3 = "INSERT INTO $catalog_table (cat_title,cat_desc,cat_price,cat_number,cat_photo,curr_date,publ) VALUES ('".trim($cat_title)."','".trim($cat_desc)."','".trim($cat_price)."','".trim($cat_number)."','".
			$main->download("foto")."', '$curr_date','$cpubl')";
		
		$sql_res3 = $main->q($sql_q3);

		$main->q("UPDATE $catalog_table SET sort=id WHERE id='".mysql_insert_id()."'");
		}

	header ("Location: /admin/moduls/catalog.php?id=$id");
}
if (isset($del_photo) && $del_photo==1)
{
	$sql_q = "UPDATE pages SET cat_photo='' WHERE id='$id'";
	$sql_res = $main->q($sql_q);

	header ("Location: /admin/moduls/catalog.php?id=$id");
}
 ?>
<html>
<head>
<title>Каталог</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
<body>
<?php 

$sql_q = "SELECT * FROM pages WHERE id='$id'";
if (!$sql_res = $main->q($sql_q));

$rows = mysql_fetch_array($sql_res);

$rows["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<td width=\"10%\">&nbsp;&nbsp;&nbsp;<img src=\"/downloads/thumbnail.php?img_path=$rows[cat_photo]&px=50\" alt=\"Фото\" border=\"0\"><br>&nbsp;&nbsp;&nbsp;<a href=\"#\" onclick=\"if (!confirm('Удалить фото ?')) return false; else location.href='/admin/moduls/catalog.php?id=$rows[id]&del_photo=1';\">Удалить</a></td>";

$rows["publ"]==1 ? $publ_check = "checked" : $publ_check = "";

$pages = $main->get_record("pages",$id,"pages");
$pages_name = $main->get_record("pages",$id,"pages_name");
$L1 = $main->get_record("pages",$id,"L1");
$L2 = $main->get_record("pages",$id,"L2");

$sql_q_pages = $main->q("SELECT * FROM pages WHERE pages='$pages' AND L1=''");

$row_pages = mysql_fetch_array($sql_q_pages);
$res_pages = $row_pages["pages_name"];

$sql_q_l1 = $main->q("SELECT * FROM pages WHERE pages='$pages' AND L1='$L1' AND L2=''");

$row_l1 = mysql_fetch_array($sql_q_l1);
$res_l1 = $row_l1["pages_name"];

if ($L2!=="")
{
	$sql_q_l2 = $main->q("SELECT * FROM pages WHERE pages='$pages' AND L1='$L1' AND L2='$L2'");

	$row_l2 = mysql_fetch_array($sql_q_l2);
	$res_l2 = " / ".$row_l2["pages_name"];

}else $res_l2 = "";

$pname = $res_pages." / ".$res_l1.$res_l2;

$main->get_record($catalog_table,@$_GET["upd_rec"],"publ") == 1 ? $ch = "checked" : $ch = "";

$arr_head = array(
"id"=>$rows["id"],
"upd_rec"=>@$_GET["upd_rec"],
//"cat_title"=>$rows["cat_title"],
"cat_title"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_title"),
"cat_desc"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_desc"),
"cat_price"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_price"),
"cat_number"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_number"),
"cat_photo"=>$cat_photo,
"publ_check"=>$ch,
"name"=>$pname
);

echo $main->html("adm_catalog_head",$arr_head);

$sql_q = "SELECT * FROM $catalog_table ORDER BY sort ASC";
$sql_res = $main->q($sql_q);
while ($rows = mysql_fetch_array($sql_res))
{
	$rows["cat_photo"]==""?$foto="":
		$foto="<img src=\"/downloads/thumbnail.php?img_path=$rows[cat_photo]&px=20\">";
	$rows["publ"]==1 ? $check = "checked" : $check = "";

	$array = array(
		"check"=>$check,
		"cat_title"=>$rows["cat_title"],
		"curr_date"=>$rows["curr_date"],
		"cat"=>$_GET["id"],
		"id"=>$rows["id"],
		"sort_recs"=>$rows["sort"],
		"foto"=>$foto
		);
	echo $main->html("adm_catalog_cycle",$array);
}			
echo $main->html("adm_catalog_foot",false);
?>

</body>
</html>