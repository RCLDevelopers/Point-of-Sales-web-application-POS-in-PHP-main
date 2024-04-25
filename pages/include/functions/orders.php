<?php
include('config.php');
function createOrder($customer_ID,$order_title,$description,$order_date){
try{
$orderID=generateOrderID();
global $conn;
$sql = "INSERT INTO `customer_order`(`customer_ID`,`order_ID`,`title`,`descriprtion`,`date_created`)VALUES (:customer_ID,:order_ID,:title,:descriprtion,:date_created)";
$query = $conn -> prepare($sql);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':order_ID',$orderID);
$query->bindParam(':title',$order_title);
$query->bindParam(':descriprtion',$description);
$query->bindParam(':date_created',$order_date);
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
function updateOrder($order_ID,$customer_ID,$order_title,$description,$order_date,$status){
try{
$orderID=generateOrderID();
global $conn;
$sql = "UPDATE customer_order SET  customer_ID =:customer_ID, title=:title , descriprtion=:descriprtion , date_created=:date_created, status=:status WHERE order_ID=:order_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':order_ID',$order_ID);
$query->bindParam(':title',$order_title);
$query->bindParam(':descriprtion',$description);
$query->bindParam(':date_created',$order_date);
$query->bindParam(':status',$status);
if($query ->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getOrdersAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM customer_order ORDER BY id DESC");
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
function getOrderByID($order_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM customer_order WHERE order_ID=:order_ID  ORDER BY id DESC");
$stmt->bindValue(':order_ID',$order_ID);
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
function getPendingOrder(){
try{
global $conn;
$status='Pending';
$stmt = $conn->prepare("SELECT * FROM customer_order WHERE status=:status  ORDER BY id DESC");
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
function getCompletedOrder(){
try{
global $conn;
$status='Completed';
$stmt = $conn->prepare("SELECT * FROM customer_order WHERE status=:status  ORDER BY id DESC");
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
function deleteorder($order_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM customer_order WHERE order_ID=:order_ID  ");
$count->bindParam(':order_ID',$order_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function generateOrderID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>