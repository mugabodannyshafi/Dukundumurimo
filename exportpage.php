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
    <link rel="stylesheet" href="food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .select label{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: rgb(11, 44, 87);
            font-size: 20px;
        }

        .select input{
            outline: none;
            color: black;
            padding: 3px;
            margin-left:145px;
            border:2px solid #0a6e39;
            border-right:none;
            height:32px;
            width:200px;
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
        }

        .select button{
            background-color: #0a6e39;
            padding: 3px;
            color:white;
            margin-left:-4px;
            border:2px solid #0a6e39;
            height:32px;
            width:50px;
            outline: none;
            border-bottom-right-radius: 5px;
            border-top-right-radius: 5px;
        }

        .select a button{
            background-color: #0a6e39;
            padding: 3px;
            border:none;
            color:white;
            margin-left:43px;
            height:35px;
            width:120px;
            font-weight:bold;
            font-size:15px;
            border-radius:5px;
        }

        .select table{
            border-collapse:collapse;
            border:none;
            margin-top:30px;
        }

        .select table thead{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            border:none;
            font-weight: bold;
            color: #0a6e39;
            height: 50px;
            
        }
        .select table thead tr th{
            border:none;
            text-align: justify;
        }

        .select table tbody tr{
            border:none;
            font-weight:bold;
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(2, 14, 31, 0.87);
            height:50px;
            border-bottom: 1px solid rgba(2, 14, 31, 0.87);
        }
        .select table tbody tr:hover{
            background-color:#c5c5c577;
            cursor:pointer;
            transition: 1s;
            -webkit-transition: 1s;
            -moz-transition: 1s;
            -ms-transition: 1s;
            -o-transition: 1s;
        }

        .select table tbody td{
            border:none;
        }
        .select table tbody tr:last-child{
            border-bottom: none;
        }
        
    </style>
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
            <li><i class="bi bi-database-fill-down" style="color: white;"></i><a href="#">export</a> </li>
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
            <p for=""><label for="">Export</label> Station</p>
        </div><br>
       <div class="select">
        <label for="">All exported food listed here</label>
        <input type="search" placeholder="search here"> 
        <button><i class="bi bi-search-heart-fill"></i></button>
        <a href="export.php"><button><i class="bi bi-cloud-minus-fill"></i> Export New</button></a>
       <table border="2" cellpadding="10" width="90%">
            <thead>
                <tr>
                <th>#</th>
                <th>Food Name</th>
                <th>Export date</th>
                <th>Quantity</th>
                <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
            <?php

                   $select="SELECT * FROM export";
                   $query_result=mysqli_query($conn,$select);

                   while($row=mysqli_fetch_assoc($query_result)){
                    ?>
                    <tr>
                    <td><?php echo $row['e_id']?></td>
                    <td><?php echo $row['food_name']?></td>
                    <td><?php echo $row['exportdate']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <!-- <td>
                        <a href="updateexportfood.php?e_id= <?php echo $row['e_id'];?>" title="update"><i class="bi bi-pencil-square" style="color:#0a6e39; font-size:20px;"></i></a>
                        <a href="deleteexportfood.php?e_id=<?php echo $row['e_id'];?>" title="delete"><i class="bi bi-trash-fill" style="color:red; font-size:20px;"></i></a>
                    </td> -->
                    
                    <?php
                   }
                ?>
            </tr>
            </tbody>
        </table>
       </div>
 
    </div>
    
</body>
</html>