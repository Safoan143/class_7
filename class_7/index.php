<?php
session_start();

// print_r($_SESSION['old']);

// print_r($_SESSION['Errors check']['name_error']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: url(https://media.istockphoto.com/id/865457032/vector/abstract-futuristic-cyberspace-with-binary-code-matrix-background-with-digits-well-organized.jpg?s=612x612&w=0&k=20&c=IQcdedY8fn_DMq6nwc5MaHUBe0H0d5DPyibHR8J2usk=);">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="card col-lg-4 mx-auto mt-5 shadow-lg p-3 mb-15 bg-body rounded">
<div class="card-header ">
<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
</div>
    <div class="card-body" style="background-color: wigth;">
    <form action="../class_7/controllar/About.php" class="mx-1 mx-md-4" method="POST">
    <input name="name"
    value="<?=isset($_SESSION['old']['name']) ? $_SESSION['old']['name'] : '' ?>"
     class="form-control my-3 shadow-none p-3 mb-3 bg-light rounded" type="text" placeholder="Enter Your Name">

    <?php
    if(isset($_SESSION['Errors check']['name_error'])){
      ?>  
        <span class="text-danger">
        <?php echo $_SESSION['Errors check']['name_error'] ?> 
    </span>
<?php

    } 

    ?>
    
    <input name="email"
    value="<?=isset($_SESSION['old']['email']) ? $_SESSION['old']['email'] : '' ?>"
     class="form-control my-3 shadow-none p-3 mb-3 bg-light rounded" placeholder="Enter Your Email"></textarea>
    <?php
    if(isset($_SESSION['Errors check']['email_error'])){
      ?>  
        <span class="text-danger">
        <?php echo $_SESSION['Errors check']['email_error'] ?> 
    </span>
<?php

    } 
    
    ?>
    
    <input name="password" 
    value="<?=isset($_SESSION['old']['password']) ? $_SESSION['old']['password'] : '' ?>"
    class="form-control my-3 shadow-none p-3 mb-3 bg-light rounded" type="text" placeholder="Enter Your Password">
    <?php
    if(isset($_SESSION['Errors check']['password_error'])){
      ?>  
        <span class="text-danger">
        <?php echo $_SESSION['Errors check']['password_error'] ?> 
    </span>
<?php

    } 
    
    ?>
    <input name="re_password"
    value="<?=isset($_SESSION['old']['re_password']) ? $_SESSION['old']['re_password'] : '' ?>"
    class="form-control my-3 shadow-none p-3 mb-3 bg-light rounded" type="text" placeholder="Re-password again">
    <?php
    if(isset($_SESSION['Errors check']['password_error'])){
      ?>  
        <span class="text-danger">
        <?php echo $_SESSION['Errors check']['password_error'] ?> 
    </span>
<?php

    } 
    
    ?>
    
    <button class="btn btn-success ">Upload</button>

        </form>
    </div>
</div>
</body>
</html>


<?php

session_unset();
?>
