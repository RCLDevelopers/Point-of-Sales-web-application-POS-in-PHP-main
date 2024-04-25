<?php session_start();
 if(isset($_SESSION['user_email'])){
$user_email=$_SESSION['user_email'];
 $user_ID=$_SESSION['user_ID'];
$user_role=$_SESSION['user_role'];
include('functions/activity_logs.php');

}else{
echo '<script> window.location="../index" </script>';

}
//include('check_overdues.php');
?>