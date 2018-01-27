var zColor = new Array();
var namedColors = new Array();
namedColors["#000000"] = "black";
namedColors["#0000ff"] = "blue";
namedColors["#ff0000"] = "red";
namedColors["#ff00ff"] = "fuchsia";
namedColors["#00ff00"] = "lime";
namedColors["#00ffff"] = "aqua";
namedColors["#ffff00"] = "yellow";
namedColors["#ffffff"] = "white";

var iColors = 0;
var iRed, iGreen, iBlue;

for(r=0; r<6; r++)	{
for(g=0; g<6; g++) {
	for(b=0; b<6; b++) {
		iRed = 51*r;
		iGreen = 51*g;
		iBlue = 51*b;
		
		iRed = iRed.toString(16);
		iGreen = iGreen.toString(16);
		iBlue = iBlue.toString(16);
		
		if(iRed=="0") iRed = "00";
		if(iGreen=="0") iGreen = "00";
		if(iBlue=="0") iBlue = "00";
		
		zColor[iColors] =  "#" + iGreen + iRed + iBlue;
		iColors++;
	}
}
}

function doMouseOver(){
	var el = window.event.srcElement;
  if(el.style.backgroundColor){
    cpAColor.style.backgroundColor = el.style.backgroundColor;
    cpAColor.innerText = el.namedColor;
    cpAColorHex.innerText = el.style.backgroundColor;
  }
}
function doMouseOut(){
  cpAColor.style.backgroundColor = "menu";
  cpAColor.innerText = "";
  cpAColorHex.innerText = "";
}
function doClick() {
	var el = window.event.srcElement;
  color = el.currentStyle.backgroundColor;
	if (color != "") {
		window.external.raiseEvent("colorchange", color);
	}
}

window.setTimeout("MakeGrid()",2000); //Need to delay this function due to a bug of unknown nature (onload sometimes produces undesireable effects)

function MakeGrid()
{
	var oTab = document.getElementById("Palette");
  
	oTab.attachEvent("onmouseover", doMouseOver);
	oTab.attachEvent("onmouseout", doMouseOut); 
 	oTab.attachEvent("onclick", doClick);

	for(i=0; i<12; i++)
	{
		var oRow = oTab.insertRow();
		for(j=0; j<18; j++)
		{
			var oCell = oRow.insertCell();
			iCellCount = (i*18) + j;
			oCell.style.backgroundColor = zColor[iCellCount];
      if (eval("namedColors[\""+zColor[iCellCount].toLowerCase() +"\"]"))
        oCell.namedColor = eval("namedColors[\""+zColor[iCellCount]+"\"]");
      else 
        oCell.namedColor = "";
		}
	}
}
