<?php
require '../config.php'; 
require '../functions/validation.php';


if(isset($_POST['submit'])){
 session_unset();
    if(!requird_string($_POST['name'])){
        $errors[]='The name must be not empty';
    }
    if(!requird_string($_POST['password'])){
        $errors[]='The password must be not empty';
    }
   if(!$errors &&!select_with_name_and_password($_POST['name'],$_POST['password'])){
    $errors[]='Try again that admin is not found';
    }
   if(!$errors){
    $_SESSION['admin_name']=$_POST['name'];
    header('location:index.php');
   }
   
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h2>Login Form</h2>
        <?php if(!empty($errors)):?>
        
   <div class="alert alert-danger" role="alert">
    <?php foreach($errors as $error){echo $error."<br>";}?>
   </div>
   <?php endif;?>
        <form method='POST' action =''>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name='name' class="form-control" id="username" placeholder="Enter your username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password"  name='password'class="form-control" id="password" placeholder="Enter your password">
          </div>
          <button type="submit" name='submit' class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
