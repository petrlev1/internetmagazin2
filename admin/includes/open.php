<?php  error_reporting(0);
  setlocale('LC_CTYPE', 'ru_RU.CP1251');
?>
<html>
<head>
<script language=Javascript>
function AddEl() {

	HTMLPath = document.all.adress.value
	if (HTMLPath != "") {
		var length = document.all.adress.value.length
		if ((document.all.adress.value.indexOf("html", length-5) != -1) || (document.all.adress.value.indexOf(".htm", length-5) != -1) || (document.all.adress.value.indexOf(".txt", length-5) != -1) || (document.all.adress.value.indexOf("jpeg", length-5) != -1) || (document.all.adress.value.indexOf(".jpg", length-5) != -1) || (document.all.adress.value.indexOf(".gif", length-5) != -1) || (document.all.adress.value.indexOf(".png", length-5) != -1) || (document.all.adress.value.indexOf("HTML", length-5) != -1) || (document.all.adress.value.indexOf(".HTM", length-5) != -1) || (document.all.adress.value.indexOf(".TXT", length-5) != -1) || (document.all.adress.value.indexOf("JPEG", length-5) != -1) || (document.all.adress.value.indexOf(".JPG", length-5) != -1) || (document.all.adress.value.indexOf(".GIF", length-5) != -1) || (document.all.adress.value.indexOf(".PNG", length-5) != -1)) {
			
				window.opener.frames.wysiwyg.location = HTMLPath
                                //document.write(HTMLPath);
				//window.opener.frames.wysiwyg.body.innerHTML = HTMLPath
				//element.document.body.innerHTML = HTML;


				
//var range = window.opener.frames.wysiwyg.document.selection.createRange()
//range.pasteHTML(HTMLPath);


			}
		
		else {
			document.all.adress.select()
			alert ("Internet Explorer не поддерживает данный тип файлов")
		}
	}
	else {
		alert ("Введите адрес HTML - страницы")
		document.all.adress.focus()
	}
window.close()
}



</script>
</head>

<body>
<font>Адрес HTML - страницы:</font>
<center>
<br>
<input type="file" name="adress" size=30 title="Адрес HTML - страницы"  >
<br><br>
<INPUT class="clsbtn" type="button" value="OK" OnClick="AddEl()">
<INPUT class="clsbtn" type="button" value="Отмена" OnClick="window.close()">
</center>
</body>
</html>