<?php

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/func.object.php");

include ($_SERVER["DOCUMENT_ROOT"]."/Lib/php/main.object.php");

$main = new main();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
        <title><?php

if (isset($_GET["page"]) && $_GET["page"]!=="")
{

				switch ($_GET["page"])
				{
					case "cart":
						echo "Корзина";
					break;

					case "news":
						echo "Новости";
					break;

					case "new":
						echo "Новости. ".$main->get_record($main->pre."news",$_GET["nid"],"news_title");
					break;

					case "sendform":
						echo "Форма заказа";
					break;
						 
					case "order":
						echo "Оформление заказа";
					break;

					case "search":
						echo "Поиск";
					break;

					default:
						echo $main->get_record($main->pre."pages",$_GET["page"],"pages_name");
			
				}



} else print $main->get_record($main->pre."pages",125,"pages_name"); ?></title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="generator" content="ImageCMS" />
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
            countViewProd = parseInt("1"),
            theme = "/templates/toolsMarket/",
            siteUrl = "/",
            colorScheme = "/css/color_scheme_1",
            isLogin = "0" === '1' ? true : false,
            typePage = "main",
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
    <link data-arr="6" rel="stylesheet" type="text/css" href="/templates/toolsMarket/star_rating/css/style.css" />
</head>

    <body class="isChrome not-js main"> 
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
                    <div class="page-main">


    <div class="container">



<ul class="items items-crumbs">
 
    
             
	<?php 

	if (isset($_GET["page"]) && $_GET["page"]=="news")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">Главная</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">Новости</span></button>"; 
       
	}


	if (isset($_GET["page"]) && $_GET["page"]=="new")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">Главная</span><span class=\"divider\">&#9658;</span></a></li>"; 

	echo "<li class=\"btn-crumb\"><a href='/?page=news' typeof=\"v:Breadcrumb\"><span class=\"text-el\">Новости</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	
	echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">".$main->get_record($main->pre."news",$_GET["nid"],"news_title")."</span></button>"; 
       
	}

	if (isset($_GET["page"]) && $_GET["page"]=="cart")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">Главная</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	
	echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">Корзина</span></button>"; 

// echo "<li class=\"btn-crumb\"><a href='/products.php?category=".$_GET["category"]."' typeof=\"v:Breadcrumb\"><span class=\"text-el\">".$main->GetCategoryName($_GET["category"])."</span><span class=\"divider\">&#9658;</span></a></li>"; 


//if (isset($_GET["id"]) && $_GET["id"]!=="") echo "<li class=\"btn-crumb\"><a href='/products.php?category=".$_GET["category"]."&id=".$_GET["id"]."' typeof=\"v:Breadcrumb\"><span class=\"text-el\">".$main->get_record($main->pre."pages",$_GET["id"],"pages_name")."</span><span class=\"divider\">&#9658;</span></a></li>";
       
	}
	if (isset($_GET["page"]) && $_GET["page"]=="sendform")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">Главная</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	
	echo "<li class=\"btn-crumb\"><a href='/?page=cart' typeof=\"v:Breadcrumb\"><span class=\"text-el\">Корзина</span><span class=\"divider\">&#9658;</span></a></li>"; 


echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">Оформление заказа</span></button>";
       
	}
?>
                    </ul>




        <div class="left-start-page">

            <div class="frame-baner frame-baner-start_page">

			<a href="/products.php?category=katalog_1&amp;id=663">Портативные зарядные устройства</a>


			<?php

if (isset($_GET["page"]) && $_GET["page"]!=="")
{


				switch ($_GET["page"])
				{
					
                  
					case "cart":
						echo "<h1>Корзина</h1><br>";
						include("cart.php");
					break;

					case "sendform":
						echo "<h1>Форма заказа</h1><br>";
						include ("form.php");
					break;
						   case "otzivi":
									  include ("otzivi.php");
								  break;

					case "news":
						echo "<h1>Новости</h1>";
						include("news.php");
					break;

					case "new":
						echo "<h1>".$main->get_record($main->pre."news",$_GET["nid"],"news_title")."</h1>";
						include("new.php");
					break;

					case "order":
						include ("form.php");
					break;

					case "contacts":
						echo $main->get_record($main->pre."pages",123,"big_desc");
					    
						//include ("sendform.php");

						echo $main->html("shema",false);
					break;


					case "search":
						echo "<h1>Поиск</h1><br>";
						include("search.php");
					break;

						default:
							echo "<h1>".$main->get_record($main->pre."pages",$_GET["page"],"pages_name")."</h1><br>";
						echo $main->get_record($main->pre."pages",$_GET["page"],"big_desc");
				}



} else {
			
			?>


    <section class="carousel-js-css baner container resize cycleFrame">
        <!--remove class="resize" if not resize-->
        <div class="content-carousel">
            <ul class="cycle"><!--remove class="cycle" if not cycle--><?php

			$sql_q = "SELECT * FROM slgal ORDER BY sort ASC";
			$sql_res = $main->q($sql_q);

			while ($rows = mysql_fetch_array($sql_res))
	{

			?>
                                    <li data-description="<?php echo $rows["collname"]; ?>">
                                                    <a href="#"><img data-original="/downloads/<?php echo $rows["pho"]; ?>" src="/templates/toolsMarket/images/blank.gif" alt=""/></a>
                                                </li><?php
	}
				?>

                                  
                            </ul>
            <div class="preloader"></div>
            <div class="frame-frame-pager">
                <div class="frame-scroll-pane">
                    <div class="frame-pager content-carousel">
                        <ol class="pager"></ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-button-carousel">
            <button type="button" class="prev arrow">
                <span class="icon_arrow_p"></span>
            </button>
            <button type="button" class="next arrow">
                <span class="icon_arrow_n"></span>
            </button>
        </div>
    </section>
	
<?php 

}

									?>




</div>
     
              
        </div>
        <div class="right-start-page">
        
          
            <div class="frame-news">
        <div class="title-news">
            <div class="frame-title">
                <div class="title-h1 d_i title"><a href="/?page=news">Новости</a><span class="icon-news-arr"></span></div>
            </div>
        </div>
        <ul class="items items-news"><?php

		echo $sql_q = "SELECT * FROM ".$main->pre."news WHERE publ!='1' ORDER BY sort ASC";
		$sql_res = $main->q($sql_q);
		while ($rows = mysql_fetch_array($sql_res))
		{

		?>
                                            <li>
                    <a href="/?page=new&nid=<?php echo $rows["id"]; ?>" class="frame-photo-title">
                                                <span class="title"><?php echo $rows["news_title"]; ?></span>
                    </a>
                    <div class="description">
                        Несмотря на бурный рост Интернет-коммерции, далеко не все предприни...                                                <div class="date f-s_0">
                            <span class="icon_time"></span><span class="text-el"></span>
                            <span class="day">02 </span>
                            <span class="month">Марта </span>
                            <span class="year">2013 </span>
                        </div>
                    </div>
                </li>
         <?php } ?>                            

                    </ul>

					
    </div>   <br><br><br>     </div>
    </div>
</div>                </div>
                <div class="h-footer"></div>
            </div>
        </div>
      <?php include ("footer.php"); ?>
        
        </section>
    </div>
            </div>
        </div>
    </div>
</div>
                    
<script type="text/javascript">initDownloadScripts(['united_scripts'], 'init', 'scriptDefer'); </script>           
<script type="text/javascript" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/banners/js/jquery.cycle.all.min.js"></script>


</body></html>