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

	$category = $main->tech_translate($main->tolower($main->get_record($main->pre."pages",$rows["id1"],"pages_name")),"eng");

	$cat_price = $rows["param1"];

	$id2 = $main->get_l1($main->get_record($main->pre."pages",$rows["id1"],"pages"),"id");

	if ($main->GetPhotos($rows["id1"],$rows['id2'])) {


							$img = "/downloads/".$main->GetPhotos($rows["id1"],$rows['id2']);
						}else{
							$img = "/images/cdi_coming_soon_img-450x450.png";
						}
		

	?>
	<tr align="left">


<td ><center><a href="/<?php echo $category; ?>/<?php echo $rows["id1"]; ?>/<?php echo $rows["id2"]; ?>.htm">

<img src="<?php echo $img;  ?>" style ="height: 40px;" alt="<?php echo $main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_title"); ?>" border="0">



</a></center></td>





<td align="center" ><div class="catalogTextFont">&nbsp;&nbsp;

<a href="/<?php echo $category; ?>/<?php echo $rows["id1"]; ?>/<?php echo $rows["id2"]; ?>.htm"><b><font color=black><?php echo $main->upfirst($main->get_record("catalog_".$rows["id1"],$rows["id2"],"cat_title")); ?></font></b></a>

<?php echo $brend; ?></div></td>



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
	
	
	
	<INPUT TYPE="button" class="btn btn-secondary" onClick="location.href='/?page=sendform'" value="Оформить заказ">&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="submit" class="btn btn-secondary" value="Пересчитать" class="formbox"></div></FORM><?php } ?>