<?php 
require '../../config.php'; 
require '../../functions/validation.php';
$path_picture='../../assets/images/logo.png';
require '../inc/header.php';
$cities=selectAll('cities');

?>
<!DOCTYPE html>
<html>
  <head>
    <title>All Cities</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>City id</th>
            <th>City name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php for($num=0;$num<sizeof($cities);$num++):?>
          <tr>
            <td><?= $num+1?></td>
            <td><?= $cities[$num][1]?></td>
            <td class="text-center">
                        <a href="<?php echo 'http://localhost/medicalProject_using%20php_mysql/admin/cities/edit.php?id='.$cities[$num][0]; ?>" class="btn btn-info">Edit</a>
                        <a href="<?php echo 'http://localhost/medicalProject_using%20php_mysql/delete.php?id='.$cities[$num][0].'&table=cities&field=city_id';?>" class="btn btn-danger delete"  >Delete</a>
            </td>

            </tr>

          <?php endfor;?>
          
        </tbody>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>