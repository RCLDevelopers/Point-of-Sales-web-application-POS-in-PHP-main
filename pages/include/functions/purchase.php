<?php
include('config.php');
function createPurchase($purchase_ID,$supplier_ID,$invoice_no,$purchase_date,$purchase_details,$total_discount,$gtotal_amount,$paid_amount,$due_amount){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `purchase`(`purchase_ID`,`supplier_ID`,`invoice_no`,`purchase_date`,`purchase_details`,`total_discount`,`gtotal_amount`,`amount_paid`,`amount_due`)VALUES (:purchase_ID,:supplier_ID,:invoice_no,:purchase_date,:purchase_details,:total_discount,:gtotal_amount,:amount_paid,:amount_due)";
$query = $conn -> prepare($sql);
$query->bindParam(':purchase_ID',$purchase_ID);
$query->bindParam(':supplier_ID',$supplier_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':purchase_date',$purchase_date);
$query->bindParam(':purchase_details',$purchase_details);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':gtotal_amount',$gtotal_amount);
$query->bindParam(':amount_paid',$paid_amount);
$query->bindParam(':amount_due',$due_amount);
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
function updatePurchase($purchase_ID,$supplier_ID,$invoice_no,$purchase_date,$purchase_details,$total_discount,$gtotal_amount,$paid_amount,$due_amount){
try{
global $conn;
$sql = "UPDATE purchase SET  supplier_ID =:supplier_ID, invoice_no=:invoice_no , purchase_date=:purchase_date , purchase_details=:purchase_details,total_discount=:total_discount,gtotal_amount=:gtotal_amount, amount_paid=:amount_paid,amount_due=:amount_due WHERE purchase_ID=:purchase_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':purchase_ID',$purchase_ID);
$query->bindParam(':supplier_ID',$supplier_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':purchase_date',$purchase_date);
$query->bindParam(':purchase_details',$purchase_details);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':gtotal_amount',$gtotal_amount);
$query->bindParam(':amount_due',$due_amount);
$query->bindParam(':amount_paid',$paid_amount);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createPurchaseHistory($purchase_ID,$product_ID,$supplier_ID,$qty,$supplier_price,$discount,$total_amount,$batch_id){
try{
$purchase_history_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `purchase_history`(`purchase_history_ID`,`purchase_ID`,`product_ID`,`supplier_ID`,`qty`,`supplier_price`,`discount`,`total_amount`,`batch_id`)VALUES (:purchase_history_ID,:purchase_ID,:product_ID,:supplier_ID,:qty,:supplier_price,:discount,:total_amount,:batch_id)";
$query = $conn -> prepare($sql);
$query->bindParam(':purchase_history_ID',$purchase_history_ID);
$query->bindParam(':purchase_ID',$purchase_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':supplier_ID',$supplier_ID);
$query->bindParam(':qty',$qty);
$query->bindParam(':supplier_price',$supplier_price);
$query->bindParam(':discount',$discount);
$query->bindParam(':total_amount',$total_amount);
$query->bindParam(':batch_id',$batch_id);
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
function createPurchaseReturn($purchase_return_ID,$purchase_ID,$supplier_ID,$invoice_no,$total_deduction,$net_return){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `purchase_return`(`purchase_return_ID`,`purchase_ID`,`supplier_ID`,`invoice_no`,`total_deduction`,`net_return`)VALUES (:purchase_return_ID,:purchase_ID,:supplier_ID,:invoice_no,:total_deduction,:net_return)";
$query = $conn -> prepare($sql);
$query->bindParam(':purchase_return_ID',$purchase_return_ID);
$query->bindParam(':purchase_ID',$purchase_ID);
$query->bindParam(':supplier_ID',$supplier_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':total_deduction',$total_deduction);
$query->bindParam(':net_return',$net_return);
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
function createPurchaseReturnDetails($purchase_ID,$purchase_return_ID,$product_ID,$supplier_price,$return_quantity,$deduction_percentage,$total_deduction,$total_return){
try{
$purchase_return_details_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `purchase_return_details`(`purchase_return_details_ID`,`purchase_return_ID`,`product_ID`,`supplier_price`,`return_quantity`,`deduction_percentage`,`total_deduction`,`net_return`)VALUES (:purchase_return_details_ID,:purchase_return_ID,:product_ID,:supplier_price,:return_quantity,:deduction_percentage,:total_deduction,:net_return)";
$query = $conn -> prepare($sql);
$query->bindParam(':purchase_return_ID',$purchase_return_ID);
$query->bindParam(':purchase_return_details_ID',$purchase_return_details_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':supplier_price',$supplier_price);
$query->bindParam(':return_quantity',$return_quantity);
$query->bindParam(':deduction_percentage',$deduction_percentage);
$query->bindParam(':total_deduction',$total_deduction);
$query->bindParam(':net_return',$total_return);
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

function createTempPurchaseReturnDetails($purchase_ID,$purchase_return_ID,$product_name,$product_ID,$return_quantity,$deduction_percentage,$total_deduction,$quantity,$supplier_price,$batch_id){
try{
//$purchase_return_details_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `temp_purchase_return_table`(`purchase_ID`,`purchase_return_ID`,`product_ID`,`return_quantity`,`deduction_percentage`,`total_deduction`,`quantity`,`product_name`,`supplier_price`,`batch_id`)VALUES (:purchase_ID,:purchase_return_ID,:product_ID,:return_quantity,:deduction_percentage,:total_deduction,:quantity,:product_name,:supplier_price,:batch_id)";
$query = $conn -> prepare($sql);
$query->bindParam(':purchase_return_ID',$purchase_return_ID);
$query->bindParam(':purchase_ID',$purchase_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':return_quantity',$return_quantity);
$query->bindParam(':deduction_percentage',$deduction_percentage);
$query->bindParam(':total_deduction',$total_deduction);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':supplier_price',$supplier_price);
$query->bindParam(':batch_id',$batch_id);
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
function createTempPurchaseHistory($purchase_ID,$product_ID,$product_name,$supplier_ID,$qty,$supplier_price,$discount,$total_amount,$batch_id){
try{
//$purchase_history_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `temp_purchase_table`(`purchase_ID`,`product_ID`,`supplier_ID`,`qty`,`supplier_price`,`discount`,`total_amount`,`batch_id`,`product_name`)VALUES (:purchase_ID,:product_ID,:supplier_ID,:qty,:supplier_price,:discount,:total_amount,:batch_id,:product_name)";
$query = $conn -> prepare($sql);
$query->bindParam(':batch_id',$batch_id);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':purchase_ID',$purchase_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':supplier_ID',$supplier_ID);
$query->bindParam(':qty',$qty);
$query->bindParam(':supplier_price',$supplier_price);
$query->bindParam(':discount',$discount);
$query->bindParam(':total_amount',$total_amount);
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
function updateQuantityAfterPurchase($product_ID,$new_quantity){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE product SET  quantity =:quantity WHERE product_ID=:product_ID ";
$query = $conn -> prepare($sql);
$query->bindParam(':quantity',$new_quantity);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function checkifPurchaseproductalredySelected($product_ID,$purchase_ID,$batch_id){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_purchase_table WHERE product_ID=:product_ID AND  purchase_ID=:purchase_ID AND batch_id=:batch_id ");
$stmt->bindValue(':product_ID',$product_ID);
$stmt->bindParam(':purchase_ID',$purchase_ID);
$stmt->bindParam(':batch_id',$batch_id);
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
function getPurchaseALL(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase WHERE status=:status ORDER BY id DESC");
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
function getPurchaseReturnALL(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase_return WHERE status=:status ORDER BY id DESC");
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
function updateStockIN($product_ID,$new_stockin){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE product SET  stock_in =:stock_in WHERE product_ID=:product_ID ";
$query = $conn -> prepare($sql);
$query->bindParam(':stock_in',$new_stockin);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateStockOUT($product_ID,$new_stockOUT){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE product SET  sold_quantity =:sold_quantity WHERE product_ID=:product_ID ";
$query = $conn -> prepare($sql);
$query->bindParam(':sold_quantity',$new_stockOUT);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getStockIN($product_ID){
try{
global $conn;
$status='Available';
$status_Una='Unavailable';
$stmt = $conn->prepare("SELECT * FROM product WHERE product_ID=:product_ID ");
$stmt->bindValue(':product_ID',$product_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
foreach ($rows as $row) {
	return $row->stock_in;
}
}else{
return 0;
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getStockOUT($product_ID){
try{
global $conn;
$status='Available';
$status_Una='Unavailable';
$stmt = $conn->prepare("SELECT * FROM product WHERE product_ID=:product_ID ");
$stmt->bindValue(':product_ID',$product_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
foreach ($rows as $row) {
	return $row->sold_quantity;
}
}else{
return 0;
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getPurchaseReturnByID($purchase_return_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase_return WHERE purchase_return_ID=:purchase_return_ID ");
$stmt->bindValue(':purchase_return_ID',$purchase_return_ID);
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
function updatePurchaseAfterPurchaseReturnByBatch($product_ID,$batch,$return_quantity){
try{
//$purchase_ID=generatePurchaseID();
	$qty=getpurchaseQuantityForReturnByBatch($product_ID,$batch);
	$quantity=$qty - $return_quantity;
global $conn;
$sql = "UPDATE purchase_history SET  qty =:qty WHERE product_ID=:product_ID AND batch_id=:batch_id  ";
$query = $conn -> prepare($sql);
$query->bindParam(':qty',$quantity);
$query->bindParam(':batch_id',$batch);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getpurchaseQuantityForReturnByBatch($product_ID,$batch){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE product_ID=:product_ID AND  batch_id=:batch_id");
$stmt->bindValue(':product_ID',$product_ID);
$stmt->bindParam(':batch_id',$batch);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
	foreach ($rows as $row) {
		return $row->qty;
	}
//return $rows;
}else{
return 0;
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getPurchaseReturnDetailByID($purchase_return_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase_return_details WHERE purchase_return_ID=:purchase_return_ID ");
$stmt->bindValue(':purchase_return_ID',$purchase_return_ID);
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
function getTempPurchaseReturnDetailByReturnID($purchase_return_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_purchase_return_table WHERE purchase_return_ID=:purchase_return_ID ");
$stmt->bindValue(':purchase_return_ID',$purchase_return_ID);
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
function updateTempPurchaseReturn($id,$purchase_return_ID,$return_quantity,$deduction_percentage,$total_deduction,$total_return){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE temp_purchase_return_table SET  return_quantity =:return_quantity, deduction_percentage=:deduction_percentage,total_deduction=:total_deduction,total_return=:total_return WHERE id=:id AND purchase_return_ID=:purchase_return_ID ";
$query = $conn -> prepare($sql);
$query->bindParam(':return_quantity',$return_quantity);
$query->bindParam(':deduction_percentage',$deduction_percentage);
$query->bindParam(':total_deduction',$total_deduction);
$query->bindParam(':total_return',$total_return);
$query->bindParam(':purchase_return_ID',$purchase_return_ID);
$query->bindParam(':id',$id);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getTempPurchaseReturnDetailByID($id){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_purchase_return_table WHERE id=:id ");
$stmt->bindValue(':id',$id);
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
function getPurchaseByID($purchase_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase WHERE purchase_ID=:purchase_ID ");
$stmt->bindValue(':purchase_ID',$purchase_ID);
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
function getPurchaseHistoryByPurchaseID($purchase_ID){
try{
global $conn;
$status='Inactive';
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE purchase_ID=:purchase_ID ");
$stmt->bindValue(':purchase_ID',$purchase_ID);
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
function checkifTempPurchaseTableIsAlreadyUpdatedWithPurchaseDetails($purchase_ID,$supplier_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_purchase_table WHERE purchase_ID=:purchase_ID AND supplier_id=:supplier_id");
$stmt->bindValue(':purchase_ID',$purchase_ID);
$stmt->bindValue(':supplier_id',$supplier_ID);
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
function getTempPurchaseHistoryByPurchaseID($purchase_ID,$supplier_ID){
try{
global $conn;
$status='Inactive';
$stmt = $conn->prepare("SELECT * FROM temp_purchase_table WHERE purchase_ID=:purchase_ID AND supplier_id=:supplier_id");
$stmt->bindValue(':supplier_id',$supplier_ID);
$stmt->bindValue(':purchase_ID',$purchase_ID);
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
function checkifPurchaseReturnTempTablealredyExist($purchase_return_ID,$purchase_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_purchase_return_table WHERE purchase_return_ID=:purchase_return_ID AND purchase_ID=:purchase_ID");
$stmt->bindValue(':purchase_return_ID',$purchase_return_ID);
$stmt->bindValue(':purchase_ID',$purchase_ID);
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
function deactivatePurchase($purchase_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE purchase SET status=:status WHERE purchase_ID=:purchase_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':purchase_ID',$purchase_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function deactivatePurchaseHistory($purchase_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE purchase_history SET status=:status WHERE purchase_ID=:purchase_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':purchase_ID',$purchase_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function deletePurchaseHistory($purchase_ID){
try{
global $conn;
$sql = "UPDATE purchase_history SET status=:status WHERE product_ID=:product_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':product_ID',$product_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function deleteTempPurchaseTableByID($id,$purchase_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_purchase_table WHERE id=:id AND purchase_ID=:purchase_ID");
$count->bindParam(':id',$id);
$count->bindParam(':purchase_ID',$purchase_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteTempPurchaseReturnTableByID($purchase_return_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_purchase_return_table WHERE purchase_return_ID=:purchase_return_ID");
$count->bindParam(':purchase_return_ID',$purchase_return_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deletePurchaseHistoryByPurchaseID($purchase_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM purchase_history WHERE purchase_ID=:purchase_ID ");
$count->bindParam(':purchase_ID',$purchase_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteTempPurchaseTableByPurchaseID($purchase_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_purchase_table WHERE purchase_ID=:purchase_ID ");
$count->bindParam(':purchase_ID',$purchase_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function generatePurchaseID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
function generatePurchaseReturnID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>