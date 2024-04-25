<?php
include('config.php');
function createService($serviceName,$cost){
	$serviceID=generateserviceID();
	try{
//$productID=generateproductID();
global $conn;
$sql = "INSERT INTO `service`(`service_ID`,`service_name`,`cost`)VALUES (:service_ID,:service_name,:cost)";
$query = $conn -> prepare($sql);
$query->bindParam(':service_ID',$serviceID);
$query->bindParam(':service_name',$serviceName);
$query->bindParam(':cost',$cost);
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
function createServiceSaless($sales_ID,$customer_ID,$invoice_no,$total_discount,$total_amount,$paid_amount,$due_amount,$pay_status,$balance,$invoice_date,$details){
try{
//$purchase_ID=generatePurchaseID();
$type='service';
global $conn;
$sql = "INSERT INTO `sales`(`sales_ID`,`customer_ID`,`invoice_no`,`total_discount`,`total_amount`,`paid_amount`,`due_amount`,`pay_status`,`amount_balance`,`invoice_date`,`detail`,`type`)VALUES (:sales_ID,:customer_ID,:invoice_no,:total_discount,:total_amount,:paid_amount,:due_amount,:pay_status,:amount_balance,:invoice_date,:detail,:type)";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':total_amount',$total_amount);
$query->bindParam(':paid_amount',$paid_amount);
$query->bindParam(':due_amount',$due_amount);
$query->bindParam(':pay_status',$pay_status);
$query->bindParam(':amount_balance',$balance);
$query->bindParam(':invoice_date',$invoice_date);
$query->bindParam(':detail',$details);
$query->bindParam(':type',$type);
$query->execute();
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
function updateservice($serviceID,$serviceName,$cost,$status){
try{
global $conn;
$sql = "UPDATE service SET service_name=:service_name, cost =:cost, status=:status WHERE service_ID=:service_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':service_name',$serviceName);
$query->bindParam(':cost',$cost);
$query->bindParam(':status',$status);
$query->bindParam(':service_ID',$serviceID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getAllservices(){
	try{
global $conn;
$status='Delete';
$stmt = $conn->prepare("SELECT * FROM service where status !=:status ORDER BY id DESC");
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
function getAllservicesForSales(){
	try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM service where status =:status ORDER BY id DESC");
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
function getServiceByID($service_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM service WHERE service_ID=:service_ID ");
$stmt->bindValue(':service_ID',$service_ID);
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
function checkifServiceAlreadyExist($serviceName){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM service WHERE service_name=:service_name  AND status=:status");
$stmt->bindValue(':status',$status);
$stmt->bindValue(':service_name',$serviceName);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return 1;
}else{
return 0;
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function deactivateservice($service_ID){
try{
global $conn;
$status='Delete';
$sql = "UPDATE service SET status=:status WHERE service_ID=:service_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':service_ID',$service_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function generateserviceID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
function generateservicesaleID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>