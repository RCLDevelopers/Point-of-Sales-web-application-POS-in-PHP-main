<?php
include('config.php');
require_once('./pages/include/functions/activity_logs.php');
function login($email,$password){
global $conn;
$query = $conn->prepare("SELECT * FROM `users` WHERE email = :email AND password = :password AND status=:status");

$query->bindValue(':email', $email);
$query->bindValue(':password', $password);
$query->bindValue(':status', 'Active');
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$n=$query->rowCount() ;
if ($n > 0) {
session_start();
$_SESSION['user_email'] =  $row['email'];
$_SESSION['user_ID'] = $row['user_ID'];
$_SESSION['user_role'] = $row['role'];
$activity='User '. $_SESSION['user_email'] .' Signed in';
createActivity_logs($activity);
header("location:pages/index");
exit();
}else{
return "failed";
}
}
function checkAdminifexist(){
global $conn;
$query = $conn->prepare("SELECT * FROM `users` WHERE role= :role");

$query->bindValue(':role', 'admin');
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$n=$query->rowCount() ;
if ($n > 0) {
return 1;
}else{
return 0;
}
}
function signup($username,$other_names,$role,$fname,$password,$status){
try{
global $conn;
$sql = "INSERT INTO `users`(`username`,`other_names`,`role`,`fname`,`password`,`status`)VALUES (:username,:other_names,:role,:fname,:password,:status)";
$query = $conn -> prepare($sql);
$query->bindParam(':username',$username);
$query->bindParam(':other_names',$other_names);
$query->bindParam(':role',$role);
$query->bindParam(':fname',$fname);
$query->bindParam(':password',$password);
$query->bindParam(':status',$status);
$query -> execute();
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
