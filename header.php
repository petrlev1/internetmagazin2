  <header>
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
        <!--        Logo-->
                    <a href="/" class="logo" style="color: #ffffff; font-size: 16px; text-decoration:none;">
                <img src="/images/logo.svg" />MyVirtualShop.ru
            </a>
            </div>
            
     <div class="col-md-8">
                <div class="left-content-header">
          <div class="header-left-content-header">
                <!--                Start. contacts block-->
                
                <!--End. Contacts block-->
                <div class="d_i-b f-s_0 f0I">
                    <nav class="d_i-b v-a_m">
                        <ul class="nav nav-top-menu">
                            


<?php 
$sql_q = "SELECT * FROM ".$main->pre."pages WHERE pages='' AND topics!='katalog' ORDER BY sort ASC";
$sql_res = $main->q($sql_q);
while ($rows = mysql_fetch_array($sql_res))
{
	if ($rows["id"]!=700)
	{
?>
<li>
            <a href="/<?php echo $rows["id"]; ?>.htm" target="_self" title="<?php echo $rows["pages_name"]; ?>"><?php echo $rows["pages_name"]; ?></a>
    </li>
<?php 
	}
}
?>

                        </ul>
                    </nav>
                    
                </div>
            </div>
            
            <div class="searchForm">
            <form action="/?page=search" method="get">
					   <input type="hidden" name="page" value="search">
                                <div class="input-group">
      <input type="text" class="form-control" placeholder="Поиск" name="keyword" autocomplete="off">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Искать</button>
      </span>
    </div>
        </form>
        </div>
            
            <div class="frame-search-cleaner">
                <!--                Start. Include cart data template-->
                <div id="tinyBask" class="frame-cleaner">
                    
    <div class="btn-bask">

            <span class="text-cleaner">
                <span class="text-el">
				
				<a href=/?page=cart style="display: block; color: white; text-decoration: none; padding: 7px">
				
				<span class="icon_cleaner"></span>
				<?php 

				if ($main->goodscount()=="0") echo "Пусто";
				
				else echo $main->goodscount()." товаров";
				
				?></a></span>
            </span>
       
    </div>
                </div>
               
              
                    
                         
                    
               
                <!--                End. Show search form-->
            </div>
        </div>
    </div>
    </div>
    </div>
                    </header>