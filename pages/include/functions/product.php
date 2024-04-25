<?php
include('config.php');
function createproductWithoutImage($productID,$product_name,$supplier_id,$category,$quantity,$actual_price,$selling_price){
try{
//$productID=generateproductID();
global $conn;
$sql = "INSERT INTO `product`(`product_ID`,`product_name`,`supplier_id`,`category`,`quantity`,`actual_price`,`selling_price`,`stock_in`)VALUES (:product_ID,:product_name,:supplier_id,:category,:quantity,:actual_price,:selling_price,:stock_in)";
$query = $conn -> prepare($sql);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':supplier_id',$supplier_id);
$query->bindParam(':category',$category);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':actual_price',$actual_price);
$query->bindParam(':selling_price',$selling_price);
$query->bindParam(':stock_in',$quantity);
$query->bindParam(':product_ID',$productID);
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
function createproductWithImage($productID,$product_name,$supplier_id,$category,$quantity,$actual_price,$selling_price,$image){
try{
//$productID=generateproductID();
global $conn;
$sql = "INSERT INTO `product`(`product_ID`,`product_name`,`supplier_id`,`category`,`quantity`,`actual_price`,`selling_price`,`image`,`stock_in`)VALUES (:product_ID,:product_name,:supplier_id,:category,:quantity,:actual_price,:selling_price,:image,:stock_in)";
$query = $conn -> prepare($sql);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':supplier_id',$supplier_id);
$query->bindParam(':category',$category);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':actual_price',$actual_price);
$query->bindParam(':selling_price',$selling_price);
$query->bindParam(':stock_in',$quantity);
$query->bindParam(':image',$image);
$query->bindParam(':product_ID',$productID);
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
function updateproductWithoutIamage($product_ID,$product_name,$supplier_id,$category,$quantity,$actual_price,$selling_price,$status){
try{
global $conn;
$sql = "UPDATE product SET product_name=:product_name, supplier_id=:supplier_id , category=:category,quantity=:quantity,actual_price=:actual_price,selling_price=:selling_price ,status=:status,stock_in=:stock_in WHERE product_ID=:product_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':supplier_id',$supplier_id);
$query->bindParam(':category',$category);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':actual_price',$actual_price);
$query->bindParam(':selling_price',$selling_price);
$query->bindParam(':stock_in',$quantity);
$query->bindParam(':status',$status);
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
function updateproductWithImage($product_ID,$product_name,$supplier_id,$category,$quantity,$actual_price,$selling_price,$image,$status){
try{
global $conn;
$sql = "UPDATE product SET product_name=:product_name, supplier_id=:supplier_id , category=:category,quantity=:quantity,actual_price=:actual_price,selling_price=:selling_price,image=:image ,status=:status,stock_in=:stock_in WHERE product_ID=:product_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':supplier_id',$supplier_id);
$query->bindParam(':category',$category);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':actual_price',$actual_price);
$query->bindParam(':selling_price',$selling_price);
$query->bindParam(':image',$image);
$query->bindParam(':status',$status);
$query->bindParam(':stock_in',$quantity);
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
function getproductAll(){
try{
global $conn;
$status='Available';
$status_Una='Unavailable';
$stmt = $conn->prepare("SELECT * FROM product WHERE  status=:status || status=:status_Una ORDER BY id DESC");
$stmt->bindValue(':status',$status);
$stmt->bindValue(':status_Una',$status_Una);
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
function getproductByID($product_ID){
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
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getproductFormPurchaseByBatchID($product_ID){
try{
global $conn;
$status='Available';
$status_Una='Unavailable';
$qty=0;
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE product_ID=:product_ID AND qty >:qty");
$stmt->bindValue(':product_ID',$product_ID);
$stmt->bindValue(':qty',$qty);
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
function getproductByPurchaseBatchID($medID,$batch){
try{
global $conn;
$status='Available';
$status_Una='Unavailable';
$qty=0;
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE batch_id=:batch_id AND product_ID=:product_ID ");
$stmt->bindValue(':batch_id',$batch);
$stmt->bindValue(':product_ID',$medID);
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
function getproductBySupplierID($supplier_id){
try{
global $conn;
$status='Available';
$status_Una='Unavailable';
$stmt = $conn->prepare("SELECT * FROM product WHERE supplier_id=:supplier_id AND status=:status ");
$stmt->bindValue(':supplier_id',$supplier_id);
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
function checkAvailableQuantityproductByID($product_ID){
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
	return $row->quantity;
}
}else{
return 0;
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSoldQuantity($product_ID){
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
function getQuantity($product_ID){
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
	return $row->quantity;
}
}else{
return 0;
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}

function getproductExpiringSoon(){
try{
global $conn;
$status='Active';
$date = date('d-m-Y');  
$qty=1;  
$inc_date = date("Y-m-d", strtotime("+6 month", strtotime($date))); 
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE expire_date<=:expire_date AND qty>=:qty AND status=:status ");
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
function getExpiredproduct(){
try{
global $conn;
$status='Active';
$date = date('d-m-Y');  
$qty=1;    
$inc_date = date("Y-m-d", strtotime($date)); 
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE expire_date<:expire_date AND qty>=:qty AND status=:status ");
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
function getproductOutOfStock(){
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
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkIfproductExist($productName){
try{
global $conn;
$status='Available';
$status_Una='Unavailable';
$stmt = $conn->prepare("SELECT * FROM product WHERE product_name=:product_name AND status=:status || status=:status_Una ");
$stmt->bindValue(':product_name',$productName);
$stmt->bindValue(':status',$status);
$stmt->bindValue(':status_Una',$status_Una);
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
function deactivateproduct($product_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE product SET status=:status WHERE product_ID=:product_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
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
function generateproductID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}

function registerStockBF($purchase_ID,$supplier_ID,$invoice_no,$purchase_date,$purchase_details,$total_discount,$total_amount,$paid_amount,$due_amount,$product_ID,$quantity,$supplier_price,$discount,$batch_id){
$create=createPurchase($purchase_ID,$supplier_ID,$invoice_no,$purchase_date,$purchase_details,$total_discount,$total_amount,$paid_amount,$due_amount);
if ($create =='success') {


$createDetails= createPurchaseHistory($purchase_ID,$product_ID,$supplier_ID,$quantity,$supplier_price,$discount,$total_amount,$batch_id);

if ($createDetails =='success') {
	return 'success';
}else{
 return 'failed';
}
}
}

?>