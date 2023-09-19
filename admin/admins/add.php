
<?php require '../../config.php'; 

if(!isset($_SESSION['admin_name'])){
  header('location:../login.php');
}
require '../../functions/validation.php';
$path_picture='../../assets/images/logo.png';
$path_addFile='';
?>
<?php 
require '../inc/header.php';
if( isset($_POST['submit'])){

    if(!requird_string($_POST['name'])){
        $errors[]='The name must be not empty';
    }
    if(!requird_email($_POST['email'])){
        $errors[]='The email must be not empty';
    }
    else if(!validEmail($_POST['email'])){
        $errors[]='The email must be not empty';
    }
    
    if(!requird_string($_POST['password'])){
        $errors[]='The password must be not empty';
    }
   


if(!$errors){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
  $sql = "INSERT INTO admins (`admin_name`,`admin_email`,`admin_password`)
                            VALUES ('$name','$email','$password') ";
insert($sql);
?>

<div class="container">
   
<div class="alert alert-danger" role="alert">
<?='Success';?>
</div>
</div>
<?php 
}
 if($errors):
?>
<div class="container">
   
   <div class="alert alert-danger" role="alert">
       <?php foreach($errors as $error){
           echo $error."<br>";
       }?>
    
   </div>
 </div>
<?php  endif;}?>
<div class="container">
    <h2>Add new admin</h2>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name='name'class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" name ='email'class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Password</label>
        <input  name='password' type="password"class="form-control" id="message" ></input>
      </div>
      <button type="submit" name='submit' class="btn btn-primary">Save</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php require '../inc/footer.php';?>