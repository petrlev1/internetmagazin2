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



	<div class="images"><img src="<?php echo $img; ?>" border=0 width=300>
	</div><br>

	<div class="summary entry-summary">




	<p class="price"><b>Цена:</b>&nbsp;&nbsp;&nbsp;&nbsp;<font size=5><?php 

	echo $price;
	

	
	
	
	?>&nbsp;</font> Руб.</p>


<?php
#echo $descr;
?>





<script>
			
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



	   &nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-secondary" value="Добавить в корзину">


</form>




	</div><!-- .summary -->




	

<!-- #product-50285 -->

<div class="productText">

<?php 

$sql_q = "SELECT * FROM catalog_".$_GET["id"]." WHERE id=".$_GET["cid"];
$sql_res = $main->q($sql_q);
$rows = mysql_fetch_array($sql_res);

print $rows["cat_desc"];

?>

</div>
		

			            

			
