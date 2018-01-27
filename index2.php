
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>toolsmarket</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="generator" content="ImageCMS" />
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="stylesheet" type="text/css" href="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/css/color_scheme_1/colorscheme.css" media="all" />
        <link rel="stylesheet" type="text/css" href="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/css/color_scheme_1/color.css" media="all" />

                     
                        <script type="text/javascript">
            var locale = "";
        </script>
        <script type="text/javascript" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/js/jquery-1.8.3.min.js"></script>
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
            theme = "http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/",
            siteUrl = "http://toolsmarket.imagecmsdemo.net/",
            colorScheme = "css/color_scheme_1",
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
        <script type="text/javascript" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/js/settings.js"></script>
        <!--[if lte IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/css/lte_ie_8.css" /><![endif]-->
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/css/ie_7.css" />
            <script src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/js/localStorageJSON.js"></script>
        <![endif]-->

        <link rel="icon" href="/uploads/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/uploads/images/favicon.ico" type="image/x-icon" />
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
                    <header>
                        <div class="content-header">
    <div class="container">
        <!--        Logo-->
                    <span class="logo">
                <img src="/uploads/images/logo.png" alt="logo"/>
            </span>
                <div class="left-content-header">
            <div class="header-left-content-header t-a_j">
                <!--                Start. contacts block-->
                <div class="phones-header">
                    <div class="f-s_0 d_i-b v-a_b">
                        <span class="icon_phone_header"></span>
                        <span class="phone f-s_0">
                            <span class="phone-number">097 567-43-27</span>
                            <span class="phone-number">097 567-43-27</span>
                        </span>
                    </div>
                    <div class="btn-order-call v-a_b">
                        <button data-drop="#ordercall" data-tab="true" data-source="http://toolsmarket.imagecmsdemo.net/shop/callback">
                            <span class="icon_order_call"></span>
                            <span class="text-el ref-2">Заказать звонок</span>
                        </button>
                    </div>
                </div>
                <!--End. Contacts block-->
                <div class="d_i-b f-s_0 f0I">
                    <nav class="d_i-b v-a_m">
                        <ul class="nav nav-top-menu">
                            
<li>
            <button type="button" title="Магазин" data-drop-filter="next()">
            Магазин            <span class="icon-arrow-d"></span>
        </button>
        <ul class="sub-menu"><li><a href="http://toolsmarket.imagecmsdemo.net/pro-nash-magazin" target="_self" title="Про наш магазин">Про наш магазин</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/garantii" target="_self" title="Гарантии">Гарантии</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/vozvrat-tovara" target="_self" title="Возврат товара">Возврат товара</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/shop/brand" target="_self" title="Бренды">Бренды</a></li>

</ul>    </li>

<li>
            <a href="http://toolsmarket.imagecmsdemo.net/dostavka-i-oplata" target="_self" title="Доставка и оплата">
            Доставка и оплата        </a>
    </li>

<li>
            <a href="http://toolsmarket.imagecmsdemo.net/kontakty" target="_self" title="Контакты">
            Контакты        </a>
    </li>

                        </ul>
                    </nav>
                    <div class="d_i-b v-a_m">
                        <nav>
    <ul class="nav nav-enter-reg">
                    <li class="btn-enter-register">
                <button type="button" id="loginButton" data-drop=".drop-enter" data-source="http://toolsmarket.imagecmsdemo.net/auth">
                    <span class="icon_enter"></span>
                    <span class="text-el">Войти</span>
                </button>
            </li>
            </ul>
</nav>                    </div>
                </div>
            </div>
            <div class="frame-search-cleaner">
                <!--                Start. Include cart data template-->
                <div id="tinyBask" class="frame-cleaner">
                    
    <div class="btn-bask">
        <button>
            <span class="icon_cleaner"></span>
            <span class="text-cleaner">
                <span class="text-el">Корзина пуста</span>
            </span>
        </button>
    </div>
                </div>
                <!--                    End. Include cart data template-->
                <!--                Start. Show search form-->
                <div class="frame-search-form">
                    <div class="p_r">
                        <form name="search" method="get" action="http://toolsmarket.imagecmsdemo.net/shop/search">
                            <span class="btn-search">
                                <button type="submit"><span class="text-el">Поиск</span></button>
                            </span>
                            <div class="frame-search-input">
                                <span class="icon_search"></span>
                                <input type="text" class="input-search" id="inputString" name="text" autocomplete="off" value=""  placeholder="Я ищу"/>
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
                    <div class="frame-menu-main horizontal-menu">
                        <!--    menu-row-category || menu-col-category-->
    <div class="menu-main not-js menu-row-category">
  <nav>
    <table>
      <tbody>
        <tr>
          <td>
    <div class="frame-item-menu">
        <div class="frame-title is-sub"><a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument" class="title active"><span class="helper"></span><span><span class="text-el">Электроинструмент</span><span class="icon-arrow-d-menu"></span></span></a></div><div class="frame-drop-menu">
    <ul class="items">
        <li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/motobloki" title="Мотоблоки" class="title-category-l1  is-sub">
        <span class="helper"></span>
        <span class="text-el">Мотоблоки</span>
    </a>
    <div class="frame-l2">
    <ul class="items">
        <li class="column2_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/motobloki/motobloki-benzinovye" title="Мотоблоки бензиновые">Мотоблоки бензиновые</a>
    </li><li class="column2_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/motobloki/motobloki-dizelnye" title="Мотоблоки дизельные">Мотоблоки дизельные</a>
    </li>    </ul>
</div></li><li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/kultivatory" title="Культиваторы" class="title-category-l1 ">
        <span class="helper"></span>
        <span class="text-el">Культиваторы</span>
    </a>
    </li><li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/ruchnye-seialki" title="Ручные сеялки" class="title-category-l1 ">
        <span class="helper"></span>
        <span class="text-el">Ручные сеялки</span>
    </a>
    </li><li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/tsepnye-pily" title="Цепные пилы" class="title-category-l1 ">
        <span class="helper"></span>
        <span class="text-el">Цепные пилы</span>
    </a>
    </li><li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/motobury" title="Мотобуры" class="title-category-l1 ">
        <span class="helper"></span>
        <span class="text-el">Мотобуры</span>
    </a>
    </li><li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/pylesosy" title="Пылесосы" class="title-category-l1 ">
        <span class="helper"></span>
        <span class="text-el">Пылесосы</span>
    </a>
    </li><li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/generatory" title="Генераторы" class="title-category-l1 ">
        <span class="helper"></span>
        <span class="text-el">Генераторы</span>
    </a>
    </li><li class="column_0">
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument/dvigateli" title="Двигатели" class="title-category-l1 ">
        <span class="helper"></span>
        <span class="text-el">Двигатели</span>
    </a>
    </li>    </ul>
</div>    </div>
</td><td>
    <div class="frame-item-menu">
        <div class="frame-title"><a href="http://toolsmarket.imagecmsdemo.net/shop/category/ruchnoi-instrument" class="title active"><span class="helper"></span><span><span class="text-el">Ручной инструмент</span></span></a></div>    </div>
</td><td>
    <div class="frame-item-menu">
        <div class="frame-title"><a href="http://toolsmarket.imagecmsdemo.net/shop/category/oborudovanie" class="title active"><span class="helper"></span><span><span class="text-el">Оборудование</span></span></a></div>    </div>
</td><td>
    <div class="frame-item-menu">
        <div class="frame-title"><a href="http://toolsmarket.imagecmsdemo.net/shop/category/sadovaia-tehnika" class="title active"><span class="helper"></span><span><span class="text-el">Садовая техника</span></span></a></div>    </div>
</td><td>
    <div class="frame-item-menu">
        <div class="frame-title"><a href="http://toolsmarket.imagecmsdemo.net/shop/category/sistemy-poliva" class="title active"><span class="helper"></span><span><span class="text-el">Системы полива</span></span></a></div>    </div>
</td>       </tr>
    </tbody>
 </table>
</nav>
</div>                    </div>
                </div>
                <div class="content">
                    <div class="page-main">
    <div class="container">
        <div class="left-start-page">
            <div class="frame-baner frame-baner-start_page">
    <section class="carousel-js-css baner container resize cycleFrame">
        <!--remove class="resize" if not resize-->
        <div class="content-carousel">
            <ul class="cycle"><!--remove class="cycle" if not cycle-->
                                    <li data-description="Шуруповерт за полцены!">
                                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/diesel"><img data-original="/uploads/shop/banners/shurup.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" alt=""/></a>
                                                </li>
                                    <li data-description="Газонокосилка Bosch">
                                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/product/motopompa-sadko-wp-40"><img data-original="/uploads/shop/banners/gazon.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" alt=""/></a>
                                                </li>
                                    <li data-description="Пылесос Black and Decker">
                                                    <span><img data-original="/uploads/shop/banners/pulesos.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" alt=""/></span>
                                                </li>
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
</div>
<script>
langs["Message"] = 'Сообщение';
langs["Banner (s) successfully removed"] = 'Баннер (ы) успешно удален(ы)';
</script>            <div id="new_products">
                

    <div class="horizontal-carousel">
        <section class="special-proposition">
            <div class="title-proposition-h">
                <div class="frame-title">
                    <div class="title t-t_u">Мы рекомендуем</div>
                </div>
            </div>
            <div class="big-container">
                <div class="items-carousel">
                                        <div class="content-carousel container">
                        <ul class="items items-catalog items-h-carousel">
                            

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/skvazhinnyi-elektronasos-4skm150" class="frame-photo-title" title="Скважинный электронасос 4SKm150">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/7a20bc5f24d351cbc5f43e93a3966f94.png"
                                        alt="Скважинный электронасос 4SKm150"
                    />
                                                                                    <span class="product-status nowelty"></span><span class="product-status discount"><span class="text-el">1%</span></span>            </span>
            <span class="title">Скважинный электронасос 4SKm150</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                            <div class="frame-star f-s_0">
                                <div class="star">
        <div id="star_rating_17399" class="productRate star-small">
            <div style="width: 80%"></div>
        </div>
    </div>
                            <a href="http://toolsmarket.imagecmsdemo.net/shop/product/skvazhinnyi-elektronasos-4skm150#comment" class="count-response">
                                Отзывы                                5                            </a>
                        </div>
                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                                                        <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                <!-- Start. Check for discount-->
                        <span class="price-discount">
                            <span>
<span class="price priceOrigVariant">70</span> $
                            </span>
                        </span>
                        <!-- End. Check for discount-->
                                                            <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">70</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                                                                                        <div class="frame-count-buy js-variant-18118 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18118">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18118"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18118")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18118"
                                                    data-name="Скважинный электронасос 4SKm150"
                                                    data-vname=""
                                                    data-number="5543"
                                                    data-price="70"
                                                    data-add-price=""
                                                    data-orig-price="70"
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/7a20bc5f24d351cbc5f43e93a3966f94.png                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/7a20bc5f24d351cbc5f43e93a3966f94.png                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/skvazhinnyi-elektronasos-4skm150"
                                                    data-maxcount="7"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                                                                                                                                                                                                                                        <div class="frame-count-buy js-variant-18139 js-variant" style="display:none">
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18139">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18139"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18139")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18139"
                                                    data-name="Скважинный электронасос 4SKm150"
                                                    data-vname=""
                                                    data-number="5464"
                                                    data-price="80"
                                                    data-add-price=""
                                                    data-orig-price="80"
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/7a20bc5f24d351cbc5f43e93a3966f94.png                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/7a20bc5f24d351cbc5f43e93a3966f94.png                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/skvazhinnyi-elektronasos-4skm150"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17399"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18118 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18118">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                            <div class="frame-btn-wish js-variant-18139 js-variant d_i-b_" style="display:none">
                                            <div class="btnWish btn-wish " data-id="18139">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/17402" class="frame-photo-title" title="Мотопомпа SADKO HPWP 34">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/c_ca248beb402ceface8eba956fa690a95.jpg"
                                        alt="Мотопомпа SADKO HPWP 34"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Мотопомпа SADKO HPWP 34</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">55</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18121 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18121">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18121"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18121")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18121"
                                                    data-name="Мотопомпа SADKO HPWP 34"
                                                    data-vname=""
                                                    data-number="3445"
                                                    data-price="55"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/c_ca248beb402ceface8eba956fa690a95.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/c_ca248beb402ceface8eba956fa690a95.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/17402"
                                                    data-maxcount="4"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17402"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18121 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18121">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/17403" class="frame-photo-title" title="Будка для собак Комфорт">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/c_38528756c3eb88034ffa5980471bef23.jpg"
                                        alt="Будка для собак Комфорт"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Будка для собак Комфорт</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">3</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18122 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18122">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18122"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18122")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18122"
                                                    data-name="Будка для собак Комфорт"
                                                    data-vname=""
                                                    data-number="4432"
                                                    data-price="3"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/c_38528756c3eb88034ffa5980471bef23.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/c_38528756c3eb88034ffa5980471bef23.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/17403"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17403"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18122 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18122">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/17404" class="frame-photo-title" title="Бензиновый генератор SADKO GPS 3500В">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/c_0b21bcca5623dad4476d13161f126652.jpg"
                                        alt="Бензиновый генератор SADKO GPS 3500В"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Бензиновый генератор SADKO GPS 3500В</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">80</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18123 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18123">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18123"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18123")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18123"
                                                    data-name="Бензиновый генератор SADKO GPS 3500В"
                                                    data-vname=""
                                                    data-number="5456"
                                                    data-price="80"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/c_0b21bcca5623dad4476d13161f126652.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/c_0b21bcca5623dad4476d13161f126652.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/17404"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17404"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18123 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18123">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-3000" class="frame-photo-title" title="Бензиновый генератор SADKO GPS-3000">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/df5b5cbf3d74b293e095ed8889dcf0fd.jpg"
                                        alt="Бензиновый генератор SADKO GPS-3000"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Бензиновый генератор SADKO GPS-3000</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">45</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18107 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18107">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18107"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18107")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18107"
                                                    data-name="Бензиновый генератор SADKO GPS-3000"
                                                    data-vname=""
                                                    data-number="3444"
                                                    data-price="45"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/df5b5cbf3d74b293e095ed8889dcf0fd.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/df5b5cbf3d74b293e095ed8889dcf0fd.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-3000"
                                                    data-maxcount="5"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17390"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18107 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18107">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/17405" class="frame-photo-title" title="Инструмент для пикировки растений">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/c_200a06f26a54d02d5234f3ed1be3f852.jpg"
                                        alt="Инструмент для пикировки растений"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Инструмент для пикировки растений</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">1</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18124 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18124">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18124"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18124")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18124"
                                                    data-name="Инструмент для пикировки растений"
                                                    data-vname=""
                                                    data-number="45544"
                                                    data-price="1"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/c_200a06f26a54d02d5234f3ed1be3f852.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/c_200a06f26a54d02d5234f3ed1be3f852.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/17405"
                                                    data-maxcount="1"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17405"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18124 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18124">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/nabor-dlia-komnatnyh-rastenii" class="frame-photo-title" title="Набор для комнатных растений">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/866d74a211c215a47e729d7d8a763222.jpg"
                                        alt="Набор для комнатных растений"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Набор для комнатных растений</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                                                        <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">2</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18100 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18100">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18100"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18100")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18100"
                                                    data-name="Набор для комнатных растений"
                                                    data-vname=""
                                                    data-number="4534"
                                                    data-price="2"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/866d74a211c215a47e729d7d8a763222.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/866d74a211c215a47e729d7d8a763222.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/nabor-dlia-komnatnyh-rastenii"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18103 js-variant" style="display:none">
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18103">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18103"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18103")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18103"
                                                    data-name="Набор для комнатных растений"
                                                    data-vname=""
                                                    data-number="4543"
                                                    data-price="15"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/19a8328f416322f459a61128e1b7a8b1.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/19a8328f416322f459a61128e1b7a8b1.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/nabor-dlia-komnatnyh-rastenii"
                                                    data-maxcount="66"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17384"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18100 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18100">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                            <div class="frame-btn-wish js-variant-18103 js-variant d_i-b_" style="display:none">
                                            <div class="btnWish btn-wish " data-id="18103">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/kultivator-benzinovyi-m-900" class="frame-photo-title" title="Культиватор бензиновый М 900">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/31ad3b5a4445d0576039bf5bd9ae2115.jpg"
                                        alt="Культиватор бензиновый М 900"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Культиватор бензиновый М 900</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                    <!-- Start. Check old price-->
                        <span class="price-discount">
                            <span>
<span class="price priceOrigVariant">2</span> $
                            </span>
                        </span>
                        <!-- End. Check old price-->
                                        <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">56</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18097 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18097">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18097"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18097")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18097"
                                                    data-name="Культиватор бензиновый М 900"
                                                    data-vname=""
                                                    data-number="4564"
                                                    data-price="56"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/31ad3b5a4445d0576039bf5bd9ae2115.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/31ad3b5a4445d0576039bf5bd9ae2115.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/kultivator-benzinovyi-m-900"
                                                    data-maxcount="7"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17381"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18097 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18097">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/kultivator-benzinovyi-t380-bs" class="frame-photo-title" title="Культиватор бензиновый Т380 B&amp;S">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/b949b5d57c001795be3a65069bb90455.jpg"
                                        alt="Культиватор бензиновый Т380 B&amp;S"
                    />
                                                <span class="product-status nowelty"></span>            </span>
            <span class="title">Культиватор бензиновый Т380 B&amp;S</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                            <div class="frame-star f-s_0">
                                <div class="star">
        <div id="star_rating_17379" class="productRate star-small">
            <div style="width: 0%"></div>
        </div>
    </div>
                            <a href="http://toolsmarket.imagecmsdemo.net/shop/product/kultivator-benzinovyi-t380-bs#comment" class="count-response">
                                Отзывы                                1                            </a>
                        </div>
                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">137</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18094 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18094">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18094"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18094")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18094"
                                                    data-name="Культиватор бензиновый Т380 B&amp;S"
                                                    data-vname=""
                                                    data-number="334"
                                                    data-price="137"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/b949b5d57c001795be3a65069bb90455.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/b949b5d57c001795be3a65069bb90455.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/kultivator-benzinovyi-t380-bs"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17379"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18094 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18094">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>
                        </ul>
                    </div>
                    <div class="group-button-carousel">
                        <button type="button" class="prev arrow">
                            <span class="icon_arrow_p"></span>
                        </button>
                        <button type="button" class="next arrow">
                            <span class="icon_arrow_n"></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
            </div>
                <div class="horizontal-carousel">
        <div class="title-proposition-h o_h">
            <div class="frame-title">
                <div class="title arial t-t_u">Лучшие производители</div>
            </div>
        </div>
        <div class="big-container frame-brands">
            <div class="items-carousel carousel-js-css">
                                <div class="frame-brands-carousel">
                    <div class="content-carousel">
                        <ul class="items items-brands">
                                                            <li>
                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/sadko" class="frame-photo-title">
                                        <span class="photo-block">
                                            <span class="helper"></span>
                                            <img data-original="http://toolsmarket.imagecmsdemo.net/uploads/shop/brands/sadko.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" title="sadko" alt="sadko" class="lazy"/>
                                        </span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/herevin" class="frame-photo-title">
                                        <span class="photo-block">
                                            <span class="helper"></span>
                                            <img data-original="http://toolsmarket.imagecmsdemo.net/uploads/shop/brands/herevin.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" title="herevin" alt="herevin" class="lazy"/>
                                        </span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/globalbilgi" class="frame-photo-title">
                                        <span class="photo-block">
                                            <span class="helper"></span>
                                            <img data-original="http://toolsmarket.imagecmsdemo.net/uploads/shop/brands/globalbilgi.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" title="globalbilgi" alt="globalbilgi" class="lazy"/>
                                        </span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/gardena" class="frame-photo-title">
                                        <span class="photo-block">
                                            <span class="helper"></span>
                                            <img data-original="http://toolsmarket.imagecmsdemo.net/uploads/shop/brands/gardena.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" title="gardena" alt="gardena" class="lazy"/>
                                        </span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/diesel" class="frame-photo-title">
                                        <span class="photo-block">
                                            <span class="helper"></span>
                                            <img data-original="http://toolsmarket.imagecmsdemo.net/uploads/shop/brands/diesel.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" title="diesel" alt="diesel" class="lazy"/>
                                        </span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/blooming" class="frame-photo-title">
                                        <span class="photo-block">
                                            <span class="helper"></span>
                                            <img data-original="http://toolsmarket.imagecmsdemo.net/uploads/shop/brands/blooming.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" title="blooming" alt="blooming" class="lazy"/>
                                        </span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="http://toolsmarket.imagecmsdemo.net/shop/brand/viking" class="frame-photo-title">
                                        <span class="photo-block">
                                            <span class="helper"></span>
                                            <img data-original="http://toolsmarket.imagecmsdemo.net/uploads/shop/brands/viking.jpg" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/images/blank.gif" title="viking" alt="viking" class="lazy"/>
                                        </span>
                                    </a>
                                </li>
                                                    </ul>
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
            </div>
        </div>
    </div>
        </div>
        <div class="right-start-page">
            <div id="action_products">
                    <div class="vertical-carousel">
        <section class="special-proposition">
            <div class="title-proposition-v">
                <div class="frame-title">
                    <div class="title">Цена недели</div>
                </div>
            </div>
            <div class="big-container">
                <div class="items-carousel carousel-js-css">
                                        <div class="content-carousel container">
                        <ul class="items items-catalog items-v-carousel">
                            

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/motopompa-sadko-wp-40" class="frame-photo-title" title="Мотопомпа SADKO WP-40">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/7b8e6390635bffa6fedd88fe801b3a25.jpg"
                                        alt="Мотопомпа SADKO WP-40"
                    />
                                                                                    <span class="product-status action"></span><span class="product-status discount"><span class="text-el">97%</span></span>            </span>
            <span class="title">Мотопомпа SADKO WP-40</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                                                        <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                <!-- Start. Check for discount-->
                        <span class="price-discount">
                            <span>
<span class="price priceOrigVariant">44</span> $
                            </span>
                        </span>
                        <!-- End. Check for discount-->
                                                            <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">43</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                                                                                        <div class="frame-count-buy js-variant-18116 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18116">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18116"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18116")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18116"
                                                    data-name="Мотопомпа SADKO WP-40"
                                                    data-vname=""
                                                    data-number="4433"
                                                    data-price="43"
                                                    data-add-price=""
                                                    data-orig-price="44"
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/7b8e6390635bffa6fedd88fe801b3a25.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/7b8e6390635bffa6fedd88fe801b3a25.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/motopompa-sadko-wp-40"
                                                    data-maxcount="5"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                                                                                                                                                                                                                                        <div class="frame-count-buy js-variant-18117 js-variant" style="display:none">
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18117">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18117"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18117")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18117"
                                                    data-name="Мотопомпа SADKO WP-40"
                                                    data-vname=""
                                                    data-number="3223"
                                                    data-price="42"
                                                    data-add-price=""
                                                    data-orig-price="43"
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/c241881b3d509cf0b1813e7303ee49f6.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/c241881b3d509cf0b1813e7303ee49f6.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/motopompa-sadko-wp-40"
                                                    data-maxcount="4"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17398"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18116 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18116">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                            <div class="frame-btn-wish js-variant-18117 js-variant d_i-b_" style="display:none">
                                            <div class="btnWish btn-wish " data-id="18117">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-800" class="frame-photo-title" title="Бензиновый генератор SADKO GPS 800">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/263f94fec54600ca00dcb9c77eadd579.jpg"
                                        alt="Бензиновый генератор SADKO GPS 800"
                    />
                                                <span class="product-status action"></span>            </span>
            <span class="title">Бензиновый генератор SADKO GPS 800</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                                                        <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">45</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18109 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18109">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18109"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18109")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18109"
                                                    data-name="Бензиновый генератор SADKO GPS 800"
                                                    data-vname=""
                                                    data-number="3445"
                                                    data-price="45"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/263f94fec54600ca00dcb9c77eadd579.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/263f94fec54600ca00dcb9c77eadd579.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-800"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18110 js-variant" style="display:none">
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18110">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18110"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18110")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18110"
                                                    data-name="Бензиновый генератор SADKO GPS 800"
                                                    data-vname=""
                                                    data-number="45434"
                                                    data-price="44"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/8595e0714d3d139b35c0eb9167a888f4.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/8595e0714d3d139b35c0eb9167a888f4.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-800"
                                                    data-maxcount="4"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17392"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18109 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18109">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                            <div class="frame-btn-wish js-variant-18110 js-variant d_i-b_" style="display:none">
                                            <div class="btnWish btn-wish " data-id="18110">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-1250" class="frame-photo-title" title="Бензиновый генератор SADKO GPS 1250">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/b61e631b6aa6d32da833b28204b1dc4c.jpg"
                                        alt="Бензиновый генератор SADKO GPS 1250"
                    />
                                                <span class="product-status action"></span>            </span>
            <span class="title">Бензиновый генератор SADKO GPS 1250</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">150</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18106 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18106">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18106"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18106")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18106"
                                                    data-name="Бензиновый генератор SADKO GPS 1250"
                                                    data-vname=""
                                                    data-number="4345"
                                                    data-price="150"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/b61e631b6aa6d32da833b28204b1dc4c.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/b61e631b6aa6d32da833b28204b1dc4c.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-1250"
                                                    data-maxcount="4"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17389"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18106 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18106">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/17406" class="frame-photo-title" title="Набор для комнатных растений метал">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/c_2d51a8b806530ddf682866b1fab9ebd4.jpg"
                                        alt="Набор для комнатных растений метал"
                    />
                                                <span class="product-status action"></span>            </span>
            <span class="title">Набор для комнатных растений метал</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">1</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18125 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18125">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18125"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18125")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18125"
                                                    data-name="Набор для комнатных растений метал"
                                                    data-vname=""
                                                    data-number="2345"
                                                    data-price="1"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/c_2d51a8b806530ddf682866b1fab9ebd4.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/c_2d51a8b806530ddf682866b1fab9ebd4.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/17406"
                                                    data-maxcount="66"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17406"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18125 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18125">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/tiapka-trezubets-metallicheskaia" class="frame-photo-title" title="Тяпка-трезубец металлическая">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/9cd4860acc8a19ed8bcfb6861d121808.jpg"
                                        alt="Тяпка-трезубец металлическая"
                    />
                                                <span class="product-status action"></span>            </span>
            <span class="title">Тяпка-трезубец металлическая</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                            <div class="frame-star f-s_0">
                                <div class="star">
        <div id="star_rating_17385" class="productRate star-small">
            <div style="width: 0%"></div>
        </div>
    </div>
                            <a href="http://toolsmarket.imagecmsdemo.net/shop/product/tiapka-trezubets-metallicheskaia#comment" class="count-response">
                                Отзывы                                1                            </a>
                        </div>
                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">3</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18101 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18101">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18101"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18101")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18101"
                                                    data-name="Тяпка-трезубец металлическая"
                                                    data-vname=""
                                                    data-number="4564"
                                                    data-price="3"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/9cd4860acc8a19ed8bcfb6861d121808.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/9cd4860acc8a19ed8bcfb6861d121808.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/tiapka-trezubets-metallicheskaia"
                                                    data-maxcount="5"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17385"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18101 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18101">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/ruchnaia-seialka-tochnogo-vyseva" class="frame-photo-title" title="Ручная сеялка точного высева">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/5938a2f845d6b0e5ee8b5cb64d7d4436.jpg"
                                        alt="Ручная сеялка точного высева"
                    />
                                                <span class="product-status action"></span>            </span>
            <span class="title">Ручная сеялка точного высева</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                            <div class="frame-star f-s_0">
                                <div class="star">
        <div id="star_rating_17383" class="productRate star-small">
            <div style="width: 100%"></div>
        </div>
    </div>
                            <a href="http://toolsmarket.imagecmsdemo.net/shop/product/ruchnaia-seialka-tochnogo-vyseva#comment" class="count-response">
                                Отзывы                                1                            </a>
                        </div>
                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">45</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18099 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18099">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18099"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18099")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18099"
                                                    data-name="Ручная сеялка точного высева"
                                                    data-vname=""
                                                    data-number="4534"
                                                    data-price="45"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/5938a2f845d6b0e5ee8b5cb64d7d4436.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/5938a2f845d6b0e5ee8b5cb64d7d4436.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/ruchnaia-seialka-tochnogo-vyseva"
                                                    data-maxcount="5"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17383"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18099 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18099">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>
                        </ul>
                    </div>
                    <div class="group-button-carousel">
                        <button type="button" class="prev arrow">
                            <span class="icon_arrow_p"></span>
                        </button>
                        <button type="button" class="next arrow">
                            <span class="icon_arrow_n"></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
            </div>
            <div id="popular_products">
                    <div class="vertical-carousel">
        <section class="special-proposition">
            <div class="title-proposition-v">
                <div class="frame-title">
                    <div class="title">Хиты продаж</div>
                </div>
            </div>
            <div class="big-container">
                <div class="items-carousel carousel-js-css">
                                        <div class="content-carousel container">
                        <ul class="items items-catalog items-v-carousel">
                            

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-3500v" class="frame-photo-title" title="Бензиновый генератор SADKO GPS 3500В">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/0b21bcca5623dad4476d13161f126652.jpg"
                                        alt="Бензиновый генератор SADKO GPS 3500В"
                    />
                                                <span class="product-status hit"></span>            </span>
            <span class="title">Бензиновый генератор SADKO GPS 3500В</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                            <div class="frame-star f-s_0">
                                <div class="star">
        <div id="star_rating_17391" class="productRate star-small">
            <div style="width: 0%"></div>
        </div>
    </div>
                            <a href="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-3500v#comment" class="count-response">
                                Отзывы                                2                            </a>
                        </div>
                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">80</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18108 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18108">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18108"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18108")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18108"
                                                    data-name="Бензиновый генератор SADKO GPS 3500В"
                                                    data-vname=""
                                                    data-number="5456"
                                                    data-price="80"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/0b21bcca5623dad4476d13161f126652.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/0b21bcca5623dad4476d13161f126652.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/benzinovyi-generator-sadko-gps-3500v"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17391"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18108 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18108">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/instrument-dlia-pikirovki-rastenii" class="frame-photo-title" title="Инструмент для пикировки растений">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/200a06f26a54d02d5234f3ed1be3f852.jpg"
                                        alt="Инструмент для пикировки растений"
                    />
                                                <span class="product-status hit"></span>            </span>
            <span class="title">Инструмент для пикировки растений</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">1</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18105 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18105">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18105"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18105")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18105"
                                                    data-name="Инструмент для пикировки растений"
                                                    data-vname=""
                                                    data-number="45544"
                                                    data-price="1"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/200a06f26a54d02d5234f3ed1be3f852.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/200a06f26a54d02d5234f3ed1be3f852.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/instrument-dlia-pikirovki-rastenii"
                                                    data-maxcount="1"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17388"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18105 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18105">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/nabor-dlia-komnatnyh-rastenii-metal" class="frame-photo-title" title="Набор для комнатных растений метал">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/2d51a8b806530ddf682866b1fab9ebd4.jpg"
                                        alt="Набор для комнатных растений метал"
                    />
                                                <span class="product-status hit"></span>            </span>
            <span class="title">Набор для комнатных растений метал</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">1</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18102 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18102">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18102"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18102")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18102"
                                                    data-name="Набор для комнатных растений метал"
                                                    data-vname=""
                                                    data-number="2345"
                                                    data-price="1"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/2d51a8b806530ddf682866b1fab9ebd4.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/2d51a8b806530ddf682866b1fab9ebd4.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/nabor-dlia-komnatnyh-rastenii-metal"
                                                    data-maxcount="66"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17386"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18102 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18102">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>

                
    
                <li class="globalFrameProduct to-cart" data-pos="top">
        <!-- Start. Photo & Name product -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/ruchnaia-seialka-dlia-luka-i-chesnoka" class="frame-photo-title" title="Ручная сеялка для лука и чеснока">
            <span class="photo-block">
                <span class="helper"></span>
                                <img
                                            src="/uploads/shop/products/medium/7590a2602247429c6244e7db5ea9d72d.jpg"
                                        alt="Ручная сеялка для лука и чеснока"
                    />
                                                <span class="product-status hit"></span>            </span>
            <span class="title">Ручная сеялка для лука и чеснока</span>
        </a>
        <!-- End. Photo & Name product -->
        <div class="description">
            <div class="left-description">
                <!-- Start. article & variant name & brand name -->
                                <!-- End. article & variant name & brand name -->
                                                                    <!-- Start. Check variant-->
                                <!-- End. Check variant-->
                <!-- End. Collect information about Variants, for future processing -->
                            </div>
            <div class="frame-prices-buttons">
                                                                    <!-- Start. Prices-->
                <div class="frame-prices f-s_0">
                                                                                    <!-- Start. Check old price-->
                        <span class="price-discount">
                            <span>
<span class="price priceOrigVariant">2</span> $
                            </span>
                        </span>
                        <!-- End. Check old price-->
                                        <!-- Start. Product price-->
                        <span class="current-prices f-s_0">
                            <span class="price-new">
                                <span>
<span class="price priceVariant">55</span> $
                                </span>
                            </span>
                                                    </span>
                                        <!-- End. Product price-->
                </div>
                <!-- End. Prices-->
                                    <div class="f-s_0 m-b_10">
                        <div class="funcs-buttons">
                            <!-- Start. Collect information about Variants, for future processing -->
                                                                                                                                                                                                    <div class="frame-count-buy js-variant-18098 js-variant" >
                                        <form method="POST" action="/shop/cart/addProductByVariantId/18098">
                                            <div class="btn-buy btn-cart d_n">
                                                <button
                                                    type="button"
                                                    data-id="18098"

                                                    class="btnBuy"
                                                    data-rel="tooltip"
                                                    data-title="Уже в корзине"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">В корзине</span>
                                                </button>
                                            </div>
                                            <div class="btn-buy">
                                                <button
                                                    type="button"

                                                    onclick='Shop.Cart.add($(this).closest("form").serialize(), "18098")'
                                                    class="btnBuy infoBut"
                                                    data-rel="tooltip"
                                                    data-title="Добавить в корзину"

                                                    data-id="18098"
                                                    data-name="Ручная сеялка для лука и чеснока"
                                                    data-vname=""
                                                    data-number="4565"
                                                    data-price="55"
                                                    data-add-price=""
                                                    data-orig-price=""
                                                    data-medium-image="
                                                                                                            /uploads/shop/products/medium/7590a2602247429c6244e7db5ea9d72d.jpg                                                    "
                                                    data-img="
                                                                                                            /uploads/shop/products/small/7590a2602247429c6244e7db5ea9d72d.jpg                                                    "
                                                    data-url="http://toolsmarket.imagecmsdemo.net/shop/product/ruchnaia-seialka-dlia-luka-i-chesnoka"
                                                    data-maxcount="6"
                                                    >
                                                    <span class="icon_cleaner icon_cleaner_buy"></span>
                                                    <span class="text-el">Купить</span>
                                                </button>
                                            </div>
                                            <input type="hidden" value="00bdcf51d436592698ac9f1b908f3e47" name="cms_token" />                                        </form>
                                    </div>
                                                                                    </div>
                        <!-- End. Collect information about Variants, for future processing -->
                                                    <!-- Wish List & Compare List buttons -->
                            <div class="frame-wish-compare-list f-s_0">
                                                                    <div class="frame-btn-comp">
                                        <!-- Start. Compare List button -->
                                        <div class="btn-compare">
                                            <button class="toCompare"
                                                    data-id="17382"
                                                    type="button"
                                                    data-firtitle="В список сравнений"
                                                    data-sectitle="В списке сравнений"
                                                    data-title="В список сравнений"
                                                    data-rel="tooltip">
                                                <span class="icon_compare"></span>
                                                <span class="text-el d_l">В список сравнений</span>
                                            </button>
                                        </div>
                                        <!-- End. Compare List button -->
                                    </div>
                                                                                                    <!-- Start. Wish list buttons -->
                                                                            <div class="frame-btn-wish js-variant-18098 js-variant d_i-b_" >
                                            <div class="btnWish btn-wish " data-id="18098">
    <button 
        class="toWishlist"
        type="button"
        data-rel="tooltip"
        data-title="В желаемое"

                    data-drop="#dropAuth"
                        >
        <span class="icon_wish"></span>
        <span class="text-el d_l">В желаемое</span>
    </button>
    <button class="inWishlist" type="button" data-rel="tooltip" data-title="В списке желаний" style="display: none;">
        <span class="icon_wish"></span>
        <span class="text-el d_l">В списке желания</span>
    </button>
</div>
<script>
langs["Create list"] = 'Создать список';
langs["Wrong list name"] = 'Неверное имя списка';
langs["Already in Wish List"] = 'Уже в Списке Желаний';
langs["List does not chosen"] = 'Список не обран';
langs["Limit of Wish List finished "] = 'Лимит списков пожеланий исчерпан';
</script>                                        </div>
                                                                        <!-- End. wish list buttons -->
                                                            </div>
                            <!-- End. Wish List & Compare List buttons -->
                                            </div>
                            </div>
        </div>
        <!-- Start. Remove buttons if compare-->
                <!-- End. Remove buttons if compare-->

        <!-- Start. For wishlist page-->
                <!-- End. For wishlist page-->

        <div class="decor-element"></div>
    </li>
                        </ul>
                    </div>
                    <div class="group-button-carousel">
                        <button type="button" class="prev arrow">
                            <span class="icon_arrow_p"></span>
                        </button>
                        <button type="button" class="next arrow">
                            <span class="icon_arrow_n"></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
            </div>
            <div class="frame-news">
        <div class="title-news">
            <div class="frame-title">
                <div class="title-h1 d_i title"><a href="http://toolsmarket.imagecmsdemo.net/akcii-i-novosti">Новости</a><span class="icon-news-arr"></span></div>
            </div>
        </div>
        <ul class="items items-news">
                                            <li>
                    <a href="http://toolsmarket.imagecmsdemo.net/akcii-i-novosti/zachem-vashemu-offlain-biznesu-nuzhen-internet-magazin" class="frame-photo-title">
                                                <span class="title">Зачем вашему оффлайн-бизнесу нужен Интернет-магазин?</span>
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
                                            <li>
                    <a href="http://toolsmarket.imagecmsdemo.net/akcii-i-novosti/otsenka-stoimosti-saita-i-faktory-kotorye-vliiaiut-na-tsenu" class="frame-photo-title">
                                                <span class="title">Оценка стоимости сайта и факторы, которые влияют на цену</span>
                    </a>
                    <div class="description">
                        Как во время разработки, так и во время продажи Интернет-ресурса уч...                                                <div class="date f-s_0">
                            <span class="icon_time"></span><span class="text-el"></span>
                            <span class="day">02 </span>
                            <span class="month">Марта </span>
                            <span class="year">2013 </span>
                        </div>
                    </div>
                </li>
                    </ul>
    </div>        </div>
    </div>
</div>                </div>
                <div class="h-footer"></div>
            </div>
        </div>
        <footer class="main-wrap">
            <div class="frame-seotext-news">  
    <div class="frame-benefits">
        <div class="container">
<ul class="items items-benefits">
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_1">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">Быстрая доставка</div>
<p>Кратчайшие сроки доставки</p>
</div>
</div>
</li>
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_2">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">Гибкая система скидок</div>
<p>Для постоянных покупателей</p>
</div>
</div>
</li>
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_3">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">Полезная консультация</div>
<p>Выбор оптимальных решений</p>
</div>
</div>
</li>
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_4">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">Качественный сервис</div>
<p>Быстрая обработка заказа</p>
</div>
</div>
</li>
</ul>
</div>    </div>
    <div class="frame-seo-text">
        <div class="container">
            <div class="text seo-text">
                <h1>Интернет-магазин инструментов</h1>
<p>Интернет-магазин детских товаров не может изменить мир в корне, но каждая улыбка на лице ребенка &ndash; для нас награда и доказательство тому, что мы на правильном пути. Поэтому, мы стараемся создавать их не только на устах детей, родители которых приобретают им подарки в детском интернет-магазине и делают сюрпризы, но и на лицах деток, которым повезло меньше, и они вынуждены называть мамой воспитательницу в детском доме. Эти улыбки намного более ценны для нас, поэтому мы активно ведем благотворительную деятельность и поддерживаем детей, которым приходиться обходиться без родительского плеча. Таким образом, присоединившись к нашему магазину, Вы можете хоть немножко повлиять на судьбы этих детей и подарить им радость. Мы анонсируем наши благотворительные акции у нас на сайте, поэтому если у Вас есть желание помочь &ndash; следите за анонсами в аБнимашках.Мы любим делать сюрпризы для наших покупателей. Мы не считаем, что о приятностях нужно заявлять громко и мотивировать людей покупать у нас детские товары какими-то дополнительными</p>            </div>
        </div>
    </div>
</div>
<div class="content-footer">
    <div class="container">
        <!--Start. Load menu in footer-->
        <div class="box-1">
            <div class="inside-padd">
                <div class="c_w">© StoreName.ru, 2016</div>
                <div class="text-el">Все права защищены</div>
          </div>
      </div>
      <div class="box-2">
        <div class="inside-padd">
            <div class="main-title">Каталог</div>
            <ul class="footer-category-menu nav nav-vertical">
                <li>
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/elektroinstrument" title="Электроинструмент" class="title">Электроинструмент</a>
</li><li>
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/ruchnoi-instrument" title="Ручной инструмент" class="title">Ручной инструмент</a>
</li><li>
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/oborudovanie" title="Оборудование" class="title">Оборудование</a>
</li><li>
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/sadovaia-tehnika" title="Садовая техника" class="title">Садовая техника</a>
</li><li>
    <a href="http://toolsmarket.imagecmsdemo.net/shop/category/sistemy-poliva" title="Системы полива" class="title">Системы полива</a>
</li>            </ul>
        </div>
    </div>
    <!--End. Load menu in footer-->

    <!--Start. User menu-->
    <div class="box-3">
        <div class="inside-padd">
            <div class="main-title">Информация</div>
            <ul class="nav nav-vertical">
                
<li><a href="http://toolsmarket.imagecmsdemo.net/pro-nash-magazin" title="Про наш магазин">Про наш магазин</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/garantii" title="Гарантии">Гарантии</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/vozvrat-tovara" title="Возврат товара">Возврат товара</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/shop/brand" title="Бренды">Бренды</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/dostavka-i-oplata" title="Доставка и оплата">Доставка и оплата</a></li>

<li><a href="http://toolsmarket.imagecmsdemo.net/kontakty" title="Контакты">Контакты</a></li>

            </ul>
        </div>
    </div>
    <!--End. User menu-->

    <!--Start. Info block-->
    <div class="box-4">
        <div class="inside-padd">
            <div class="main-title">Контакты</div>
            <ul>
                <li>
                    <a class="f-s_0" href="mailto:partner@imagecms.net">
                        <span class="icon_mail"></span>
                        <span class="text-el">partner@imagecms.net</span>
                    </a>
                </li>
                <li>
                    <a class="f-s_0" href="skype:imagecms">
                        <span class="icon_skype"></span>
                        <span class="text-el">imagecms</span>
                    </a>
                </li>
                <li class="f-s_0">
                    <span class="icon_address"></span>
                    <span class="c_w">ул. Мира, 85, офис 305</span>
                </li>
                <li class="f-s_0">
                    <span class="icon_time_work"></span>
                    <span class="c_w">Пн-Пт с 8:00 до 21:00</span>
                </li>
            </ul>
        </div>
    </div>
    <!--End. Info block-->

    <div class="box-5">
        <div class="inside-padd">
            <div class="f-s_0">
                <span class="icon_phone_footer"></span>
                <span class="text-el">097 567-43-27</span>
            </div>

            <div class="engine"></div>
        </div>
    </div>
</div>
</div>

        </footer>
        <div class="frame-user-toolbar active">
    <div class="container inside-padd">
                <div class="content-user-toolbar">
            <ul class="items items-user-toolbar" >
                <li class="box-1">
                    <div class="wish-list-btn tinyWishList">
    <button data-href="http://toolsmarket.imagecmsdemo.net/wishlist" data-drop=".drop-info-wishlist" data-place="inherit" data-overlay-opacity="0" data-inherit-close="true">
        <span class="icon_wish_list"></span>
        <span class="text-wish-list">
            <span class="js-empty empty" style="display: inline">
                <span class="text-el">Список желаний </span>
                <span class="text-el">(</span>
                <span class="text-el wishListCount">0</span>
                <span class="text-el">)</span>
            </span>
            <span class="js-no-empty no-empty" >
                <span class="text-el">Избранные </span>
                <span class="text-el">(</span>
                <span class="text-el wishListCount">0</span>
                <span class="text-el">)</span>
            </span>
        </span>
    </button>
</div>
<div class="drop drop-info drop-info-wishlist">
    <span class="helper"></span>
    <span class="text-el">
        Ваш список <br/>
        “Список желаний” пуст</span>
</div>                </li>
                <li class="box-2">
                        <div class="compare-list-btn tinyCompareList">
    <button data-href="http://toolsmarket.imagecmsdemo.net/shop/compare" data-drop=".drop-info-compare" data-place="inherit" data-overlay-opacity="0" data-inherit-close="true">
        <span class="icon_compare_list"></span>
        <span class="text-compare-list">
            <span class="js-empty empty" style="display: inline">
                <span class="text-el">Товары на сравнение </span>
                <span class="text-el">(</span>
                <span class="f-s_0">
                    <span class="text-el compareListCount">0</span>
                </span>
                <span class="text-el">)</span>
            </span>
            <span class="js-no-empty no-empty" >
                <span class="text-el">В сравнение </span>
                <span class="text-el">(</span>
                <span class="f-s_0">
                    <span class="text-el compareListCount"></span>
                </span>
                <span class="text-el">)</span>
            </span>
        </span>
    </button>
</div>
<div class="drop drop-info drop-info-compare">
    <span class="helper"></span>
    <span class="text-el">
        Ваш списокВаш список <br/>
        “Список сравнения” пуст</span>
</div>                </li>
                <li class="box-3">
                    <div class="btn-already-show">
                        <button type="button" data-drop=".frame-already-show" data-effect-on="slideDown" data-effect-off="slideUp" data-place="inherit">
                            <span class="text-view-list">
                                <span class="text-el">Просмотренные товары</span>
                                <span class="text-el">&nbsp;(0)</span>
                            </span>
                        </button>
                    </div>
                </li>
                <li class="box-4">
                    <div class="btn-toggle-toolbar">
                        <button type="button" data-rel="0"  class="activeUT">
                            <span class="icon_arrow_down"></span>
                            <span class="text-el">Свернуть</span>
                        </button>
                        <button type="button" data-rel="1" class="show activeUT" style="display: none;">
                            <span class="icon_arrow_down"></span>
                            <span class="text-el">Развернуть</span>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
        <div class="btn-to-up">
            <button type="button">
                <span class="icon_arrow_p icon_arrow_p2"></span>
                <span class="text-el ref t-d_n">Наверх</span>
            </button>
        </div>
    </div>
    <div class="drop frame-already-show">
        <div class="content-already-show">
            <div id="ViewedProducts">
                    <div class="inside-padd">
        <div class="msg f-s_0">
            <div class="info"><span class="icon_info"></span><span class="text-el">Нет просмотренных товаров</span></div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
                                
        
                        
        <script type="text/javascript">
            initDownloadScripts(['united_scripts'], 'init', 'scriptDefer');
        </script>
        
                <button type="button" id="showCartPopup" data-drop="#popupCart" style="display: none;"></button>
<div class="drop-bask drop drop-style" id="popupCart"></div>
    <script type="text/template" id="searchResultsTemplate">
        <div class="inside-padd">
        <% if (_.keys(items).length > 1) { %>
        <ul class="items items-search-autocomplete">
        <% _.each(items, function(item){
        if (item.name != null){%>
        <li>
        <!-- Start. Photo Block and name  -->
        <a href="http://toolsmarket.imagecmsdemo.net/shop/product/<%- item.url %>" class="frame-photo-title">
        <span class="photo-block">
        <span class="helper"></span>
        <img src="<%- item.smallImage %>">
        </span>
        <span class="description">
        <span class="title"><% print(item.name)  %></span>
        <!-- End. Photo Block and name -->

        <!-- Start. Product price  -->
        <span class="frame-prices f-s_0">
        <span class="current-prices var_price_{echo $p->firstVariant->getId()} prod_price_{echo $p->getId()}">
        <span class="price-new">
        <span>
        <span class="price"><%- item.price %></span>
        </span>
        </span>
        <% if (item.nextCurrency != null) { %>
        <span class="price-add">
        <span>
        (<span class="price addCurrPrice"><%- item.nextCurrency %></span>
    )                                            
        </span>
        </span>
        <% } %>
        </span>
        </span>
        <!-- End. Product price  -->
        </span>
        </a>
        </li>
        <% }
        }) %>
        </ul>
        <!-- Start. Show link see all results if amount products >0  -->
        <div>
        <div class="btn-autocomplete">
        <a href="http://toolsmarket.imagecmsdemo.net/shop/search?text=<%- items.queryString %>"  class="f-s_0">
        <span class="icon_arrow"></span><span class="text-el">Смотреть все результаты</span>
        </a>
        </div>
        <!-- End. Show link  -->
        <% } else {%>    
    <div class="msg f-s_0">
    <div class="info"><span class="icon_info"></span><span class="text-el">По Вашему запросу ничего не найдено</span></div>
    </div>
    <% }%>
    </div>
    </div>
</script>

        <script type="text/template" id="reportappearance">
            <% var nextCsCond = nextCs == '' ? false : true %>
            <ul class="items items-bask item-report">
            <li>
            <a href="<%-item.url%>" class="frame-photo-title" title="<%-item.name%>">
            <span class="photo-block">
            <span class="helper"></span>
            <img src="<%-item.img%>" alt="<%-item.name%>">
            </span>
            <span class="title"><%-item.name%></span>
            </a>
            <div class="description">
            <div class="frame-prices f-s_0">
            <%if (item.origprice) { %>
            <span class="price-discount">
            <span>
            <span class="price"><%- parseFloat(item.origprice).toFixed(pricePrecision) %></span>
            <span class="curr"><%-curr%></span>
            </span>
            </span>
            <% } %>
            <span class="current-prices f-s_0">
            <span class="price-new">
            <span>
            <span class="price priceVariant"><%-parseFloat(item.price).toFixed(pricePrecision)%></span>
            <span class="curr"><%-curr%></span>
            </span>
            </span>
            <%if (nextCsCond){%>
            <span class="price-add">
            <span>
            (<span class="price addCurrPrice"><%-parseFloat(item.addPrice).toFixed(pricePrecision)%></span>
            <span class="curr-add"><%-nextCs%></span>)
            </span>
            </span>
            <%}%>
            </span>
            </div>
            </div>
            </li>
            </ul>
        </script>
    
    <span class="tooltip"></span>
    <div class="apply">
        <div class="content-apply">
            <div class="description">Найдено <a href="#"><span id="apply-count">5</span> <span class="plurProd"></span></a></div>
        </div>
    </div>
    <div class="drop drop-style" id="notification">
        <div class="drop-content-notification">
            <div class="inside-padd notification">

            </div>
        </div>
        <div class="drop-footer"></div>
    </div>
    <button style="display: none;" type="button" data-drop="#notification"  data-modal="true" data-effect-on="fadeIn" data-effect-off="fadeOut" class="trigger"></button>

   <div class="drop drop-style" id="confirm">
        <div class="drop-header">
            <div class="title">Удалить список?</div>
        </div>
        <div class="drop-content-confirm">
            <div class="inside-padd cofirm w-s_n-w">
                <div class="btn-def">
                    <button type="button" data-button-confirm data-modal="true">
                        <span class="text-el">Подтвердить</span>
                    </button>
                </div>
                <div class="btn-def">
                    <button type="button" data-closed="closed-js">
                        <span class="text-el">Отменить</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="drop-footer"></div>
    </div>
	
    <button style="display: none;" type="button" data-drop="#confirm" data-confirm="true" data-effect-on="fadeIn" data-effect-off="fadeOut"></button>

            <div class="drop drop-style" id="dropAuth">
            <button type="button" class="icon_times_drop" data-closed="closed-js"></button>
            <div class="drop-content t-a_c" style="width: 350px;min-height: 0;">
                <div class="inside-padd">
                    Для того, что бы добавить товар в список желаний, Вам нужно <button type="button" class="d_l_1" data-drop=".drop-enter" data-source="http://toolsmarket.imagecmsdemo.net/auth">авторизоваться</button>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="http://toolsmarket.imagecmsdemo.net/templates/toolsMarket/banners/js/jquery.cycle.all.min.js"></script>
<script></script></body></html>