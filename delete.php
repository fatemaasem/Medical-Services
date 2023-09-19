<?php
require 'config.php';
$path_picture='assets/images/logo.png';
$result=false;
if($_GET['id']&&$_GET['field']&&$_GET['table']){
    $id= $_GET['id'];
    $field= $_GET['field'];
    $table= $_GET['table'];
  $result=  delete($table,$field,$id);
}
require 'admin/inc/header.php';
if($result):
?>

    <center>
    <h1 class="text-success"><?php echo $result;?></h1>
</center>
  <?php endif; require 'admin/inc/footer.php';
header( "refresh:2;url=admin/cities/view_all.php" );

