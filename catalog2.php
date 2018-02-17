<?php



if (isset($_GET["page"]) && $_GET["page"]!=="")
{
	$add = "&page=".$_GET["page"]."";
}else $add = "";
?> <div class="frame-header-category">
        <div class="header-category f-s_0">
            <div class="inside-padd clearfix">
                <!-- Start. Order by block -->
                <div class="frame-sort f_l">
                    <span class="title s-t f_l">Сортировать:</span>
                    <ul class="nav-sort nav f_l" id="sort" name="order">
                                                                         
                                                        <li>
                                <a href="/<?php echo $_GET["category"]; ?>/<?php echo $_GET["id"]; ?>/price.htm" class="d_l_3">От дешевых к дорогим</a>
                                </li>
                                                        <li>
                                <a href="/<?php echo $_GET["category"]; ?>/<?php echo $_GET["id"]; ?>/price-desc.htm" class="d_l_3">От дорогих к дешевым</a>
                                </li>
                                                        <!--<li>
                                <button type="button" data-value="hit" class="d_l_3">Популярные</button>
                                </li>
                                                        <li>
                                <button type="button" data-value="rating" class="d_l_3">Рейтинг</button>
                                </li>
                                                        <li>
                                <button type="button" data-value="hot" class="d_l_3">Новинки</button>
                                </li>-->
                                                </ul>
                </div>
             
            </div>
    
        </div>
    </div>


<form style="display:none" method="post" name="qua" action="/products.php?category=<?php echo $_GET["category"]; ?>&id=<?php echo $_GET["id"]; ?>">
	<input type="hidden" name="quantity2" id="quantity2">
	<input type="hidden" name="incart2" id="incart2">
	<input type="hidden" name="price2" id="price2">

	<input type="submit">
</form>

<!--
<div class="izo-zoom">
  <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
  <img src="/downloads/none.jpg" />
  <img src="/downloads/none.jpg" />
</div>
-->

<table class="price_price" width=100%>
	<tbody>
		<tr>
			<td  colspan="9">Прайс-лист на <?php echo $main->tolower($main->get_record($main->pre."pages",$_GET["id"],"pages_name")); ?></td>
		</tr>
		<tr>
			<td  rowspan="2"></td>
			<td  rowspan="2">Наименование</td>
			
			
			
			<td  rowspan="2">Кол-во</td>
		  	<td  colspan="2">Цена, Руб.</td>
			<td  rowspan="2">Купить</td>
		</tr>

				
				
					<?php

					$catalog_table = "catalog_".$_GET["id"];

					$ItemsOnPage = 12;





					$count = mysql_num_rows(mysql_query("SELECT * FROM $catalog_table WHERE publ!='1'"));


					if (!isset($_GET["page"])) $cpage = 1; else $cpage = $_GET["page"];

					#print $cpage;
					
					$TotalPages = ceil($count/$ItemsOnPage);

					$limit = $cpage*$ItemsOnPage-$ItemsOnPage;

					if (isset($_GET["sort"]) && $_GET["sort"]!=="")
					{
						switch ($_GET["sort"])
						{
							case "date":
								$sort = "ORDER BY curr_date DESC";
							break;

							case "price":
								$sort = "ORDER BY cat_price ASC";
							break;

							case "price-desc":
								$sort = "ORDER BY cat_price DESC";
							break;
						}
					}else
					   $sort = "ORDER BY sort ASC";



		    if (isset($_SESSION["customer"])) 
			{
			$sql_q3 = "SELECT * FROM $catalog_table WHERE publ!='1' $sort LIMIT $limit,$ItemsOnPage";
					$sql_res3 = $main->q($sql_q3);

					while ($rows3 = mysql_fetch_array($sql_res3))
					{
						$array[$rows3["cat_number"]] = $rows3["valute"];
					}

				
				$NewPrices = $main->GetDMSIData($_SESSION["log"],$array);
			}	

			#print_r($main->GetDMSIData($_SESSION["log"],$array));

			

	

$sql_q2 = "SELECT * FROM $catalog_table WHERE publ!='1' $sql_filtr $sort";

					#$sql_q2 = "SELECT * FROM $catalog_table WHERE publ!='1' $sql_filtr $sort LIMIT $limit,$ItemsOnPage";
					$sql_res2 = $main->q($sql_q2);

					while ($rows2 = mysql_fetch_array($sql_res2))
					{
						$array = array(0=>"first",1=>"",2=>"last");


						if ($main->GetPhotos($_GET["id"],$rows2["id"])) {


							$img = "/downloads/".$main->GetPhotos($_GET["id"],$rows2["id"]);
						}else{
							$img = "/images/cdi_coming_soon_img-450x450.png";
						}



					?>
				
		<tr>
		  <tr>
		  <td onMouseOver="document.getElementById('uvel_<?php echo $rows2["id"]; ?>').style.display='block';" onMouseOut="document.getElementById('uvel_<?php echo $rows2["id"]; ?>').style.display='none';" style="background-image: url('/downloads/<?php echo $main->GetPhotos($_GET["id"],$rows2["id"]); ?>'); background-size: contain; background-position: center; background-repeat:no-repeat; width: 50px; height: 50px;">




<!-- 
products.php?category=<?php echo $_GET["category"]; ?>&id=<?php echo $_GET["id"]; ?>&cid=<?php echo $rows2["id"]; ?>

-->
</td>



    <td  width=400 style="text-align: left;"><a href="/<?php echo $_GET["category"]; ?>/<?php echo $_GET["id"]; ?>/<?php echo $rows2["id"]; ?>.htm" style="text-decoration: none;"><!--<img src="<?php echo $img; ?>"  width="30"  />--><?php echo $rows2["cat_title"]; ?></a>


		<div id="uvel_<?php echo $rows2["id"]; ?>" class="imgCatalogLine" align=left><?php echo "<img src='$img'>"; ?></div>

</td>
    
    
    
	


<?php 

$scount = mysql_num_rows(mysql_query("SELECT id FROM skidki WHERE cata='".$_GET["id"]."'"));
?>


  

<input type="hidden" id="cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>" value="<?php echo trim(str_replace(" ","",$rows2["cat_price"])); ?>">

	<td><input type="number" step="1" min="1" max="9999999" name="pquantity_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>" id="pquantity_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>" value="1" title="Кол-во" style="width: 30px;" /></td>
	
	<?php 


if ($scount=="0")
						{

	

	?>
	
	<script>
$("#pquantity_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>").bind('keyup mouseup', function () {
   document.getElementById('price_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').innerHTML=$(this).val()*document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;            
});
</script><?php
						}else {
	?>
	

	<script>
$("#pquantity_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>").bind('keyup mouseup', 
		
	function () {<?php

				echo "var skidka1 = ".$main->GetSkidka(0,"price",$_GET["id"]).";";
				echo "var skidka1_proc = ".$main->GetSkidka(0,"proc",$_GET["id"]).";";
           
		   if ($scount=="2")
			{

				echo "skidka2 = ".$main->GetSkidka(1,"price",$_GET["id"]).";";
		        echo "var skidka2_proc = ".$main->GetSkidka(1,"proc",$_GET["id"]).";";
			}
			elseif ($scount=="3")
			{
				echo "skidka2 = ".$main->GetSkidka(1,"price",$_GET["id"]).";";
		        echo "var skidka2_proc = ".$main->GetSkidka(1,"proc",$_GET["id"]).";";

				echo "skidka3 = ".$main->GetSkidka(2,"price",$_GET["id"]).";";
		        echo "var skidka3_proc = ".$main->GetSkidka(2,"proc",$_GET["id"]).";";
			}
			elseif ($scount=="4")
			{
				echo "skidka2 = ".$main->GetSkidka(1,"price",$_GET["id"]).";";
		        echo "var skidka2_proc = ".$main->GetSkidka(1,"proc",$_GET["id"]).";";

				echo "skidka3 = ".$main->GetSkidka(2,"price",$_GET["id"]).";";
		        echo "var skidka3_proc = ".$main->GetSkidka(2,"proc",$_GET["id"]).";";

				echo "skidka4 = ".$main->GetSkidka(3,"price",$_GET["id"]).";";
		        echo "var skidka4_proc = ".$main->GetSkidka(3,"proc",$_GET["id"]).";";
			}
			elseif ($scount=="5")
			{
				echo "skidka2 = ".$main->GetSkidka(1,"price",$_GET["id"]).";";
		        echo "var skidka2_proc = ".$main->GetSkidka(1,"proc",$_GET["id"]).";";

				echo "skidka3 = ".$main->GetSkidka(2,"price",$_GET["id"]).";";
		        echo "var skidka3_proc = ".$main->GetSkidka(2,"proc",$_GET["id"]).";";

				echo "skidka4 = ".$main->GetSkidka(3,"price",$_GET["id"]).";";
		        echo "var skidka4_proc = ".$main->GetSkidka(3,"proc",$_GET["id"]).";";

				echo "skidka5 = ".$main->GetSkidka(4,"price",$_GET["id"]).";";
		        echo "var skidka5_proc = ".$main->GetSkidka(4,"proc",$_GET["id"]).";";
			}
			

			?>

		var summa2;

		var summa3;

		var proc;

		var res = document.getElementById('price_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>');

		var kol = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value

		var summa = $(this).val()*kol;

		var price_const = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
	

		if (summa>skidka1)
		{
			

			var price_const_proc = (price_const*skidka1_proc)/100;

           document.qua.price2.value = price_const - price_const_proc;


			proc = skidka1_proc;

			summa2 = summa - (summa*skidka1_proc)/100;

			<?php

			if ($scount=="2")
			{
				?>

			if (summa>skidka2)
			{
				var price2_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;

			    var price2_2_proc = (price_const*skidka2_proc)/100;

                document.qua.price2.value = price2_2 - price2_2_proc;

				proc = skidka2_proc;

				summa2 =  summa - (summa*skidka2_proc)/100;	 
			}
			<?php 
			
			} 
			if ($scount=="3")
			{
				?>

if (summa>skidka2)
			{
				var price2_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price2_2_proc = (price_const*skidka2_proc)/100;
                document.qua.price2.value = price2_2 - price2_2_proc;
				proc = skidka2_proc;
				summa2 =  summa - (summa*skidka2_proc)/100;	
			}

			if (summa>skidka3)
			{
				var price3_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price3_2_proc = (price_const*skidka3_proc)/100;
                document.qua.price2.value = price3_2 - price3_2_proc;
				proc = skidka3_proc;
				summa2 =  summa - (summa*skidka3_proc)/100;	 
			}
			<?php
			}

			if ($scount=="4")
			{		?>
if (summa>skidka2)
			{
				var price2_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price2_2_proc = (price_const*skidka2_proc)/100;
                document.qua.price2.value = price2_2 - price2_2_proc;
				proc = skidka2_proc;
				summa2 =  summa - (summa*skidka2_proc)/100;	
			}

			if (summa>skidka3)
			{
				var price3_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price3_2_proc = (price_const*skidka3_proc)/100;
                document.qua.price2.value = price3_2 - price3_2_proc;
				proc = skidka3_proc;
				summa2 =  summa - (summa*skidka3_proc)/100;	 
			}
			if (summa>skidka4)
			{
				var price4_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price4_2_proc = (price_const*skidka4_proc)/100;
                document.qua.price2.value = price4_2 - price4_2_proc;
				proc = skidka4_proc;
				summa2 =  summa - (summa*skidka4_proc)/100;	 
			}

			
			<?php
			}
			if ($scount=="5")
			{		?>
if (summa>skidka2)
			{
				var price2_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price2_2_proc = (price_const*skidka2_proc)/100;
                document.qua.price2.value = price2_2 - price2_2_proc;
				proc = skidka2_proc;
				summa2 =  summa - (summa*skidka2_proc)/100;	
			}

			if (summa>skidka3)
			{
				var price3_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price3_2_proc = (price_const*skidka3_proc)/100;
                document.qua.price2.value = price3_2 - price3_2_proc;
				proc = skidka3_proc;
				summa2 =  summa - (summa*skidka3_proc)/100;	 
			}
			if (summa>skidka4)
			{
				var price4_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price4_2_proc = (price_const*skidka4_proc)/100;
                document.qua.price2.value = price4_2 - price4_2_proc;
				proc = skidka4_proc;
				summa2 =  summa - (summa*skidka4_proc)/100;	 
			}
			if (summa>skidka5)
			{
				var price5_2 = document.getElementById('cuprice_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value;
			    var price5_2_proc = (price_const*skidka5_proc)/100;
                document.qua.price2.value = price5_2 - price5_2_proc;
				proc = skidka5_proc;
				summa2 =  summa - (summa*skidka5_proc)/100;	 
			}

			
			<?php
			}
			
			?>










		
			summa3 = '<s>' + summa + '</s>&nbsp;&nbsp;' + '<font color=red>' + summa2 + '</font><br>(' + proc + '%&nbsp;скидка!)';
		}
		else
			summa3 = summa;
			
		
		
		res.innerHTML=summa3; 
		// document.qua.submit();
});
</script><?php } ?>
  <td colspan="2" id="price_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>"><?php echo str_replace(" ","&nbsp;",$rows2["cat_price"]); ?></td>
	<td><input type="button" name="submit" value="В корзину" class="btn btn-success" title="В корзину" onclick="document.qua.incart2.value='<?php echo $rows2["id"]; ?>'; document.qua.quantity2.value=document.getElementById('pquantity_<?php echo $_GET["id"] ?>_<?php echo $rows2["id"]; ?>').value; document.qua.submit();" />
	

  </td>
  </tr>


	
<!--<a rel="nofollow" href="/products.php?category=<?php echo $_GET["category"]; ?>&id=<?php echo $_GET["id"]; ?>&incart=<?php echo $rows2["id"]; ?>" data-quantity="1" data-product_id="280668" data-product_sku="FS-RAG-10LB-TAN" class="button product_type_simple add_to_cart_button">Add to cart</a>-->

<?php
					}
		?>

				
	</tbody>
</table>
				
<!--

			<nav class="woocommerce-pagination">
	<ul class='page-numbers'><?php

	isset($_GET["sort"]) && $_GET["sort"]!=="" ? $addsort = "&sort=".$_GET["sort"] : $addsort = "";

for ($i=1; $i<=$TotalPages; $i++)
{
	    if ($cpage==$i) 
	{
			print "<li><span class='page-numbers current'>$i</span></li>";
	}
	else {

		print "<li><a class='page-numbers $current'  href='/products.php?category=".$_GET["category"]."&id=".$_GET["id"]."&page=$i".$addsort."'>$i</a></li>";
	}
}
	?>
</ul>
</nav>
-->