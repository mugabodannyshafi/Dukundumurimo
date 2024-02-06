<?php
  include "connect.php";
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
    <link rel="stylesheet" href="import.css">
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
            <p for=""><label for=""><i class="bi bi-patch-plus-fill" style="color: rgba(11, 44, 87, 0.849);"></i> Export</label> Food</p>
            <a href="exportpage.php"><button><i class="bi bi-caret-left-fill"></i>Get back</button></a>
        </div>

        <form action="" method="POST">
           <div class="send">
            <div class="top"><br>
                <h4>EXPORT FOODS</h4><br>
            </div>
            <?php
                 
                 if(isset($_POST['send'])){

                    $fname=$_POST['fname'];
                    $date=$_POST['date'];
                    $quantity=$_POST['quantity'];
                    $select_imp="SELECT * FROM import WHERE food_name='$fname'";
                    $run=mysqli_query($conn,$select_imp);
                    $row=mysqli_fetch_assoc($run);
                    if($quantity > $row['quantity']){
                        echo"error in exporting";
                        #header('location:exportpage.php');
                    }
                    else{
                        $sql="INSERT INTO `export`(`food_name`, `exportdate`, `quantity`) VALUES ('$fname','$date','$quantity')";

                        $query_result=mysqli_query($conn,$sql);
                        
                        
    
                       if(mysqli_query($conn,"UPDATE `import` SET `quantity`=quantity-$quantity WHERE food_name='$fname'")){
                        header('location:exportpage.php');
                       }
                    }

                   
                 }
            
            ?>
            <br>
           <label for="">Food type</label><br><br>
           <select name="fname" id="">
            <option value="" selected="selected" disabled="disabled">--select food type--</option>

            <?php
                 
                 $select=" SELECT * FROM `import`";

                $query_result=mysqli_query($conn,$select);
                
                if(mysqli_num_rows($query_result)>0){
                    foreach($query_result as $row){
                        ?>
                             <option value="<?php echo $row['food_name'];?>"><?php echo $row['food_name']?></option>
                        <?php
                    }
                }
            
            ?>
           
           </select><br><br>
           <label for="">Export date</label><br><br>
           <input type="date" placeholder="Food name" name="date"><br><br>
           <label for="">Quantity</label><br><br>
           <input type="number" placeholder="Food ounername" name="quantity"><br><br>
           <button name="send" type="submit">Export &nbsp;<i class="bi bi-send-plus-fill"></i></button><br><br>
           </div>
           <div class="footer"></div>
        </form>

        
    </div>
    
</body>
</html>