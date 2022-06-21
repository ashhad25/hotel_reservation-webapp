<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
if(isset($_SESSION['username'])){
   session_destroy();
   header('Location:index.php');
}
}
else {
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('you need to login first!');
    window.location.href='index.php';
    </script>");
}
?>