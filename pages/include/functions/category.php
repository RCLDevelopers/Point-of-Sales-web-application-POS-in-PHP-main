<?php
include('config.php');
function createCategory($category_name){
try{
$category_ID=generateCategoryID();
global $conn;
$sql = "INSERT INTO `category`(`category_name`,`category_ID`)VALUES (:category_name,:category_ID)";
$query = $conn -> prepare($sql);
$query->bindParam(':category_name',$category_name);
$query->bindParam(':category_ID',$category_ID);
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
function getCategoryAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM category WHERE status=:status ORDER BY id DESC");
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
function getCategoryByID($category_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM category WHERE category_ID=:category_ID ");
$stmt->bindValue(':category_ID',$category_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
	foreach ($rows as $row ) {
		return $row->category_name;
	}

}else{
return ' ';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifCategoryExist($category){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM category WHERE category_name=:category_name AND status=:status ");
$stmt->bindValue(':category_name',$category);
$stmt->bindValue(':status',$status);
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
function deletePurchaseHistorys($purchase_ID){
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
function deactivateCategory($category_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE category SET status=:status WHERE category_ID=:category_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':category_ID',$category_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function generateCategoryID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>