<?php
session_start();
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

<body>
<center>
  <marquee behavior="alternate"><h1><font color="#HH5555">WELCOME TO HOTEL MODERN LUXURY</font></h1></marquee>
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
                    <a class="nav-link active" href="about.php">About</a>
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

                <table border="0" width="85">
                <tr>
<td align="center"><img src="image1.jpeg"width="1000" height="500"></td></tr>
<tr><td align="center"><img src="image2.jpg"width="1000" height="500"></td></tr>
                    </tr>
                    <tr>
                   
                   <p style="color:black; font-size:20px; margin-top: 10px;"><b><i>Our Hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided inside a hotel room may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, a flat screen television, and en-suite bathrooms. In Small, lower-priced hotel may offer only the most basic guest services and facilities. In Larger, higher-priced hotel may provide additional guest facilities such as a swimming pool, business centre (with computers, printers, and other office equipment), childcare, conference and event facilities, tennis or basketball courts, gymnasium, restaurants, day spa, and social function services.</b></i></p>.
</tr>
</table>
	<table border="0" height="100%" width="100%">
          <tr align="center" height="65" bgcolor="#HH5555">
            
                  <td>&copy;www.hotel modern luxury.com</td>
          </tr>
      </table>
        </center>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>               
                
</body>
</html>

