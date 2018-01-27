<?php
error_reporting(E_ALL);

include ("$DOCUMENT_ROOT/Lib/php/func.object.php");

$func = new func();

include ("$DOCUMENT_ROOT/Lib/php/main.object.php");

$main = new main();

if (isset($logout))
	{	
	if (session_destroy())
		{
		isset ($changed) ? $changed="?changed" : $changed=false;
		header ("Location: /admin/$changed");
		include($DOCUMENT_ROOT."/admin/login.htm");
		exit;
		}
}
?>
<html>
<head>
<title>Администрирование сайта</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="/Lib/css/admin.css" rel="stylesheet" type="text/css">
<link href="/Lib/css/adminframe.css" rel="stylesheet" type="text/css">
<link href="/Lib/css/catalog.css" rel="stylesheet" type="text/css">

<script src="/Lib/javascript/funcs.js"></script>
<?php

if (!ereg("MSIE",getenv("HTTP_USER_AGENT")))
{
	print "Система управления сайтом работает только в MS internet explorer версии 5.5 и выше !";
	exit;
}

if (isset($admin_login) && $admin_login!=="" &&
    isset($admin_password) && $admin_password!=="" &&  $admin_login==$main->get_admin_funcs($admin_password, $admin_login))
	{
	$sql_q = "SELECT status FROM auth WHERE login='$admin_login'";

	if (!$sql_res = mysql_query($sql_q))print "ERR: ".mysql_error();

	$status = mysql_result($sql_res,'status');
	
	session_register('admin_login');
	session_register('admin_password');
	session_register('status');
	}
else{
	if (isset($changed))
			{
			echo "<script>alert('Пароли изменены!')</script>";
			}
	include($DOCUMENT_ROOT."/admin/login.htm");
	exit;
	}
?>
</head>
<body marginwidth="0" marginheight="0" topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0">
<table width="100%" height="42"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0679BA">
      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><div class="logo" style="margin-left: 7px;">Администрирование сайта</div></td>
		  <td align="right">
		  
	      </td>
          <td align="left"><table width="100%"  border="0" cellpadding="4" cellspacing="0">
            <tr>
              <td>
	
</td>
              <td align="right"><div align="right" style="margin-right: 10px; margin-left: 10px; margin-top: 5px; margin-bottom: 2px;"><a href="/admin/help/help.htm" class="note" target="_blank"><img src="/admin/images/info.gif" alt="Помощь" width="16" height="16" hspace="3" border="0" align="absmiddle">Справка по администрированию</a></div></td>
              <td align="center"><a href="#" onClick="if (!confirm('Покинуть администрирование ?')) return false; else location.href='/admin/?logout';" class="note">Выход</a></td>
            </tr>

          </table></td>
          
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20%" align="center" valign="top" bgcolor="#F7F7F7"><div style="margin-top: 4px;">
	<table width="98%"  border="0" cellpadding="0" cellspacing="2">
      <tr>

<?php
if ($status=="moderator" || $status=="operator")
{
?>
        <td><div><img src="images/materials.gif" width="19" height="20" hspace="5" vspace="2" border="0" align="absbottom"><strong>РАЗДЕЛЫ</strong></div><br>
		  <div class="panel"><strong>СТРАНИЦЫ</strong></div>

		  <?php
			  $sql_q = "SELECT * FROM pages WHERE pages='' AND publ!='1' ORDER BY sort ASC";
		      $sql_res = $main->q($sql_q);
			  
			  while ($rows = mysql_fetch_array($sql_res))
				  {
				 if ($rows["topics"]!=="foto" && $rows["static"]==0 && $rows["topics"]!=="smap")
				  print "<div class=\"panel\"><li><a href=\"/admin/?topic=$rows[topics]\">$rows[pages_name]</a></div>";
				  }

		?>
		<br>
		 <div class="panel"><strong>НОВОСТИ</strong></div>
		  <div class="panel"><li><a href="/admin/?topic=add_new">Добавить новость</a></div>
		  <div class="panel"><li><a href="/admin/?topic=edit_news">Редактировать</a></div>
		 <!--<br>
		   <div><img src="images/bazi.gif" width="15" height="17" hspace="5"><strong>БАЗЫ ДАННЫХ</strong></div>
		  <div class="panel"><li><a href="/admin/?topic=ucatalog">Каталог</a></div>
		 
		  --><br>
		  <div><img src="images/add.gif" width="19" height="22" hspace="3" align="absmiddle"><strong>ДОПОЛНИТЕЛЬНО</strong></div>
		    <div class="panel"><li><a href="/admin/?topic=infoblocks">Информационные блоки</a></div>
		  <div class="panel"><li><a href="/admin/?topic=addpages&staticpage=1">Статичные страницы</a></div>
		  <div class="panel"><li><a href="#" onClick="window.open('/admin/moduls/gallery.php');">Фотогалерея</a></div>
		  <div class="panel"><li><a href="/admin/?topic=thaivideo">Видеоролики</a></div>
		  <div class="panel"><li><a href="/admin/?topic=file_m">Файл менеджер</a></div>
<?php
}
?>
          <br>

          <div class="mat"><img src="images/interactive.gif" width="19" height="22" hspace="3" align="absmiddle"><strong>ДОСТУП</strong></div>  

		 
		  <div class="panel"><li><a href="/admin/?topic=change_pass">Сменить пароли</a></div>
		  <!--
		  <div class="panel"><li><a href="/admin/?topic=add_pass">Добавить админа</a></div>
		  <div class="panel"><li><a href="/admin/?topic=del_pass">Удалить админа</a></div>
		  -->
		  

  </td>

      </tr>
    </table>
    <br>
<!--
	<table width="98%"  border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td><div><span class="mat"><img src="images/advertising.gif" width="15" height="17" hspace="5"></span><strong>БАЗЫ ДАННЫХ</strong></div>
           <div class="panel"><li><a href="/admin/?topic=catalog">Каталог</a></div> 	
			</td>
      </tr>
    </table>
    <br>

	<table width="98%"  border="0" cellpadding="0" cellspacing="8">
      <tr>
        <td valign="top"><img src="images/interactive.gif" width="19" height="22" hspace="3" align="absmiddle"><strong>ДОПОЛНИТЕЛЬНО</strong>
             <div class="panel"><li><a href="/admin/?topic=forum">Форум</a></div>
		</td>
      </tr>
    </table>
-->
    <br>	
	
	</td>
    <td width="1" bgcolor="#E0E0E0"><img src="images/space.gif" width="1" height="1"></td>
    <td width="80%" valign="top">

      <table width="80%"  border="0" cellpadding="7" cellspacing="0">

	  <tr>
          <td>
	
		  
	<?php 
	if (isset($_GET['topic']) && $_GET['topic']!=="")
	
	$main->include_topic($topic); 
	
	?>
		  
		  <!-- Г.Д.Э ЕНД -->
		  
          </td>
	  </tr>
      </table>
	  
      <br>
      <br>
</td>
  </tr>
</table>
<table width="100%" height="2"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0679BA"><img src="images/space.gif" width="1" height="2"></td>
  </tr>
</table>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15218647-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15218647-2");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>