<?php

session_start();
if(isset($_SESSION['admin_name'])){
session_destroy();}
else{
    header("location:http://localhost/medicalProject_using%20php_mysql/index.php");
}
?>