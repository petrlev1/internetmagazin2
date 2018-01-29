<?php

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/func.object.php");

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/main.object.php");

$main = new main();

$indexpagelink = 298; // первый каталог


//$main->CleanPhotos();
//$main->CleanCatalogs();


if (!isset($_GET["id"]) || $_GET["id"]=="") $id = $indexpagelink; else $id = $_GET["id"];

if (!isset($_GET["page"]) || $_GET["page"]=="")
{
	$page = "125";
}else $page = $_GET["page"];

if ($page=="cart") $pagename = "Корзина";
elseif ($page=="announs") $pagename = "Главная";
elseif ($page=="news") $pagename = "Новости";
elseif ($page=="archnews") $pagename = "Архив новостей";
elseif ($page=="stati") $pagename = "Статьи";
elseif ($page=="sendform") $pagename = "Форма заказа";
elseif ($page=="search") $pagename = "Поиск";

else{
$sql_q2 = "SELECT pages_name FROM ".$main->pre."pages WHERE id='$page' AND pages=''";
$sql_res2 = $main->q($sql_q2);
$rows2 = mysql_fetch_array($sql_res2);

$pagename = $rows2["pages_name"];
}


$description = "Интернет-магазин стильной одежды Moonshine";

$keywords = "стильная одежда, молодежная одежда";


$sql_q = "SELECT * FROM ".$main->pre."pages WHERE publ='0' AND id='$page' AND pages=''";
$sql_res = $main->q($sql_q);
$rows = mysql_fetch_array($sql_res);
	
$pages_name = $rows["pages_name"];

if ($_GET["page"]=="catalog" && isset($_GET["id"]) && !isset($_GET["cid"]))
{
	if (isset($_GET["id"]) && $_GET["id"]!=="")
	{
		$pagename = $main->upfirst($main->get_record($main->pre."pages",$_GET["id"],"pages_name"));

		$catalog_topic = ", ".$main->upfirst($main->get_record($main->pre."pages",$_GET["id"],"pages_name"));
	}
	
	$title = $main->upfirst($main->get_record($main->pre."pages",$id,"pages_name"));
	
}
elseif ($page=="catalog" && isset($id) && isset($cid))
{
	$addit2 = $main->upfirst($main->get_record($main->pre."pages",$_GET["id"],"pages_name"));

	$title = $main->upfirst($main->get_record("catalog_".$id,$cid,"cat_title"));

    // $pagename = $addit2.", ".$title;

    $pagename = $main->upfirst($main->get_record($main->pre."pages",$_GET["id"],"pages_name"));
	
   $keywords = $main->upfirst(strip_tags($main->get_record("catalog_".$id,$cid,"cat_desc")));
   $description = $keywords;
}


elseif (isset($_GET["category"]))
{
	if (isset($_GET["cid"]) && $_GET["cid"]!=="")
	{
		$title = $main->get_record("catalog_".$_GET["id"],$_GET["cid"],"cat_title");
	}
	elseif ((!isset($_GET["cid"]) || $_GET["cid"]=="") && (isset($_GET["id"]) && $_GET["id"]!=="")) {

		if ($main->get_record($main->pre."pages",$_GET["id"],"L1")=="katalog")
						{
							 $title = $main->GetCategoryName($_GET["category"]);
						}else

					
         
		  $title = $main->get_record($main->pre."pages",$_GET["id"],"pages_name");

	}

	else {
      

	$title = $main->get_l1($_GET["category"],"pages_name");
	}
}



elseif ($page=="news")
{
	$headname = "Новости";

	if (isset($_GET["nid"]) && $_GET["nid"]!=="")
	{
	$title = $main->get_record("news",$nid,"news_title");
	$keywords = $main->get_record("news",$nid,"news_keywords");
    $description = $main->get_record("news",$nid,"news_description");
	}
	else
	{
		$title = "Новости";
	}
}

else{
   $headname = $rows["pages_name"];
   $title = $rows["title"];
   $keywords = $rows["keywords"];
   $description = $rows["description"];
   }
$big_desc = $rows["big_desc"];

$page_name = @mysql_result(mysql_query("SELECT pages_name FROM ".$main->pre."pages WHERE topics='$page' AND pages=''"),"pages_name");


 if (isset($_POST["quantity2"]) && $_POST["quantity2"]!=="")
			{
				$quantity2 = trim(strip_tags($_POST["quantity2"]));

                
				isset($_POST["price2"]) && $_POST["price2"]!=="" ? $PriceInCart2 = $_POST["price2"] :

				$PriceInCart2 = str_replace(" ","",$main->get_record("catalog_".$_GET["id"],$_POST["incart2"],"cat_price"));


				for ($i=0; $i<$quantity2; $i++)
				{

				$sql_q2 = "INSERT INTO $main->temptable (param1,param2,param3,id1,id2) VALUES ('$PriceInCart2','','','".$_GET["id"]."','".$_POST["incart2"]."')";
				$sql_res2 = $main->q($sql_q2);
				}

					header ("Location: /products.php?category=".$_GET["category"]."&id=".$_GET["id"]."&mess=1");
			}
				

?>
<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $title; ?>" />
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="stylesheet" type="text/css" href="/style.css" media="all" />
	

		
        <link rel="stylesheet" type="text/css" href="/templates/toolsMarket/css/color_scheme_1/colorscheme.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/templates/toolsMarket/css/color_scheme_1/color.css" media="all" />

                     
                        <script type="text/javascript">
            var locale = "";
        </script>
        <script type="text/javascript" src="/templates/toolsMarket/js/jquery-1.8.3.min.js"></script>
        <!-- php vars to js -->
            <script type="text/javascript">
                    var curr = '$',
            cartItemsProductsId = null,
            nextCs = '',
            nextCsCond = nextCs == '' ? false : true,
            pricePrecision = parseInt(''),
            checkProdStock = "", //use in plugin plus minus
            inServerCompare = parseInt("0"),
            inServerWishList = parseInt("0"),
            countViewProd = parseInt("0"),
            theme = "http://poli/templates/toolsMarket/",
            siteUrl = "http://poli/",
            colorScheme = "css/color_scheme_1",
            isLogin = "0" === '1' ? true : false,
            typePage = "shop_category",
            typeMenu = "row";
        text = {
            search: function(text) {
                return 'Введите более' + ' ' + text + ' символов';
                        },
                        error: {
                            notLogin: 'В список желаний могут добавлять только авторизированные пользователи',
                                        fewsize: function(text) {
                                            return 'Выберите размер меньше или равно' + ' ' + text + ' пикселей';
                                                        },
                                                        enterName: 'Введите название'
                                                                }
                                                            }
    
        text.inCart = 'В корзине';
        text.pc = 'шт.';
        text.quant = 'Кол-во:';
        text.sum = 'Сумма:';
        text.toCart = 'Купить';
        text.pcs = 'Количество:';
        text.kits = 'Комплектов:';
        text.captchaText = 'Код протекции';
        text.plurProd = ['товар', 'товара', 'товаров'];
        text.plurKits = ['набор', 'набора', 'наборов'];
        text.plurComments = ['отзыв', 'отзыва', 'отзывов'];
</script>
        <script type="text/javascript" src="/templates/toolsMarket/js/settings.js"></script>
        <!--[if lte IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/css/lte_ie_8.css" /><![endif]-->
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/css/ie_7.css" />
            <script src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/js/localStorageJSON.js"></script>
        <![endif]-->

        <link rel="icon" href="/uploads/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/uploads/images/favicon.ico" type="image/x-icon" />
    <link data-arr="8" rel="stylesheet" type="text/css" href="/templates/toolsMarket/star_rating/css/style.css" />


<style>
.izo-zoom {
  position: relative;
  overflow: hidden;
  height: 300px;
}

.izo-zoom img:nth-of-type(1) {
  z-index: 2;
  max-height: 100%;
  width: 200px;
  position: relative;
  box-shadow: -295px 0 0 300px #fff;
}

.izo-zoom span {
  border-bottom: 30px solid rgba(0, 0, 0, 0);
  z-index: 3;
  width: 100px;
  position: absolute; left: 0px; top: 0px;
  cursor: zoom-in;
}
.izo-zoom span:nth-child(even) {left: 100px;}
.izo-zoom span:nth-of-type(3), .izo-zoom span:nth-of-type(4) {top: 10%;}
.izo-zoom span:nth-of-type(5), .izo-zoom span:nth-of-type(6) {top: 20%;}
.izo-zoom span:nth-of-type(7), .izo-zoom span:nth-of-type(8) {top: 30%;}
.izo-zoom span:nth-of-type(9), .izo-zoom span:nth-of-type(10) {top: 40%;}
.izo-zoom span:nth-of-type(11), .izo-zoom span:nth-of-type(12) {top: 50%;}
.izo-zoom span:nth-of-type(13), .izo-zoom span:nth-of-type(14) {top: 60%;}
.izo-zoom span:nth-of-type(15), .izo-zoom span:nth-of-type(16) {top: 70%;}
.izo-zoom span:nth-of-type(17), .izo-zoom span:nth-of-type(18) {top: 80%;}
.izo-zoom span:nth-of-type(19), .izo-zoom span:nth-of-type(20) {top: 90%;}

.izo-zoom img:nth-of-type(2) {
  z-index: -1;
  height: 0px;
  width: 0px;
  position: absolute; left: 205px; top: 0;
  transition: 1s; -webkit-transition: 1s; -o-transition: 1s;
}
.izo-zoom span:hover ~ img:nth-of-type(2) {z-index: 1; height: auto; width: 100%;}
.izo-zoom span:nth-child(even):hover ~ img:nth-of-type(2) {left: 5px;} 
.izo-zoom span:nth-of-type(3):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(4):hover ~ img:nth-of-type(2) {top: -40%;} 
.izo-zoom span:nth-of-type(5):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(6):hover ~ img:nth-of-type(2) {top: -80%;} 
.izo-zoom span:nth-of-type(7):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(8):hover ~ img:nth-of-type(2) {top: -120%;} 
.izo-zoom span:nth-of-type(9):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(10):hover ~ img:nth-of-type(2) {top: -160%;} 
.izo-zoom span:nth-of-type(11):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(12):hover ~ img:nth-of-type(2) {top: -200%;} 
.izo-zoom span:nth-of-type(13):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(14):hover ~ img:nth-of-type(2) {top: -240%;} 
.izo-zoom span:nth-of-type(15):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(16):hover ~ img:nth-of-type(2) {top: -280%;} 
.izo-zoom span:nth-of-type(17):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(18):hover ~ img:nth-of-type(2) {top: -320%;} 
.izo-zoom span:nth-of-type(19):hover ~ img:nth-of-type(2), .izo-zoom span:nth-of-type(20):hover ~ img:nth-of-type(2) {top: -360%;} 

@media (max-width: 470px) {
  .izo-zoom img:nth-of-type(1) {width: 100%; box-shadow: none;}
  .izo-zoom span {display: none;}
  .izo-zoom {height: auto;}
}
</style>

</head>

    <body class="isChrome not-js shop_category"> 
        <script>
    var langs = new Object();
        function lang(value) {
            return  langs[value] ? langs[value] : value;
        }
    
</script>        <script> 
 </script>        <div class="main-body">
            <div class="main-wrap container">
                <div class="fon-header">
                  <?php include("header.php"); ?>
                    <div class="frame-menu-main horizontal-menu">
                        <!--    menu-row-category || menu-col-category-->
    <div class="menu-main not-js menu-row-category">

<?php  

  include ("menu.php");

?>
</div>                    </div>
                </div>
                <div class="content">
                    
<!--Start. Make bread crumbs -->
<div class="frame-crumbs">
    <div class="crumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <div class="container">


	<ul class="items items-crumbs">
 
    
             
	<?php 

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">Главная</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	
	echo "<li class=\"btn-crumb\"><a href='#' typeof=\"v:Breadcrumb\"><span class=\"text-el\">".$main->GetCategoryName($_GET["category"])."</span><span class=\"divider\">&#9658;</span></a></li>"; 

// echo "<li class=\"btn-crumb\"><a href='/products.php?category=".$_GET["category"]."' typeof=\"v:Breadcrumb\"><span class=\"text-el\">".$main->GetCategoryName($_GET["category"])."</span><span class=\"divider\">&#9658;</span></a></li>"; 


if (isset($_GET["id"]) && $_GET["id"]!=="") echo "<li class=\"btn-crumb\"><a href='/products.php?category=".$_GET["category"]."&id=".$_GET["id"]."' typeof=\"v:Breadcrumb\"><span class=\"text-el\">".$main->get_record($main->pre."pages",$_GET["id"],"pages_name")."</span><span class=\"divider\">&#9658;</span></a></li>";
       
?>
                    </ul>





    </div>
</div></div>
<!--End. Make bread crumbs -->
<div class="frame-inside page-category">
    <div class="container">
        <div class="right-catalog">
            <!-- Start. Category name and count products in category-->
            <div class="f-s_0 title-category">
                <div class="frame-title">
                    <h1 class="title"><?php 

					if (isset($_GET["cid"]) && $_GET["cid"]!=="")
					
					echo  $main->get_record("catalog_".$_GET["id"],$_GET["cid"],"cat_title");
					else
					{

						if ($main->get_record($main->pre."pages",$_GET["id"],"L1")=="katalog")
						{
							echo $main->GetCategoryName($_GET["category"]);
						}else

					echo $main->get_record($main->pre."pages",$_GET["id"],"pages_name"); 
					}
					
					?></h1>
                </div>
				<?php 	if (mysql_query("SELECT id FROM catalog_".$_GET["id"])) { 
				
				
				$filterarr = array();

				if (isset($_POST["cat_reserve"]) && count($_POST["cat_reserve"])>0)
		{


			$filterarr[] = "cat_reserve IN (".implode(",",$_POST["cat_reserve"]).")";
		}

		if (isset($_POST["cat_sizes"]) && count($_POST["cat_sizes"])>0)
		{
			$filterarr[] = "cat_sizes IN (".implode(",",$_POST["cat_sizes"]).")";
		}

		if (isset($_POST["cat_colors"]) && count($_POST["cat_colors"])>0)
		{

			$filterarr[] = "cat_colors IN (".implode(",",$_POST["cat_colors"]).")";
		}
		if (isset($_POST["cat_number"]) && count($_POST["cat_number"])>0)
		{

			$filterarr[] = "cat_number IN (".implode(",",$_POST["cat_number"]).")";
		}

		if (count($filterarr)>0)
		{
			$sql_filtr = "AND ".implode (" AND ",$filterarr);
		}else $sql_filtr = "";
				
				
				if (!isset($_GET["cid"]) || $_GET["cid"]=="") {
				?>
                <span class="count">Найдено товаров <?php echo mysql_num_rows(mysql_query("SELECT * FROM catalog_".$_GET["id"]." WHERE publ!='1' $sql_filtr")); ?></span><?php }} ?>
            </div>
            <!-- End. Category name and count products in category-->
                        <!--Start. Banners block-->
            
            <!--End. Banners-->
               
         
		  
		  <?php


							if (isset($_GET["mess"]) && $_GET["mess"]=="1")
							{
								print "";
								?>

							<div id="wind" align=left>&nbsp;&nbsp;Товар в корзину добавлен! <br><br>
							
							&nbsp;&nbsp;<button type="button" style="width:183px;" class=box2 onClick="location.href='/?page=cart'">Оформить заказ</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class=box2 type="button" style="width:183px;" onClick="document.getElementById('wind').style.display='none'; return false;">Продолжить покупки</button></div>
<?php
							}






if (isset($_GET["cid"]) && $_GET["cid"]!=="")
	{
		include ("passport.php");
	}
else
	{


		if ((isset($_GET["id"]) && $_GET["id"]!=="") && (!isset($_GET["s"])))
		{
			if (mysql_query("SELECT id FROM catalog_".$_GET["id"]))

			include("catalog2.php");

			else print "<br>В процессе наполнения..";
		}
		else
		{
			  
			 $sql_q = "SELECT * FROM ".$main->pre."pages WHERE topics='ukatalog' AND pages='".$_GET["category"]."' AND L1!='' AND publ!='1' ORDER BY pages_name, sort ASC";
			  $sql_res = $main->q($sql_q);
			  
			  while ($rows = mysql_fetch_array($sql_res))
			  {
				  if ($main->CheckCatalog("catalog_".$rows["id"])!==0)
				  {
					  $rows["cat_photo"]=="" ? $minorimg = "<img src='/images/cdi_coming_soon_img-450x450.png' alt='3$rows[pages_name]' width='300' height='300'>" :  $minorimg = "<img src='/downloads/".$rows["cat_photo"]."' width='300' height='300' alt='$rows[pages_name]'>";

				?>
				<a href="/products.php?category=<?php echo $_GET["category"]; ?>&id=<?php echo $rows["id"]; ?>"><?php echo $minorimg; ?>	<h3><?php echo $rows["pages_name"]; ?></h3></a>
				<?php
				}
				
			}

		}
	}
		

?>
                    

            

                <!-- render pagination-->
                                        <!-- End.If count products in category > 0 then show products and pagination links -->
        </div>



        
      
    </div>
</div>
    <!--<div class="frame-seo-text">
        <div class="container">
            frame-seo-text        
      </div>
        </div>-->
    </div>
<!--Start. Popular products -->
<!--End. Popular products -->
<script type="text/javascript" src="/templates/toolsMarket/js/cusel-min-2.5.js"></script>                </div>
                <div class="h-footer"></div>
            </div>
        </div>
      <?php include ("footer.php"); ?>
        <div class="frame-user-toolbar active">
    <div class="container inside-padd">
                <div class="content-user-toolbar">
            <ul class="items items-user-toolbar" >
                
              
              
              
            </ul>
        </div>
        <div class="btn-to-up">
            <button type="button">
                <span class="icon_arrow_p icon_arrow_p2"></span>
                <span class="text-el ref t-d_n">Наверх</span>
            </button>
        </div>
    </div>
  
</div>
                                
        
                        
        <script type="text/javascript">
            initDownloadScripts(['united_scripts'], 'init', 'scriptDefer');
        </script>

 


           
       </body></html>