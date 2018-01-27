<html>
<head>
<title>Редактирование записи</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="/Lib/css/style.css" rel="stylesheet" type="text/css">
</head>
<body marginwidth="0" marginheight="0" topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0">


<table width="100%" height="2"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0679BA"><img src="img/space.gif" width="1" height="2"></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#0679BA">
  <tr>
    <td><div class="logo" style="margin-left: 7px;">Вставка изображения</div></td>
	<td align="right"><input name="button" type="button" onClick="window.close()" value="Закрыть окно"></td>

  </tr>
</table>

<table width="100%"  border="0" cellpadding="0" cellspacing="3">

<?php

$file_size=100000;
$file_dir="$DOCUMENT_ROOT/downloads";
$file_url="/downloads";


if (!isset($myfile)){
?>
<tr>
 <td>
<br>
<strong class="text">Для загрузки разрешены только файлы gif, jpg, bmp, tif.
Максимальный объем передаваемого файла <?php print $file_size; ?> байт.</strong>

<form enctype="multipart/form-data" action="<?php print $PHP_SELF ?>" method="post">
<input type="file" name="myfile"><br><br>
<input type="submit" value="Загрузить">
</form>

</td></tr>
<?php
}
$dh=opendir($file_dir);
while (false !== ($loadfile[] = readdir($dh)));
closedir($dh);
$files_count=count ($loadfile)-3;
$new_file_name="img".$files_count;

if (isset($myfile) && $myfile_size<$file_size)
{
	$array=explode(".",$myfile_name);

	if (ereg( "[a-zA-Z0-9]\.GIF|\.gif|\.JPG|\.jpg|\.bmp|\.BMP|\.tif|\.TIF|\.PDF|\.pdf",
        $myfile_name,$reg_array))
		{

		$fp=copy ($myfile, "$file_dir/$myfile_name");
		if (!$fp)print "ERR: Can't copy file<br>";
		   rename ("$file_dir/$myfile_name", "$file_dir/$new_file_name.$array[1]");
		   

		   print "<form name=\"pathform\">";
		   print "<input type=\"hidden\" name=\"path\" value=\" $file_url/$new_file_name.$array[1]\">";
		   print "<input type=\"hidden\" name=\"pdf_name\" value=\"$new_file_name.$array[1]\">";
		   print "</form>";
            
           if ($array[1]=="PDF" || $array[1]=="pdf")
			{paste_pdf();}
		   else
			{paste_img();}
		}
	else
		{
		print "<br><center>Вы выбрали файл не того формата!</center><br><br>";
		print "<center><a href=\"javascript:onClick=window.close();\">Закрыть окно</a></center>"; 
		}
}
elseif (isset($myfile_size)&&$myfile_size>$file_size)
	{  
	print "<br><center>Размер файла превышает допустимый. Зайдите в настройки веб-сервера, либо обратитесь к администратору.</center><br><br>";
	print "<center><a href=\"javascript:onClick=window.close();\">Закрыть окно</a></center>"; 
	}




function paste_pdf()
{
?>

<script>
	my2();
function my2() {
window.opener.frames.wysiwyg.focus()

var range = window.opener.frames.wysiwyg.document.selection.createRange()
range.pasteHTML('<a href="' + document.pathform.path.value + '">' + document.pathform.pdf_name.value + '</a>');

window.close()
}
</script>
 
<?php 

} 


function paste_img()
{
?>

<script>

function my() {
window.opener.frames.wysiwyg.focus()

if (document.all.border.checked)
				var border = '" border="1"'
			else
				var border = '" border="0"'

if (document.all.hspace.value != '')
				var hspace = ' hspace="'+document.all.hspace.value+'"'
			else
				var hspace = ''

if (document.all.vspace.value != '')
				var vspace = ' vspace="'+document.all.vspace.value+'"'
			else
				var vspace = ''

if (document.all.alt.value != '')
				var alt = ' alt="'+document.all.alt.value+'"'
			else
				var alt = ''


var range = window.opener.frames.wysiwyg.document.selection.createRange()
range.pasteHTML('<IMG src="'+ document.pathform.path.value+border+hspace+vspace+alt+imgAlign.value+filter.value+'>');

window.close()
}
</script>

<table>
<tr><td>
<br><b>Параметры изображения:</b><BR><BR>
</td></tr>
  <tr>
    <td>Отступ по горизонтали</td>
    <td><input name=hspace size=15> <font>px</font></td>
</tr>
  <tr>
    <td>Отступ по вертикали</td>
    <td><input name=vspace size=15> <font>px</font></td>
  </tr>
<tr>
    <td>Выравнивание</td>
    <td>
	<select name="imgAlign">
	<option value='' selected>по умолчанию</option>
	<option value=' align="left"'>по левому краю</option>
	<option value=' align="right"'>по правому краю</option>
	<option value=' align="center"'>по центру</option>
	<option value=' align="top"'>по верхнему краю</option>
	<option value=' align="bottom"'>по нижнему краю</option>
	</select>
    </td>
  </tr>
<tr>
    <td>Всплывающая подсказка</td>
    <td><input name=alt size=32></td>
  </tr>
<tr>
    <td>Фильтр</td>
    <td>
	<select name="filter">
	<option value='' selected>нет</option>
	<option value=' STYLE=filter:alpha(Opacity=50)'>Alpha</option>
	<option value=' STYLE=filter:blur(Add=1, Direction=1, Strength=15)'>Blur</option>
	<option value=' STYLE=filter:fliph()'>FlipH</option>
	<option value=' STYLE=filter:flipv()'>FlipV</option>
	<option value=' STYLE=filter:gray()'>Gray</option>
	<option value=' STYLE=filter:invert()'>Invert</option>
	<option value=' STYLE=filter:wave(freq=4,lightstrength=10,phase=1,strength=10)'>Wave</option>
	<option value=' STYLE=filter:xray()'>XRay</option>
	</select>
    </td>
  </tr>
<tr>
   <td>Рамка</td>
   <td>
       <input type="checkbox" name="border">
   </td>
 </tr>
<tr>
   <td></td>
   <td>
       <input type="button" id="cmd" value="Вставить" onclick="my()">
   </td>
 </tr>   

</table>
<?php
}

?>
</table>
</body>
</html>
