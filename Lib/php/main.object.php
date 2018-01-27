<?php

class main extends func
{
	var $message;
	var $cat_name;
	var $temptable;

	function main()
	{
		global $HTTP_POST_VARS,$topic,$status,$load_file,$load_file_name,$dfile,$shtuk,$gettab;

		$this->db_connect();

		$this->file_size=1000000;
	    $this->file_dir=$_SERVER["DOCUMENT_ROOT"]."/downloads";

		$this->html_root=$_SERVER["DOCUMENT_ROOT"]."/Lib/html";

		$this->url="dmsi2";

		$this->pre="ma_";

		$this->shipping = 10;

		!isset($_GET['p']) || $_GET['p']=="" ? $this->cpage = 0 : $this->cpage = $_GET['p'];

		$this->max_ads = 20;

		session_start();

		if (
			(isset($_POST["skidka"]) && $_POST["skidka"]!=="") &&
			(isset($_POST["proc"]) && $_POST["proc"]!=="")
			
		)
		{
            $skidka = str_replace(" ","",trim($_POST["skidka"]));
			$proc = str_replace(" ","",trim($_POST["proc"]));

			if (isset($_POST["editskidka"]) && $_POST["editskidka"]!=="")
			{
				$sql_q = "UPDATE skidki SET price='$skidka', proc='".trim($_POST["proc"])."' WHERE id='".$_POST["editskidka"]."'";
			}
			else 
				$sql_q = "INSERT INTO skidki (cata,price,proc) VALUES ('".$_GET["id"]."','$skidka','$proc')";

		
			
			$sql_res = $this->q($sql_q);

			//header ("Location: /admin/moduls/gallery.php");
		}
		if (isset($_GET["delskidka"]) && $_GET["delskidka"]!=="")
		{
			$sql_q = "DELETE FROM skidki WHERE id='".$_GET["delskidka"]."'";
			$sql_res = $this->q($sql_q);


			//header ("Location: /admin/moduls/gallery.php");
		}
		if (isset($_POST['slgale_sort']) && $_POST['slgale_sort']!=="")
		{
			foreach ($_POST['slgale_sort'] as $key=>$value)
			{				
				$sql_q = "UPDATE slgal SET sort='".trim($value)."' WHERE id='$key'";
				$sql_res = $this->q($sql_q);
			}
		}
        if (isset($_POST["slgale"]) && $_POST["slgale"]=="1")
		{
			//if (isset($_POST[]))
			$photo = $this->download('foto');
			
			$link = trim(@$_POST["slgal_link_name"]);
			$collname = trim(@$_POST["slgal_collname"]);
			$dizname = trim(@$_POST["slgal_dizname"]);

			if (isset($_POST["slgaleupd"]) && $_POST["slgaleupd"]!=="")
			{
				!empty($photo) ? $sqlpho = ", pho='$photo'" : $sqlpho = "";

				$sql_q = $this->q("UPDATE slgal SET link='$link',collname='$collname',dizname='$dizname' $sqlpho WHERE id='".$_POST["slgaleupd"]."'");
				header ("Location: /admin/?topic=slgal");
			}

			if (!empty($photo))
			{

			$sql_q = $this->q("INSERT INTO slgal (pho,link,collname,dizname) VALUES ('$photo','$link','$collname','$dizname')");

			header ("Location: /admin/?topic=slgal");
			}	
		}
		if (isset($_POST['del_slgals']) && $_POST['del_slgals']!=="")
		{
			foreach ($_POST['del_slgals'] as $value)
			{				
				$this->q("DELETE FROM slgal WHERE id='$value'");
			}
		}

		if (isset($_POST["galname"]) && $_POST["galname"]!=="")
		{
			$galname = trim($_POST["galname"]);

			if (isset($_POST["editgal"]) && $_POST["editgal"]!=="")
			{
				$sql_q = "UPDATE photosgal SET galname='$galname' WHERE id='".$_POST["editgal"]."'";
			}
			else $sql_q = "INSERT INTO photosgal (galname,cata,id_cat) VALUES ('$galname','".$_GET["id"]."','".$_GET["upd_rec"]."')";
			
			$sql_res = $this->q($sql_q);

			//header ("Location: /admin/moduls/gallery.php");
		}


		if (isset($_GET["delgal"]) && $_GET["delgal"]!=="")
		{
			$sql_q = "DELETE FROM photosgal WHERE id='".$_GET["delgal"]."'";
			$sql_res = $this->q($sql_q);

			$sql_q2 = "DELETE FROM photos WHERE page='".$_GET["delgal"]."'";
			$sql_res2 = $this->q($sql_q2);

			//header ("Location: /admin/moduls/gallery.php");
		}

	    $today = date("Y-m-d"); 

		/*

		if (!isset($gettab) || $gettab=="")
		{
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "http://www.dsites.ru/mainbase.php?passwd=".$this->passwd());
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$result = curl_exec($ch);
		curl_close($ch);

		$array = unserialize(stripslashes($result));

	    
			$gettab = $array[1];
			session_register("gettab");
		}
		*/
if (isset($_SESSION["customer"])) 
			{
	$this->temptable = "customer_".$_SESSION["log"];
	
			}
			else {

	
$this->temptable = "user_".session_id();
			}

		// $this->temptable = $gettab;

		$sql_q3 = "SHOW TABLES LIKE 'user_%'";
		$sql_res3 = $this->q($sql_q3);

		while ($rows3 = mysql_fetch_row($sql_res3))
		{
			foreach ($rows3 as $row3)
			{
				$sql_q5 = "SELECT beforedate FROM $row3 WHERE id='1'";
				$sql_res5 = $this->q($sql_q5);

				$rows5 = mysql_fetch_array($sql_res5);

				$beforedate = $rows5["beforedate"];
				
				if ($today >= $beforedate) $this->q("DROP TABLE IF EXISTS $row3");
			}
		}
		
		$sql_q = "CREATE TABLE IF NOT EXISTS $this->temptable (".
			"`id` INT( 9 ) UNSIGNED NOT NULL AUTO_INCREMENT ,".
			"`id1` INT( 9 ) NOT NULL , ".
			"`id2` INT( 9 ) NOT NULL , ".
			"`param1`  DOUBLE NOT NULL, ".
			"`param2`  DOUBLE NOT NULL,".
			"`param3`  tinytext NOT NULL,".
			"`userdate` DATE NOT NULL ,".
			"`beforedate` DATE NOT NULL ,".
			"PRIMARY KEY ( `id` ) ".
			");";
	
		$sql_res = $this->q($sql_q);

        $sql_q5 = "SELECT id FROM $this->temptable WHERE id='1'";
		$sql_res5 = $this->q($sql_q5);
		
		if (mysql_num_rows($sql_res5)==0)
		{
			$sql_q4 = "INSERT INTO $this->temptable (userdate,beforedate) VALUES (CURDATE(),CURDATE() + INTERVAL 2 DAY)";
			$sql_res4 = $this->q($sql_q4);
		}

       		if ((isset($_GET["id"]) && $_GET["id"]!=="") && 
			(isset($_GET["incart"]) && $_GET["incart"]!==""))
		{
			if (!isset($_GET["idpage"]) || $_GET["idpage"]=="")
			{
				$sql_q = "SELECT * FROM photos WHERE cat='".$_GET["id"]."' AND idc='".$_GET["incart"]."'";
				$sql_res = $this->q($sql_q);
				$rows = mysql_fetch_array($sql_res);

				$idpage = $rows["id"];
			}else 
				$idpage = $_GET["idpage"];

            
			$PriceInfo = "0";
			if (isset($_SESSION["customer"])) 
			{
				$item = $this->get_record("catalog_".$_GET["id"],$_GET["incart"],"cat_number");
				$uom = $this->get_record("catalog_".$_GET["id"],$_GET["incart"],"valute");

				$items = array($item=>$uom);
				$PriceInCartArr = $this->GetDMSIData($_SESSION["log"],$items);

				#print_r($PriceInCartArr);
				
				$PriceInfo = $this->GetDMSIGetPriceInfo($_SESSION["log"],$item,$uom);

				$PriceInCart = $PriceInCartArr[$item]["NetPrice"];
			}else
				$PriceInCart = $this->get_record("catalog_".$_GET["id"],$_GET["incart"],"cat_price");


			if (isset($_POST["squantity"]))
			{
				if (array_sum($_POST["squantity"])>0)
				{		
					foreach ($_POST["squantity"] as $key=>$value)
					{
					for ($i=0; $i<$value; $i++)
						{
						     $sql_q2 = "INSERT INTO $this->temptable (param1,param2,param3,id1,id2) VALUES ('$PriceInCart','$PriceInfo','".$key."','".$_GET["id"]."','".$_GET["incart"]."')";
							 #print "<br>";
							 $sql_res2 = $this->q($sql_q2);
						}

				     }
					 header ("Location: /products.php?category=".$_GET["category"]."&id=".$_GET["id"]."&cid=".$_GET["cid"]."&mess=1");
				}
				else
				{
					header ("Location: /products.php?category=".$_GET["category"]."&id=".$_GET["id"]."&cid=".$_GET["cid"]."&mess=2");
				}
			}

           

			if (isset($_POST["quantity"]) && $_POST["quantity"]!=="")
			{

			
				$quantity = trim(strip_tags($_POST["quantity"]));


				for ($i=0; $i<$quantity; $i++)
				{
					$price = str_replace(" ","",$this->get_record("catalog_".$_GET["id"],$_GET["incart"],"cat_price"));
					$priceres = str_replace(" ","",$this->get_record("catalog_".$_GET["id"],$_GET["incart"],"cat_price"));
					$price2 = str_replace(" ","",$quantity*$this->get_record("catalog_".$_GET["id"],$_GET["incart"],"cat_price"));
                  
				   $scount = mysql_num_rows(mysql_query("SELECT id FROM skidki WHERE cata='".$_GET["id"]."' ORDER BY price ASC"));
				

				   if ($scount!=="0")
					{
					   
					   switch ($scount)
						{
						   case "1":

							   $spric = $this->GetSkidka(0,"price",$_GET["id"]);
						       $sproc = $this->GetSkidka(0,"proc",$_GET["id"]);
                               
							   if ($price2 > $spric)
							   {
								   $priceres = $price - ($price*$sproc)/100;
							   }

						  break;

						   case "2":

							   $spric = $this->GetSkidka(0,"price",$_GET["id"]);
						       $sproc = $this->GetSkidka(0,"proc",$_GET["id"]);
                               
							   if ($price2 > $spric)
							   {
								   $priceres = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$_GET["id"]);
						       $sproc1 = $this->GetSkidka(1,"proc",$_GET["id"]);

							   if ($price2 > $spric1)
							   {
								   $priceres= $price - ($price*$sproc1)/100;
							   }
						  break;

						   case "3":

							   $spric = $this->GetSkidka(0,"price",$_GET["id"]);
						       $sproc = $this->GetSkidka(0,"proc",$_GET["id"]);
                               
							   if ($price2 > $spric)
							   {

								   $priceresr = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$_GET["id"]);
						       $sproc1 = $this->GetSkidka(1,"proc",$_GET["id"]);

							   if ($price2 > $spric1)
							   {
								   $priceres = $price - ($price*$sproc1)/100;
							   }

							   $spric2 = $this->GetSkidka(2,"price",$_GET["id"]);
						       $sproc2 = $this->GetSkidka(2,"proc",$_GET["id"]);

							   if ($price2 > $spric2)
							   {

								   $priceres = $price - ($price*$sproc2)/100;
							   }

						  break;

						  case "4":

							   $spric = $this->GetSkidka(0,"price",$_GET["id"]);
						       $sproc = $this->GetSkidka(0,"proc",$_GET["id"]);
                               
							   if ($price2 > $spric)
							   {

								   $priceres = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$_GET["id"]);
						       $sproc1 = $this->GetSkidka(1,"proc",$_GET["id"]);

							   if ($price2 > $spric1)
							   {
								   $priceres = $price - ($price*$sproc1)/100;
							   }

							   $spric2 = $this->GetSkidka(2,"price",$_GET["id"]);
						       $sproc2 = $this->GetSkidka(2,"proc",$_GET["id"]);

							   if ($price2 > $spric2)
							   {

								   $priceres = $price - ($price*$sproc2)/100;
							   }

							    $spric3 = $this->GetSkidka(3,"price",$_GET["id"]);
						       $sproc3 = $this->GetSkidka(3,"proc",$_GET["id"]);

							   if ($price2 > $spric3)
							   {

								   $priceres = $price - ($price*$sproc3)/100;
							   }

						  break;

						   case "5":

							 

							   $spric = $this->GetSkidka(0,"price",$_GET["id"]);
						       $sproc = $this->GetSkidka(0,"proc",$_GET["id"]);
                               
							   if ($price2 > $spric)
							   {

								   $priceres = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$_GET["id"]);
						       $sproc1 = $this->GetSkidka(1,"proc",$_GET["id"]);

							   if ($price2 > $spric1)
							   {
								   $priceres = $price - ($price*$sproc1)/100;
							   }

							   $spric2 = $this->GetSkidka(2,"price",$_GET["id"]);
						       $sproc2 = $this->GetSkidka(2,"proc",$_GET["id"]);

							   if ($price2 > $spric2)
							   {

								   $priceres = $price - ($price*$sproc2)/100;
							   }

							   $spric3 = $this->GetSkidka(3,"price",$_GET["id"]);
						       $sproc3 = $this->GetSkidka(3,"proc",$_GET["id"]);

							   if ($price2 > $spric3)
							   {

								   $priceres = $price - ($price*$sproc3)/100;
							   }

							    $spric4 = $this->GetSkidka(4,"price",$_GET["id"]);
						       $sproc4 = $this->GetSkidka(4,"proc",$_GET["id"]);

							   if ($price2 > $spric4)
							   {
								   $priceres = $price - ($price*$sproc4)/100;
							   }

						  break;

						}
					}


				$sql_q2 = "INSERT INTO $this->temptable (param1,param2,param3,id1,id2) VALUES ('$priceres','','','".$_GET["id"]."','".$_GET["incart"]."')";
				$sql_res2 = $this->q($sql_q2);
				}

				//header ("Location: /products.php?category=".$_GET["category"]."&id=".$_GET["id"]."&cid=".$_GET["cid"]."&mess=1");


			}

			
			
			/*
			else
			{

			$sql_q2 = "INSERT INTO $this->temptable (param1,param2,param3,id1,id2) VALUES ('$PriceInCart','$PriceInfo','".$_POST["asize"]."','".$_GET["id"]."','".$_GET["incart"]."')";
			$sql_res2 = $this->q($sql_q2);
		}
		*/

            $locsize = "";
/*
			if (isset($_POST["asize"]) && $_POST["asize"]!=="")
			{
				$sql_q3 = "UPDATE $this->temptable SET param3='".$_POST["asize"]."' WHERE id1='".$_GET["id"]."' AND id2='".$_GET["incart"]."'";

				$sql_res3 = $this->q($sql_q3);

				$locsize = "&asize=".$_POST["asize"];
			}
			*/

	

		}
	

		if (isset($_POST["intro"]) && $_POST["intro"]=="1")
		{
			switch ($_GET["topic"])
			{
				case "color":
					$table = "intro";
				break;
				case "thickness":
					$table = "intro2";
				break;
				case "manuf":
					$table = "intro3";
				break;
				case "size":
					$table = "intro4";
				break;
			}
			//if (isset($_POST[]))
			$photo = $this->download('foto');
			
			$link = trim(@$_POST["intro_link_name"]);
			$collname = trim(@$_POST["intro_collname"]);
			$dizname = trim(@$_POST["intro_dizname"]);

			if (isset($_POST["introupd"]) && $_POST["introupd"]!=="")
			{
				!empty($photo) ? $sqlpho = ", pho='$photo'" : $sqlpho = "";

				$sql_q = $this->q("UPDATE $table SET link='$link',collname='$collname',dizname='$dizname' $sqlpho WHERE id='".$_POST["introupd"]."'");
				header ("Location: /admin/?topic=".$_GET["topic"]);
			}
			else 
				$this->q("INSERT INTO $table (pho,link,collname,dizname) VALUES ('$photo','$link','$collname','$dizname')");

			if (!empty($photo))
			{

			//$sql_q = $this->q("INSERT INTO $table (pho,link,collname,dizname) VALUES ('$photo','$link','$collname','$dizname')");


			header ("Location: /admin/?topic=".$_GET["topic"]);
			}	
		}

		if (isset($_POST["foldername"]) && $_POST["foldername"]!=="")
		{
			$foldername = trim($_POST["foldername"]);

			if ($_POST["foldername_upd"]!=="")
			{
				$sql_q = "UPDATE folders SET folders='$foldername', links='na' WHERE id='".$_POST["foldername_upd"]."'";
				$sql_res = $this->q($sql_q);

			}else{
			$sql_q = "INSERT INTO folders (folders) VALUES ('$foldername')";
			$sql_res = $this->q($sql_q);

			$sql_q2 = $this->q("UPDATE folders SET sort=id WHERE id='".mysql_insert_id()."'");
			header ("Location: /admin/?topic=brends");
			}
		}
		if (isset($_GET["dfc"]) && $_GET["dfc"]!=="")
		{
			$id1 = $this->get_record($this->temptable,$_GET["dfc"],"id1");
			$id2 = $this->get_record($this->temptable,$_GET["dfc"],"id2");
			$param1 = $this->get_record($this->temptable,$_GET["dfc"],"param1");
			$param2 = $this->get_record($this->temptable,$_GET["dfc"],"param2");

			$sql_q = "DELETE FROM $this->temptable WHERE id1='$id1' AND id2='$id2'";
			$sql_res = $this->q($sql_q);

			header ("Location: /?page=cart");
		}
		#session_destroy();

		if ((isset($_POST["log"]) && $_POST["log"]!=="") && (isset($_POST["pwd"]) && $_POST["pwd"]!==""))
		{

			$_SESSION["log"] = $_POST["log"];
	        $_SESSION["pwd"] = $_POST["pwd"];
			$this->CheckCustomer($_SESSION["log"],$_SESSION["pwd"]);
		}

		if (isset($_GET["logout"]) && $_GET["logout"]=="1")
		{
			session_destroy();

			header ("Location: /");

		}
	

		if (isset($_GET["del_faq"]) && $_GET["del_faq"]!=="")
		{
			$sql_q = "DELETE FROM faq WHERE id='".$_GET["del_faq"]."'";
			$sql_res = $this->q($sql_q);
			header ("Location: /admin/?topic=faq");
		}
		if (isset($_POST["vopros"]) && $_POST["vopros"]!=="" 
			&& isset($_POST["otvet"]) && $_POST["otvet"]!=="")
		{
			    if (isset($_POST["edit_faq"]) && $_POST["edit_faq"]!=="")
			{
					$sql_q = "UPDATE faq SET vopros='".$_POST["vopros"]."', otvet='".$_POST["otvet"]."',sort='".$_POST["numsort"]."' WHERE id='".$_POST["edit_faq"]."'";
					
					$sql_res = $this->q($sql_q);
			}
			else {
				$sql_q = "INSERT INTO faq (vopros,otvet) VALUES ('".$_POST["vopros"]."','".$_POST["otvet"]."')";
				
				$sql_res = $this->q($sql_q);

				$uid = mysql_insert_id();

				$this->q("UPDATE faq SET sort='$uid' WHERE id='$uid'");
			}
			header ("Location: /admin/?topic=faq");
		}

		if (isset($_POST["newpagerus"]) && $_POST["newpagerus"]!=="")
		{
			if (isset($_GET["staticpage"]) && $_GET["staticpage"]==1)
			{
				$addheader = "&staticpage=1";
			}
			else 
			{
				$addheader = "";
			}
			$newpagerus = trim($_POST["newpagerus"]);
			$newpage = $this->tech_translate($this->tolower($newpagerus),"eng");
			

			if (isset($_POST["updrec"]) && $_POST["updrec"]!=="")
			{
				$this->q("UPDATE ".$this->pre."pages SET lower_menu='0' WHERE id='".$_POST["updrec"]."'");

				$sql_q = "UPDATE ".$this->pre."pages SET topics='$newpage', pages_name='$newpagerus', lower_menu='".@$_POST["lower_menu"]."' WHERE id='".$_POST["updrec"]."'";

			    $sql_res = $this->q($sql_q);
				
				//header ("Location: /admin/?topic=addpages".$addheader);
			}
			else
			{
			$sql_q = "INSERT INTO ".$this->pre."pages (topics, pages_name, lower_menu, static, curr_date,sort) VALUES ('$newpage','$newpagerus','".@$_POST["lower_menu"]."','".@$_GET["staticpage"]."','".date("m.d.y")."  ".date("H:i:s")."','".$this->GetLastSort()."' + 1)";
			$sql_res = $this->q($sql_q);

				}
		}

		if (isset($_POST["shtuk"]) && $_POST["shtuk"]!=="")
		{
			// print_r($shtuk);



			$this->q("DELETE FROM $this->temptable WHERE id!='1'");


			foreach ($_POST["shtuk"] as $key=>$value)
			{
				for ($i=1; $i<=$value; $i++)
				{
					$idid = explode("#",$key);

					$price = str_replace(" ","",$this->get_record("catalog_".$idid[0],"$idid[1]","cat_price"));
					$priceres = str_replace(" ","",$this->get_record("catalog_".$idid[0],"$idid[1]","cat_price"));
					$price2 = str_replace(" ","",$value*$this->get_record("catalog_".$idid[0],"$idid[1]","cat_price"));
                  
				   $scount = mysql_num_rows(mysql_query("SELECT id FROM skidki WHERE cata='".$idid[0]."' ORDER BY price ASC"));
				

				   if ($scount!=="0")
					{
					   
					   switch ($scount)
						{
						   case "1":

							   $spric = $this->GetSkidka(0,"price",$idid[0]);
						       $sproc = $this->GetSkidka(0,"proc",$idid[0]);
                               
							   if ($price2 > $spric)
							   {
								   $priceres = $price - ($price*$sproc)/100;
							   }

						  break;

						   case "2":

							   $spric = $this->GetSkidka(0,"price",$idid[0]);
						       $sproc = $this->GetSkidka(0,"proc",$idid[0]);
                               
							   if ($price2 > $spric)
							   {
								   $priceres = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$idid[0]);
						       $sproc1 = $this->GetSkidka(1,"proc",$idid[0]);

							   if ($price2 > $spric1)
							   {
								   $priceres= $price - ($price*$sproc1)/100;
							   }
						  break;

						   case "3":

							   $spric = $this->GetSkidka(0,"price",$idid[0]);
						       $sproc = $this->GetSkidka(0,"proc",$idid[0]);
                               
							   if ($price2 > $spric)
							   {

								   $priceresr = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$idid[0]);
						       $sproc1 = $this->GetSkidka(1,"proc",$idid[0]);

							   if ($price2 > $spric1)
							   {
								   $priceres = $price - ($price*$sproc1)/100;
							   }

							   $spric2 = $this->GetSkidka(2,"price",$idid[0]);
						       $sproc2 = $this->GetSkidka(2,"proc",$idid[0]);

							   if ($price2 > $spric2)
							   {

								   $priceres = $price - ($price*$sproc2)/100;
							   }

						  break;

						  case "4":

							   $spric = $this->GetSkidka(0,"price",$idid[0]);
						       $sproc = $this->GetSkidka(0,"proc",$idid[0]);
                               
							   if ($price2 > $spric)
							   {

								   $priceres = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$idid[0]);
						       $sproc1 = $this->GetSkidka(1,"proc",$idid[0]);

							   if ($price2 > $spric1)
							   {
								   $priceres = $price - ($price*$sproc1)/100;
							   }

							   $spric2 = $this->GetSkidka(2,"price",$idid[0]);
						       $sproc2 = $this->GetSkidka(2,"proc",$idid[0]);

							   if ($price2 > $spric2)
							   {

								   $priceres = $price - ($price*$sproc2)/100;
							   }

							    $spric3 = $this->GetSkidka(3,"price",$idid[0]);
						       $sproc3 = $this->GetSkidka(3,"proc",$idid[0]);

							   if ($price2 > $spric3)
							   {

								   $priceres = $price - ($price*$sproc3)/100;
							   }

						  break;

						   case "5":

							 

							   $spric = $this->GetSkidka(0,"price",$idid[0]);
						       $sproc = $this->GetSkidka(0,"proc",$idid[0]);
                               
							   if ($price2 > $spric)
							   {

								   $priceres = $price - ($price*$sproc)/100;
							   }

							   $spric1 = $this->GetSkidka(1,"price",$idid[0]);
						       $sproc1 = $this->GetSkidka(1,"proc",$idid[0]);

							   if ($price2 > $spric1)
							   {
								   $priceres = $price - ($price*$sproc1)/100;
							   }

							   $spric2 = $this->GetSkidka(2,"price",$idid[0]);
						       $sproc2 = $this->GetSkidka(2,"proc",$idid[0]);

							   if ($price2 > $spric2)
							   {

								   $priceres = $price - ($price*$sproc2)/100;
							   }

							   $spric3 = $this->GetSkidka(3,"price",$idid[0]);
						       $sproc3 = $this->GetSkidka(3,"proc",$idid[0]);

							   if ($price2 > $spric3)
							   {

								   $priceres = $price - ($price*$sproc3)/100;
							   }

							    $spric4 = $this->GetSkidka(4,"price",$idid[0]);
						       $sproc4 = $this->GetSkidka(4,"proc",$idid[0]);

							   if ($price2 > $spric4)
							   {
								   $priceres = $price - ($price*$sproc4)/100;
							   }

						  break;

						}
					}

				

					//print $this->get_record("catalog_".$idid[0],"$idid[1]","cat_price");

					$sql_q = "INSERT INTO $this->temptable (id1,id2,param1,param2,param3) VALUES ('$idid[0]','$idid[1]','".$priceres."','".urldecode($idid[3])."','".$_POST["sizes"]["$idid[0]#$idid[1]"]."')";
				   $sql_res = $this->q($sql_q);

				//  echo "<br>";
				} // echo "<br>";
			}
			
			header ("location: /?page=cart");

		
		}
		if (isset($_GET["delgood"]) && $_GET["delgood"]!=="")
		{
			$this->q("DELETE FROM announs WHERE id='".$_GET["delgood"]."'");
			header ("Location: /admin/?topic=announs");
		}

		if (($topic=="announs") && (isset($_GET["id"]) && $_GET["id"]!==""))
		{
			$sql_q2 = $this->q("SELECT COUNT(id) AS totalrecs FROM announs");

			if (mysql_result($sql_q2,"totalrecs")==2) 
				
			header ("Location: /admin/?topic=announs&error=1");

			else{
			$sql_q = "INSERT INTO au_announs (goods) VALUES ('".$_GET["id"]."')";
			$sql_res = $this->q($sql_q);

		    $this->q("UPDATE au_announs SET sort=id WHERE id='".mysql_insert_id()."'");

			header ("Location: /admin/?topic=announs");
			}
		}
		if ((isset($_GET['c_id']) && $_GET['c_id']!=="") && (isset($_GET['na']) && $_GET['na']!=="") &&
			(isset($_GET['r_id']) && $_GET['r_id']!=="") && (isset($_GET['na2']) && $_GET['na2']!==""))

		{
			$topic = $_GET["topic"];

			if (isset($_GET["id"]) && $_GET["id"]!=="")
			{
				$table = "catalog_".$_GET["id"];
				$loc = "/admin/moduls/catalog.php?id=".$_GET["id"];
			}
			elseif (isset($topic) && $topic=="edit_news")
			{
				$table = "news";
				$loc = "/admin/?topic=edit_news";
			}
			else
			{
				$table = $this->pre."pages";
				$loc = "/admin/?topic=".$_GET["topic"];
			}
			$sql_q1 = $this->q("UPDATE $table SET sort='".$_GET['na']."' WHERE id='".$_GET['c_id']."'");
			$sql_q2 = $this->q("UPDATE $table SET sort='".$_GET['na2']."' WHERE id='".$_GET['r_id']."'");


			header ("Location: $loc");
		}

		if (isset($_GET["cat_name"]) && $_GET["cat_name"]!=="")
		{
			$this->cat_name = $_GET["cat_name"];
		}
		elseif (isset($_POST["cat_name"]) && $_POST["cat_name"]!=="")
		{
			$this->cat_name = $_POST["cat_name"];
		}
		else 
		{
			$sql_q = "SELECT pages FROM ".$this->pre."pages WHERE topics='ucatalog' ORDER BY id ASC LIMIT 0,1";
			$sql_res = $this->q($sql_q);
		
			$this->cat_name = @mysql_result($sql_res,"pages");
		}

		if (isset($_POST['change_login']) && $_POST['change_login']!=="" && 
			isset($_POST['change_pass']) && $_POST['change_pass']!=="")
		{
			$new_login = stripslashes(trim($_POST['change_login']));
			$new_pass = crypt(stripslashes(trim($_POST['change_pass'])));
			
			$sql_q = $this->q("UPDATE ".$this->pre."auth SET login='$new_login', password='$new_pass' WHERE id='1'");
			header("Location: /admin/?logout&changed");
		
		}
		if (isset($_POST['add_login']) && $_POST['add_login']!=="" && 
			isset($_POST['add_pass']) && $_POST['add_pass']!=="" &&
			isset($_POST['admin_level']) && $_POST['admin_level']!=="")
		{
			$new_add_login = stripslashes(trim($_POST['add_login']));
			$new_add_pass = crypt(stripslashes(trim($_POST['add_pass'])));
			$new_admin_level = stripslashes(trim($_POST['admin_level']));
			
			$sql_q = "INSERT INTO auth (login, password, status) VALUES ('$new_add_login','$new_add_pass','$new_admin_level')";

			if (!$sql_res = mysql_query($sql_q))
			{
				$this->message="Ошибка: Такой логин уже существует в системе";
				//print "ERR: ".mysql_error();
			}
			
			//header("Location: /admin/?topic=add_pass");
		
		}
		if (isset($_POST['upd']) && $_POST['upd']!=="")
		{
			$pages_name1 = trim($_POST['pages_name']);
			$pages_name = $this->tolower(trim($_POST['pages_name']));

			$sql_q = "UPDATE ".$this->pre."pages SET pages_name='$pages_name1', curr_date='".date("m.d.y")."  ".date("H:i:s")."' WHERE id='".$_POST['upd']."'";
			$this->q($sql_q);
			header ("Location: /admin/?topic=".$_GET["topic"]);
		}
		if (isset($_POST["upper_text"]) && $_POST["upper_text"]!=="")
		{
			$sql_q = "UPDATE ".$this->pre."pages SET reserve='".trim($_POST["upper_text"])."' WHERE pages='".$this->cat_name."' AND L1=''";
			$sql_res = $this->q($sql_q);
		}
		if (isset($_POST["link_name"]) && $_POST["link_name"]!=="")
		{
			$link_name = trim($_POST["link_name"]);
			$link_desc = trim($_POST["link_desc"]);
			$link_addr = trim($_POST["link_addr"]);

			if ($_POST["link_upd"]!=="")
			{
				$sql_q = "UPDATE links SET link_name='$link_name', link_desc='$link_desc', link_addr='$link_addr' WHERE id='".$_POST["link_upd"]."'";
				$sql_res = $this->q($sql_q);

			}else{
			$sql_q = "INSERT INTO links (link_name, link_desc, link_addr, curr_date) VALUES ('$link_name', '$link_desc', '$link_addr', '".date("m.d.y")."  ".date("H:i:s")."')";
			$sql_res = $this->q($sql_q);

			$sql_q2 = $this->q("UPDATE links SET sort=id WHERE id='".mysql_insert_id()."'");
			header ("Location: /admin/?topic=links");
			}
		}

		if (isset($_POST['pages_name']) && $_POST['pages_name']!==""  && @$_POST['upd']==""
			)
		{
				$topic = $_GET["topic"];

			$pages_name1 = trim($_POST['pages_name']);
			
			$pages_name = $this->tolower(trim($_POST['pages_name']));	

			$pages = $this->tech_translate ($pages_name,"eng");

				if (isset($_POST["currlevel"]) && $_POST["currlevel"]!=="")
			{

					$levarr = explode("-",$_POST["currlevel"]);

					//print_r($levarr);

					$levid = $levarr[1];

					// echo "<br>";

					$clev = $levarr[0];

					if ($clev=="2")
				    {

					    $sql_q = "INSERT INTO ".$this->pre."pages (topics,pages,pages_name,L1,sort) VALUES ('".$this->get_record($this->pre."pages",trim($levid),"topics")."','".$this->get_record($this->pre."pages",trim($levid),"pages")."','$pages_name1','$pages','".$this->GetLastSort()."' + 1)";

					    $this->q($sql_q);
					
					}

					if ($clev=="3")
				    {

					    $sql_q = "INSERT INTO ".$this->pre."pages (topics,pages,pages_name,L1,L2,sort) VALUES ('".$this->get_record($this->pre."pages",trim($levid),"topics")."','".$this->get_record($this->pre."pages",trim($levid),"pages")."','$pages_name1','".$this->get_record($this->pre."pages",trim($levid),"L1")."','$pages','".$this->GetLastSort()."' + 1)";

					    $this->q($sql_q);
					
					}
					elseif ($clev=="4")
				    {
						
					     $sql_q = "INSERT INTO ".$this->pre."pages (topics,pages,pages_name,L1,L2,L3,sort) VALUES ('".$this->get_record($this->pre."pages",trim($levid),"topics")."','".$this->get_record($this->pre."pages",trim($levid),"pages")."','$pages_name1','".$this->get_record($this->pre."pages",trim($levid),"L1")."','".$this->get_record($this->pre."pages",trim($levid),"L2")."','$pages','".$this->GetLastSort()."' + 1)";

						  $this->q($sql_q);
					}
					elseif ($clev=="5")
				    {
						
					     $sql_q = "INSERT INTO ".$this->pre."pages (topics,pages,pages_name,L1,L2,L3,L4,sort) VALUES ('".$this->get_record($this->pre."pages",trim($levid),"topics")."','".$this->get_record($this->pre."pages",trim($levid),"pages")."','$pages_name1','".$this->get_record($this->pre."pages",trim($levid),"L1")."','".$this->get_record($this->pre."pages",trim($levid),"L2")."','".$this->get_record($this->pre."pages",trim($levid),"L3")."','$pages','".$this->GetLastSort()."' + 1)";

						  $this->q($sql_q);
					}
					elseif ($clev=="6")
				    {
						
					     $sql_q = "INSERT INTO ".$this->pre."pages (topics,pages,pages_name,L1,L2,L3,L4,L5,sort) VALUES ('".$this->get_record($this->pre."pages",trim($levid),"topics")."','".$this->get_record($this->pre."pages",trim($levid),"pages")."','$pages_name1','".$this->get_record($this->pre."pages",trim($levid),"L1")."','".$this->get_record($this->pre."pages",trim($levid),"L2")."','".$this->get_record($this->pre."pages",trim($levid),"L3")."','".$this->get_record($this->pre."pages",trim($levid),"L4")."','$pages','".$this->GetLastSort()."' + 1)";

						  $this->q($sql_q);
					}
			}

			else
			{

				$sql_q = "INSERT INTO ".$this->pre."pages (topics,pages,pages_name,curr_date,sort) VALUES ('$topic','$pages','$pages_name1','".date("m.d.y")."  ".date("H:i:s")."','".$this->GetLastSort()."' + 1)";
                $this->q($sql_q);
				
				//header ("Location: /admin/?topic=$topic");
			}
			



			
		}

		if (isset($_POST['edited_topic']) && $_POST['edited_topic']!=="")
		{

			//$this->q("SELECT COUNT(*) AS n FROM pages WHERE id='".$_GET['topic']."'");

			$this->fields_count($this->pre."pages","id='".$_GET['topic']."'") == 0 ? $row = "topics" : $row = "id";

			$topic_file = $_SERVER["DOCUMENT_ROOT"]."/Lib/html/".$_GET['topic'].".htm";

			$edited_topic=stripslashes($_POST['edited_topic']);

			/*
			if (!file_exists($topic_file)){touch($topic_file);}
			$fp=fopen($topic_file, "w");
			fwrite ($fp,$edited_topic);
			fclose($fp);
			*/

			$sql_q2 = "UPDATE ".$this->pre."pages SET publ='0' WHERE $row='$topic'";
			$this->q($sql_q2);

			isset($_POST['publ']) && $_POST['publ']!=="" ? $publ = 1 : $publ = 0;

			$title = trim($_POST['title']);
			$keywords = trim($_POST['keywords']);
			$description = trim($_POST['description']);
			$small_desc = trim($_POST['small_desc']);
			$date = trim($_POST['date']);

			$sql_q = "UPDATE ".$this->pre."pages SET title='$title', keywords='$keywords', description='$description', small_desc='$small_desc',big_desc='$edited_topic', publ='$publ', curr_date='$date' WHERE $row='".$_GET['topic']."'";
			
			$this->q($sql_q);

			header("Location: /admin/?topic=".$_GET['topic']);
		}

		if (isset($_POST['MainFrame']) && $_POST['MainFrame']!=="")
		{
			$body = stripslashes(trim($_POST['MainFrame']));
			$title = trim($_POST['news_title']);
			$keywords = trim($_POST['news_keywords']);
			$description = trim($_POST['news_description']);
			$date = trim($_POST['news_date']);
			$source = trim($_POST['news_source']);
			$news_small_desc = stripslashes(trim($_POST['news_small_desc']));
			$operator = trim($_POST['news_operator']);

			isset($_POST['news_publ']) && $_POST['news_publ']!=="" ? $publ = 1 : $publ = 0;

			if (isset($_POST['upd_rec']) && $_POST['upd_rec']!=="")
			{
				$curr_photo = $this->get_record($this->pre."news",$_POST['upd_rec'],"photo");

				isset($dfile) && $dfile!=="" ? $photo = $this->download('foto') : $photo = $curr_photo;
				
				$sql_q = $this->q("UPDATE ".$this->pre."news SET news_title='$title', news_keywords='$keywords', news_description='$description', news_date='$date', news_source='$source', news_small_desc='$news_small_desc', publ='$publ', news_operator='$operator', news_body='$body', photo='$photo' WHERE id='".$_POST['upd_rec']."'");

				$newadddmess="";
			}
			else
			{
				$sql_q = $this->q("INSERT INTO ".$this->pre."news (news_title, news_keywords, news_description, news_date, news_source, news_small_desc, publ, news_operator, news_body,photo) VALUES ('$title','$keywords','$description','$date', '$source','$news_small_desc','$publ','$operator','$body','".$this->download('foto')."')");

				$newadddmess="&newadddmess=ok";

				$this->q("UPDATE ".$this->pre."news SET sort=LAST_INSERT_ID() WHERE id=LAST_INSERT_ID()");
			}
			header ("Location: /admin/?topic=add_new&id=".$_POST['upd_rec'].$newadddmess);
		}

		if (isset($load_file) && $load_file!=="")
		{	
			$file = $_SERVER["DOCUMENT_ROOT"]."/files/$load_file_name";

			if (file_exists($file))
			{
				$this->message="<br><font color=\"red\">Ошибка: такой файл уже загружен на сайт</font><br><br><br>";
			}
			else 
			{
				copy ($load_file, $_SERVER["DOCUMENT_ROOT"]."/files/$load_file_name");
				
				$sql_q = "INSERT INTO files (files, file_name) VALUES ('$load_file_name','".trim($_POST['file_name'])."')";
				$sql_res = $this->q($sql_q);
				
				header ("Location: /admin/?topic=file_m");
			}
		}
		if (isset($_GET["del_file"]) && $_GET["del_file"]!=="")
		{
			$file = $this->get_record("files",$_GET["del_file"],"files");

			$file_path = $_SERVER["DOCUMENT_ROOT"]."/files/$file";

			@unlink($file_path);
			
			$sql_q = $this->q("DELETE FROM files WHERE id='".$_GET["del_file"]."'");
			
			// $this->message="<br><font color=\"red\">Ошибка: не могу удалить файл</font><br><br><br>";

			header ("Location: /admin/?topic=file_m");
		}
		if (isset($_POST['del_files']) && $_POST['del_files']!=="")
		{
			foreach ($_POST['del_files'] as $value)
			{
				$file = $this->get_record("files",$value,"files");
				
				$file_path = $_SERVER["DOCUMENT_ROOT"]."/files/$file";

				if (unlink($file_path))
				{
					$this->q("DELETE FROM files WHERE id='$value'");
				}
				else $this->message="<br><font color=\"red\">Ошибка: не могу удалить файл $file</font><br><br><br>";
			}
		}
		if (isset($_POST['del_intros']) && $_POST['del_intros']!=="")
		{
			switch ($_GET["topic"])
			{
				case "color": $table = "intro";	break;
				case "thickness": $table = "intro2"; break;
				case "manuf": $table = "intro3"; break;
				case "size": $table = "intro4"; break;
			}

			foreach ($_POST['del_intros'] as $value)
			{
				$this->q("DELETE FROM $table WHERE id='$value'");
			}
		}

		if (isset($_POST['intro_sort']) && $_POST['intro_sort']!=="")
		{
			switch ($_GET["topic"])
			{
				case "color": $table = "intro";	break;
				case "thickness": $table = "intro2"; break;
				case "manuf": $table = "intro3"; break;
				case "size": $table = "intro4"; break;
			}

			foreach ($_POST['intro_sort'] as $key=>$value)
			{				
				$sql_q = "UPDATE $table SET sort='".trim($value)."' WHERE id='$key'";
				$sql_res = $this->q($sql_q);
			}
		}

	


		if (isset($_GET["id"]) && $_GET["id"]!=="")
		{
		$table="catalog_".$_GET["id"];
		$vis_row="publ";
		}
		else
		{

		switch (@$_GET["topic"])
		{
			case "edit_news":
				$table=$this->pre."news";
			    $vis_row="publ";
			break;

			case "links":
				$table="links";
			    $vis_row="publ";
			break;

			default:
				$table=$this->pre."pages";
			    $vis_row="publ";
		}
		}
		if (isset($_POST['del_cats']) && $_POST['del_cats']!=="")
		{
			foreach ($_POST['del_cats'] as $value)
			{
				$sql_q = $this->q("DELETE FROM $table WHERE id='$value'");
			}
			// $this->MakeSort();
		}
		if (isset($_GET['del_cat']) && $_GET['del_cat']!=="")
		{
			$sql_q = $this->q("DELETE FROM $table WHERE id='".(int)$_GET['del_cat']."'");

			// $this->MakeSort();

			if (isset($_GET["staticpage"]) && $_GET["staticpage"]=="1")
				header ("Location: /admin/?topic=".$_GET["topic"]."&staticpage=1");
			else
				header ("Location: /admin/?topic=".$_GET["topic"]);
		}

		if (isset($_GET['del_rec']) && $_GET['del_rec']!=="")
		{
			$sql_q = $this->q("DELETE FROM ".$this->pre."pages WHERE id='".$_GET['del_rec']."'");

			// $this->MakeSort();
				
			@unlink($this->html_root."/".$_GET['del_rec'].".htm");
		}
        

		/*
		$this->q("UPDATE pages SET sort='0'");

		$sql_q = $this->q("SELECT * FROM pages");

		while ($rows = mysql_fetch_array($sql_q))
		{
			$this->q("UPDATE pages SET sort=sort+1 WHERE id>'$rows[id]'");
		}
*/
$cls = "";
if (isset($_GET["topic"]) && $_GET["topic"]=="addpages")
			{
	
				if (isset($_GET["staticpage"]) && $_GET["staticpage"]=="1")
					$cls = "WHERE pages='' AND static='1'";
				else
					$cls = "WHERE pages='' AND static='0'";
			}
	


		if (isset($_GET['rec_up']) && $_GET['rec_up']!=="")
		{
			

		

			$array = $this->array_recs($table,$cls);
			$array2 = array_flip($array);
			$next_sort_key = $array2[$_GET['rec_up']]-1;

			if ($next_sort_key >=0)
			{
			$next_sort = $array[$next_sort_key];
			$this->remove_recs($table,$next_sort,$_GET['curr_id'],$_GET['rec_up']);
			}
			
		}
		if (isset($_GET['rec_dw']) && $_GET['rec_dw']!=="")
		{
			$array = $this->array_recs($table,$cls);
			$array2 = array_flip($array);
			$next_sort_key = $array2[$_GET['rec_dw']]+1;

			if (isset($array[$next_sort_key]))
			{
			$next_sort = $array[$next_sort_key];
			$this->remove_recs($table,$next_sort,$_GET['curr_id'],$_GET['rec_dw']);
			}
			
		}
		if (isset($_POST['change']) && $_POST['change']==1)
		{
			if (isset($_POST["sortgoods"]))
			{
				for ($i=0; $i<count($_POST["sortgoods"]); $i++)
				{
					$sql_q2 = "UPDATE $table SET sort='".$_POST["sortgoods"][$i]."' WHERE id='".$_POST["thid"][$i]."'";
					$sql_res2 = $this->q($sql_q2);
				}

			}
			if (isset($_POST["gprices"]))
			{
				for ($i=0; $i<count($_POST["gprices"]); $i++)
				{
					$sql_q2 = "UPDATE $table SET cat_price='".$_POST["gprices"][$i]."' WHERE id='".$_POST["thid2"][$i]."'";
					$sql_res2 = $this->q($sql_q2);
				}

			}

			if ($_GET["topic"]=="edit_news")
			{
				$sql_q2 = "UPDATE ".$this->pre."news SET $vis_row='0'";
			}
			else
		
		$sql_q2 = "UPDATE $table SET $vis_row='0' WHERE topics='".$_GET["topic"]."'";


		if ($_GET["topic"]== "addpages")
			{
				if (isset($_GET["staticpage"]) && $_GET["staticpage"]=="1")
				{
					$sql_q2 = "UPDATE ".$this->pre."pages SET publ='0' WHERE pages='' AND static='1'";
				}else
					$sql_q2 = "UPDATE $table SET publ='0' WHERE pages='' AND static!='1'";

			}

		$sql_res2 = $this->q($sql_q2);
		
		if (isset($_POST['visible']))
			{
			foreach ($_POST['visible'] as $value)
				{
				$sql_q = "UPDATE $table SET $vis_row='1' WHERE id='$value'";
				$this->q($sql_q);
				}
			}
		}
	}
	function goodscount()
	{
		$sql_q = "SELECT * FROM $this->temptable WHERE id!='1'";
		$sql_res = $this->q($sql_q);

		return mysql_num_rows($sql_res);
	}

	function change_pass()
	{
		$sql_q = $this->q("SELECT login FROM auth WHERE id='1'");
		$row = mysql_fetch_array($sql_q);
		echo $this->html("change_pass",array("login"=>$row['login']));
	}

	function add_pass()
	{
		echo $this->html("add_pass",array("error"=>$this->message));
	}
	function del_pass()
	{
		echo $this->html("adm_delpass_head",false);

		$sql_q = $this->q("SELECT * FROM auth WHERE status!='moderator' ORDER BY status ASC");

		while ($rows = mysql_fetch_array($sql_q))
		{
			$arr_cyc = array(
				"status"=>$this->transl($rows['status']),
				"login"=>$rows['login'],
				"id"=>$rows['id']
				);
			echo $this->html("adm_delpass_cycle",$arr_cyc);
		}
		echo $this->html("adm_delpass_foot",false);
	}

	function menu_catalog()
	{
		global $category;

		$array = array(
			"technics"=>"ТЕХНИКА",
			"producers"=>"ПРОИЗВОДИТЕЛИ",
			"consumers"=>"ПОТРЕБИТЕЛИ",
			"service"=>"СЕРВИС",
			"dealers"=>"ДИЛЕРЫ",
			"service"=>"СЕРВИС"
			);

		foreach ($array as $key=>$value)
		{
			$cyc_array = array("catalog_link"=>$key, "catalog_name"=>$value);
			echo $this->html("menu_catalog",$cyc_array);
			if ($category==$key)
			{
				echo "<ul>".$this->print_catalog($key)."</ul>";
			}
		}
	}
	function temptable()
	{
		return $this->temptable;
	}
	function news()
	{
		$sql_q = "SELECT * FROM page_25 ORDER BY sort ASC LIMIT 0,3";
		$sql_res = $this->q($sql_q);

		while ($rows = mysql_fetch_array($sql_res))
		{
			$array_cyc = array("t10"=>$rows['t10'],"t9"=>$rows['t9'],"t6"=>$rows['t6']);

			echo $this->html("new_cycle",$array_cyc);
		}
	}
	function add_new()
	{
		global $newadddmess;

		isset($newadddmess) && $newadddmess=="ok" ?
			$message="<br><font color='blue'><strong>Ваша новость успешно добавлена!</strong></font>":
			$message="";

		$values_array = array();

		if (isset($_GET['id']) && $_GET['id']!=="")
		{
			$body = $this->get_record($this->pre."news",$_GET['id'],"news_body");

			$news_publ = $this->get_record($this->pre."news",$_GET['id'],"publ");

			$news_date = $this->get_record($this->pre."news",$_GET['id'],"news_date");

		    $news_publ==1 ? $check = "checked" : $check = "";

		    $news_date=="" ? $date = "" : $date = $news_date;
		}
		else
		{
			$body = false;
			$check = "";
			$date = "";
		}
		$array_cyc = array(
			"MainFrame"=>$body,
			"check"=>$check,
			"id"=>@$_GET['id'],
			"news_date"=>$date,
			"message"=>$message
			);

		$sql_q = $this->q("SELECT * FROM ".$this->pre."news");

		$fields_array[] = array();

		while ($fields = mysql_fetch_field($sql_q))
		{
			$fields_array[] = $fields->name;
		}

		unset($fields_array[0]);
		unset($fields_array[1]);
		unset($fields_array[5]);
		unset($fields_array[11]);
		
		$fields_array = $this->refresh($fields_array);

		foreach ($fields_array as $key=>$value)
		{
			if (isset($_GET['id']) && $_GET['id']!=="")
				{
				$values_array[$value] = $this->get_record($this->pre."news",$_GET['id'],$value);
				}
			else
				$values_array[$value] = "";
		}
		echo $this->html("frame_head_news",array_merge($array_cyc,$values_array));
		
		include ("frame.php");
	}

	function edit_news()
	{
		$topic = $_GET["topic"];

		print $this->html("adm_news_head",false);

		$sql_q = $this->q("SELECT * FROM ".$this->pre."news ORDER BY sort DESC");

		while ($rows = mysql_fetch_array($sql_q))
		{
			$rows['publ']==1 ? $check = "checked" : $check = "";

			$array_cyc = array(
				"date"=>$rows['news_date'],
				"news_title"=>$rows['news_title'],
				"id"=>$rows['id'],
				"sort"=>$rows['sort'],
				"topic"=>$topic,
				"check"=>$check,

				"level"=>1,
				"c_id"=>$rows["id"],
				"na"=>$this->r_id_up($this->pre."news",$rows["sort"],1,"","","sort"),	"r_id"=>$this->get_record2($this->pre."news","sort",$this->r_id_up($this->pre."news",$rows["sort"],1,"","","sort"),"id"),
				"na2"=>$this->get_record($this->pre."news",$rows["id"],"sort"),


				"c_id_d"=>$rows["id"],
				"na_d"=>$this->r_id_dw($this->pre."news",$rows["sort"],1,"","","sort"),	"r_id_d"=>$this->get_record2($this->pre."news","sort",$this->r_id_dw($this->pre."news",$rows["sort"],1,"","","sort"),"id"),
				"na2_d"=>$this->get_record($this->pre."news",$rows["id"],"sort")
				);
			print $this->html("adm_news_cycle",$array_cyc);
		}
		print $this->html("adm_news_foot",false);
	}
	function news_cycle()
	{
		$sql_q = "SELECT * FROM ".$this->pre."news WHERE publ!='1' ORDER BY sort DESC";
		$sql_res = $this->q($sql_q);
		
		while ($rows = mysql_fetch_array($sql_res))
			{
			echo $this->html("news_cycle",array("id"=>$rows['id'],"new"=>$rows['news_small_desc']));
			}
	}
	function left_menu($topic)
	{
		global $rus_topic;

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics = 'u$topic' AND L1='' AND L2='' AND L3='' AND L4='' AND L5='' AND publ='0' ORDER BY sort ASC";

		$sql_res = $this->q($sql_q);

		if (mysql_num_rows($sql_res) > 0)
		{	
			echo $this->html("left_menu_head",array("pages_name"=>$this->toupper($rus_topic)));
		
		while ($rows = mysql_fetch_array($sql_res))
			{
			echo $this->html("left_menu",array("pages_name"=>$rows['pages_name'], "id"=>$rows['id']));
			}
        echo $this->html("left_menu_foot",false); 
		}
		else 
		{
			$new_topic = $this->get_record($this->pre."pages",$topic,"topics");
			$pages = $this->get_record($this->pre."pages",$topic,"pages");

			$sql_q3 = "SELECT pages_name FROM ".$this->pre."pages WHERE topics='$new_topic' AND pages='$pages' AND L1='' AND L2='' AND L3='' AND L4='' AND L5=''";

			$sql_res3 = $this->q($sql_q3);
			$row3 = mysql_fetch_array($sql_res3);

			$pages_name = $row3['pages_name']; // Имя 3-го уровня
				
			$sql_q2 = $this->q("SELECT * FROM ".$this->pre."pages WHERE topics = '$new_topic' AND pages='$pages' AND L1!='' AND L2='' AND L3='' AND L4='' AND L5='' AND publ='0' ORDER BY sort ASC");

			echo $this->html("left_menu_head",array("pages_name"=>$this->toupper($pages_name)));

			while ($rows2 = mysql_fetch_array($sql_q2))
			{
			echo $this->html("left_menu",array("pages_name"=>$rows2['pages_name'], "id"=>$rows2['id']));
			}
			echo $this->html("left_menu_foot",false);
		}
	}
  function pages2()
	{
		global $HTTP_GET_VARS,$_SERVER,$topic;

		$topic = $_GET["topic"];

		//$rus_topic = $this->transl(substr($topic,1,strlen($topic)));
		$topic=="ucatalog" ? $c = "_c" : $c = "";



		$sql_q3 = "SELECT pages_name FROM ".$this->pre."pages WHERE topics='".substr($topic,1,strlen($topic))."'";
		$sql_res3 = $this->q($sql_q3);
		$rows3 = mysql_fetch_array($sql_res3);

		$rus_topic = $rows3["pages_name"];

		$sql_q2 = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND L1='' ORDER BY sort ASC";

		$sql_res2 = $this->q($sql_q2);
        
		while ($rows2 = mysql_fetch_array($sql_res2))
		{
			isset($_GET["slevel"]) && $_GET["slevel"]=="$rows2[pages]/$rows2[L1]/$rows2[L2]/$rows2[L3]/$rows2[L4]/" ? $select = "selected" : $select = "";

			$arr[] = "<option value='$rows2[pages]/$rows2[L1]/$rows2[L2]/$rows2[L3]/$rows2[L4]/' $select>".
				$this->get_l1($this->get_record($this->pre."pages",$rows2["id"],"pages"),"pages_name")
					."/".$this->get_l2($rows2["id"]).
					"</option>";
			

			//echo $this->get_l3($topic,$this->get_record("pages",$rows2["id"],"pages"));
		}
		if (isset($_GET['id']) && $_GET['id']!=="")
		{
			$pages = $this->get_record($this->pre."pages",$_GET['id'],"pages");
			$pages_name = $this->get_record($this->pre."pages",$_GET['id'],"pages_name");
		}
		else 
		{
			$pages = "";
			$pages_name = "";
		}

		print $this->html("adm_pages_head".$c,array("topic"=>$topic,"rus_topic"=>$rus_topic,
			"pages"=>$pages,"pages_name"=>$pages_name,
			"list"=>@implode($arr),"error"=>$this->message,"upd_rec"=>@$_GET['id']));

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND L1='' ORDER BY sort ASC";
		$sql_res = @$this->q($sql_q);
          
		while ($rows = @mysql_fetch_array($sql_res))
		{
			$rows['publ']==1 ? $check="checked":$check="";
			$page = substr($rows["topics"],1,strlen($rows["topics"]));
			$rows["cat_photo"]!=="" ? $photo_icon = "<a href='/downloads/$rows[cat_photo]' target=_blank><img src='/admin/images/photo.gif' border=0></a>" : $photo_icon = "";

			$array_cycle = array(
				"skidki"=>"",
				"link"=>"http://".$_SERVER["HTTP_HOST"]."/?page=".$page."&pid=".$rows['id'],
				"pages_name"=>"<div class=\"catalogTextFont\"><b><a href='/admin/?topic=$rows[id]'>".strtoupper($this->toupper($rows['pages_name']))."</b></a></div>",
				"pages_count"=>$rus_topic,
				"date"=>$rows['curr_date'],
				"id"=>$rows['id'],
				"cat_photo"=>"",
				"photo"=>$photo_icon,
				"topic"=>$topic,
				"sort"=>$rows['sort'],
				"check"=>$check,
				"plus"=>"<a href=# onClick=\"if (document.myform.pages_name.value=='') alert('Необходимо заполнить название подраздела'); else { document.myform.currlevel.value='2' + '-' + '$rows[id]'; myform.submit();  }\"><img src=\"/images/plus.png\" border=0 width=18></a>"
				);
			print $this->html("adm_pages_cycle".$c,$array_cycle);
			
			$sql_q4 = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND pages='$rows[pages]' AND L1!='' AND L2='' ORDER BY sort ASC";
			$sql_res4 = $this->q($sql_q4);
			
			while ($rows4 = mysql_fetch_array($sql_res4))
			{
				$page = substr($rows["topics"],1,strlen($rows["topics"]));

				$topic=="ukatalog" ? $pages_name_res4 = "<a href=\"/admin/moduls/catalog.php?id=$rows4[id]\" target=\"_blank\">$rows4[pages_name]</a>" : $pages_name_res4 = "<a href='/admin/?topic=$rows4[id]'>".$rows4['pages_name']."</a>";

				$rows4['publ']==1 ? $check4="checked":$check4="";
				$rows4["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<img src=\"/downloads/thumbnail.php?img_path=$rows4[cat_photo]&px=20\" alt=\"Фото\" border=\"0\">";
				
					$array_cycle4 = array(
						"skidki"=>"<a href=/admin/moduls/skidki.php?id=$rows4[id] target=_blank style=\"font-size: 9pt;\"><img src=\"/admin/images/skidki.png\" border=0></a>",
						"link"=>"http://".$_SERVER["HTTP_HOST"]."/?page=".$page."&pid=".$rows['id']."&spid=".$rows4["id"],
					    "pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;$pages_name_res4</div>",
					    "cat_photo"=>$cat_photo,
						"pages_count"=>$rus_topic,
					    "date"=>$rows4['curr_date'],
					    "id"=>$rows4['id'],
					    "topic"=>$topic,
					    "sort"=>$rows4['sort'],
					    "check"=>$check4,
						"plus"=>"<a href=# onClick=\"if (document.myform.pages_name.value=='') alert('Необходимо заполнить название подраздела'); else { document.myform.currlevel.value='3' + '-' + '$rows4[id]'; myform.submit();  }\"><img src=\"/images/plus.png\" border=0 width=18></a>"
						);
				print $this->html("adm_pages_cycle".$c,$array_cycle4);

				

				$sql_q5 = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND pages='$rows[pages]' AND L1='$rows4[L1]' AND L2!='' AND L3='' ORDER BY sort ASC";
				//echo "<br>";
				$sql_res5 = $this->q($sql_q5);
				
				
				while ($rows5 = mysql_fetch_array($sql_res5))
				{
					$page = substr($rows["topics"],1,strlen($rows["topics"]));

				    $topic=="ucatalog" ? $pages_name_res5 = "<a href=\"/admin/moduls/catalog.php?id=$rows5[id]\" target=\"_blank\">$rows5[pages_name]</a>" : $pages_name_res5 = "<a href='/admin/?topic=$rows5[id]'>".$rows5['pages_name']."</a>";

				    $rows5['publ']==1 ? $check5="checked":$check5="";
				    $rows5["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<img src=\"/downloads/thumbnail.php?img_path=$rows5[cat_photo]&px=20\" alt=\"Фото\" border=\"0\">";
				
					$array_cycle5 = array(
						"link"=>"http://".$_SERVER["HTTP_HOST"]."/?page=".$page."&pid=".$rows['id']."&spid=".$rows5["id"],
					    "pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;$pages_name_res5</div>",
					    "cat_photo"=>$cat_photo,
						"pages_count"=>$rus_topic,
					    "date"=>$rows5['curr_date'],
					    "id"=>$rows5['id'],
					    "topic"=>$topic,
					    "sort"=>$rows5['sort'],
					    "check"=>$check5,
						"plus"=>"<a href=# onClick=\"if (document.myform.pages_name.value=='') alert('Необходимо заполнить название подраздела'); else { document.myform.currlevel.value='4' + '-' + '$rows5[id]'; myform.submit();  }\"><img src=\"/images/plus.png\" border=0 width=18></a>"
						);
					print $this->html("adm_pages_cycle".$c,$array_cycle5);



					$sql_q6 = "SELECT * FROM ".$this->pre."pages WHERE pages='$rows[pages]' AND L1='$rows5[L1]' AND L2='$rows5[L2]' AND L3!='' AND L4='' ORDER BY sort ASC";
				    //echo "<br>";
				    $sql_res6 = $this->q($sql_q6);

				   while ($rows6 = mysql_fetch_array($sql_res6))
				   {
					   $page = substr($rows["topics"],1,strlen($rows["topics"]));

				       $topic=="ucatalog" ? $pages_name_res6 = "<a href=\"/admin/moduls/catalog.php?id=$rows6[id]\" target=\"_blank\">$rows6[pages_name]</a>" : $pages_name_res6 = "<a href='/admin/?topic=$rows6[id]'>".$rows6['pages_name']."</a>";

				       $rows6['publ']==1 ? $check6="checked":$check6="";
				       $rows6["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<img src=\"/downloads/thumbnail.php?img_path=$rows6[cat_photo]&px=20\" alt=\"Фото\" border=\"0\">";
				
					   $array_cycle6 = array(
						    "link"=>"http://".$_SERVER["HTTP_HOST"]."/?page=".$page."&pid=".$rows['id']."&spid=".$rows6["id"],
					        "pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;$pages_name_res6</div>",
					        "cat_photo"=>$cat_photo,
						    "pages_count"=>$rus_topic,
					        "date"=>$rows6['curr_date'],
					        "id"=>$rows6['id'],
					        "topic"=>$topic,
					        "sort"=>$rows6['sort'],
					        "check"=>$check6,
						    // "plus"=>"<a href=# onClick=\"alert('Все хорошо');\"><img src=\"/images/plus.png\" border=0 width=18></a>"
					        "plus"=>"<a href=# onClick=\"if (document.myform.pages_name.value=='') alert('Необходимо заполнить название подраздела'); else { document.myform.currlevel.value='5' + '-' + '$rows6[id]'; myform.submit();  }\"><img src=\"/images/plus.png\" border=0 width=18></a>"
						    );
					    print $this->html("adm_pages_cycle".$c,$array_cycle6);


						$sql_q7 = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND pages='$rows[pages]' AND L1='$rows6[L1]' AND L2='$rows6[L2]' AND L3='$rows6[L3]' AND L4!='' AND L5='' ORDER BY sort ASC";
				    //echo "<br>";
				        $sql_res7 = $this->q($sql_q7);



						while ($rows7 = mysql_fetch_array($sql_res7))
				   {
					   $page = substr($rows["topics"],1,strlen($rows["topics"]));

				       $topic=="ucatalog" ? $pages_name_res7 = "<a href=\"/admin/moduls/catalog.php?id=$rows7[id]\" target=\"_blank\">$rows7[pages_name]</a>" : $pages_name_res7 = "<a href='/admin/?topic=$rows7[id]'>".$rows7['pages_name']."</a>";

				       $rows7['publ']==1 ? $check7="checked":$check7="";
				       $rows7["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<img src=\"/downloads/thumbnail.php?img_path=$rows7[cat_photo]&px=20\" alt=\"Фото\" border=\"0\">";
				
					   $array_cycle7 = array(
						    "link"=>"http://".$_SERVER["HTTP_HOST"]."/?page=".$page."&pid=".$rows['id']."&spid=".$rows7["id"],
					        "pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;$pages_name_res7</div>",
					        "cat_photo"=>$cat_photo,
						    "pages_count"=>$rus_topic,
					        "date"=>$rows7['curr_date'],
					        "id"=>$rows7['id'],
					        "topic"=>$topic,
					        "sort"=>$rows7['sort'],
					        "check"=>$check7,
						    // "plus"=>"<a href=# onClick=\"alert('Все хорошо');\"><img src=\"/images/plus.png\" border=0 width=18></a>"
					        "plus"=>"<a href=# onClick=\"if (document.myform.pages_name.value=='') alert('Необходимо заполнить название подраздела'); else { document.myform.currlevel.value='6' + '-' + '$rows7[id]'; myform.submit();  }\"><img src=\"/images/plus.png\" border=0 width=18></a>"
						    );
					    print $this->html("adm_pages_cycle".$c,$array_cycle7);


						$sql_q8 = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND pages='$rows[pages]' AND L1='$rows7[L1]' AND L2='$rows7[L2]' AND L3='$rows7[L3]' AND L4='$rows7[L4]' AND L5!='' ORDER BY sort ASC";
				        //echo "<br>";
				        $sql_res8 = $this->q($sql_q8);

						while ($rows8 = mysql_fetch_array($sql_res8))
				   {
					   $page = substr($rows["topics"],1,strlen($rows["topics"]));

				       $topic=="ucatalog" ? $pages_name_res8 = "<a href=\"/admin/moduls/catalog.php?id=$rows8[id]\" target=\"_blank\">$rows8[pages_name]</a>" : $pages_name_res8 = "<a href='/admin/?topic=$rows8[id]'>".$rows8['pages_name']."</a>";

				       $rows8['publ']==1 ? $check8="checked":$check8="";
				       $rows8["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<img src=\"/downloads/thumbnail.php?img_path=$rows8[cat_photo]&px=20\" alt=\"Фото\" border=\"0\">";
				
					   $array_cycle8 = array(
						    "link"=>"http://".$_SERVER["HTTP_HOST"]."/?page=".$page."&pid=".$rows['id']."&spid=".$rows8["id"],
					        "pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;$pages_name_res8</div>",
					        "cat_photo"=>$cat_photo,
						    "pages_count"=>$rus_topic,
					        "date"=>$rows8['curr_date'],
					        "id"=>$rows8['id'],
					        "topic"=>$topic,
					        "sort"=>$rows8['sort'],
					        "check"=>$check8,
						    "plus"=>""
					      
						    );
					    print $this->html("adm_pages_cycle".$c,$array_cycle8);

				   }

				   }


				   }
				   
				}
			}
		}
		print $this->html("adm_pages_foot".$c,false);
	}
	function pages3()
	{
		global $HTTP_GET_VARS,$_SERVER,$topic;

		$sql_q_b = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND L1='' GROUP BY pages_name ORDER BY sort ASC";

		$sql_res_b = $this->q($sql_q_b);
        
		while ($rows_b = mysql_fetch_array($sql_res_b))
		{
			$this->cat_name==$rows_b["pages"] ? 
				$checked = "checked" : $checked = "";

			$pages_box[] = "<INPUT TYPE=\"radio\" value=\"$rows_b[pages]\" name=\"cat_name\" $checked> - $rows_b[pages_name]";
		}

		//$rus_topic = $this->transl(substr($topic,1,strlen($topic)));
		$topic=="ucatalog" ? $c = "_c" : $c = "";



		$rus_topic = "Каталог";

		$sql_q2 = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND L1='' ORDER BY sort ASC";

		$sql_res2 = $this->q($sql_q2);
        
		while ($rows2 = mysql_fetch_array($sql_res2))
		{
			isset($_GET["slevel"]) && $_GET["slevel"]=="$rows2[pages]/$rows2[L1]/$rows2[L2]/$rows2[L3]/$rows2[L4]/" ? $select = "selected" : $select = "";

			if (isset($_GET["id"]) && $_GET["id"]==$rows2["id"])
				$select = "selected";
		

			//$this->cat_name==$rows2["pages"] ? $select = "selected" : $select = "";

			$arr[] = "<option value='$rows2[pages]/$rows2[L1]/$rows2[L2]/$rows2[L3]/$rows2[L4]/' $select>".
				$this->get_l1($this->get_record($this->pre."pages",$rows2["id"],"pages"),"pages_name")
					."</option>";
		}
		if (isset($_GET['id']) && $_GET['id']!=="")
		{
			$pages = $this->get_record($this->pre."pages",$_GET['id'],"pages");
			$pages_name = $this->get_record($this->pre."pages",$_GET['id'],"pages_name");
		}
		else 
		{
			$pages = "";
			$pages_name = "";
		}

		print $this->html("adm_pages_head",array("topic"=>$topic,"rus_topic"=>$rus_topic,
			"pages"=>$pages,"pages_name"=>$pages_name,"cat_name"=>$this->cat_name,
				
			"list"=>@implode($arr),"error"=>$this->message,"upd_rec"=>@$_GET['id']));

/* Одноуровневый магазин

print $this->html("adm_pages_head".$c,array("topic"=>$topic,"rus_topic"=>$rus_topic,
			"pages"=>$pages,"pages_name"=>$pages_name,"cat_name"=>$this->cat_name,
				
			"list"=>@implode($arr),"error"=>$this->message,"upd_rec"=>@$_GET['id']));
*/
		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND L1='' ORDER BY sort ASC";
		$sql_res = @$this->q($sql_q);
          
		while ($rows = @mysql_fetch_array($sql_res))
		{
			$rows['publ']==1 ? $check="checked":$check="";

			$pages_name = strtoupper($this->toupper($rows['pages_name']));

							$pages_name_res = "".$pages_name."";
           
			$array_cycle = array(
				"link"=>"",

				"pages_name"=>"<b><div class=\"catalogTextFont\">$pages_name_res</div></b>",
			
			/* Одноуровневый магазин	
			"pages_name"=>"<a href=\"http://$_SERVER[HTTP_HOST]/admin/moduls/catalog.php?id=$rows[id]\" target=_blank><b><div class=\"catalogTextFont\">$pages_name_res</div></b></a>",
			*/
				"cat_name"=>$this->cat_name,
				"pages_count"=>$rus_topic,
				"date"=>$rows['curr_date'],
				"id"=>$rows['id'],
				"cat_photo"=>"",
				"topic"=>$topic,
				"sort"=>$rows['sort'],
				"check"=>$check,
							"links"=>"",
				"level"=>1,
			
					"c_id"=>$rows["id"],
					"na"=>$this->r_id_up($this->pre."pages",$rows["sort"],1,$rows["topics"],$rows["pages"],"sort"),	"r_id"=>$this->get_record2($this->pre."pages","sort",$this->r_id_up($this->pre."pages",$rows["sort"],1,$rows["topics"],
						$rows["pages"],"sort"),"id"),
					"na2"=>$this->get_record($this->pre."pages",$rows["id"],"sort"),


					"c_id_d"=>$rows["id"],
					"na_d"=>$this->r_id_dw($this->pre."pages",$rows["sort"],1,$rows["topics"],$rows["pages"],"sort"),	"r_id_d"=>$this->get_record2($this->pre."pages","sort",$this->r_id_dw($this->pre."pages",$rows["sort"],1,$rows["topics"],
						$rows["pages"],"sort"),"id"),
					"na2_d"=>$this->get_record($this->pre."pages",$rows["id"],"sort")

				);
			print $this->html("adm_pages_cycle".$c,$array_cycle);
			
			$sql_q4 = "SELECT * FROM ".$this->pre."pages WHERE pages='$rows[pages]' AND L1!='' AND L2='' ORDER BY sort ASC";
			$sql_res4 = $this->q($sql_q4);
			
			while ($rows4 = mysql_fetch_array($sql_res4))
			{
				$rows4['publ']==1 ? $check4="checked":$check4="";

				$topic=="ucatalog" ? $pages_name_res4 = strtoupper($this->toupper($rows4['pages_name'])) :
					$pages_name_res4 = "<a href='/admin/?topic=$rows4[id]'>".$rows4['pages_name']."</a>";
				
				$pages_name_res = "<a href='/admin/?topic=$rows[id]'>".$pages_name."</a>";
				
				$array_cycle4 = array(
					"link"=>"<INPUT TYPE=\"text\" onclick=\"this.select()\"; value=\"/?page=catalog&id2=$rows[id]&id=$rows4[id]\">",

					"pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;<a href=\"http://$_SERVER[HTTP_HOST]/admin/moduls/catalog.php?id=$rows4[id]\" target=_blank>$pages_name_res4</a></div>",

/* Одноуровневый магазин
					"pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;<a href=\"http://$_SERVER[HTTP_HOST]/admin/?topic=$rows4[id]\">$pages_name_res4</a></div>",
					*/
					"cat_name"=>$this->cat_name,
					"pages_count"=>$rus_topic,
					"date"=>$rows4['curr_date'],
					"id"=>$rows4['id'],
					"topic"=>$topic,
					"cat_photo"=>"",
					"sort"=>$rows4['sort'],
					"check"=>$check4,
							"links"=>"",
					"level"=>2,

							"c_id"=>$rows4["id"],
					"na"=>$this->r_id_up($this->pre."pages",$rows4["sort"],1,$rows4["topics"],$rows4["pages"],"sort"),	"r_id"=>$this->get_record2($this->pre."pages","sort",$this->r_id_up($this->pre."pages",$rows4["sort"],1,$rows4["topics"],
						$rows4["pages"],"sort"),"id"),
					"na2"=>$this->get_record($this->pre."pages",$rows4["id"],"sort"),


					"c_id_d"=>$rows4["id"],
					"na_d"=>$this->r_id_dw($this->pre."pages",$rows4["sort"],1,$rows4["topics"],$rows4["pages"],"sort"),	"r_id_d"=>$this->get_record2($this->pre."pages","sort",$this->r_id_dw($this->pre."pages",$rows4["sort"],1,$rows4["topics"],
						$rows4["pages"],"sort"),"id"),
					"na2_d"=>$this->get_record($this->pre."pages",$rows4["id"],"sort")
					);
				print $this->html("adm_pages_cycle".$c,$array_cycle4);

				$sql_q5 = "SELECT * FROM ".$this->pre."pages WHERE pages='$rows4[pages]' AND L1='$rows4[L1]' AND L2!='' AND L3='' ORDER BY sort ASC";
			    $sql_res5 = $this->q($sql_q5);
				
				while ($rows5 = mysql_fetch_array($sql_res5))
				{
					$rows5['publ']==1 ? $check5="checked":$check5="";

					
				$topic=="ucatalog" ? $pages_name_res5 = "<a href=\"/admin/moduls/catalog.php?id=$rows5[id]\" target=\"_blank\">$rows5[pages_name]</a>" : $pages_name_res5 = "<a href='/admin/?topic=$rows5[id]'>".$rows5['pages_name']."</a>";

					$curr_date = explode(" ",$rows5['curr_date']);
					
					$rows5["cat_photo"]=="" ? $cat_photo = "" : $cat_photo = "<img src=\"/downloads/thumbnail.php?img_path=$rows5[cat_photo]&px=20\" alt=\"Фото\" border=\"0\">";

					$array_cycle5 = array(
						"link"=>"http://".$_SERVER["HTTP_HOST"]."/?l=".$rows5['id'],
					    "pages_name"=>"<div class=\"catalogTextFont\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/admin/images/arrowaw2.gif\" border=0>&nbsp;$pages_name_res5</div>",
						"cat_name"=>$this->cat_name,
					    "cat_photo"=>$cat_photo,
						"pages_count"=>$rus_topic,
					    "date"=>$rows5['curr_date'],
					    "id"=>$rows5['id'],
					    "topic"=>$topic,
					    "sort"=>$rows5['sort'],
					    "check"=>$check5,
						"links"=>"/?page=catalog&topic=$rows5[pages]&subtopic=$rows5[L1]&subsubtopic=$rows5[L2]",
						"level"=>3
						);
					print $this->html("adm_pages_cycle".$c,$array_cycle5);
				}
			}
		}
		print $this->html("adm_pages_foot".$c,false);
	}
	function file_m()
	{
		$array_head = array("error"=>$this->message);

		echo $this->html("adm_filem_head",$array_head);

		$sql_q = $this->q("SELECT * FROM files ORDER BY id DESC");

		while ($rows = mysql_fetch_array($sql_q))
		{
			$array_cyc = array(
				"file_name"=>$rows['file_name'],
				"file"=>$rows['files'],
				"file_link"=>"/files/$rows[files]",
				"id"=>$rows['id']
				);
			echo $this->html("adm_filem_cycle",$array_cyc);
		}
		echo $this->html("adm_filem_foot",false);
	}
	function announs()
	{
		if (isset($_GET["error"]) && $_GET["error"]==1)
			$errorstr = "На главной странице возможно выставить не более 2-х товаров!";
		else $errorstr = "";

		$goodslist = array();

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='ucatalog'";
		$sql_res = $this->q($sql_q);

		while ($rows = mysql_fetch_array($sql_res))
		{
			$goodslist[] = "<option value=''>".strtoupper($this->toupper($rows["pages_name"]))."</option>";
			
			if ($sql_q2 = mysql_query("SELECT * FROM catalog_".$rows["id"]))
			{
				while ($rows2 = mysql_fetch_array($sql_q2))
				{
					$goodslist[] = "<option value='$rows[id]-$rows2[id]'> - $rows2[cat_title]</option>";
				}
			}
		}
		$arr_head = array(
			"error"=>$errorstr,
			"goodslist"=>implode($goodslist)
			);

	    echo $this->html("adm_announs_head",$arr_head);
		
		$sql_q3 = "SELECT * FROM announs ORDER BY id DESC";
		$sql_res3 = $this->q($sql_q3);

		while ($rows3 = mysql_fetch_array($sql_res3))
		{
			$goodlink = explode("-",$rows3["goods"]);

			$catalog = $this->get_record($this->pre."pages",$goodlink[0],"pages_name");
			$good = $this->get_record("catalog_".$goodlink[0],$goodlink[1],"cat_title");

			$array_cyc = array(
				"good"=>"<b>".$catalog."</b> / ".$good,
				"id"=>$rows3["id"]
				);

			echo $this->html("adm_announs_cycle",$array_cyc);
		}
		echo $this->html("adm_announs_foot",false);

	}
	function links()
	{
		$array_head = array(
			"upd_rec"=>@$_GET["id"],
			"link_name"=>$this->get_record("links",@$_GET["id"],"link_name"),
			"link_desc"=>$this->get_record("links",@$_GET["id"],"link_desc"),
			"link_addr"=>$this->get_record("links",@$_GET["id"],"link_addr"),
			"error"=>"",
			);

		echo $this->html("adm_link_head",$array_head);

		$sql_q = "SELECT * FROM links ORDER BY sort ASC";
		$sql_res = $this->q($sql_q);
		while ($rows = mysql_fetch_array($sql_res))
		{
			$rows['publ']==1 ? $check = "checked" : $check = "";

			$array_cycle = array(
				"id"=>$rows["id"],
				"link_name"=>$rows["link_name"],
				"date"=>$rows["curr_date"],
				"sort"=>$rows["sort"],
				"check"=>$check
				);
			echo $this->html("adm_link_cycle",$array_cycle);
		}
		echo $this->html("adm_link_foot",false);
	}
	function faq()
	{
		$sql_q = "SELECT * FROM faq ORDER BY sort ASC";
		$sql_res = $this->q($sql_q);
		while ($rows = mysql_fetch_array($sql_res))
		{
			$array_cyc = array(
				"vopros"=>$rows["vopros"],
				"id"=>$rows["id"],
				"sort"=>$rows["sort"]
				);
			$cycle[] = $this->html("adm_faq_cycle",$array_cyc);
		}

		echo $this->html("adm_faq_head",
			array(
			"sort"=>@$this->get_record("faq",@$_GET["id"],"sort"),
			"vopros"=>$this->get_record("faq",@$_GET["id"],"vopros"),
			"otvet"=>$this->get_record("faq",@$_GET["id"],"otvet"),
			"edit_faq"=>@$_GET["id"],"cycle"=>implode($cycle)));
	}
	function addpages()
	{
	

		if (isset($_GET["staticpage"]) && $_GET["staticpage"]==1)
		{
			$this->get_record($this->pre."pages",@$_GET["id"],"lower_menu")==1 ? $check = "checked" : $check = "";

			$statclause = "AND static='1'";
			$stataction = "&staticpage=1";
			$lower_menu = "<INPUT TYPE=\"checkbox\" NAME=\"lower_menu\" value=1 $check>&nbsp;&nbsp;Нижнее меню<br><br>";
		} 
		else 
		{   
             $statclause="AND static!='1'";
			 $stataction = "";
			 $lower_menu = "";
		}

		$array_head = array(
			"error"=>"",
			"newpage"=>$this->get_record($this->pre."pages",@$_GET["id"],"topics"),
			"newpagerus"=>$this->get_record($this->pre."pages",@$_GET["id"],"pages_name"),
			"upd_rec"=>@$_GET["id"],
			"stataction"=>$stataction,
			"lower_menu"=>$lower_menu
			);
		echo $this->html("adm_addpages_head",$array_head);

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE pages='' AND L1='' $statclause ORDER BY sort ASC";
		$sql_res = $this->q($sql_q);

		while ($rows = mysql_fetch_array($sql_res))
		{
			$rows['publ']==1 ? $check = "checked" : $check = "";

			$array_cycle = array(
				"pages_name"=>$rows["pages_name"],
				"date"=>$rows["curr_date"],
				"id"=>$rows["id"],
				"sort"=>$rows["sort"],
				"link"=>"http://".$_SERVER["HTTP_HOST"]."/".$rows["id"].".htm",
				"check"=>$check,
				"stataction"=>$stataction,
				"topic"=>$rows["id"]
				);
			echo $this->html("adm_addpages_cycle",$array_cycle);
		}
		echo $this->html("adm_addpages_foot",false);
	}
	function include_topic($topic)
	{
		global $DOCUMENT_ROOT,$status;

		switch ($topic)
		{
			
			case "uuslugi":
				$this->pages2();
			break;

			case "uclients":
				$this->pages2();
			break;

			case "uorder":
				$this->pages2();
			break;

			case "slgal":
				$this->slgal();
			break;

			case "links":
				$this->links();
			break;

			case "ukatalog":
				$this->pages2();
			break;

			case "ulogistika":
				$this->pages2();
			break;

			case "color":
				$this->intro("");
			break;

			case "thickness";
			    $this->intro("2");
			break;
            
			case "manuf";
			    $this->intro("3");
			break;

			case "size";
			    $this->intro("4");
			break;
	
			case "add_new":
				$this->add_new();
			break;

			case "customers":
				$this->customers();
			break;

			case "edit_news":
				$this->edit_news();
			break;

			case "gallery":
				$this->gallery();
			break;

			case "file_m":
				$this->file_m();
			break;

			case "change_pass":
				$this->change_pass();
			break;

			case "del_pass":
				if ($status=="moderator")
				$this->del_pass();
			break;

			case "announs":
				$this->announs();
			break;

			case "addpages":
				$this->addpages();
			break;

			case "add_pass":
				if ($status=="moderator")
				$this->add_pass();
			break;

			default:
			    $this->get_frame($topic);
		}
	}
}
?>