  <footer class="main-wrap">
            <div class="frame-seotext-news">  
    <div class="frame-benefits">
        <div class="container">
<ul class="items items-benefits">
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_1">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">������� ��������</div>
<p>��������� �� ������</p>
</div>
</div>
</li>
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_2">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">������ ������� ������</div>
<p>��� ���������� �����������</p>
</div>
</div>
</li>
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_3">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">�������� ������������</div>
<p>����� ����������� �������</p>
</div>
</div>
</li>
<li>
<div class="frame-icon-benefit"><span class="helper">&nbsp;</span> <span class="icon-benefits_4">&nbsp;</span></div>
<div class="frame-description-benefit f-s_0"><span class="helper">&nbsp;</span>
<div>
<div class="title">������������ ������</div>
<p>������� ��������� ������</p>
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
                <div class="c_w">� MyVirtualShop.ru</div>
                <div class="text-el">��� ����� ��������</div>
          </div>
      </div>
      <div class="box-2">
        <div class="inside-padd">
            <div class="main-title">�������</div>
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
            <div class="main-title">����������</div>
            <ul class="nav nav-vertical">
                
<li><a href="#" title="��� ��� �������">��� ��� �������</a></li>

<li><a href="#" title="��������">��������</a></li>

<li><a href="#" title="������� ������">������� ������</a></li>

<li><a href="#" title="������">������</a></li>

<li><a href="#" title="�������� � ������">�������� � ������</a></li>

<li><a href="#" title="��������">��������</a></li>

            </ul>
        </div>
    </div>
    <!--End. User menu-->

    <!--Start. Info block-->
    <div class="box-4">
        <div class="inside-padd">
            <div class="main-title">��������</div>
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
                    <span class="c_w">��. ����, 85, ���� 305</span>
                </li>
                <li class="f-s_0">
                    <span class="icon_time_work"></span>
                    <span class="c_w">��-�� � 8:00 �� 21:00</span>
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