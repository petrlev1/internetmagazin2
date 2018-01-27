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
<p>Бесплатно по Москве</p>
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
            <div class="text seo-text"></div>
        </div>
    </div>
</div>
<div class="content-footer">
    <div class="container">
        <!--Start. Load menu in footer-->
        <div class="box-1">
            <div class="inside-padd">
                <div class="c_w">© MyVirtualShop.ru</div>
                <div class="text-el">Все права защищены</div>
          </div>
      </div>
      <div class="box-2">
        <div class="inside-padd">
            <div class="main-title">Каталог</div>
            <ul class="footer-category-menu nav nav-vertical">
                <?php

			echo $sql_q = "SELECT * FROM ".$main->pre."pages WHERE publ!='1' AND topics='ukatalog' AND L1='' ORDER BY sort ASC LIMIT 0,6";
$sql_res = $main->q($sql_q);

while ($rows = mysql_fetch_array($sql_res))
{

				?>
				<li><a href="#" title="<?php echo $rows["pages_name"]; ?>" class="title"><?php echo $rows["pages_name"]; ?></a></li>
	<?php 
} 
				
?>

      </ul>
        </div>
    </div>
    <!--End. Load menu in footer-->

    <!--Start. User menu-->
    <div class="box-3">
        <div class="inside-padd">
            <div class="main-title">Информация</div>
            <ul class="nav nav-vertical">
                
<li><a href="#" title="Про наш магазин">Про наш магазин</a></li>

<li><a href="#" title="Гарантии">Гарантии</a></li>

<li><a href="#" title="Возврат товара">Возврат товара</a></li>

<li><a href="#" title="Бренды">Бренды</a></li>

<li><a href="#" title="Доставка и оплата">Доставка и оплата</a></li>

<li><a href="#" title="Контакты">Контакты</a></li>

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
                    <a class="f-s_0" href="mailto:levendeevp@gmail.com">
                        <span class="icon_mail"></span>
                        <span class="text-el">levendeevp@gmail.com</span>
                    </a>
                </li>
                <li>
                    <a class="f-s_0" href="skype:petrleven2">
                        <span class="icon_skype"></span>
                        <span class="text-el">petrleven2</span>
                    </a>
                </li>
                <li class="f-s_0">
                    <span class="icon_address"></span>
                    <span class="c_w">ул. Мира, 85, офис 305</span>
                </li>
                <li class="f-s_0">
                    <span class="icon_time_work"></span>
                    <span class="c_w">Пн-Сб с 8:00 до 21:00</span>
                </li>
            </ul>
        </div>
    </div>
    <!--End. Info block-->

    <div class="box-5">
        <div class="inside-padd">
            <div class="f-s_0">
                <span class="icon_phone_footer"></span>
                <span class="text-el"></span>
            </div>

            <div class="engine"></div>
        </div>
    </div>
</div>
</div>

        </footer>