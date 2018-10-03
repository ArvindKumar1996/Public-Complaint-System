<?php
$con=mysql_connect("localhost","root","") or die("Error in connection");
mysql_select_db("complaint",$con) or die("database not found");
?>