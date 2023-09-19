<?php require '../config.php'; 
if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
  }
$path_picture='../assets/images/logo.png';
$path_addFile='admins/add.php'
?>
<?php require BLA.'inc/header.php';  ?>


<?php require BLA.'/inc/footer.php';  ?>

