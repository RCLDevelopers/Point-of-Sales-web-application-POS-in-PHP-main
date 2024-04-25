<?php
include('config.php');
function createActivity_logs($activity){
$user=$_SESSION['user_email'];
$ip_address=$_SERVER['REMOTE_ADDR'];
$url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
try{
global $conn;
$sql = "INSERT INTO `activity_logs`(`activity`,`user`,`url`,`ip_address`)VALUES (:activity,:user,:url,:ip_address)";
$query = $conn -> prepare($sql);
$query->bindParam(':activity',$activity);
$query->bindParam(':user',$user);
$query->bindParam(':url',$url);
$query->bindParam(':ip_address',$ip_address);$query -> execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
?>