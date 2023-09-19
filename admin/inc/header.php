

<!DOCTYPE html>
<html>
<head>
  <title>Navigation Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?=$path_picture?>" width="70" alt="LOGO"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://localhost/medicalProject_using%20php_mysql/admin/cities/add.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/medicalProject_using%20php_mysql/admin/cities/add.php"><span class="badge badge-primary ml-1">Add</span></a>
          <a class="dropdown-item" href="http://localhost/medicalProject_using%20php_mysql/admin/cities/view_all.php"><span class="badge badge-danger ml-1">View all</span></a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><span class="badge badge-primary ml-1">Add</span></a>
          <a class="dropdown-item" href="#"><span class="badge badge-danger ml-1">View all</span></a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Orders
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
          <a class="dropdown-item" href="#"><span class="badge badge-danger ml-1">View all</span></a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admins
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=$path_addFile?>"><span class="badge badge-primary ml-1">Add</span></a>
          <a class="dropdown-item" href="#"><span class="badge badge-danger ml-1">View all</span></a>
        </div>
      </li>
     <li>
      <?php
      if(isset($_SESSION['admin_name'])):?>
      <a class="dropdown-item" href='http://localhost/medicalProject_using%20php_mysql/admin/logout.php'>Logout</a>      
     </li>
     <?php endif;?>
     
    </ul>
  </div>
</nav>
