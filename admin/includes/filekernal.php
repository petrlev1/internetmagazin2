<?
 
switch ($HTTP_GET_VARS[Action])
{
 
 case "UploadFile":
 
 if (!isset($path))
 {
  exit();
 }
 if ($UploadFile_size != 0)
 {
  $trans = array (" " => "_");

 
  $new_name = strtr($UploadFile_name,$trans);
 
  move_uploaded_file($UploadFile,$path.$new_name);
 }
 else
 {
?>

 <script>
  alert ('Необходимо выбрать файл для загрузки');
 </script>

<?  
  }
 
 break;
	
 default:	
 	
 if (!isset($HTTP_COOKIE_VARS[pic_images_dir]) || !isset($HTTP_COOKIE_VARS[pic_images_url]))
 {
  exit;
 }
 
 $CurrPath = $HTTP_COOKIE_VARS[pic_images_dir]."/"; 
 
 $dir = opendir ($CurrPath);
 
 $FileFilter = " "."gif,jpg,jpeg";
 
 $fileCounter = 0;
 
 while ($file = readdir($dir)) 
 {
 
 if (is_file ($CurrPath.$file) && !eregi ("[^A-Za-z0-9._\-]",$file))
  {
   $ext =substr($file,strrpos($file,".")+1);
   if (strpos(strtoupper($FileFilter),strtoupper($ext)))
   {
    $files[$fileCounter][Name]=$file;
    $files[$fileCounter][Icon]=$ext.".gif";
    $files[$fileCounter][Size]=ceil (filesize ($CurrPath.$file)/1000);
	$files[$fileCounter][SizeLabel]="KB";
    $files[$fileCounter][Type]="File";

	$file_stat = stat ($CurrPath.$file);
	$files[$fileCounter][DateLastModified]=date("Y-m-d H:i:s",$file_stat[10]);
	
	$fileCounter++;
   }
  }
 
  if (is_dir ($CurrPath.$file) && $file != "." && $file != ".." && !eregi ("[^A-Za-z0-9._\-]",$file))
  {
   $files[$fileCounter][Name]=$file;
   $files[$fileCounter][Icon]="folder.gif";
   $files[$fileCounter][Size]="";
   $files[$fileCounter][SizeLabel]="";
   $files[$fileCounter][Type]="Dir";
	
   $file_stat = stat ($CurrPath.$file);
   $files[$fileCounter][DateLastModified]=date("m-d-Y h:i s",$file_stat[10]);
   
   $fileCounter++;
  }
}

closedir($dir); 

header("Content-type:text/xml");

print '<?xml version="1.0"?>
  <files>';

 
if (sizeof($files)!=0)
{
 foreach ($files as $file)
 {
?>

 <file>
  <type><?=$file[Type]?></type>    
  <icon>images/<?=$file[Icon]?></icon>
  <object><?=$file[Name]?></object>
  <size><?=$file[Size]?></size>
  <sizeLabel><?=$file[SizeLabel]?></sizeLabel>      
  <lastmod><?=$file[DateLastModified]?></lastmod>
 </file>
 
<?
 }
}
else
{
?>

<file>
 <type>noobjects</type>    
 <icon>images/dot_clear.gif</icon>
 <object></object>
 <size></size>
 <sizeLabel></sizeLabel>      
 <lastmod></lastmod>
</file>

<?
} 

echo  "</files>";
} 

?> 