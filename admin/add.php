<?php
error_reporting(E_ALL);

include ($DOCUMENT_ROOT."/Lib/php/func.object.php");

include ($DOCUMENT_ROOT."/Lib/php/main.object.php");

$main = new main();

$menu = array(
"sitemap"=>"Карта сайта"
);

foreach ($menu as $key=>$value)
{
$sql_q = "INSERT INTO pages (topics, pages_name) VALUES ('$key','$value')";
$main->q($sql_q);

$id = mysql_insert_id();

$sql_q2 = "UPDATE pages SET sort='$id' WHERE id='$id'";
$sql_res2 = $main->q($sql_q2);
}
?>