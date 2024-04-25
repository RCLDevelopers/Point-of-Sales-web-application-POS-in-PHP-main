<?php
include('config.php');
function createCustomer($name,$email,$phone,$address,$date_of_birth){
try{
$customerID=generateCustomerID();
global $conn;
$sql = "INSERT INTO `customer`(`customer_ID`,`customer_name`,`email`,`phone`,`address`,`date_of_birth`)VALUES (:customer_ID,:customer_name,:email,:phone,:address,:date_of_birth)";
$query = $conn -> prepare($sql);
$query->bindParam(':customer_name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':phone',$phone);
$query->bindParam(':address',$address);
$query->bindParam(':date_of_birth',$date_of_birth);
$query->bindParam(':customer_ID',$customerID);
$query ->execute();
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
function updatecustomer($customer_ID,$name,$email,$phone,$address,$date_of_birth){
try{
global $conn;
$sql = "UPDATE customer SET  customer_name =:customer_name, email=:email , phone=:phone , address=:address, date_of_birth=:date_of_birth WHERE customer_ID=:customer_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':customer_name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':phone',$phone);
$query->bindParam(':address',$address);
$query->bindParam(':date_of_birth',$date_of_birth);
$query->bindParam(':customer_ID',$customer_ID);
if($query ->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getcustomersAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM customer WHERE  status=:status ORDER BY id DESC");
$stmt->bindValue(':status',$status);
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
function getcustomerByID($customer_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM customer WHERE customer_ID=:customer_ID AND status=:status");
$stmt->bindValue(':status',$status);
$stmt->bindValue(':customer_ID',$customer_ID);
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
function checkifCustomerAlreadyExist($name,$email){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM customer WHERE customer_name=:customer_name  AND email=:email AND status=:status");
$stmt->bindValue(':status',$status);
$stmt->bindValue(':customer_name',$name);
$stmt->bindValue(':email',$email);
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
function deactivatecustomer($customer_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE customer SET status=:status WHERE customer_ID=:customer_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':customer_ID',$customer_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function generateCustomerID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>