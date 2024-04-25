<?php
include('config.php');
function createCompanyProfile($title,$name,$email,$contact,$address,$logo){
try{
//$userID=generateID();
global $conn;
$sql = "INSERT INTO `company_profile`(`title`,`name`,`email`,`contact`,`address`,`logo`)VALUES (:title,:name,:email,:contact,:address,:logo)";
$query = $conn -> prepare($sql);
$query->bindParam(':title',$title);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':contact',$contact);
$query->bindParam(':address',$address);
$query->bindParam(':logo',$logo);
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
function createCompanyProfileWithoutLogo($title,$name,$email,$contact,$address){
try{
//$userID=generateID();
global $conn;
$sql = "INSERT INTO `company_profile`(`title`,`name`,`email`,`contact`,`address`)VALUES (:title,:name,:email,:contact,:address)";
$query = $conn -> prepare($sql);
$query->bindParam(':title',$title);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':contact',$contact);
$query->bindParam(':address',$address);
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
function updateCompanyProfile($title,$name,$email,$contact,$address,$logo){
try{
//$userID=generateID();
global $conn;
$sql = "UPDATE company_profile SET title=:title, name =:name, email=:email , contact=:contact , address=:address,logo=:logo ";
$query= $conn->prepare($sql);
$query->bindParam(':title',$title);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':contact',$contact);
$query->bindParam(':address',$address);
$query->bindParam(':logo',$logo);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateCompanyProfilewithoutLogo($title,$name,$email,$contact,$address){
try{
//$userID=generateID();
global $conn;
$sql = "UPDATE company_profile SET title=:title, name =:name, email=:email , contact=:contact , address=:address ";
$query= $conn->prepare($sql);
$query->bindParam(':title',$title);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':contact',$contact);
$query->bindParam(':address',$address);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getCompanyProfileAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM company_profile ");
//$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkIfProfileisCreatedAlready(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM company_profile ");
//$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return 1;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
?>