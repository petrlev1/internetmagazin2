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
						echo "�������";
					break;

					case "news":
						echo "�������";
					break;

					case "new":
						echo "�������. ".$main->get_record($main->pre."news",$_GET["nid"],"news_title");
					break;

					case "sendform":
						echo "����� ������";
					break;
						 
					case "order":
						echo "���������� ������";
					break;
					
					case "search":
						echo "�����";
					break;

					default:
						echo $main->get_record($main->pre."pages",$_GET["page"],"pages_name");
			
				}

} else print "��������-������� - My Virtual Shop" ?></title>

        <meta name="description" content="��������-������� - My Virtual Shop" />
        
        <?php include("counter2.php"); ?>
        
        <?php include("metaLinks.php"); ?>
                     
                        <script type="text/javascript">
            var locale = "";
        </script>
        <script type="text/javascript" src="/templates/toolsMarket/js/jquery-1.8.3.min.js"></script>


    <link data-arr="6" rel="stylesheet" type="text/css" href="/templates/toolsMarket/star_rating/css/style.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
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
 
 <?php include ("menu.php"); ?>
 
</div>                    </div>
                </div>
                <div class="content">
                    <div class="page-main">






<ul class="items items-crumbs">
 
    
             
	<?php 

	if (isset($_GET["page"]) && $_GET["page"]=="news")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">�������</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">�������</span></button>"; 
       
	}


	if (isset($_GET["page"]) && $_GET["page"]=="new")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">�������</span><span class=\"divider\">&#9658;</span></a></li>"; 

	echo "<li class=\"btn-crumb\"><a href='/?page=news' typeof=\"v:Breadcrumb\"><span class=\"text-el\">�������</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	
	echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">".$main->get_record($main->pre."news",$_GET["nid"],"news_title")."</span></button>"; 
       
	}

	if (isset($_GET["page"]) && $_GET["page"]=="cart")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">�������</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	
	echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">�������</span></button>"; 

// echo "<li class=\"btn-crumb\"><a href='/products.php?category=".$_GET["category"]."' typeof=\"v:Breadcrumb\"><span class=\"text-el\">".$main->GetCategoryName($_GET["category"])."</span><span class=\"divider\">&#9658;</span></a></li>"; 


//if (isset($_GET["id"]) && $_GET["id"]!=="") echo "<li class=\"btn-crumb\"><a href='/products.php?category=".$_GET["category"]."&id=".$_GET["id"]."' typeof=\"v:Breadcrumb\"><span class=\"text-el\">".$main->get_record($main->pre."pages",$_GET["id"],"pages_name")."</span><span class=\"divider\">&#9658;</span></a></li>";
       
	}
	if (isset($_GET["page"]) && $_GET["page"]=="sendform")
	{

	echo "<li class=\"btn-crumb\"><a href='/' typeof=\"v:Breadcrumb\"><span class=\"text-el\">�������</span><span class=\"divider\">&#9658;</span></a></li>"; 
	
	
	echo "<li class=\"btn-crumb\"><a href='/?page=cart' typeof=\"v:Breadcrumb\"><span class=\"text-el\">�������</span><span class=\"divider\">&#9658;</span></a></li>"; 


echo "<li class=\"btn-crumb\"><button typeof=\"v:Breadcrumb\" disabled=\"disabled\"><span class=\"text-el\">���������� ������</span></button>";
       
	}
?>
                    </ul>




        <div class="mainContent">

            

			<?php



if (isset($_GET["page"]) && $_GET["page"]!=="")
{


				switch ($_GET["page"])
				{
					
                  
					case "cart":
						echo "<h1>�������</h1><br>";
						include("cart.php");
					break;

					case "sendform":
						echo "<h1>����� ������</h1><br>";
						include ("form.php");
					break;
						   case "otzivi":
									  include ("otzivi.php");
								  break;

					case "news":
						echo "<h1>�������</h1>";
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
						echo "<h1>�����</h1><br>";
						include("search.php");
					break;

						default:
					
							echo "<h1>".$main->get_record($main->pre."pages",$_GET["page"],"pages_name")."</h1><br>";
						echo $main->get_record($main->pre."pages",$_GET["page"],"big_desc");
				}



} else {
	echo $main->get_record($main->pre."pages",700,"big_desc");
			
			?>

	
<?php 

}

									?>     
              
       
        
   
</div>                </div></div>
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
                    

</body></html>