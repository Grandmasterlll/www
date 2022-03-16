<?php
session_start();
$path=$_SESSION['pathm'];
//echo ' = '.$path;  unset($_SESSION['path']);

header($path);

?>