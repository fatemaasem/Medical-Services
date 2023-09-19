<?php
session_start();
$errors=[];
// base file link 
define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');
$path='';
// base url
define("BU","localhost/medicalProject_using php_mysql/");
define("BUA","http://127.0.0.1/tutorials/medicalProject_using php_mysql/admin/");
define("ASSETS","http://127.0.0.1/tutorials/medicalProject_using php_mysql/assets/");

require BL.'functions/db.php'; 

?>