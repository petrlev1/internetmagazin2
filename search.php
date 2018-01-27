<?php
$keyword = strip_tags(trim($_GET["keyword"]));
if (strlen($keyword)<3)
{
	print "<b>Внимание! Ключевое слово должно содержать минимум 3 символа!</b>";
}
else{
$sql_q = "SHOW TABLES LIKE 'catalog_%'";
$sql_res = $main->q($sql_q);
while ($rows = mysql_fetch_row($sql_res))
{
	foreach ($rows as $row)
	{
		$tabs_arr[] = "SELECT * FROM $row WHERE cat_title REGEXP '$keyword' or cat_desc REGEXP '$keyword' AND publ!='1'";
	 $sql_q2 = "SELECT * FROM $row WHERE cat_title REGEXP '$keyword' or cat_desc REGEXP '$keyword' AND publ!='1'";  
	 $sql_res2 = $main->q($sql_q2);
	 while ($rows2=mysql_fetch_array($sql_res2))
		{
		 $arr_cat = explode("_",$row);
		$curr_tab[] = $arr_cat[1];
		}
	}
}
$max_rows = 10;

if (!isset($currpage) || $currpage=="") $currpage=0;

$l =  $currpage*$max_rows;

if (!$sql_res = mysql_query(implode(" UNION ",$tabs_arr))) print "ERR: ".mysql_error();

$count = mysql_num_rows(mysql_query(implode(" UNION ",$tabs_arr)));

if ($count==0)
	{
	print "<b>Извините, по Вашему запросу ничего не найдено.</b>";
	}
else{
$pages_count = ceil($count/$max_rows);


for ($i=1;$i<$pages_count+1;$i++)
		{
			$i2= $i-1;
			if ($currpage==$i2) 
			{
				$scroll_arr[] = "<b>$i</b>";
			}
			else
			$scroll_arr[] = "<a href=\"/?page=search&incat=1&keyword=".urlencode($_GET["keyword"])."&currpage=$i2\">$i</a>";
		}

$back_arr = $currpage-1;
$forward_arr = $currpage+1;

if ($currpage==0 || $currpage < 0)
{
	$back_arr_html = "";
}
else $back_arr_html = "<a href=\"/?page=search&incat=1&keyword=".urlencode($_GET["keyword"])."&currpage=$back_arr\" style='text-decoration: none;'>«</a> ";

$pages_count2 = $pages_count-1;

if ($currpage==$pages_count2 || $currpage > $pages_count2)
{
	$forward_arr_html = "";
}
else $forward_arr_html = " <a href=\"/?page=search&incat=1&keyword=".urlencode($_GET["keyword"])."&currpage=$forward_arr\" style='text-decoration: none;'>»</a> ";

print "<div align=\"left\">Страницы: ".$back_arr_html.implode(" | ",$scroll_arr).$forward_arr_html."</div><br>";


$sql_q1 = implode(" UNION ",$tabs_arr)." LIMIT $l, $max_rows";
$sql_res1 = $main->q($sql_q1);

$i=0;
while ($rows1 = mysql_fetch_array($sql_res1))
{


	

			$desc = trim(strip_tags($rows1["cat_desc"]));

			strlen($desc)>120 ? $dd = ".." : $dd = "";


			?>
			

<font  size=2><? echo "<a href='/products.php?category=".$main->get_record($main->pre."pages",$curr_tab[$i],"pages")."&id=".$curr_tab[$i]."' class='blogsection'>".$main->search_fill_keyword($main->upfirst($rows1["cat_title"]),$keyword)."</a>"; ?></font><br><font  size=1><? echo $main->upfirst($main->search_fill_keyword(substr($desc,0,120),$keyword)).$dd; ?></font><br>


<? 
$i++;
}}} ?><br><br><br>