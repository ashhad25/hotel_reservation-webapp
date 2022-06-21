<?php
session_start();
require_once 'db.php';

$getid = $_GET['roomid'];
$reserveid = $_GET['reserveid'];
$_SESSION['roomid'] = $getid;


$qu ="UPDATE rooms SET reserved_by='0'
WHERE reserved_by = '$reserveid'";
$run_query=@mysqli_query($dbcon,$qu);

if($run_query){   

$qu1 ="UPDATE reservation SET checkout='true'
WHERE reserve_id = '$reserveid'";
$run_query=@mysqli_query($dbcon,$qu1);

if($run_query){
   echo ("<script LANGUAGE='JavaScript'>
   window.alert('you have checked out successfully!');
   window.location.href='home.php';
   </script>");
   }
}
else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('there was an error checking out!');
        window.location.href='home.php';
        </script>");
   }

?>