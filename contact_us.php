<?php
  session_start();
  $name = $_SESSION['username'];
  if(isset($_POST['submit'])){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('your responce has been recorded!');
    window.location.href='home.php';
    </script>");
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Hotel Luxury</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body background="background2.jpg">
  
  <marquee behavior="alternate" bgcolor="white"><h1><font color="#HH5555">WELCOME TO HOTEL MODERN LUXURY</font></h1></marquee>
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
                    <a class="nav-link active" href="contact_us.php">Contact Us</a>
                  </li>
                  <li class="nav-item ms-2">
                    <a class="nav-link" href="reservation_form.php">Reservation Form</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <section class="vh-20">
  <div class="container-fluid mt-4" style="border: 5px solid white; width: 900px; height: 455px; border-radius: 25px;">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="d-flex h-custom-2 px-2 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

            <h3 class="fw-normal mb-1 pb-3 text-white" style="letter-spacing: 1px;">Contact Us</h3>

            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="name" name="fname" required>
            </div>
            <div class="input-group mb-3">
             <input type="email" class="form-control" placeholder="email" name="email" required>
            </div>
            <div class="input-group mb-2">
              <textarea id="subject" name="subject" placeholder=" Write your message.." style="height:150px; width: 400px;" class="form-control"></textarea>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" name="submit">submit</button>
            </div>
          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="background.png"
          alt="Login image" class="w-100 vh-80" style="object-fit: cover; object-position: center; border-radius: 25px;">
      </div>
    </div>
  </div>
</section>  

          <table border="0" height="80px" width="100%" style="margin-top: 90px;">
          <tr align="center" height="65" bgcolor="#HH5555">
            
                  <td>&copy;www.hotel modern luxury.com</td>
          </tr>
      </table>
                </center>
       
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>          

</body>
</html>