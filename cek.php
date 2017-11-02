<?php
mysql_connect("localhost","root","");
mysql_select_db("kreditplus");
$q = mysql_query("SELECT migration FROM migrations");
while($row=mysql_fetch_assoc($q)){
	$u = str_replace(".php","",$row['migration']);
	mysql_query("UPDATE migrations SET migration='".$u."' WHERE migration='".$row['migration']."'");
}
?>