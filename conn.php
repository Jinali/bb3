<?php
define("SERVER","localhost");
define("USER","root");
define("PASSWORD","");

$con=mysql_connect(SERVER,USER,PASSWORD);
if(!$con)
{
	echo "Con Failed ".mysql_error();
	die();
}
mysql_select_db("db1",$con);

?>