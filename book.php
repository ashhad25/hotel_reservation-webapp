<?php
session_start();
require_once 'db.php';

$getid = $_GET['bookid'];
$reserveid = $_GET['reserveid'];
$_SESSION['bookid'] = $getid;
unset($_SESSION['reservation']);

$qu ="UPDATE rooms SET reserved_by='$reserveid'
WHERE ID = '$getid'";
$run_query=@mysqli_query($dbcon,$qu);

if($run_query){
   
   echo ("<script LANGUAGE='JavaScript'>
   window.alert('your room has been booked!');
   window.location.href='home.php';
   </script>");
   }else{
    	echo ("<script LANGUAGE='JavaScript'>
        window.alert('there was an error booking your room!');
        window.location.href='rooms.php';
        </script>");
   }

?>