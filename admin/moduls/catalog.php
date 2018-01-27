<?php 
include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/func.object.php");

$func = new func();

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/main.object.php");

$main = new main();



	if (isset($_POST["minorimg"]))
	{
		$sql_q = "UPDATE ".$main->pre."pages SET cat_photo='".$main->download("foto")."' WHERE id='".$_GET["id"]."'";
		$sql_res = $main->q($sql_q);

		header ("Location: /admin/moduls/catalog.php?id=".$_GET["id"]);

	}

$main->get_record($main->pre."pages",$_GET["id"],"cat_photo")=="" ? $minorimg = "" :  $minorimg = "<img src='/downloads/".$main->get_record($main->pre."pages",$_GET["id"],"cat_photo")."' height='50'>";

$catalog_table = "catalog_".$_GET["id"];

	$sql_q2 = "CREATE TABLE  IF NOT EXISTS `$catalog_table` (".
		"`id` int(11) unsigned NOT NULL auto_increment,".
		"`cat_title` tinytext NOT NULL,".
		"`cat_desc` text NOT NULL,".
		"`cat_price` tinytext NOT NULL,".
		"`cat_price2` tinytext NOT NULL,".
		"`cat_number` tinytext NOT NULL,".
		"`cat_reserve` text NOT NULL,".
		"`cat_colors` mediumtext NOT NULL,".
		"`cat_sizes` mediumtext NOT NULL,".
		"`valute` varchar(5) NOT NULL,". 
		"`cat_photo` tinytext NOT NULL,".
		"`curr_date` datetime NOT NULL,".
		"`publ` int(1) NOT NULL,".
		"`sort` int(11) NOT NULL,".
		"PRIMARY KEY  (`id`)".
		") ENGINE=InnoDB AUTO_INCREMENT=1;";


	if (!$sql_res2 = mysql_query($sql_q2)) print "ERR: ".mysql_error();

	if (isset($_POST['change']) && $_POST['change']==1)
		{
			$sql_q2 = $main->q("UPDATE $catalog_table SET publ='0'");


			

	if (isset($_POST['visible']))
			{
			foreach ($_POST['visible'] as $value)
				{
				
			

				$sql_q = "UPDATE $catalog_table SET publ='1' WHERE id='$value'";
				$main->q($sql_q);

				
				}
			}
		}
if (isset($_POST["make_desc"]) && $_POST["make_desc"]==1 && isset($_POST["cat_title"]) && $_POST["cat_title"]!=="")
{
	isset($publ) && $publ!=="" ? $cpubl = 1 : $cpubl = 0;

	//isset($dfile) && $dfile!=="" ? $cat_photo = ", cat_photo='".$main->download("foto")."'" : $cat_photo = false;

	//$sql_q = "UPDATE pages SET cat_title='".trim($cat_title)."', cat_price='".trim($cat_price)."', cat_desc='".trim($cat_desc)."', curr_date='".date("m.d.y")."  ".date("H:i:s")."', publ='$cpubl' $cat_photo WHERE id='$id'";
	//$sql_res = $main->q($sql_q);


	// cat_reserve

	
		$curr_date = date("d.m.y")."  ".date("H:i:s");

		if (isset($_POST["upd_rec"]) && $_POST["upd_rec"]!=="")
		{

			isset($_POST["dfile"]) && $_POST["dfile"]!=="" ? $cat_photo = ", cat_colors='".$main->download("foto")."'" : $cat_photo = "";

			$cat_title = str_replace("'","`",$_POST["cat_title"]);
			$cat_desc = str_replace("'","`",$_POST["input"]);

			$sql_q3 = "UPDATE $catalog_table SET cat_title='".trim($_POST["cat_title"])."',cat_number='".trim($_POST["sizes"])."',cat_reserve ='".trim($_POST["cat_reserve"])."',cat_colors='".trim($_POST["cat_colors"])."',cat_sizes='".trim($_POST["cat_sizes"])."',cat_desc='".trim($cat_desc)."', cat_price='".trim($_POST["cat_price"])."',cat_price2='".trim($_POST["cat_price2"])."' $cat_photo WHERE id='".$_POST["upd_rec"]."'";
		
		    $sql_res3 = $main->q($sql_q3);

				$arr = explode("_",$catalog_table);

		if ($main->get_record($main->pre."pages",$arr[1],"topics")=="uJerome_Botanic")
			{
			//echo "UPDATE tab_rugs SET cat_title=".trim($cat_title)." $cat_photo WHERE cat_num='$catalog_table' AND cat_id='".$_POST["upd_rec"]."'";

			$main->q ("UPDATE tab_rugs SET cat_title='".trim($cat_title)."' $cat_photo , sort='".trim($_POST["collpos"])."' WHERE cat_num='$catalog_table' AND cat_id='".$_POST["upd_rec"]."'");
			}


			
		}
		else
		{
		isset($_POST["publ"]) && $_POST["publ"]!=="" ? $cpubl = 1 : $cpubl = 0;

		$cat_title = str_replace("'","`",$_POST["cat_title"]);
			$cat_desc = str_replace("'","`",$_POST["input"]);

			$pho = $main->download("foto");

		$sql_q3 = "INSERT INTO $catalog_table (cat_title,cat_number,cat_reserve,cat_colors,cat_sizes,cat_desc,cat_price,cat_price2,valute,cat_photo,curr_date,publ) VALUES ('".trim($_POST["cat_title"])."','".trim($_POST["sizes"])."','".trim($_POST["cat_reserve"])."','".trim($_POST["cat_colors"])."','".trim($_POST["cat_sizes"])."','".trim($cat_desc)."','".trim($_POST["cat_price"])."','".trim($_POST["cat_price2"])."','','$pho', NOW(),'$cpubl')";
		
		$sql_res3 = $main->q($sql_q3);

		$idc = mysql_insert_id();

		$main->q("UPDATE $catalog_table SET sort=id WHERE id='".mysql_insert_id()."'");

		
		$arr = explode("_",$catalog_table);

		if ($main->get_record($main->pre."pages",$arr[1],"topics")=="uJerome_Botanic")
			{
			$main->q ("INSERT INTO tab_rugs (cat_title,cat_number,cat_photo,cat_num,cat_id,sort) VALUES ('".trim($_POST["cat_title"])."','".$_POST['sizes']."','$pho','$catalog_table','$idc','".trim($_POST["collpos"])."')");
			}
		}


		

if (isset($_POST["zona_selected"]) && $_POST["zona_selected"]!=="" )
	{
	// $main->q("DELETE FROM catalog_titles WHERE catalog='$catalog_table' AND idc='$idc'");

		foreach ($_POST["zona_selected"] as $key=>$value)
		{
			if ($main->undesirableid($idc,$catalog_table,$value)==0)
			{

			$sql_q = "INSERT INTO catalog_titles (idc,catalog,title) VALUES ('$idc','$catalog_table','$value')";
			
			$sql_res = $main->q($sql_q);
			}
			//$main->undesirableid($idc,$catalog_table,$value);
			
		}
    }

	//print_r($HTTP_POST_VARS);


	//header ("Location: /admin/moduls/catalog.php?id=$id");
}
if (isset($del_photo) && $del_photo==1)
{
	$sql_q = "UPDATE ".$main->pre."pages SET cat_photo='' WHERE id='$id'";
	$sql_res = $main->q($sql_q);

	header ("Location: /admin/moduls/catalog.php?id=$id");
}
  


$sql_q = "SELECT * FROM ".$main->pre."pages WHERE id='$id'";
if (!$sql_res = $main->q($sql_q));

$rows = mysql_fetch_array($sql_res);

$rows["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<td width=\"10%\">&nbsp;&nbsp;&nbsp;<img src=\"/downloads/thumbnail.php?img_path=$rows[cat_photo]&px=50\" alt=\"‘ото\" border=\"0\"><br>&nbsp;&nbsp;&nbsp;<a href=\"#\" onclick=\"if (!confirm('”далить фото ?')) return false; else location.href='/admin/moduls/catalog.php?id=$rows[id]&del_photo=1';\">”далить</a></td>";

$rows["publ"]==1 ? $publ_check = "checked" : $publ_check = "";

$pages = $main->get_record($main->pre."pages",$id,"pages");
$pages_name = $main->get_record($main->pre."pages",$id,"pages_name");
$L1 = $main->get_record($main->pre."pages",$id,"L1");
$L2 = $main->get_record($main->pre."pages",$id,"L2");

$sql_q_pages = $main->q("SELECT * FROM ".$main->pre."pages WHERE pages='$pages' AND L1=''");

$row_pages = mysql_fetch_array($sql_q_pages);
$res_pages = $row_pages["pages_name"];

$sql_q_l1 = $main->q("SELECT * FROM ".$main->pre."pages WHERE pages='$pages' AND L1='$L1' AND L2=''");

$row_l1 = mysql_fetch_array($sql_q_l1);
$res_l1 = $row_l1["pages_name"];

if ($L2!=="")
{
	$sql_q_l2 = $main->q("SELECT * FROM ".$main->pre."pages WHERE pages='$pages' AND L1='$L1' AND L2='$L2'");

	$row_l2 = mysql_fetch_array($sql_q_l2);
	$res_l2 = " / ".$row_l2["pages_name"];

}else $res_l2 = "";

$pname = $res_pages." / ".str_replace("32","-",$res_l1.$res_l2);

$doll_sel = "";
$eur_sel = "";
$rub_sel = "";

if ($main->get_record($catalog_table,@$_GET["upd_rec"],"valute")=="$")
{
	$doll_sel = "selected";
}
elseif ($main->get_record($catalog_table,@$_GET["upd_rec"],"valute")=="И")
{
	$eur_sel = "selected";
}
else 
{
	$rub_sel = "selected";
}


if (isset($_GET["upd_rec"]) && $_GET["upd_rec"]!=="")
{
	$utitles = array();
	$titles2 = array();


}else

$utitlesstr = "";
$brendsarr = array();


$sql_qb = "SELECT * FROM folders";
$sql_resb = $main->q($sql_qb);
while ($rowsb = mysql_fetch_array($sql_resb))
{
	$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_reserve") == "$rowsb[folders]" ? $selb = "selected" : $selb = "";

	$brendsarr[] = "<option value='$rowsb[folders]' $selb>$rowsb[folders]</option>";
}

$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_photo")=="" ? $cat_photo2 = "" : $cat_photo2 = "<td valign=top>&nbsp;&nbsp;<img src='/downloads/".$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_photo")."' height=37 border=0></td>";


$sql_q5= "SELECT * FROM intro ORDER BY sort ASC";
$sql_res5 = $main->q($sql_q5);

while ($rows5 = mysql_fetch_array($sql_res5))
{
	if ($rows5["collname"]==$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_colors")) $sel = "selected"; else $sel = "";
	$colors[] = "<option value=\"$rows5[collname]\" $sel>".$rows5["collname"];
}

$sql_q6= "SELECT * FROM intro2 ORDER BY sort ASC";
$sql_res6 = $main->q($sql_q6);

while ($rows6 = mysql_fetch_array($sql_res6))
{
	if ($rows6["collname"]==$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_sizes")) $sel2 = "selected"; else $sel2 = "";
	$thickness[] = "<option value=\"$rows6[collname]\" $sel2>".$rows6["collname"];
}

$sql_q7= "SELECT * FROM intro3 ORDER BY sort ASC";
$sql_res7 = $main->q($sql_q7);

while ($rows7 = mysql_fetch_array($sql_res7))
{
	if ($rows7["collname"]==$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_reserve")) $sel3 = "selected"; else $sel3 = "";
	$manuf[] = "<option value=\"$rows7[collname]\" $sel3>".$rows7["collname"];
}

$sql_q8= "SELECT * FROM intro4 ORDER BY sort ASC";
$sql_res8 = $main->q($sql_q8);

while ($rows8 = mysql_fetch_array($sql_res8))
{
	if ($rows8["collname"]==$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_number")) $sel4 = "selected"; else $sel4 = "";
	$sizes2[] = "<option value=\"$rows8[collname]\" $sel4>".$rows8["collname"];
}


$arr_head = array(

"id"=>$_GET["id"],
"colors"=>implode($colors),
"thickness"=>implode($thickness),
"sizes"=>implode($sizes2),
"brends"=>implode($brendsarr),
"manuf"=>implode($manuf),
#"collpos"=>$main->GetCollPos("tab_rugs",$catalog_table,@$_GET["upd_rec"]),
"upd_rec"=>@$_GET["upd_rec"],
"cat_number"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_number"),
"cat_reserve"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_reserve"),
"catcolors"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_colors"),
"catsizes"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_sizes"),
"cat_title"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_title"),
"cat_desc"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_desc"),
"cat_price"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_price"),
"cat_price2"=>$main->get_record($catalog_table,@$_GET["upd_rec"],"cat_price2"),
"minorimg"=>$minorimg,
"cat_photo"=>$cat_photo,
"cat_photo2"=>$cat_photo2,
"publ_check"=>$publ_check,
"upper_text"=>$main->get_record($main->pre."pages",@$_GET["id"],"reserve"),
"name"=>$pname,
"doll_sel"=>$doll_sel,
"eur_sel"=>$eur_sel,
"rub_sel"=>$rub_sel
);

echo $main->html("adm_catalog_head",$arr_head);

$diztopic = $main->get_record($main->pre."pages",$id,"topics");

$sql_q = "SELECT * FROM $catalog_table ORDER BY sort ASC";
$sql_res = $main->q($sql_q);
while ($rows = mysql_fetch_array($sql_res))
{
	/*
	$rows["cat_photo"]==""?$foto="":
		$foto="<img src=\"/downloads/thumbnail.php?img_path=$rows[cat_photo]&px=20\">";

	*/
	$rows["publ"]==1 ? $check = "checked" : $check = "";

	


$main->check_photos($_GET["id"],$rows["id"])==0 ? $foto = "" : $foto = "<img src=\"/admin/images/photo2.gif\">";

	$array = array(
		"brends"=>$main->GetBrends($rows["cat_reserve"]),
		"check"=>$check,
		"cat_title"=>$rows["cat_title"],
		"curr_date"=>$rows["curr_date"],
		"cat_number"=>$rows["cat_number"],
		"cat"=>$_GET["id"],
		"id"=>$rows["id"],
		"sort_recs"=>$rows["sort"],
		"foto"=>$foto,
		"dizayneri"=>"<SELECT NAME='dizayneri[$rows[id]]'><option value=''></option>".$main->GetDizayneri($diztopic,$catalog_table,$rows["id"])."</SELECT>"
		);

		
	echo $main->html("adm_catalog_cycle",$array);
}			
echo $main->html("adm_catalog_foot",false);
?>