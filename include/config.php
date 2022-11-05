<?php
defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "db_ecommerce") ;
defined('pass') ? null : define("pass","yong7-232-17");
defined('database_name') ? null : define("database_name", "thaicade_db_ecommerce") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
