<?php
$configDB = array();
$configDB["host"] 		= "hktweb.mysql.database.azure.com";
$configDB["database"]	= "computer_store";
$configDB["username"] 	= "hktpc_hoa";
$configDB["password"] 	= "tdc111!!!";
define("HOST", "hktweb.mysql.database.azure.com");
define("DB_NAME", "computer_store");
define("DB_USER", "hktpc_hoa");
define("DB_PASS", "tdc111!!!");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
