<?php


include ("$DOCUMENT_ROOT/Lib/php/func.object.php");

$func = new func();

include ("$DOCUMENT_ROOT/Lib/php/main.object.php");

$main = new main();


		$main->q("UPDATE pages SET sort='0'");

		$sql_q = $main->q("SELECT * FROM pages");

		while ($rows = mysql_fetch_array($sql_q))
		{
			$main->q("UPDATE pages SET sort=sort+1 WHERE id>'$rows[id]'");
		}
?>