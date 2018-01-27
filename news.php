<br><?php

  $limit = $main->max_ads * $main->cpage; 



			  $sql_qs = "SELECT * FROM ".$main->pre."news WHERE publ!='1' ORDER BY sort DESC LIMIT $limit,$main->max_ads";


			  $sql_q = "SELECT * FROM ".$main->pre."news WHERE publ!='1'   ORDER BY sort DESC LIMIT $limit,$main->max_ads";
		      
			  $sql_res = $main->q($sql_q);
			  
			  while ($rows = mysql_fetch_array($sql_res))
				  {
					  echo $rows["news_date"];
					  echo "<br><br>";
		
					  ?>


<H3><?php echo $rows["news_title"]; ?></H3>
<TABLE>
<TR>
	
<TD>	<p><?php if (isset($rows["photo"]) && $rows["photo"]!=="") echo "<img src='/downloads/$rows[photo]' border=0 style='MARGIN-RIGHT: 10px' >"; ?></p></td>
<td valign=top>

</font>
<p><?php if (isset($rows["news_small_desc"]) && $rows["news_small_desc"]!=="") echo $rows["news_small_desc"]; ?></p>
</td>

</TR>
</TABLE>


<TABLE  width=90% align=left>
<TR>
	<TD align=left><A href="/?page=new&nid=<?php echo $rows["id"]; ?>">Подробнее..</A></TD>
	
	<TD align=right></TD>
</TR>
</TABLE><br><br>



					  <?php

			 // echo "<p>$ndate <a href='/?page=new&nid=$rows[id]'>$rows[news_title]</a><br>$rows[news_small_desc]</p>";
				  }


print "<br><div align=right style='width: 85%; '>".$main->scroll($sql_qs,"/new")."</div>";
		

			?>

