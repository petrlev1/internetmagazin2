/*
[ezEdit version 1.0 beta 1]
Free browser based WYSIWYG HTML editor!
copyright:2000 SiteObjects, Inc.
author:Brett Suwyn
mailto:ezEdit@siteobjects.com
http://www.siteobjects.com/
*/

function insertImage(){
  var objType;
  var childNodes = xmlFileListing.XMLDocument.documentElement.childNodes;
  objType = childNodes.item(dFileListing.selected.parentElement.rowIndex).childNodes.item(0).text;
  if(objType != "Dir") {
    opener.ImgSrc.value = relPath + dFileListing.selected.innerText;
    opener.changePreview();
    window.close();
  }
}
function getDirectoryContents(path){
  document.body.style.cursor = "wait";
  if (relPath == rootLevel) upDir.disable = true;
  else upDir.disable = false;
  xmlFileListing.XMLDocument.load("includes/filekernal.php?path="+path);
  self.focus();  
}
function upDirectory(){
  if (relPath != rootLevel){
    var aRelPath = relPath.split("/");
    aRelPath = aRelPath.slice(0,aRelPath.length - 2);
    relPath = aRelPath.join("/") + "/";
    getDirectoryContents(relPath);
  }
}
function init(){
  if (relPath == rootLevel) upDir.disable = true;
  else upDir.disable = false;
}
function upload(){
  window.open("upload.php?path=" + rootLevel+'/'+addPath,"Upload","width=310,height=35,menubar=0,status=0,toolbar=0,resizeable=1");
}    