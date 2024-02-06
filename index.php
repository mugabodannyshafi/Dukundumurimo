
<?php
include "connect.php";


$error="";
$not="";

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $select="SELECT * FROM `manager` WHERE username='$username' AND password ='$password'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0)
    {
        while($check=mysqli_fetch_assoc($result))
        {
            session_start();
            session_unset();
            $_SESSION['username']= $check['username'];
            $_SESSION['password']= $check['password'];
            header("location:dashboard.php");
        }
    

    }
    else{
        echo "<script>alert('incorect identities')</script>";
       #$error="<div class='alert alert-danger'>incorrect identities </div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
      <label for="">LOGIN FORM</label><br>
     <input type="text" placeholder="Username" name="username" required><br>
     <input type="password" placeholder="Password" name="password" required><br><br>
     <a href="">Forgot password?</a><br>
     <a href=""><button name="submit">login</button></a>
    </form>
</body>
</html>