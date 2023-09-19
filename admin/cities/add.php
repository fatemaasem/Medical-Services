<?php require '../../config.php'; 

require '../../functions/validation.php';
$path_picture='../../assets/images/logo.png';
require '../inc/header.php';
$errors=[];
if( isset($_GET['submit'])){
    $name=$_GET['name'];
    if(requird_string($_GET['name'])){
        if(minLength($_GET['name'],3)){

        }
        else{
            $errors[]='The minimum length of this name must be equal 3';
        }
    }
    else{
        $errors[]='The field is empty';
    }

if(!$errors){
    $sql="INSERT INTO cities (city_name) VALUES ('$name')";
    insert($sql);
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
    <h2>Add new cities</h2>
    <form action="" method="GET">
      <div class="mb-3">
        <label for="name" class="form-label">Name Of City</label>
        <input type="text" name='name'class="form-control" id="name" placeholder="Enter your name">
      </div>
      <button type="submit" name='submit' class="btn btn-primary">Save</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php require '../inc/footer.php';?>