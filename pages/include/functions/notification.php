<?php
include('config.php');
function getNotificationproductExpiringSoon(){
try{
global $conn;
$status='Active';
$date = date('d-m-Y');  
$qty=1;  
$inc_date = date("Y-m-d", strtotime("+6 month", strtotime($date))); 
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE expire_date<=:expire_date AND qty>=:qty AND status=:status LIMIT 4");
$stmt->bindValue(':expire_date',$inc_date);
$stmt->bindValue(':qty',$qty);
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
function getTotalproductExpiringSoon(){
try{
global $conn;
$status='Active';
$date = date('d-m-Y');  
$qty=1;  
$inc_date = date("Y-m-d", strtotime("+6 month", strtotime($date))); 
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE expire_date<=:expire_date AND qty>=:qty AND status=:status");
$stmt->bindValue(':expire_date',$inc_date);
$stmt->bindValue(':qty',$qty);
$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $n;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getNotificationproductOutOfStock(){
try{
global $conn;
$status='Available';
$quantity = "10"; 
$stmt = $conn->prepare("SELECT * FROM product WHERE quantity<=:quantity AND status=:status LIMIT 4");
$stmt->bindValue(':quantity',$quantity);
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
function getNotificationPendingOrders(){
try{
global $conn;
$status='Pending';
$stmt = $conn->prepare("SELECT * FROM customer_order WHERE status=:status LIMIT 4");
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
function getTotalproductOutOfStock(){
try{
global $conn;
$status='Available';
$quantity = "10"; 
$stmt = $conn->prepare("SELECT * FROM product WHERE quantity<=:quantity AND status=:status ");
$stmt->bindValue(':quantity',$quantity);
$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $n;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function countPendingOrders(){
try{
global $conn;
$status='Pending';
$stmt = $conn->prepare("SELECT * FROM customer_order WHERE status=:status ");
$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $n;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
?>