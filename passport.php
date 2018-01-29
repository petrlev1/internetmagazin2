<?php

$catalog = "catalog_".$_GET["id"];

	

	if ($main->GetPhotos($_GET["id"],$_GET["cid"])) 
		{
							$img = "/downloads/".$main->GetPhotos($_GET["id"],$_GET["cid"]);

						}else{
							$img = "/downloads/none.jpg";
						}



	$publ = $main->get_record($catalog,$_GET["cid"],"publ");

	$title = $main->get_record($catalog,$_GET["cid"],"cat_title");

	$descr = $main->get_record($catalog,$_GET["cid"],"cat_desc");

	$val = $main->get_record($catalog,$_GET["cid"],"valute");

	$price = $main->get_record($catalog,$_GET["cid"],"cat_price");

	$image!=="" ? $image = $main->get_record($catalog,$_GET["cid"],"cat_photo") : $image = "none.jpg";

	$logseller = $main->get_record($catalog,$_GET["cid"],"cat_number");

		#$main->GetDMSIGetPriceInfo($_SESSION["log"],$logseller,$val);


?>

<div itemscope itemtype="http://schema.org/Product" id="product-50285" class="post-50285 product type-product status-publish has-post-thumbnail product_cat-festool-abrasives shipping-taxable purchasable product-type-simple product-cat-festool-abrasives instock">

	<div class="images"><img src="<?php echo $img; ?>" border=0 width=300>
	</div><br>

	<div class="summary entry-summary">




	<p class="price"><b>Цена:</b>&nbsp;&nbsp;&nbsp;&nbsp;<font size=5><?php 

	echo $price;
	

	
	
	
	?>&nbsp;</font> Руб.</p>


<?php
#echo $descr;
?>





	<!--
	<form class="cart" method="post" enctype='multipart/form-data'>
	 	
	 	<div class="quantity">
	<input type="number" step="1" min="1" max="2" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" />
</div>

	 	<input type="hidden" name="add-to-cart" value="50285" />

	 	<button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>

			</form>
			--><script>
			
			function checkform()
			{
				if (document.cartform.asize.value=="")
				{
					alert ("Select size please!");
				}else 
					document.cartform.submit();
			}
			</script>
			<form class="cart" name="cartform" method="post" enctype='multipart/form-data' action="/products.php?category=<?php echo $_GET["category"]; ?>&id=<?php echo $_GET["id"]; ?>&cid=<?php echo $_GET["cid"]; ?>&incart=<?php echo $_GET["cid"]; ?>">


		
<br><input type="number" step="1" min="1" max="9999999" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" />



	   &nbsp;&nbsp;&nbsp;<div class="btn-buy-p btn-buy"><input type="submit" value="Добавить в корзину"></div>


</form>




	</div><!-- .summary -->




	

</div><!-- #product-50285 -->
<br>
<div class="f-s_0">


    <div class="frame-tabs-ref frame-tabs-product">
        <div id="view">

<br>
<?php 

$sql_q = "SELECT * FROM catalog_".$_GET["id"]." WHERE id=".$_GET["cid"];
$sql_res = $main->q($sql_q);
$rows = mysql_fetch_array($sql_res);

print $rows["cat_desc"];

?>
		<!--
                     <br><br>
                <div class="title-h2">Свойства</div>
           
           
						
						<table border="0" cellpadding="4" cellspacing="0" class="characteristic">
<tbody>
<tr>
<td>Мощность</td><td>3900 л/час</td></tr>
<tr>
<td>Вес, (кг)</td><td>16.5</td></tr>
</tbody>
</table>                 
                   -->

			            

</div>
			</div></div>
