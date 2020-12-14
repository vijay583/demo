<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'cms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$GLOBALS['baseUrl'] = $_SERVER['HTTP_HOST'].__DIR__;
$localServer = explode(":", $GLOBALS['baseUrl']);
if($localServer[0] == "localhost"){
$GLOBALS['baseUrl'] = $_SERVER['HTTP_HOST']."/cms/";    
}else{
    $GLOBALS['baseUrl'] = $_SERVER['HTTP_HOST'];
}
?>