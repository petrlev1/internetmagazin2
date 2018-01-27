<?php
$sql_q = "SELECT * FROM pages WHERE id='51'";
if (!$sql_res = mysql_query($sql_q))print "ERR: ".mysql_error();
$row = mysql_fetch_array($sql_res);
$text = $row['description'];
?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
	body{font:10px verdana,arial,sans-serif;}
	a{color:#cc0000;font-size:xx-small;}
</style>


<?
//Check user's Browser


if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE"))
	

echo "<script language=JavaScript src='/admin/scripts/editor.js'></script>";

else
	
echo "<script language=JavaScript src='/admin/scripts/moz/editor.js'></script>";
?>




<script>

	
	function submitForm()
	
		
		{
	
			document.forms.Form1.elements.inpContent.value = oEdit1.getHTMLBody();
	//document.forms.Form1.submit()
	
			
		}
//INSERT CUSTOM CONTENT
</script>



<script language="JScript" for="window" event="onload">
oEdit1.insertHTML(document.tmform.tim.value);
</script>

</head>
<body>

<h5>Inserting Custom Content (PHP example) &nbsp;-&nbsp;<a href="../default.htm">Back</a></h5>

<pre id="idTemporary" name="idTemporary" style="display:none">
<?
if(isset($_POST["inpContent"])) 
	{
	$sContent=stripslashes($_POST['inpContent']);//remove slashes (/)	
	echo htmlentities($sContent);
	}
?>
</pre>

<FORM METHOD=POST ACTION="tmform">
<TEXTAREA NAME="tim" ROWS="" COLS=""><? echo $text; ?></TEXTAREA>


</FORM>
<!-- CUSTOM CONTENT -->
<div id="divSignature" style="display:none">
	Best Regards<br>
	Support Team<br>
	<a href="www.InnovaStudio.com">www.InnovaStudio.com</a>
</div>

<div id="divCompanyName" style="display:none">
	<img src="images/Innova.gif" margin="0" width="126" height="31"><br>
	<a href="www.InnovaStudio.com">www.InnovaStudio.com</a><br>
</div>


<form method="post" action="default1.php" id="Form1">

	<!-- CUSTOM CONTENT SELECTION-->
	
	<script>
		var oEdit1 = new InnovaEditor("oEdit1");
		oEdit1.arrStyle = [["BODY",false,"","font:10px verdana,arial,sans-serif;"]];

		oEdit1.RENDER(document.getElementById("idTemporary").innerHTML);
	</script>
	<input type="text" name="inpContent" id="inpContent">
</form>

<input type="button" value=" SUBMIT " onclick="submitForm()">

<br><br>

<?
if(isset($_POST["inpContent"])) 
	{
	$sContent=stripslashes($_POST['inpContent']);//remove slashes (/)	
	echo $sContent;
	}
?>

</body>
</html>