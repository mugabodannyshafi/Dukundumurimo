<?php
include 'connect.php';

$food_id=$_GET['food_id'];
if(isset($_GET['food_id'])){
    
    $sql="DELETE from foods WHERE food_id='$food_id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:food.php');
    }



    else
    {
        die(mysqli_error($conn)); 
    }

}
?>