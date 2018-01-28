  <header>
                        <div class="content-header">
    <div class="container">
        <!--        Logo-->
                    <a href="/" class="logo" style="color: #ffffff; font-size: 16px; text-decoration:none;">
                <nobr>MyVirtualShop.ru</nobr>
            </a>
                <div class="left-content-header">
            <div class="header-left-content-header t-a_j">
                <!--                Start. contacts block-->
                <div class="phones-header" >
                    <div class="f-s_0 d_i-b v-a_b" >
                        <span class="icon_phone_header"></span>
                        <span class="phone f-s_0" >
                           <!-- <span class="phone-number" >097 567-43-27</span>
                            <span class="phone-number">097 567-43-27</span>-->
                        </span>
                    </div>
                    <div class="btn-order-call v-a_b">
                        <button data-drop="#ordercall" data-tab="true" data-source="http://toolsmarket.imagecmsdemo.net/shop/callback">
                            <span class="icon_order_call"></span>
                            <!--<span class="text-el ref-2">Заказать звонок</span>-->
                        </button>
                    </div>
                </div>
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
            <a href="/?page=<?php echo $rows["id"]; ?>" target="_self" title="<?php echo $rows["pages_name"]; ?>"><?php echo $rows["pages_name"]; ?></a>
    </li>
<?php 
	}
}
?>

                        </ul>
                    </nav>
                    <div class="d_i-b v-a_m">
                        <nav>
    <ul class="nav nav-enter-reg">
                    <li class="btn-enter-register">
                <button type="button" id="loginButton" data-drop=".drop-enter" data-source="http://toolsmarket.imagecmsdemo.net/auth">
                    <span class="icon_enter"></span>
                    <span class="text-el"><!--Войти--></span>
                </button>
            </li>
            </ul>
</nav>                    </div>
                </div>
            </div>
            <div class="frame-search-cleaner">
                <!--                Start. Include cart data template-->
                <div id="tinyBask" class="frame-cleaner">
                    
    <div class="btn-bask" style="height: 29px;">
      
            
            <span class="text-cleaner">
                <span class="text-el">
				
				<a href=/?page=cart style="display: block; color: white; text-decoration: none; padding: 7px">
				<nobr>
				<span class="icon_cleaner"></span>
				<?php 

				if ($main->goodscount()=="0") echo "<nobr>Корзина пуста</nobr>";
				
				else echo $main->goodscount()." товаров";
				
				?></a></nobr></span>
            </span>
       
    </div>
                </div>
                <!--                    End. Include cart data template-->
                <!--                Start. Show search form-->
                <div class="frame-search-form">
                    <div class="p_r">
                         <form action="/?page=search" method="get">
					   <input type="hidden" name="page" value="search">
                            <span class="btn-search">
                                <button type="submit"><span class="text-el">Поиск</span></button>
                            </span>
                            <div class="frame-search-input">
                                <span class="icon_search"></span>
                                <input type="text" class="input-search" name="keyword" autocomplete="off"  placeholder="Я ищу"/>
                                <div id="suggestions" class="drop drop-search"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--                End. Show search form-->
            </div>
        </div>
    </div>
</div>
                    </header>