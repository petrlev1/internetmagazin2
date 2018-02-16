  <nav>
    <table>
      <tbody>
        <tr><?php


			$sql_q = "SELECT * FROM ".$main->pre."pages WHERE topics='ukatalog' AND pages!='' AND L1='' AND publ!='1' ORDER BY sort ASC";
			$sql_res = $main->q($sql_q);

			while ($rows = mysql_fetch_array($sql_res)) 
			{

				$cpages = $rows["pages"];

				


		?>
		
<td>
    <div class="frame-item-menu">
        <div class="frame-title "><a href="<?php 
		

 if ($main->CheckKatalog($cpages)!=="0")
				{
	   print "/products.php?category=$rows[pages]&id=".$main->CheckKatalog($rows["pages"]);
				}

	else print "#";

?>" class="title active"><span class="helper"></span><span><span class="text-el"><?php echo $rows["pages_name"]; ?></span></span></a></div>
		
		<div class="frame-drop-menu1">
		  <ul class="items"><?php

		  if ($main->CheckKatalog($cpages)=="0") {

			 $sql_q2 = "SELECT * FROM ".$main->pre."pages WHERE topics='ukatalog' AND pages='$rows[pages]' AND L1!='' AND L2='' AND publ!='1' ORDER BY sort ASC";
				
				$sql_res2 = $main->q($sql_q2);

				while ($rows2 = mysql_fetch_array($sql_res2))
				{

			
?>
			
		     
			 
			 <li class="column_0">
			    <a href="<?php echo "/".$main->tech_translate($main->tolower($rows2["pages_name"]),"eng")."/".$rows2["id"].".htm"; ?>" title="1" class="title-category-l1 ">
				   <span class="helper"></span>
                   <span class="text-el"><?php echo $rows2["pages_name"]; ?></span>
				</a>
	        </li>
			<?php 

					}
			   }
			?>
		 </ul>
       </div>
</td><?php

			}

?>




		<!-- old menu
          <td>
    <div class="frame-item-menu active">
        <div class="frame-title is-sub"><a href="/" class="title active"><span class="helper"></span><span><span class="text-el">Каталог<span class="icon-arrow-d-menu"></span></span></span></a></div>
		
<div class="frame-drop-menu">
    <ul class="items"><?php


	

			$sql_q = "SELECT * FROM ".$main->pre."pages WHERE topics='ukatalog' AND pages!='' AND L1='' AND publ!='1' ORDER BY sort ASC";
			$sql_res = $main->q($sql_q);

			while ($rows = mysql_fetch_array($sql_res)) 
			{
				$sql_q2 = "SELECT * FROM ".$main->pre."pages WHERE topics='ukatalog' AND pages='$rows[pages]' AND L1!='' AND L2='' AND publ!='1' ORDER BY sort ASC";
				
				$sql_res2 = $main->q($sql_q2);

			

				

				

				?>
   
   <li class="column_0">
    <a href="<?php 
	
   if ($main->CheckKatalog($rows["pages"])!=="0")
				{
	   print "/products.php?category=$rows[pages]&id=".$main->CheckKatalog($rows["pages"]);
				}

	else print "#";
   
   
   ?>" title="<?php echo $rows["pages_name"]; ?>" class="title-category-l1  <?php if (mysql_num_rows($sql_res2)>0) echo "is-sub"; ?>">
        <span class="helper"></span>
        <span class="text-el"><?php echo $rows["pages_name"]; ?></span>
    </a>
	
    <?php
	

	print $main->GetSubItems($rows["pages"]);

				

 ?></li>


<?php } ?>

 
 
 
 </ul>






</div>    </div>
</td>
<?php 

$sql_q = "SELECT * FROM ".$main->pre."pages WHERE pages='' AND topics!='katalog'";
$sql_res = $main->q($sql_q);

while ($rows = mysql_fetch_array($sql_res))
{
?>
<td>
    <div class="frame-item-menu">
        <div class="frame-title"><a href="/?page=<?php echo $rows["id"]; ?>" class="title active"><span class="helper"></span><span><span class="text-el"><?php echo $rows["pages_name"]; ?></span></span></a></div>    </div>
</td>
<?php 
}
?>
-->
</tr>


    </tbody>
 </table>
</nav>