<?php
session_start();
$lastid = $_SESSION['LASTID'];
$name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Luxury</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body background="image4.jpg">

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
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
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

         <div style="margin-left: 450px; margin-top: 80px;">
         	<label class="text-danger fw-bold fs-5">Check In Date</label>
         	<div><input type="text" name="" value="<?php echo $_SESSION['check_in_d'];?>" readonly></div>
        </div>
		<div style="margin-left: 670px; margin-top: -61px;">
		    <label class="text-danger fw-bold fs-5">Check Out Date</label>
		    <div><input type="text" name="" value="<?php echo $_SESSION['check_out_d'];?>" readonly></div>
		</div>

<?php
require_once 'db.php';
$q1 = "SELECT * FROM rooms WHERE reserved_by = '0'";
                        $res1 = @mysqli_query($dbcon,$q1);   
                        $res1Count = mysqli_num_rows($res1);
                        if($res1Count>0){
                            while($row1 = mysqli_fetch_assoc($res1)){
                            ?>
                                <div class="p-3" style="margin-left: 350px; margin-top: 40px;">
                                <div class="card" style="max-width: 600px; height: 200px; margin-top: -20px;">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?php echo $row1['room_image'];?>" class="img-fluid rounded-start" alt="..." style="height: 200px; padding: 10px;">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body" style="padding: 60px;">
                                        <h3 class="card-title"><?php echo $row1['room_title'];?></h3>
                                        <p class="card-text"><?php echo $row1['room_desc'];?></p>
                                        <button name="book1" class="btn btn-warning" style="margin-left: 30px;"><a href="book.php?bookid=<?php echo $row1['ID'];?>&reserveid=<?php echo $lastid;?>"style="text-decoration: none; color: black;">book now</a></button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <?php
                            }
                        }
                       else{
                    ?>
                    <p style="color: white; font-size: 20px; background-color: black; width: auto; margin-top: 30px;" align="center">No rooms available at the moment</p>
                    <?php
                }

            ?>
             
      	<table border="0" height="80px" width="100%" style="margin-top: 300px;">
          <tr align="center" height="65" bgcolor="#HH5555">
            
                  <td>&copy;www.hotel modern luxury.com</td>
          </tr>
      	</table>

           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>