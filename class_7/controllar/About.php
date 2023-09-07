<?php
// print_r($_REQUEST);
session_start();

$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
$Password = $_REQUEST['password'];
$Re_assword = $_REQUEST['re_password'];
$Errors = [];

if(empty($Name)){
    $Errors['name_error'] = "Required";
}
if(empty($Email)){
    $Errors['email_error'] = "Required";
}

if(empty($Password)){
    $Errors ['password_error'] = "Required";

}else if(strlen($Password) > 8){
    $Errors ['password_error'] =  "Your Pass must be 8 characters or less";
}

if($Password != $Re_assword){
    $Errors ['password_error'] = "Password mismatch";
}
?>
<?php
print_r(count($Errors));


if(count($Errors) > 0){
    // backword
    
    $_SESSION['old'] = $_REQUEST;
    $_SESSION['Errors check'] = $Errors;
   header("Location: ../index.php");
    
}else{

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app.css">
    <title>Document</title>
</head>
<body
style="background-image: url(https://www.freecodecamp.org/news/content/images/size/w2000/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg);">
    

</body>
</html>


