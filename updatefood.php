<?php
include "connect.php";

  $food_id=$_GET['food_id'];
if(isset($_POST['send'])){
       $food=$_POST['food'];
       $name=$_POST['owner'];
       $update="UPDATE `foods` SET `food_name`='$food',`food_ownername`='$name' WHERE `food_id`='$food_id'";


       $query_run=mysqli_query($conn,$update);

       if($query_run){
        #echo"<script>alert('Data has been updated')</script>";
        header("location:food.php");
       }
       else{
        echo"<script>alert('Data has not been updated')</script>";
       }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dukundumurimo Company ltd</title>
      <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js"> -->
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="logo"><br>
        <label for=""><i class="bi bi-boxes"  style="color: white;"></i> Dukundumurimo</label>
        </div><br>
        <br>


        <div class="link">
            <li><i class="bi bi-speedometer"  style="color: white;"></i><a href="dashboard.php">dashboard</a> </li>
            <li><i class="bi bi-egg-fried" style="color: white;"></i><a href="food.php">foods</a> </li>
            <li><i class="bi bi-cloud-plus-fill" style="color: white;"></i><a href="importpage.php">import</a> </li>
            <li><i class="bi bi-database-fill-down" style="color: white;"></i><a href="exportpage.php">export</a> </li>
            <li><i class="bi bi-printer-fill" style="color: white;"></i><a href="#">report</a> </li><br><br><br><br><br><br>
            <li><a href="index.php"><i class="bi bi-person-circle" style="color: yellow;"></i> &nbsp; logout</a> </li>
        </div>
    </div>

    <div class="dashboard">
        <div class="side">
            <p for="">Welcome To <label for=""> Our Dashboard</label></p>
        </div>

        <div class="side1"><br>
            <label for=""> <i class="bi bi-people-fill" style="color: white;"></i> Dukundumurimo Company Ltd</label>
        </div>
        <div class="welc">
            <p for=""><label for=""><i class="bi bi-patch-plus-fill" style="color: rgba(11, 44, 87, 0.849);"></i> UPDATE</label> FOOD</p>
            <a href="food.php"><button><i class="bi bi-caret-left-fill"></i>Get back</button></a>
        </div>
        <?php
            $select="SELECT * from foods where food_id='$food_id'";
            $query_run=mysqli_query($conn,$select);
            $row=mysqli_fetch_assoc($query_run);
        ?>

        <form action="" method="POST">
           <div class="send">
            <div class="top"><br>
                <h4>UPDATE FOOD</h4><br>
            </div>
            
            <br>
           <label for="">Food name</label><br><br>
           <input type="text" placeholder="Food name" name="food"value="<?php echo $row['food_name']?>"><br><br>
           <label for="">Food ounername</label><br><br>
           <input type="text" placeholder="Food ounername" name="owner" value="<?php echo $row['food_ownername']?>"><br><br><br>
           <button name="send" type="submit">Update &nbsp;<i class="bi bi-send-plus-fill"></i></button><br><br>
           </div>
           <div class="footer"></div>
        </form>

        
    </div>
    
</body>
</html>