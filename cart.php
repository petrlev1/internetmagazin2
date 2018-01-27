 <?php

if (mysql_num_rows(mysql_query("SELECT * FROM $main->temptable WHERE id!='1'"))==0)
{
	echo "<b>Ваша корзина пуста..</b>";
}else{
 ?>
 <table width="100%"  class="price_price2" >
  <tr align="left" >
 

<td   align=center><font >Фото</font></td>

<td align=center><font >Наименование</font></td>

<td align=center><font >Характеристики</font></div></td>

<td align=center><font >Цена</font></div></td>


<td align=center width=25><font>Количество</font></div></td>


<td align=center><font >Удалить</font></div></td>

</tr>

<FORM METHOD=POST ACTION="/?page=cart">

<?php

$totalprice = array();

$sql_q = "SELECT * FROM $main->temptable WHERE id!='1' GROUP BY id1,id2 ORDER BY id ASC";
$sql_res = $main->q($sql_q);

while ($rows = mysql_fetch_array($sql_res))
{
	//echo $main->shtuk($rows["id2"],$rows["id1"]);

	$category = $main->get_record($main->pre."pages",$rows["id1"],"pages");

	$cat_price = $rows["param1"];

	$id2 = $main->get_l1($main->get_record($main->pre."pages",$rows["id1"],"pages"),"id");

	if ($main->GetPhotos($rows["id1"],$rows['id2'])) {


							$img = "/downloads/".$main->GetPhotos($rows["id1"],$rows['id2']);
						}else{
							$img = "/images/cdi_coming_soon_img-450x450.png";
						}
		

	?>
	<tr align="left">


<td ><center><a href="/products.php?category=<? echo $category; ?>&id=<? echo $rows["id1"]; ?>&cid=<? echo $rows["id2"]; ?>">

<img src="<?php echo $img;  ?>" style ="height: 40px;" alt="<?php echo $main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_title"); ?>" border="0">



</a></center></td>





<td align="center" ><div class="catalogTextFont">&nbsp;&nbsp;<a href="/products.php?category=<? echo $category; ?>&id=<? echo $rows["id1"]; ?>&cid=<? echo $rows["id2"]; ?>"><b><font color=black><?php echo $main->upfirst($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_title")); ?></font></b></a><?php echo $brend; ?></div></td>

<td align="left" ><div  align="left" style="font-size: 8pt;">

<b>Производитель:</b>&nbsp;&nbsp;<?php 

if ($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_reserve")=="") echo "-";
else echo $main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_reserve"); 


?>
<br>
<b>Толщина:</b>&nbsp;&nbsp;<?php 

if ($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_sizes")=="") echo "-";
else echo $main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_sizes");

?>

<br>
<b>Цвет:</b>&nbsp;&nbsp;<?php 

if ($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_colors")=="") echo "-";
else echo $main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_colors"); ?>

</div></td>



<td align=center ><div class="catalogTextFont"><?php echo $main->CartPrice ($rows["id1"],$rows["id2"])."&nbsp;руб."; ?></div>


</td>



<td align=center >



<input type="number" step="1" min="1" max="9999999"  NAME="shtuk[<?php echo $rows["id1"]."#".$rows["id2"]."#".urlencode($rows["param1"])."#".urlencode($rows["param2"])."#".$rows["param3"]; ?>]" value="<?php echo $main->shtuk($rows["id2"],$rows["id1"],$rows["param1"],$rows["param2"]); ?>" title="Кол-во" style="width: 30px;">&nbsp;&nbsp;</td>



<td align="center" ><div class="catalogTextFont"><a href="#" onclick="if (!confirm('Удалить товар из корзины ?')) return false; else location.href='/?page=cart&dfc=<?php echo $rows["id"]; ?>';"><img src="/admin/images/del.gif" border=0></a></div></td>

</tr>

<?php


$totalprice[]= $main->CartPrice($rows["id1"],$rows["id2"]);

		}

?>


    </tr></table><br>

	<div align=right><font size=3><b>Итого:</b></font><font color=red size=3> <?php echo array_sum ($totalprice); ?></font> <font size=3>руб.</font></div>
	<br><div align=right>
	
	
	<div class="btn-buy-p btn-buy">
	<INPUT TYPE="button" class=box2  onClick="location.href='/?page=sendform'" value="Оформить заказ"></div>&nbsp;&nbsp;&nbsp;&nbsp;<div class="btn-buy-p btn-buy"><INPUT TYPE="submit" class=box2  value="Пересчитать" class="formbox"></div></div></FORM><?php } ?>