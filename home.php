<?php
session_start();
include "db.php";
$user_id = $_SESSION['user_id'];
$name = $_SESSION['username'];
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Hotel Luxury</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body style="background-image:url('background2.jpg') ; background-position: center; background-size: cover;">
    <marquee behavior="alternate" bgcolor="white"><h1><font color="#HH5555">WELCOME TO HOTEL MODERN LUXURY</font></h1></marquee>
    <br>
	<nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-3" style="margin-top: -7px; border-radius: 25px;">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown">
                  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border: 2px solid black;"></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class="dropdown-item text-danger bg-white"style=" height: 40px; margin-top: 5px; text-align: center;"><b><?php echo '@'.$name ?></b></li>
                   <li><hr class="dropdown-divider" style="margin-top: 3px;"></li>
                    <li><a class="dropdown-item" href="logout.php">logout</a></li>
                  </ul>
                </div>
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item ms-2">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item ms-2">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                  </li>
                  <li class="nav-item ms-2">
                    <a class="nav-link" href="reservation_form.php">Reservation Form</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="container-fluid">

            <h1 style="color: red; margin-top: 50px; margin-left: 500px; margin-bottom: 40px;">Your booked rooms</h1>

            <?php

                $q = "SELECT * FROM reservation WHERE user_id = '$user_id' AND checkout = 'false'";
                $res = @mysqli_query($dbcon,$q);   
                $resCount = mysqli_num_rows($res);
                if($resCount>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $q1 = "SELECT * FROM rooms WHERE reserved_by = '$row[reserve_id]'";
                        $res1 = @mysqli_query($dbcon,$q1);   
                        $res1Count = mysqli_num_rows($res1);
                        if($res1Count>0){
                            while($row1 = mysqli_fetch_assoc($res1)){
                            ?>
                                <div class="p-3" style="margin-left: 370px; margin-top: 40px;">
                                <div class="card" style="max-width: 600px; height: 250px; margin-top: -20px;">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?php echo $row1['room_image'];?>" class="img-fluid rounded-start" alt="..." style="height: 250px; padding: 10px;">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body" style="padding: 60px;">
                                        <h3 class="card-title"><?php echo $row1['room_title'];?></h3>
                                        <p class="card-text"><?php echo $row1['room_desc'];?></p>
                                        <b>Check Out Date: </b><input style="text-align: center;" type="text" value="<?php echo $row['check_out_date']?>" readonly>
                                        <button name="book1" class="btn btn-warning" style="margin-left: 30px; margin-top: 5px"><a href="checkout.php?roomid=<?php echo $row1['ID'];?>&reserveid=<?php echo $row['reserve_id'];?>" style="text-decoration: none; color: black;">check out</a></button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <?php
                            }
                        }
                    }
                }
                 else{
                    ?>
                    <?php
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('you have currently zero rooms booked');
                    window.location.href='reservation_form.php';
                    </script>");
                    }

            ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
