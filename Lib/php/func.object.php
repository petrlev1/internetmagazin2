<?php

class func
{
	var $file_size;
	var $file_dir;
	var $templ_root;
	var $message;
	var $url;
	var $domain_name;
	
	function db_connect()
	{


		include ($_SERVER["DOCUMENT_ROOT"]."/admin/server_config.php");

	
		if (!@mysql_connect($host,$login,$pass))
			echo "ERR: Can't connect to mysql server<br>";
	    if (!mysql_select_db($dbname))
			echo "ERR: Can't connect to date base<br>"; 

        mysql_query("SET CHARACTER SET cp1251");
        mysql_query("SET character_set_client=cp1251");
        mysql_query("SET character_set_connection=cp1251");
	}
	function q($sql_query)
	{

		if (!$sql_result=mysql_query($sql_query)){
			print "ERR: ".mysql_error()."<br>";
			return false;}
		else{
			return $sql_result;
		}
	}
	function GetDMSIGetPriceInfo($customer,$item,$uom)
	{
		  require_once("Soap.php");

		 $soap = new Soap();

// Login request to API
$xml='<urn:Login>
	  <urn:LoginID>jleeth</urn:LoginID>
	  <urn:Password>compi123</urn:Password>
	</urn:Login>';


		 
$soap->execute($xml ,"urn:DMSiAgilitySession:Session", "Login");
if($soap->isSuccess()){
	
	$soap->setSession();
}
else
	$soap->setError();

$xml2='<urn:GetPriceInfo>
		 <urn:ContextId>'.$soap->sessionId.'</urn:ContextId>
		<urn:dsItemToProcess><urn:dtItemToProcess>
            <urn:ItemCode>'.$item.'</urn:ItemCode>
            <urn:OrderQty>0</urn:OrderQty>
            <urn:UOM>'.$uom.'</urn:UOM>
               <urn:dtItemDimensionToProcess>
                  <urn:ItemCode>'.$item.'</urn:ItemCode>
                  <urn:Thickness></urn:Thickness>
                  <urn:Width></urn:Width>
                  <urn:Length></urn:Length>
                  <urn:OrderQty>0</urn:OrderQty>
                  <urn:UOM>'.$uom.'</urn:UOM>
               </urn:dtItemDimensionToProcess>
          </urn:dtItemToProcess> </urn:dsItemToProcess>
	     <urn:CustomerID>'.$customer.'</urn:CustomerID>
	     <urn:ShiptoSequence>1</urn:ShiptoSequence>
	     <urn:SaleType></urn:SaleType>
	   </urn:GetPriceInfo>';

#print $xml2;

	   $soap->execute($xml2 ,"urn:DMSiAgilityInventory:Inventory", "GetPriceInfo");

if(isset($soap->responseArray['GetPriceInfoResponse']))
{
	
		$customers2 = $soap->responseArray['GetPriceInfoResponse'];
}
#print_r($customers2);
if ($customers2["PricingDatasetHandle"]["dsPriceInfo"]["dtPriceInfo"][0]["PriceType"]["VALUE"]!=="Customer Fixed")
		 {
    

	 
       for ($i=0; $i<count($customers2["PricingDatasetHandle"]["dsPriceInfo"]["dtPriceInfo"]); $i++)
			 {
		   if (preg_match("/Qty Break 1/i",$customers2["PricingDatasetHandle"]["dsPriceInfo"]["dtPriceInfo"][$i]["PriceType"]["VALUE"]))

			

			   return $customers2["PricingDatasetHandle"]["dsPriceInfo"]["dtPriceInfo"][$i]["PriceUOMGrossPrice"]["VALUE"];


			 }

		 }

		 return 0;
	}
	function GetDMSIData($customer,$items)
	{
		#PriceAndAvailability
		
		require_once("Soap.php");
		
		$soap = new Soap();

$xml='<urn:Login>
	  <urn:LoginID>jleeth</urn:LoginID>
	  <urn:Password>compi123</urn:Password>
	</urn:Login>';

$soap->execute($xml ,"urn:DMSiAgilitySession:Session", "Login");
if($soap->isSuccess()){
	
	$soap->setSession();
}
else
	$soap->setError();

$xml='<urn:GetItemPriceAndAvailability>
		 <urn:ContextId>'.$soap->sessionId.'</urn:ContextId>
	     <urn:dsItemToProcess>';

		foreach ($items as $key=>$value)
		{
			if ($value!=="")
			{
			 $xml.= "<urn:dtItemToProcess>
            <urn:ItemCode>". str_replace("&","&amp;",$key)."</urn:ItemCode>
            <urn:OrderQty>0</urn:OrderQty>
            <urn:UOM>".$value."</urn:UOM>
               <urn:dtItemDimensionToProcess>
                  <urn:ItemCode>". str_replace("&","&amp;",$key)."</urn:ItemCode>
                  <urn:Thickness></urn:Thickness>
                  <urn:Width></urn:Width>
                  <urn:Length></urn:Length>
                  <urn:OrderQty>0</urn:OrderQty>
                  <urn:UOM>".$value."</urn:UOM>
               </urn:dtItemDimensionToProcess>
          </urn:dtItemToProcess>";
			}
		}
		 $xml.= ' </urn:dsItemToProcess>
	     <urn:CustomerID>'.$customer.'</urn:CustomerID>
	     <urn:ShiptoSequence>1</urn:ShiptoSequence>
	     <urn:SaleType></urn:SaleType>
	   </urn:GetItemPriceAndAvailability>';


	 

$soap->execute($xml ,"urn:DMSiAgilityInventory:Inventory", "GetItemPriceAndAvailability");

if(isset($soap->responseArray['GetItemPriceAndAvailabilityResponse']))
{
	
	$customers = $soap->responseArray['GetItemPriceAndAvailabilityResponse'];
}

#print_r($customers);

print $soap->responseArray['SOAP-ENV:Fault']['detail']['ns1:FaultDetail']['errorMessage']['VALUE'];
print $soap->responseArray['SOAP-ENV:Envelope']['SOAP-ENV:Body'];

$new_price_array = array();


if (empty($customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"][0]))
{
$display_price = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"]["NetPrice"]["VALUE"];
$GrossPrice = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"]["GrossPrice"]["VALUE"];
$items_cods = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"]["ItemCode"]["VALUE"];
$uom = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"]["UOM"]["VALUE"];

    $new_price_array[$items_cods] = array("NetPrice"=>$display_price, "GrossPrice"=>$GrossPrice,"uom"=>$uom);
}
else 
{
	for ($i=0; $i<count($customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"]); $i++)
	{
	$display_price = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"][$i]["NetPrice"]["VALUE"];
    $GrossPrice = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"][$i]["GrossPrice"]["VALUE"];
    $items_cods = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"][$i]["ItemCode"]["VALUE"];
    $uom = $customers["ItemWithPriceAndQtyDatasetHandle"]["dsItemWithPriceAndQty"]["dtItemWithPriceAndQty"][$i]["UOM"]["VALUE"];

    $new_price_array[$items_cods] = array("NetPrice"=>$display_price, "GrossPrice"=>$GrossPrice,"uom"=>$uom);
	}
}

return $new_price_array;


	}
	function GetSizes($array,$id)
	{
		$array2 = unserialize($array);

		if (is_array($array2[0])) {
		return $array2[$id]["DimensionSize"]["VALUE"];
		}else 
			return $array2["DimensionSize"]["VALUE"];


	}
	function GetOptionSize($table,$id2,$param3)
	{
		$array = unserialize($this->get_record($table,$id2,"sizes")); 


		foreach ($array as $key=>$value)
		{
			if ($param3!=="")
				$param3==$key ? $sselected = "selected": $sselected = ""; else $sselected = "";
			$resarr[] = "<option value=\"$key\" $sselected>".$value["DimensionSize"]["VALUE"]."</option>";
		}
		return implode($resarr);
		
	}
	function toupper($word)
	{
		$from="абвгдеёжзийклмнопрстуфхцчшщъыьэюя";
	    $to="АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
	
		return strtr($word, $from,$to);
	}
	function tolower($word)
	{
		$from="АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
		$to="абвгдеёжзийклмнопрстуфхцчшщъыьэюя";
	   
		return strtr($word, $from,$to);
	}
	function upfirst($word)
	{
		//<font style=\"BACKGROUND-COLOR: #ffd700\">
		
		$firstfig = $this->toupper(substr($word,0,1));
		$remainder = substr($word,1,strlen($word));

		$result = $firstfig.$remainder; 
		
		return $result;
	}
	function GetCustomerName($log)
	{
		$sql_q = "SELECT * FROM customers WHERE CustomerID='$log'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		return $rows["CustomerName"];
	}
	function GetItemPriceAndAvailability_GrossPrice($customer,$table,$id,$pricetype)
	{
		$sql_q = "SELECT * FROM $table WHERE id='$id'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		$result =  $rows["Customer_".$customer."_GetItemPriceAndAvailability_".$pricetype.""];

		if ($result=="") return $rows["cat_price"];

		else

		return $rows["Customer_".$customer."_GetItemPriceAndAvailability_".$pricetype.""];
	}




	function CheckCustomer($log,$pwd)
	{
		global $_GET;

		$sql_q = "SELECT * FROM customers WHERE CustomerID='".strip_tags(trim($log))."'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		if ($rows["CustomerPass"]==$pwd) 
		{
			$_SESSION["customer"] = $this->GetCustomerName($log);
			$_SESSION["log"] = $log;

		
              if ($_POST["redirect_to"]!=="/")
			    header("Location: ".$_POST["redirect_to"]);
			  else header ("Location: http://".$this->url."/");
			

			
		}

		elseif (!isset($_SESSION["customer"])) 
		{
				header("Location: ".$this->url."/"."?mess=err");
		}
		
	}
	function tech_translate ($string,$lang) 
	{
		if ($lang=="eng"){
			$from="абвгдеёжзийклмнопрстуфхцчшщьыъэюя ";
			$to = "abvgde0jziyklmnoprstufhc46915%78x_";}
		
		elseif ($lang=="rus"){
			$from="abvgde0jziyklmnoprstufhc46915%78x_";
			$to=  "абвгдеёжзийклмнопрстуфхцчшщьыъэюя ";
			} 
		$string = strtr ($string, $from, $to);
        return $string;
	}
	function customers()
	{
	

		$CustomerId = "5920";
		$Method = "GetItemPriceAndAvailability";
		$Param = "NetPrice";

		#$Param = "GrossPrice";

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='ukatalog' AND L1!=''";
		$sql_res = $this->q($sql_q);

		while ($rows = mysql_fetch_array($sql_res))
		{
			$sql_q2 = "ALTER TABLE  `catalog_".$rows["id"]."` ADD  `Customer_".$CustomerId."_".$Method."_".$Param."` VARCHAR(35) NOT NULL AFTER  `curr_date`";

			$sql_res2 = $this->q($sql_q2);
			
			#echo "<br>";

		}
	
		
	


	}
	function show($array)
	{
		foreach ($array as $key=>$value)
		print "$key=>$value<BR>";
	}
	function refresh($array)
	{
		$newarray=array();
		foreach ($array as $value)
			$newarray[]=$value;
		return $newarray;
	}
	function html($pattern,$array)
	{	
		$pattern=implode(file($this->html_root."/".$pattern.".htm"));
		
		if ($array!==false){
		foreach ($array as $key=>$value)
			$pattern=str_replace("{".$key."}",$value,$pattern);}       
		
		return $pattern;
	}

	function download($type)
	{
	global $dfile, $dfile_name, $dfile_size,$id;


        
		if (empty($dfile))return;

	    $file_size=$this->file_size;
	    $file_dir=$this->file_dir;
		$new_file_name = time().".jpg";

	

	    if (preg_match("/([a-zA-Z0-9]\.JPG|\.jpg)/i",$dfile_name))
			{
			if(copy ($dfile, "$file_dir/$dfile_name"))
                     rename ("$file_dir/$dfile_name", "$file_dir/$new_file_name");

		             $image=$new_file_name;	        
			}
	        else print $this->error_message("Вы выбрали файл не того формата!"); 

			 return $image;	
	
	   return 0;
	}
	function GetCartPho($id,$cid)
	{
		$sql_q = "SELECT * FROM catalog_".$id." WHERE id='$cid'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);
		return $rows["cat_colors"];
	}
	function modify_date_wt($date)
	{
		$new_date=explode(" ",$date);
		$date_arr=explode("-",$new_date[0]);
        $date_res=$date_arr[2].".".$date_arr[1].".".$date_arr[0];
		return $date_res;
	}
	function modify_date($date)
	{
		$date_arr=explode("-",$date);
        $date_res=$date_arr[2].".".$date_arr[1].".".substr($date_arr[0],2,4);
		return $date_res;
	}
	function get_date_part($date,$part)
	{
		$date_arr=explode("-",$date);
		return $date_arr[$part];
	}
	function split_url()
	{
		global $REQUEST_URI;

		$url=explode("/",$REQUEST_URI);
		unset($url[0]);
		unset($url[count($url)]);
		$url=$this->refresh($url);
        return $url;
	}
	function get_record($table,$id,$object)
	{
		$sql_q="SELECT * FROM $table WHERE id='$id'";
		if (!$sql_res=mysql_query($sql_q))print "ERR: ".mysql_error();
		$rows=mysql_fetch_array($sql_res);
		$func_res=$rows[$object];
		return $func_res;
	}
	function GetCollPos($tab,$catalog_table,$upd_rec)
	{
		$sql_q = $this->q("SELECT sort FROM $tab WHERE cat_num='$catalog_table' AND cat_id='$upd_rec'");
		$rows = mysql_fetch_array($sql_q);

		return $rows["sort"];

	}
	function GetDizayneri($topics,$catalog,$id)
	{
		$array = array();

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='$topics' AND pages='dizayner5' AND L1!=''";
		$sql_res = $this->q($sql_q);

		while ($rows = mysql_fetch_array($sql_res))
		{
			if ($this->get_record($catalog,$id,"cat_colors")==$rows["pages_name"])
				$sel = "selected";
			else $sel = "";


			$array[] = "<option value='$rows[pages_name]' $sel>$rows[pages_name]</option>";
		}
		return implode($array);
	}
	function get_table($tables,$topic)
	{
		foreach ($tables as $table)
		{
			$sql_q2 = "SELECT id FROM $table WHERE t9='$topic'";
			if (mysql_num_rows($this->q($sql_q2)) > 0) 
				return $table;
		}return;
	}
	function get_level($l,$obj)
	{
		$topic = $this->get_record($this->pre."pages",$l,"topics");
		$pages = $this->get_record($this->pre."pages",$l,"pages");

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND pages='$pages'";
		$sql_res = $this->q($sql_q);
		$row = mysql_fetch_array($sql_res);
		$func_res = $row[$obj];
		return $func_res;
	}
	function check_photos($catalog,$id)
	{
		$sql_q = "SELECT COUNT(id) AS 'photos' FROM photos WHERE cat='$catalog' AND idc='$id'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		return $rows["photos"];
	}
	function GetBrends($currbrend)
	{
		$sql_qb = "SELECT * FROM folders";
		$sql_resb = $this->q($sql_qb);
		
		while ($rowsb = mysql_fetch_array($sql_resb))
		{
			$currbrend == "$rowsb[folders]" ? $selb = "selected" : $selb = "";
			$brendsarr[] = "<option value='$rowsb[folders]' $selb>$rowsb[folders]</option>";
		}
		return implode($brendsarr);
	}
	function GetSchHref($id)
	{
			$sql_q = $this->q("SELECT id FROM ".$this->pre."pages WHERE topics='".$this->get_record($this->pre."pages",$id,"topics")."' AND pages='".$this->get_record("pages",$id,"pages")."' AND L1='".$this->get_record($this->pre."pages",$id,"L1")."' AND L2='".$this->get_record($this->pre."pages",$id,"L2")."' AND L3='".$this->get_record($this->pre."pages",$id,"L3")."' AND L4='".$this->get_record($this->pre."pages",$id,"L4")."' AND L5=''");
			
			$rows = mysql_fetch_array($sql_q);

			$spid4 = $rows["id"];
			
			$sql_q2 = $this->q("SELECT id FROM ".$this->pre."pages WHERE topics='".$this->get_record($this->pre."pages",$id,"topics")."' AND pages='".$this->get_record($this->pre."pages",$id,"pages")."' AND L1='".$this->get_record($this->pre."pages",$id,"L1")."' AND L2='".$this->get_record($this->pre."pages",$id,"L2")."' AND L3!='' AND L4=''");
			
			$rows2 = mysql_fetch_array($sql_q2);

			$spid3 = $rows2["id"];


			$sql_q3 = $this->q("SELECT id FROM ".$this->pre."pages WHERE topics='".$this->get_record($this->pre."pages",$id,"topics")."' AND pages='".$this->get_record($this->pre."pages",$id,"pages")."' AND L1='".$this->get_record($this->pre."pages",$id,"L1")."' AND L2!='' AND L3=''");
			
			$rows3 = mysql_fetch_array($sql_q3);

			$spid2 = $rows3["id"];

			$sql_q4 = $this->q("SELECT id FROM ".$this->pre."pages WHERE topics='".$this->get_record($this->pre."pages",$id,"topics")."' AND pages='".$this->get_record($this->pre."pages",$id,"pages")."' AND L1='".$this->get_record($this->pre."pages",$id,"L1")."' AND L1!='' AND L2=''");
			
			$rows4 = mysql_fetch_array($sql_q4);

			$spid = $rows4["id"];

			$sql_q5 = $this->q("SELECT id FROM ".$this->pre."pages WHERE topics='".$this->get_record($this->pre."pages",$id,"topics")."' AND pages='".$this->get_record($this->pre."pages",$id,"pages")."' AND L1=''");
			
			$rows5 = mysql_fetch_array($sql_q5);

			$pid = $rows5["id"];

			$spid5 = $id;

		if ($this->get_record($this->pre."pages",$id,"L5")!=="")
		{
			$href = "/".$this->get_record($this->pre."pages",$id,"pages")."/".$pid."/".$spid."/".$spid2."/".$spid3."/".$spid4."/".$spid5.".htm";
		}
		elseif (($this->get_record($this->pre."pages",$id,"L4")!=="") && ($this->get_record($this->pre."pages",$id,"L5")==""))
		{
			$href = "/".$this->get_record($this->pre."pages",$id,"pages")."/".$pid."/".$spid."/".$spid2."/".$spid3."/".$spid5.".htm";
		}
		elseif (($this->get_record($this->pre."pages",$id,"L3")!=="") && ($this->get_record($this->pre."pages",$id,"L4")==""))
		{
			$href = "/".$this->get_record($this->pre."pages",$id,"pages")."/".$pid."/".$spid."/".$spid2."/".$spid5.".htm";
		}
		elseif (($this->get_record($this->pre."pages",$id,"L2")!=="") && ($this->get_record($this->pre."pages",$id,"L3")==""))
		{
			$href = "/".$this->get_record($this->pre."pages",$id,"pages")."/".$pid."/".$spid."/".$spid5.".htm";
		}
		elseif (($this->get_record($this->pre."pages",$id,"L1")!=="") && ($this->get_record($this->pre."pages",$id,"L2")==""))
		{
			$href = "/".$this->get_record($this->pre."pages",$id,"pages")."/".$pid."/".$spid5.".htm";
		}
		elseif (($this->get_record($this->pre."pages",$id,"pages")!=="") && ($this->get_record($this->pre."pages",$id,"L1")==""))
		{
			$href = "/".$this->get_record($this->pre."pages",$id,"pages")."/".$spid5.".htm";
		}
		else
		{
			$href = "/".$rows["id"].".htm";
		}
		return $href;
	}
	function path($l)
	{
		$array = array();

		if ($this->get_record($this->pre."pages",$l,"pages")!=="" && $this->get_record($this->pre."pages",$l,"L1")=="")
		{
			$array[] = $this->html("path",array("id"=>$l,"path"=>$this->get_record($this->pre."pages",$l,"pages_name")));
		}
		elseif($this->get_record($this->pre."pages",$l,"L1")!=="" && $this->get_record($this->pre."pages",$l,"L2")=="")
		{
			$array[] = $this->html("path",array("id"=>$this->get_level($l,"id"),"path"=>$this->get_level($l,"pages_name")));
			$array[] = $this->html("path",array("id"=>$l,"path"=>$this->get_record($this->pre."pages",$l,"pages_name")));
		}

		return " &#8594 ".implode(" &#8594 ",$array);
	}
	function CleanPhotos()
	{
		$sql_q3 = "SELECT * FROM photos WHERE page='main'";		
		$sql_res3 = $this->q($sql_q3);
		
		while ($rows3 = mysql_fetch_array($sql_res3))
			{
			if (!$this->get_record("catalog_".$rows3["cat"],$rows3["idc"],"id"))
				{

				echo "DELETE FROM photos WHERE id='$rows3[id]'";

				$this->q("DELETE FROM photos WHERE id='$rows3[id]'");
				}
			}
	}
    function slgal()
	{
		echo $this->html("adm_slgale_head",array(
			"id"=>@$_GET["id"],
			"gal_link"=>$this->get_record("slgal",@$_GET["id"],"link"),
			"gal_collname"=>$this->get_record("slgal",@$_GET["id"],"collname"),
			"gal_dizname"=>$this->get_record("slgal",@$_GET["id"],"dizname")
			));

		$sql_q = $this->q("SELECT * FROM slgal ORDER BY id DESC");
		while ($rows = mysql_fetch_array($sql_q))
		{
			$array = array(
				"id"=>$rows["id"],
				"file_name"=>"<img src='/downloads/$rows[pho]' border=0 height=40 align=right>",
				"file"=>$rows["collname"],
				"sort"=>$rows["sort"]
				);

			echo $this->html("adm_slgale_cycle",$array);
		}
		echo $this->html("adm_slgale_foot",false);
	}
	function krat($p,$n)
	{
		for ($i=1; $i<$n+1; $i++)
		{
			$t = $p + $i;
			$r = $t/$n;

			if ( is_int($r)) return $t;
		}
	}
	function scroll($sql_q,$href)
	{
		//print $sql_q; 

		$sql_q = explode("LIMIT",$sql_q);

		// echo $sql_q[0];
	
		$sql_res = $this->q(trim($sql_q[0]));
		
        $pages_count = ceil(mysql_num_rows($sql_res)/$this->max_ads);

		$limit = $this->cpage* $this->max_ads;

		$scroll = array();

		$scc = 1;

		$tpage = $this->krat ($this->cpage,$scc);
		$tpage1 = $tpage - $scc - 1;

		if ($pages_count <= $tpage)
		{
			$rtp = $pages_count;
			$tar1 = "";
		}else {
			$rtp = $tpage;
			$tar1 = "<a href='/?p=$tpage'>Предыдущие 20</a>";
		}
		if ($tpage == $scc)
		{
			$tar2 = "";
		}else{
			$tar2 = "<a href='/?p=$tpage1' >Следующие 20</a>";
		}

		for ($i = $tpage-$scc; $i < $rtp; $i++)
		{
			$l=$i+1;

			if (isset($_GET['query']) && $_GET['query']!=="")
			{
				$href2 = "/?page=search&query=".urlencode($_GET['query'])."&p=$i";
			}
			else
			{
				$href2 = "/?p=".$i;
			}
			if ($i==$this->cpage)
			{
				$scroll[] = "<font size='2' style='text-decoration: none;'> <b>$l</b></font>";
			                  } else {
				
				$scroll[] = "<a href='$href2'> $l</a>";
			}
		}
		return " $tar2"." $tar1";
	}
	function firstlevel($id)
	{
		$sql_q = "SELECT topics FROM ".$this->pre."pages WHERE id='$id'";
		$sql_res = $this->q($sql_q);
		$rows= mysql_fetch_array($sql_res);
		$f = $rows["topics"];

		$sql_q2 = "SELECT pages_name FROM ".$this->pre."pages WHERE topics='".substr($f,1,strlen($f))."' AND pages=''";
		$sql_res2 = $this->q($sql_q2);
		$rows2 = mysql_fetch_array($sql_res2);
		return $rows2["pages_name"];
	}
	function get_frame($topic)
	{


		$sql_q5 = "SELECT pages_name FROM ".$this->pre."pages WHERE topics='$topic'";
		$sql_res5 = $this->q($sql_q5);

		$rows5 = mysql_fetch_array($sql_res5);

		$rus_topic5 = $rows5["pages_name"];

		$this->fields_count($this->pre."pages","id='".$_GET['topic']."'") == 0 ? $row_d = "topics" : $row_d = "id";

		$sql_q3 = $this->q("SELECT publ FROM ".$this->pre."pages WHERE $row_d='$topic'");

		$sql_q4 = $this->q("SELECT curr_date FROM ".$this->pre."pages WHERE $row_d='$topic'");

		$sql_res3 = mysql_fetch_array($sql_q3);

		$sql_res4 = mysql_fetch_array($sql_q4);
		
		$sql_res3['publ']==1 ? $check = "checked" : $check = "";

		$sql_res4['curr_date']=="" ? 
			$date = date("m.d.y")."  ".date("H:i:s") : $date = $sql_res4['curr_date'];

		/*$topic_file = $_SERVER["DOCUMENT_ROOT"]."/Lib/html/$topic.htm";

		if (file_exists($topic_file) && filesize($topic_file)>0)
			{
			$frame_body = implode(file($topic_file));
			}
		else $frame_body = false;*/

		$sql_q = $this->q("SELECT * FROM ".$this->pre."pages WHERE $row_d='$topic'");

		$row = mysql_fetch_array($sql_q);

		$frame_body = $row["big_desc"];

		$sql_q1 = "SELECT topics,pages,pages_name,L1,L2,L3,L4,L5 FROM ".$this->pre."pages WHERE $row_d='$topic'";
		$sql_res1 = $this->q($sql_q1);

		while ($rows2 = mysql_fetch_row($sql_res1))
		{
			foreach ($rows2 as $row2)
			{
				if (!empty($row2))
				$levels_arr[] = $row2;
			}
		}
		$level1 = substr($levels_arr[0],1,strlen($levels_arr[0]));
        unset($levels_arr[0]); 

		$pages_name = @$levels_arr[2];

		unset($levels_arr[2]); 

		$levels_string = "/".$level1."/".implode("/",$levels_arr);

		if ($topic=="katalog" || $topic=="uslugi" || $topic=="logistika")
		{
			$creating = "<h1>Редактирование страницы \"$rus_topic5\"</h1><a href=\"/admin/?topic=u".$topic."\"><i><strong>Создание подстраниц</strong></i></a>";
		}
		elseif ($this->fields_count($this->pre."pages","id='".$_GET['topic']."'")!=0)
		{
			// Строка "структура"

			$pages = $this->get_record($this->pre."pages",$_GET['topic'],"pages");

			$pages_l1 = $this->get_record($this->pre."pages",$_GET['topic'],"L1");

			$pages_l2 = $this->get_record($this->pre."pages",$_GET['topic'],"L2");
			
			$sql_q_pages = $this->q("SELECT * FROM ".$this->pre."pages WHERE pages='$pages' AND L1=''");

			if (mysql_num_rows($sql_q_pages) > 0)
			{
			$row_pages = mysql_fetch_array($sql_q_pages);
			
			$pname = $row_pages["pages_name"];
			}
			if ($pages_l1!==""){
			$sql_q_l1 = $this->q("SELECT * FROM ".$this->pre."pages WHERE pages='$pages' AND L1='$pages_l1' AND L2=''");
			
			if (mysql_num_rows($sql_q_l1) > 0)
			{
				$l1_row = mysql_fetch_array($sql_q_l1);
				$l1 = "/".$l1_row["pages_name"];
			}else $l1 = "";
			}else $l1 = "";

			if ($pages_l2!==""){
				$l2 = "/".$this->get_record($this->pre."pages",$_GET['topic'],"pages_name");
			}else $l2 = "";
			
			// Строка "структура" конец

            if ($this->get_record($this->pre."pages",$topic,"static")=="1")
			{
				$creating = "<h1>Редактирование страницы \"".$this->get_record($this->pre."pages",$topic,"pages_name")." \"</h1><strong>(Уровень: статичные страницы)</strong><br><br><a href=\"?topic=addpages&staticpage=1\"><i><strong>К структуре</strong></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}else {

			$creating = "<h1>Редактирование страницы \"".$this->firstlevel($topic)." \"</h1><strong>(Уровень: ". $pname.$l1.$l2.")</strong><br><br><a href=\"/admin/?topic=u".$level1."\"><i><strong>К структуре</strong></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
		}
		else{	
			$creating = "<h1>Редактирование страницы \"$rus_topic5\"</h1>";
		}

		$arr_head=array(
			"frame_body"=>$frame_body,
			"topic"=>$topic,
			"creating"=>$creating,
			"check"=>$check,
			"date"=>$date,
			"title"=>$row['title'],
			"small_desc"=>$row['small_desc'],
			"description"=>$row['description'],
			"keywords"=>$row['keywords']
			);

		echo $this->html("frame_head",$arr_head);
	
		include ("frame.php");
	}
	function footer()
	{
		echo $this->html("footer",false);
	}
	function get_l1($pages,$res)
	{
		// "pages_name"

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE pages='$pages' AND L1=''";
		$sql_res = $this->q($sql_q);
		$row = mysql_fetch_array($sql_res);
		return $row[$res];
	}
	function get_l2($id)
	{
		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE L1!='' AND L2='' AND id='$id'";
		$sql_res = $this->q($sql_q);
		$row = mysql_fetch_array($sql_res);
		return $row["pages_name"];
	}
	function get_l3($topic,$page)
	{
		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND pages='$page' AND L1!='' AND L2=''";
		$sql_res = $this->q($sql_q);
		$row = mysql_fetch_array($sql_res);
		return $row["pages_name"];
	}

	function get_values($params,$table,$id)
	{
		$array = array();

		foreach ($params as $value)
		{
			$array[$value] = $this->get_record($table,$id,$value);
		}
		return $array;
	}
	function shtuk($id,$id1)
	{
		$sql_q = "SELECT COUNT(id) AS 'shtuk' FROM ".$this->temptable()." WHERE id1='$id1' AND id2='$id'";
		$sql_res = $this->q($sql_q);

		$rows = mysql_fetch_array($sql_res);
		return $rows["shtuk"];
	}
	function GetSkidka($n,$o,$cata)
	{
		$sql_q = "SELECT * FROM skidki WHERE cata='$cata' ORDER BY price ASC LIMIT $n,1";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		return $rows[$o];
	}
	function CartPrice ($id1,$id2)
	{
		$sql_q = "SELECT SUM(param1) AS 'pricesumm' FROM ".$this->temptable()." WHERE id1='$id1' AND id2='$id2'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		return $rows['pricesumm'];
	}


	function remove_recs($table,$next_sort,$curr_id,$sort)
	{
		global $topic;

		//$topic == "ucatalog" ? $add = "AND pages='".$this->cat_name."'" : $add = "";
		$add = "";

		$sql_q2 = "SELECT id FROM $table WHERE sort='$next_sort'";

		if (!$sql_res3 = mysql_query($sql_q2))print "ERR: ".mysql_error();
		
		$row2 = mysql_fetch_array($sql_res3);
		$next_id = $row2['id'];

		$sql_q3 = "UPDATE $table SET sort='$next_sort' WHERE id='$curr_id'";
		#echo "<br>";
		$sql_q4 = "UPDATE $table SET sort='$sort' WHERE id='$next_id'";

		if (!$sql_res3 = mysql_query($sql_q3))print "ERR: ".mysql_error();
		if (!$sql_res4 = mysql_query($sql_q4))print "ERR: ".mysql_error();
	}
	function CheckCatalog($catalog)
	{
		$sql_q = $this->q("SELECT id FROM $catalog");
		return mysql_num_rows($sql_q);
	}
	function GetCategoryName($pages)
	{
		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE pages='$pages' AND L1='' AND topics='ukatalog'";
		$sql_res = $this->q($sql_q);

		$rows = mysql_fetch_array($sql_res);
		return $rows["pages_name"];

	}
	function GetCategory($pages)
	{
		$sql_q = "SELECT pages_name FROM ".$this->pre."pages WHERE topics='ukatalog' AND pages='$pages' AND L1=''";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		return $rows["pages_name"];
	
	}

	function firstlevel2($id)
	{
		$sql_q = "SELECT topics FROM ".$this->pre."pages WHERE id='$id'";
		$sql_res = $this->q($sql_q);
		$rows= mysql_fetch_array($sql_res);
		$f = $rows["topics"];

		$sql_q2 = "SELECT * FROM ".$this->pre."pages WHERE topics='".substr($f,1,strlen($f))."' AND pages=''";
		$sql_res2 = $this->q($sql_q2);
		$rows2 = mysql_fetch_array($sql_res2);
		return $rows2["id"];
	}
	function array_recs($table,$cls)
	{
		global $topic,$level;

		if ($topic=="ucatalog")
		{
			switch ($level)
				{
				case 1:
					$cls = " WHERE topics = 'ucatalog' AND L1='' AND L2=''";
			    break;
				case 2:
					$cls = " WHERE topics = 'ucatalog' AND L1!='' AND L2=''";
			    break;
				case 3:
					$cls = " WHERE topics = 'ucatalog' AND L1!='' AND L2!=''";
			    break;
				default:
					$cls = "";

				}
		}else $cls = "";



		$sql_q = mysql_query("SELECT * FROM $table $cls ORDER BY sort ASC");
			
		while ($rows = mysql_fetch_array($sql_q))
		{
			$array[] = $rows["sort"];
		}
		return $array;
	}
	function search_fill_keyword($text,$keyword)
	{
		$repl = "<font style=\"BACKGROUND-COLOR: #ffd700\">$keyword</font>";
		
		$func_res = str_replace($keyword,$repl,$text);
		return $func_res;
	}
	function mysql_table_exists ($tablename) 
	{
		$res = mysql_query("SHOW TABLE STATUS LIKE '$tablename'") or die(mysql_error());
		return mysql_num_rows($res);
	}
	function get_encode_pass($password,$login)
	{
		$sql_q = "SELECT password FROM ".$this->pre."auth WHERE login='$login'";
		$sql_res=$this->q($sql_q);
		$row=mysql_fetch_array($sql_res);
		$pass=$row["password"];
		if(crypt($password,$pass)==$pass)

		return $pass;
	}
	function get_admin_funcs($password,$login)
	{
	    $sql_q="SELECT login FROM ".$this->pre."auth WHERE  password='".$this->get_encode_pass($password,$login)."'";
		$sql_res=$this->q($sql_q);
		$row=mysql_fetch_array($sql_res);
        return $func_res=$row['login']; 
	}
	function passwd()
	{
		$func_res = str_replace("www.","",$_SERVER["HTTP_HOST"]);
		return $func_res;
	}
	function make_inser_str($array,$desc,$ch)
	{
		foreach ($array as $value)
		{
			$val_arr[] = "'".trim(@$_POST[$value])."'";
		}
		@$_POST[$ch]=="on" ? $visible=1 : $visible=0; 

		$sql_str = "(".implode(",",$array).",$desc,visible) VALUES (".implode(",",$val_arr).",'".trim($_POST[$desc])."','$visible')";
		return $sql_str;
	}
    function make_update_str($array,$desc,$ch)
	{
		foreach ($array as $value)
		{
			$val_arr[] = "$value='".trim(@$_POST[$value])."'";
		}
	    @$_POST[$ch]=="on" ? $visible=1 : $visible=0; 

		$sql_str = implode(",",$val_arr).",$desc='".trim($_POST[$desc])."',visible='$visible'";
		return $sql_str;
	}
	function search_res($table,$id,$object)
	{
		$sql_q = "SELECT $object FROM $table WHERE id='$id'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);
		return $rows[$object];
	}
	function rows_array($n)
	{
		for ($i=1; $i<=$n; $i++)
		{
			$array[$i] = "t".$i;
		}
		return $array;
	}
	function vidrepl($vid)
	{
		$idarr = explode(":",$vid);

		$id = $idarr[1];

		$sql_q = "SELECT * FROM thaivideo WHERE id='$id'";
		$sql_res = $this->q($sql_q);
		
		$rows = mysql_fetch_array($sql_res);

		return "<p>$rows[videocode]</p>";

		//print_r($array);
	}
	function showvids($text)
	{
		$arr = array();
		
		if (preg_match_all ("(vid:[0-9]+)",$text,$arr))
			{
			foreach ($arr[0] as $key=>$value)
				{
				$replacements[] =  $this->vidrepl($value);
				$patterns[] = "/$value/";
				}
				// print_r($arr[0]);
			
		    return preg_replace($patterns, $replacements, $text);
			}
			else return $text;
	}
	function transl($word)
	{
		$array = array(
			"about"=>"О союзе",
			"user"=>"Пользователь",
			"chln"=>"Членство в Союзе",
			"str"=>"Структура Союза",
			"rus_sor"=>"Российские соревнования",
			"ok_url"=>"Полезные ссылки",
			"internat_sor"=>"Международные соревнования",
			"publ"=>"Публикации в прессе",
			"partn"=>"Партнеры и спонсоры",
			"news"=>"Новости",
			"contacts"=>"Контакты",
			"site_map"=>"Карта сайта"
			);
		return @$array[$word];
	}
	function row_by_page($page,$row)
	{
		//print "SELECT $row FROM text_topics WHERE t9='$page'";

		$sql_q = $this->q("SELECT $row FROM text_topics WHERE t9='$page'");
		$func_res = mysql_result($sql_q,$row);
		return $func_res;
	}
	function get_page_name($topic,$mode,$res)
	{
		if ($mode=="c") $row="pages";
		elseif ($mode=="t") $row="topics";

		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE $row='$topic' AND L1=''";
		$sql_res = $this->q($sql_q);

		$row = mysql_fetch_array($sql_res);

		return $this->upfirst($row[$res]);
	}
	function id_by_name($row,$value)
	{
		$sql_q = "SELECT id FROM ".$this->pre."pages WHERE $row='$value'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);
		return $rows["id"];
	}
	function r_id_up($catalog_table,$id,$level,$topics,$pages,$type)
	{
		switch ($level)
		{
			case 1:
				$sql_q = "SELECT * FROM $catalog_table WHERE sort < '$id' ORDER BY sort DESC";
			break;

			case 2:
				$sql_q = "SELECT * FROM $catalog_table WHERE topics='$topics' AND pages='$pages' AND L1!='' AND sort < '$id' ORDER BY sort DESC";
			break;

			case 3:
				$sql_q = "SELECT * FROM $catalog_table WHERE topics='$topics' AND L1='' AND sort < '$id' ORDER BY sort DESC";
			break;
		}

		$sql_res = $this->q($sql_q);

		$rows = mysql_fetch_array($sql_res);
		
		return $rows[$type];
			//echo "<br>";

	}

	function GetSubItems($pages)
	{
			$sql_q2 = "SELECT * FROM ".$this->pre."pages WHERE topics='ukatalog' AND pages='$pages' AND L1!='' AND L2='' AND publ!='1' ORDER BY sort ASC";
			$sql_res2 = $this->q($sql_q2);

			if (mysql_num_rows($sql_res2)>0)
		    {

				while ($rows2 = mysql_fetch_array($sql_res2))
				{
					if ($rows2["pages_name"]=="каталог") return "";

					$submenu[] = "<li class=\"column2_0\"><a href=\"/products.php?category=$pages&id=$rows2[id]\" title=\"$rows2[pages_name]\">$rows2[pages_name]</a></li>";
				}
				
				
				return "<div class=\"frame-l2\"><ul class=\"items\">".implode($submenu)."</ul></div>";
			}


			else
				return "";
				

	}
	function CheckKatalog($pages)
	{
		$sql_q2 = "SELECT * FROM ".$this->pre."pages WHERE topics='ukatalog' AND pages='$pages' AND L1!='' AND L2='' AND publ!='1' ORDER BY sort ASC";
		$sql_res2 = $this->q($sql_q2);

		$rows2 = mysql_fetch_array($sql_res2);
				
	    if ($rows2["pages_name"]=="каталог") return $rows2["id"];
		else return "0";
	}
   
		function intro($val)
	{
		echo $this->html("adm_intro_head".$val,array(
			"id"=>@$_GET["id"],
			"intro_link"=>$this->get_record("intro".$val,@$_GET["id"],"link"),
			"intro_collname"=>$this->get_record("intro".$val,@$_GET["id"],"collname"),
			"intro_dizname"=>$this->get_record("intro".$val,@$_GET["id"],"dizname")
			));

		$sql_q = $this->q("SELECT * FROM intro".$val." ORDER BY id DESC");
		while ($rows = mysql_fetch_array($sql_q))
		{
		
			$array = array(
				"id"=>$rows["id"],
				"file_name"=>"<img src='/downloads/$rows[pho]' border=0 height=40 align=right>",
				"file"=>$rows["collname"],
				"sort"=>$rows["sort"]
				);

			echo $this->html("adm_intro_cycle".$val,$array);
		}
		echo $this->html("adm_intro_foot".$val,false);
	}
	function GetMenuHref($menu)
	{
		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE pages_name='$menu' AND publ!='1'";
		$sql_res = $this->q($sql_q);
		$rows = mysql_fetch_array($sql_res);

		$func_res = $rows["id"].".htm";

		return $func_res;
	}
	function MakeSort()
	{
		$sql_q = "SELECT * FROM ".$this->pre."pages ORDER BY sort DESC";
		$sql_res = $this->q($sql_q);
		
		$i=1;
		
		while ($rows = mysql_fetch_array($sql_res))
			{
			$sql_q2 = "UPDATE ".$this->pre."pages SET sort='$i' WHERE id='$rows[id]'";
			$sql_res2 = $this->q($sql_q2);
			
			//echo "$rows[sort]<br>";
			$i++;
			}
	}
	function GetFilterCount($tab,$col,$val)
	{
		//if ($val=="") return 0;

		$sql_q = "SELECT id FROM $tab WHERE $col='$val'";
		$sql_res = $this->q($sql_q);
		return mysql_num_rows($sql_res);
	}
    function GetPhotos($cat,$id)
	{
		$sql_q = "SELECT * FROM photos WHERE cat='$cat' AND idc='$id'";
		$sql_res = $this->q($sql_q);

		$rows = mysql_fetch_array($sql_res);

		return $rows["photos"];
	}
	function get_record2($table,$rows,$value,$object)
	{
		$sql_q="SELECT * FROM $table WHERE $rows='$value'";
		if (!$sql_res=mysql_query($sql_q))print "ERR: ".mysql_error();
		$rows=mysql_fetch_array($sql_res);
		$func_res=$rows[$object];
		return $func_res;
	}
	function r_id_dw($catalog_table,$id,$level,$topics,$pages,$type)
	{
		switch ($level)
		{
			case 1:
				$sql_q = "SELECT * FROM $catalog_table WHERE sort > '$id' ORDER BY sort ASC";
			break;

			case 2:
				$sql_q = "SELECT * FROM $catalog_table WHERE topics='$topics' AND pages='$pages' AND L1!='' AND sort > '$id' ORDER BY sort ASC";
			break;

			case 3:
				$sql_q = "SELECT * FROM $catalog_table WHERE topics='$topics' AND L1='' AND sort > '$id' ORDER BY sort ASC";
			break;
		}
		$sql_res = $this->q($sql_q);

		$rows = mysql_fetch_array($sql_res);
		
		return $rows[$type];
			//echo "<br>";

	}
	function print_submenu($page)
	{
		$topic = "u".$page;
		$sql_q = "SELECT * FROM ".$this->pre."pages WHERE topics='$topic' AND pages!='' AND L1='' AND publ!='1' ORDER BY sort ASC";
		$sql_res = $this->q($sql_q);
		
		while ($rows = mysql_fetch_array($sql_res))
		{
			$title = $this->toupper(strtoupper($rows["pages_name"]));

			isset($_GET["id"]) && $_GET["id"]==$rows["id"] ? 
				$res_title = "<font color=red>$title</font>" : $res_title = $title;

			$array_cyc = array(
				"title"=>$res_title,
				"page"=>$page,
				"id"=>$rows["id"]
				);
			echo $this->html("submenu",$array_cyc);
		}
	}
	function in_photo($type)
	{

		global $dfile,$edit_photo,$id,$upd_rec,$editph;

		

		if (isset($_POST["editph"]) && $_POST["editph"]!=="")
		{
			//echo 123;
			$this->q("UPDATE photos SET halig='0' WHERE id='".$_POST["editph"]."'"); 
			

			$sql_q = "UPDATE photos SET title='".trim($_POST['photo_title'])."',halig='".@$_POST["halig"]."' WHERE id='".$_POST["editph"]."'";
			$sql_res = $this->q($sql_q);
		}

		if (isset($dfile)&&$dfile!=="")
		{
			isset($edit_photo) ? $query_string="(photos,title,id_main,gpage) VALUES ('".
			$this->download($type)."','".trim($_POST['photo_title'])."','$edit_photo','".$_GET["gpage"]."')" : $query_string="(photos,title,cat,idc,gpage,halig) VALUES ('". $this->download($type)."','".trim($_POST['photo_title'])."','".$_GET["id"]."','".$_GET["upd_rec"]."','".$_GET["gpage"]."','".@$_POST["halig"]."')"; 

			$query="INSERT INTO photos $query_string";
			if (!$result=mysql_query($query)){print "ERR: ".mysql_error();}
		}
	}
	function delete_photo()
	{
		global $delete_photo;
		if (isset($delete_photo))
		$query=mysql_query("DELETE FROM photos WHERE id='$delete_photo'");
	}
	
	function storefront()
	{
		global $storefront_photo,$edit_photo;

		if ($this->get_record("photos",$storefront_photo,"page")=="main")
			$this->q("UPDATE photos SET page='' WHERE id='$storefront_photo'");
		else
			$this->q("UPDATE photos SET page='main' WHERE id='$storefront_photo'");


		/*
		isset($edit_photo) ? $cond=$edit_photo : $cond=0;
		if (isset($storefront_photo))
		{
			$query1=mysql_query("UPDATE photos SET page='' WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' AND id_main=$cond");
			$query="UPDATE photos SET page='main' WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' AND id='$storefront_photo'";
			if (!$result=mysql_query($query))print "ERR: ".mysql_error();
		}
		*/
	}
	function fields_count($table,$clause)
	{
		$sql_q = "SELECT COUNT(*) AS n FROM $table WHERE $clause";
		$sql_res = $this->q($sql_q);

		$rows = mysql_fetch_array($sql_res);

		$func_res = $rows["n"];

		return $func_res;
	}
	function GetLastSort()
	{
		$sql_q2 = mysql_query("SELECT MAX(sort) AS sort FROM ".$this->pre."pages");
		$rows2 = mysql_fetch_array($sql_q2);
		return $num = $rows2["sort"];
}
	function checkcatalogs($id)
	{
		$sql_q = "SELECT id FROM catalog_$id";
		if (mysql_query($sql_q) && mysql_num_rows(mysql_query($sql_q)) > 0) return 1;
		else return 0;
	}
	function get_photo($arg)
	{
		global $edit_photo;
		isset($edit_photo) ? $cond="'$edit_photo'" : $cond="0";
		
		$query="SELECT * FROM photos WHERE cat='".$_GET["id"]."' AND idc='".$_GET["upd_rec"]."' AND gpage='".$_GET["gpage"]."' AND id_main=$cond ORDER BY sort DESC";
		if (!$result=mysql_query($query))print "ERR: ".mysql_error();
		$count=mysql_num_rows($result);

		if ($count>0)
		{while ($rows=mysql_fetch_array($result))
			{$photos[]=$rows['photos'];
		     $id[]=$rows['id'];}
		
		switch ($arg){
			case "id":   return $id;    break;
            case "photo":return $photos;break;
			case "count":return $count; break;}}
			else {return $count;}
	}

	function out_photo()
	{
		global $PHP_SELF,$edit_photo;

		isset($edit_photo) ? $add="edit_photo=$edit_photo&" : $add=false; 

		if ($this->get_photo("count")>0){

        $photos=$this->get_photo("photo");
		$id=$this->get_photo("id");

		echo "<INPUT TYPE=\"hidden\" NAME=\"editph\" value=\"".@$_GET["editph"]."\">";




		for ($i=0;$i<ceil($this->get_photo("count")/5);$i++)
		{
		print "<tr>";
		for ($n=$i*5;$n<$i*5+5;$n++)
			{
			if (isset($photos[$n])){
				$testq="SELECT * FROM photos WHERE id='$id[$n]' AND page='main' "; 
				if (!$resultq=mysql_query($testq))print "ERR: ".mysql_error();
				if (mysql_num_rows($resultq)>0){$bg="#FFE0A6";}else {$bg="#F5F5F5";}
				
				echo "<td bgcolor=\"$bg\"><a href=\"/admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&gpage=".$_GET["gpage"];echo $add; echo "&storefront_photo=$id[$n]\"><img src=\"/admin/images/goInd.gif\" alt=\"разместить эту фотографию на главной странице\" width=\"49\" height=\"19\" border=\"0\"><br></a><img src=\"/downloads/thumbnail.php?img_path=$photos[$n]&px=100\"><br><a href=\"/admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&gpage=".$_GET["gpage"]; echo $add; echo "&delete_photo=$id[$n]\"><img src=\"/admin/images/del2.gif\" alt=\"Удалить изображение\" width=\"54\" height=\"23\" border=\"0\"></a><a href=\"/admin/moduls/gallery.php?id=".$_GET["id"]."&upd_rec=".$_GET["upd_rec"]."&gpage=".$_GET["gpage"]."&editph=$id[$n]\"><img src=\"/admin/images/photocam.gif\" alt=\"Удалить изображение\"   border=\"0\"></a></td>";}
		    }
	    print "</tr>";
		}}
		return;


		
	}
}
?>