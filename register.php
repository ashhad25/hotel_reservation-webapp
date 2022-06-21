<?php
session_start();
require_once 'db.php';
if(isset($_POST['register'])){
$name = $_POST['name'];
$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


if($password != $cpassword){
  echo ("<script LANGUAGE='JavaScript'>
        window.alert('passwords do not match!');
        window.location.href='register.php';
        </script>");
}
else{
  $query = "INSERT INTO userdetails(name, username, email, password)
            VALUES ('$name', '$username', '$email', '$password')";
  $result = mysqli_query($dbcon,$query);
  if($result){
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('user registered succesfully!');
        window.location.href='index.php';
        </script>");
  }
  else{
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('there was an error while registering the user!');
        window.location.href='register.php';
        </script>");
  }
}
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

<body style="background-image:url('background2.jpg') ; background-position: center; background-size: cover;">

<section class="vh-20">
  <div class="container-fluid mt-5" style="border: 5px solid white; width: 1000px; height: 575px; border-radius: 25px;">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="d-flex h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

            <h3 class="fw-bold mb-3 pb-3 text-white" style="letter-spacing: 1px;">Sign Up</h3>

            <div class="form-outline mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="name" name="name" required>
            </div>
            <div class="form-outline mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="username" name="uname" required>
            </div>
            <div class="form-outline mb-2">
              <input type="email" class="form-control form-control-lg" placeholder="email" name="email" required>
            </div>
            <div class="form-outline mb-2">
              <input type="password" class="form-control form-control-lg" placeholder="password" name="password" required>
            </div>
            <div class="form-outline mb-2">
              <input type="password" class="form-control form-control-lg" placeholder="confirm password" name="cpassword" required>
            </div>
            <div class="mb-2">
              <button class="btn btn-primary" name="register">Register</button>
            </div>
           <p class="text-white">Already have an account? <a href="index.php" class="link-info" style="text-decoration: none;">Login here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="background.png"
          alt="Login image" class="w-100" style="object-fit: cover; object-position: center; border-radius: 25px; height: 565px;">
      </div>
    </div>
  </div>
</section>  
    
     <div class="bg-secondary text-white p-3" style="margin-top: 273px;">
      <center><p>&copy; www.hotel modern luxury.com</p></center>
      </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
