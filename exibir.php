<?php

include 'banco.php';

$result=mysql_query("SELECT * FROM ") or die("Impossível executar a query");

while($row=mysql_fetch_object($result)) {
	echo "<img src='getImagem.php?PicNum=$row->PES_ID' \">";
}

?>