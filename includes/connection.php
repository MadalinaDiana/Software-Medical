<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"mc");
session_start();


require_once 'userDbh.inc.php'; //functia redirect
?>