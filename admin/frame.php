<!-- STEP 1: Editor Localization: Include language file -->
<script language=JavaScript src='/admin/scripts/language/russian/editor_lang.js'></script>
<?php
//Check user's Browser

if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE"))
	
echo "<script language=JavaScript src='/admin/scripts/editor.js'></script>"; else
echo "<script language=JavaScript src='/admin/scripts/moz/editor.js'></script>";
?>

<script language="JScript" for="window" event="onload">
oEdit1.insertHTML(document.sqlform.sqldates.value);
</script>

<pre id="idTemporary" name="idTemporary" style="display:none">
<?
if(isset($_POST["inpContent"])) 
	{
	$sContent=stripslashes($_POST['inpContent']);//remove slashes (/)	
	echo htmlentities($sContent);
	}
?>
</pre>
<!-- CUSTOM CONTENT -->

<form method="post" action="default1.php" id="Form1">

	<!-- CUSTOM CONTENT SELECTION-->
<?php if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE")) { ?>

<script>
		var oEdit1 = new InnovaEditor("oEdit1");
		oEdit1.arrStyle = [["BODY",false,"","font:10px verdana,arial,sans-serif;"]];

		oEdit1.cmdAssetManager="modalDialogShow('/admin/assetmanager/assetmanager.php?lang=russian',640,465)";


		oEdit1.RENDER(document.getElementById("idTemporary").innerHTML);
	</script>

	
	<?php }else { ?>

	<script>
		var oEdit1 = new InnovaEditor("oEdit1");
		oEdit1.arrStyle = [["BODY",false,"","font:10px verdana,arial,sans-serif;"]];

		oEdit1.cmdAssetManager="modalDialogShow('/admin/assetmanager/assetmanager.php?lang=russian',640,465)";


		oEdit1.RENDER(document.getElementById("sqldates").innerHTML);
	</script>
	
	<?php } ?>
</form>

<input type="button" value="Сохранить" onclick="submitForm()">