function EditorExecCommand( command_param )
{
	var tr = frames.newTextArea.document.selection.createRange();
	tr.select();
	tr.execCommand( command_param );
	frames.newTextArea.focus(); 
}

function SaveFrame()
{
	document.AddNewsForm.MainFrame.value = wysiwyg.document.body.innerHTML;
	AddNewsForm.submit();
}


function check_form()
{
	var arr = new Array();
	var arr2 = new Array();

	//document.write(1);
	

	var dwp=document.add.person;
	var dmp=document.add.phone;



    if (dwp.value=="") {arr2.push("dwp"); arr.push("Вы не представились!");}
	if (dmp.value=="") {arr2.push("dmp"); arr.push("Вы не указали Ваш телефон!");} 

	 
	//document.write(1);
	
	if (arr.length > 0)
		{
		arr2.reverse();
		
		for (i=0; i<arr.length; i++)
		{
			eval(arr2[i]).focus();
		}
		
		error_message = arr.join("\n");
		alert(error_message);
	
		return false;
		}
	return true;
	
}

