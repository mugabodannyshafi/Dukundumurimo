<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dukundumurimo Company ltd</title>
    <link rel="stylesheet" href="dash.css">
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
            <li><i class="bi bi-speedometer"  style="color: white;"></i><a href="#">dashboard</a> </li>
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
            <p for=""><label for="">WELCOME TO</label> dukundumurimo company ltd</p>
        </div>

        <div class="dash">
            <div class="dash-food"><br>
            <label for="">Food Type in stock!</label>
            </div>
            <?php
            include "connect.php";

            $select="SELECT * FROM foods";
            $query_run=mysqli_query($conn,$select);

            $row=mysqli_num_rows($query_run);
            echo "<br><label style='text-decolation:none; color:white; font-size:30px; font-family:Arial, Helvetica, sans-serif; margin-left:400px; margin-bottom:-800px;'>$row</label>";
            
            ?>
        </div>

        <div class="dashi">
            <div class="dash-foodi"><br>
                <label for="">Import</label>
            </div>
            
        </div>
        <div class="dash">
            <div class="dash-food"><br>
                <label for="">Export</label>
            </div>
            
        </div>

        
    </div>
    
</body>
</html>