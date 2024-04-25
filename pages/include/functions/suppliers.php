<?php
include('config.php');
function createSupplier($name,$email,$phone,$address){
try{
$supplierID=generateSupplierID();
global $conn;
$sql = "INSERT INTO `supplier`(`supplier_ID`,`supplier_name`,`email`,`phone`,`address`)VALUES (:supplier_ID,:supplier_name,:email,:phone,:address)";
$query = $conn -> prepare($sql);
$query->bindParam(':supplier_name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':phone',$phone);
$query->bindParam(':address',$address);
$query->bindParam(':supplier_ID',$supplierID);
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
function updateSupplier($supplier_ID,$name,$email,$phone,$address){
try{
global $conn;
$sql = "UPDATE supplier SET  supplier_name =:supplier_name, email=:email , phone=:phone , address=:address WHERE supplier_ID=:supplier_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':supplier_name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':phone',$phone);
$query->bindParam(':address',$address);
$query->bindParam(':supplier_ID',$supplier_ID);
if($query ->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getSuppliersAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM supplier WHERE  status=:status ORDER BY id DESC");
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
function getSuppliersByID($supplier_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM supplier WHERE supplier_ID=:supplier_ID ");
$stmt->bindValue(':supplier_ID',$supplier_ID);
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
function checkifSupplierAlreadyExist($name,$email){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM supplier WHERE supplier_name=:supplier_name  AND email=:email AND status=:status");
$stmt->bindValue(':status',$status);
$stmt->bindValue(':supplier_name',$name);
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
function deactivateSupplier($supplier_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE supplier SET status=:status WHERE supplier_ID=:supplier_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':supplier_ID',$supplier_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function generateSupplierID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>