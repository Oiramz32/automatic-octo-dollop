<?php

$dbhandle = mysql_connect('localhost','root',"");
	if(!$dbhandle) {
		die('Failed to connect to server: ' . mysql_error());
	}

//select a database to work 
$db = "unleashe_hotel";
$selected = mysql_select_db($db,$dbhandle) 
  or die(mysql_error());


?>