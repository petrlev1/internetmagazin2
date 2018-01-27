<?php 
include ("$DOCUMENT_ROOT/Lib/php/func.object.php");

$func = new func();

include ("$DOCUMENT_ROOT/Lib/php/main.object.php");

$main = new main();

$catalog_table = "tab_rugs";


	

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


 ?>
<html>
<head>
<title>Коллекции</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
<body>
<?php 




echo $main->html("adm_coll_head",false);


$sql_q = "SELECT * FROM $catalog_table ORDER BY sort ASC";
$sql_res = $main->q($sql_q);
while ($rows = mysql_fetch_array($sql_res))
{

	$rows["publ"]==1 ? $check = "checked" : $check = "";

	
echo $rows["id"];


	$array = array(
		"check"=>$check,
		"cat_title"=>$rows["cat_title"],
		"curr_date"=>$rows["curr_date"],
		"cat_number"=>$rows["cat_number"],
		"cat"=>$_GET["id"],
		"id"=>$rows["id"],
		"sort_recs"=>$rows["sort"]
		);

		
	echo $main->html("adm_coll_cycle",$array);
}			
echo $main->html("adm_coll_foot",false);
?>

</body>
</html>