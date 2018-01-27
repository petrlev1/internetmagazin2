


<div>


<script>
function Post()
{
document.myform.message.value = newTextArea.document.body.innerHTML;
myform.submit();
}

function EditorExecCommand( command_param )
{
var tr = frames.newTextArea.document.selection.createRange();
tr.select();
tr.execCommand( command_param );
frames.newTextArea.focus(); 

}

function Fonts ( command_param, value )
{
var tr = frames.newTextArea.document.selection.createRange();
tr.select();
tr.execCommand( command_param,false, value );
frames.newTextArea.focus(); 

}


</script>



<select id="FontSize" name="Size" onchange="Fonts('FontSize',this.options[this.selectedIndex].value);">
<option>Шрифт</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option>
    </select>

<a href=javascript: onClick="EditorExecCommand( 'Bold' );"><img src="../images/bold.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'Italic' );"><img src="../images/italic.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'Underline' );"><img src="../images/under.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'JustifyLeft' );"><img src="../images/left.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'JustifyCenter' );"><img src="../images/center.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'JustifyRight' );"><img src="../images/right.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'InsertOrderedList' );"><img src="../images/numlist.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>

<a href=javascript: onClick="EditorExecCommand( 'InsertUnorderedList' );"><img src="../images/bullist.gif" alt="Удалить" width="23" height="22" hspace="4" border="0"></a>



<div style="margin-top: 4px;">
<iframe width="100%" height="350px" id="newTextArea" name="newTextArea" style="border: 1px solid #CCCCCC; background-color: #F7F7F7;"></iframe>
</div>




<script>
newTextArea.document.designMode = "on";
newTextArea.document.open();
newTextArea.document.write(document.myform.description.value);
newTextArea.document.close();
</script>

</div>