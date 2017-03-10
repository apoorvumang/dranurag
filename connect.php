<?php

//if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


/* Database config */

$db_host		= 'localhost:3306';//'mysql.iakshay.net'
$db_user		= 'root';//'apoorv';
$db_pass		= 'root';//'patient';
$db_database	= 'dranurag_in_db_root';//'apoorv_heroku';

/* End config */

$link_root = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die('Unable to establish a DB connection');

mysqli_query($link_root, "SET names UTF8");

?>
