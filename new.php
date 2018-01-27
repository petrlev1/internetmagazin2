<?php

echo  $main->showvids($main->get_record($main->pre."news",$_GET["nid"],"news_body"));
echo "<br><br>";

echo "<br>";
echo "<b>Дата:</b> ".$main->get_record($main->pre."news",$_GET["nid"],"news_date");


?>

