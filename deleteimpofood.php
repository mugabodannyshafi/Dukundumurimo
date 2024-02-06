<?php
   include "connect.php";

   $i_id=$_GET['i_id'];
   if(isset($_GET['i_id'])){
    
    $sql="DELETE from import WHERE i_id='$i_id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:importpage.php');
    }



    else
    {
        die(mysqli_error($conn)); 
    }

}
?>