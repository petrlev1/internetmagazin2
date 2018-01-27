<?php 
include ("$DOCUMENT_ROOT/Lib/php/func.object.php");

$func = new func();

include ("$DOCUMENT_ROOT/Lib/php/main.object.php");

$main = new main();

if (isset($up_desc) && $up_desc!=="")
{
	mysql_query ("UPDATE pages SET blockl='' WHERE id='$id'");

	$sql_q = "UPDATE pages SET blockl='".stripslashes($up_desc)."',blockltit='".stripslashes($blockltit)."' WHERE id='$id'";
	$sql_res = $main->q($sql_q);

	header ("Location: /admin/moduls/editblock.php?id=".$id);
}
if (isset($down_desc) && $down_desc!=="")
{
	mysql_query ("UPDATE pages SET blockr='' WHERE id='$id'");

	$sql_q = "UPDATE pages SET blockr='".stripslashes($down_desc)."',blockrtit='".stripslashes($blockrtit)."' WHERE id='$id'";
	$sql_res = $main->q($sql_q);

	header ("Location: /admin/moduls/editblock.php?id=".$id);
}
 ?>
<html>
<head>
<title>Информационные блоки</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="/Lib/css/admin.css" rel="stylesheet" type="text/css">
<link href="/Lib/css/adminframe.css" rel="stylesheet" type="text/css">
<link href="/Lib/css/catalog.css" rel="stylesheet" type="text/css">
<script>

function Post()
{

document.myform.up_desc.value = newTextArea1.document.body.innerHTML;
document.myform.down_desc.value = newTextArea2.document.body.innerHTML;
myform.submit();
}

function EditorExecCommand( command_param )
{
var tr = frames.newTextArea1.document.selection.createRange();
tr.select();
tr.execCommand( command_param );
frames.newTextArea1.focus(); 
}

function Fonts ( command_param, value )
{
var tr = frames.newTextArea1.document.selection.createRange();
tr.select();
tr.execCommand( command_param,false, value );
frames.newTextArea1.focus(); 
}

function EditorExecCommand2( command_param )
{
var tr = frames.newTextArea2.document.selection.createRange();
tr.select();
tr.execCommand( command_param );
frames.newTextArea2.focus(); 
}

function Fonts2 ( command_param, value )
{
var tr = frames.newTextArea2.document.selection.createRange();
tr.select();
tr.execCommand( command_param,false, value );
frames.newTextArea2.focus(); 
}

</script>
</head>
<body marginwidth="0" marginheight="0" topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0">
<table width="100%" height="2"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0679BA"><img src="images/space.gif" width="1" height="2"></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="1" cellspacing="0" bgcolor="#0679BA">
  <tr>
    <td><div class="logo" style="margin-left: 7px;">Информационные блоки раздела "<? echo $main->get_record("pages",$id,"pages_name"); ?>"</div></td>
    <td width="1"><input name="button" type="button" onClick="window.close()" value="Закрыть окно"></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="4" cellspacing="8">
<tr>
<td>
<FORM name="myform" METHOD="POST" ACTION="/admin/moduls/editblock.php?id=<? echo $id; ?>" ENCTYPE="multipart/form-data">

<TABLE border=0 cellpadding=30>
<TR>
	<TD align=center><div style="margin-top: 10px;"><strong>Левый блок</strong></div>
<!--<div>HTML-код</div>-->
<div>Заголовок</div>
<INPUT TYPE="text" NAME="blockltit" value="<? echo $main->get_record("pages",$id,"blockltit"); ?>" size=48% class="box2">

<TEXTAREA NAME="up_desc" ROWS="4" COLS="30%" style="display: none;"><? echo $main->get_record("pages",$id,"blockl"); ?></TEXTAREA><br>

<br>
<div>Редактор</div>
<select id="FontSize" name="Size" onchange="Fonts('FontSize',this.options[this.selectedIndex].value);">
<option>Шрифт</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option>
  </select>

<a href=javascript: onClick="EditorExecCommand( 'Bold' );"><img src="/admin/images/bold.gif" alt="Жирным" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'Italic' );"><img src="/admin/images/italic.gif" alt="Наклонным" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'Underline' );"><img src="/admin/images/under.gif" alt="Подчеркнуть" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'CreateLink' );"><img src="/admin/images/link.gif" alt="Ссылка" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'JustifyLeft' );"><img src="/admin/images/left.gif" alt="По левому краю" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'JustifyCenter' );"><img src="/admin/images/center.gif" alt="По центру" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'JustifyRight' );"><img src="/admin/images/right.gif" alt="По правому краю" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'InsertOrderedList' );"><img src="/admin/images/numlist.gif" alt="Нумерация" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'InsertUnorderedList' );"><img src="/admin/images/bullist.gif" alt="Маркер" width="23" height="22" hspace="4" border="0"></a>

<div style="margin-top: 4px;">
<iframe width="70%" height="350px" id="newTextArea1" name="newTextArea1" style="border: 1px solid #CCCCCC; background-color: #F7F7F7;"></iframe>

<script>
newTextArea1.document.designMode = "on";
newTextArea1.document.open();
newTextArea1.document.writeln(document.myform.up_desc.value);
newTextArea1.document.close();
</script></TD>
	<TD align=center>
	<div style="margin-top: 10px;"><strong>Правый блок</strong></div>	
<!--<div>HTML-код</div>-->
<div>Заголовок</div>
<INPUT TYPE="text" NAME="blockrtit" value="<? echo $main->get_record("pages",$id,"blockrtit"); ?>" size=48% class="box2">
<TEXTAREA NAME="down_desc" ROWS="4" COLS="30%" style="display: none;"><? echo $main->get_record("pages",$id,"blockr"); ?></TEXTAREA><br>
<br>
<div>Редактор</div>
<select id="FontSize" name="Size" onchange="Fonts2('FontSize',this.options[this.selectedIndex].value);">
<option>Шрифт</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option>
    </select>

<a href=javascript: onClick="EditorExecCommand2( 'Bold' );"><img src="/admin/images/bold.gif" alt="Жирным" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'Italic' );"><img src="/admin/images/italic.gif" alt="Наклонным" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'Underline' );"><img src="/admin/images/under.gif" alt="Подчеркнутым" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'CreateLink' );"><img src="/admin/images/link.gif" alt="Ссылка" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'JustifyLeft' );"><img src="/admin/images/left.gif" alt="По левому краю" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'JustifyCenter' );"><img src="/admin/images/center.gif" alt="По центру" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'JustifyRight' );"><img src="/admin/images/right.gif" alt="По правому краю" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'InsertOrderedList' );"><img src="/admin/images/numlist.gif" alt="Нумерация" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand2( 'InsertUnorderedList' );"><img src="/admin/images/bullist.gif" alt="Маркер" width="23" height="22" hspace="4" border="0"></a>

<div style="margin-top: 4px;">
<iframe width="70%" height="350px" id="newTextArea2" name="newTextArea2" style="border: 1px solid #CCCCCC; background-color: #F7F7F7;"></iframe>

<script>
newTextArea2.document.designMode = "on";
newTextArea2.document.open();
newTextArea2.document.writeln(document.myform.down_desc.value);
newTextArea2.document.close();
</script>
	</TD>
</TR>
</TABLE>
<center><INPUT TYPE="button" value="Сохранить" onClick="Post();"></center>
</FORM>

  </td>
</tr>
</body>
</html>