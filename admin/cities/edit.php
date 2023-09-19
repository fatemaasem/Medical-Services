<?php
 require '../../config.php'; 

require '../../functions/validation.php';
$path_picture='../../assets/images/logo.png';
require '../inc/header.php';
$errors='';
if(isset($_POST['name'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $sql="UPDATE  cities SET  city_name='$name' WHERE city_id=$id";
    $result=mysqli_query($conn,$sql);
}
if(isset($_GET['id'])){
    if(is_numeric($_GET['id'])){
        $row=get_row('cities','city_id',$_GET['id']);
      if($row){
      //  update('cities',$_GET['id']);
       }
       else{
        header('location:view_all.php');
       }
    }
    else{
        header('location:view_all.php');
    }
  
  
}
else{
    header('location:view_all.php');
}
?>
<div class="container">
    <h2>Edit this city</h2>
    <h2><?= $errors?></h2>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name Of City</label>
        <input type="text" name='name'class="form-control" id="name" placeholder="<?= $row['city_name']?>">
        <input type='hidden'name ='id' value='<?= $row['city_id']?>' >
      </div>
      <button type="submit" name='submit' class="btn btn-primary">Save</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php  ;unset($_GET['id']); require '../inc/footer.php';?>