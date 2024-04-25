<?php
include('config.php');
function createBranch($branch_name){
try{
$branch_ID=generatebranchID();
global $conn;
$sql = "INSERT INTO `branch`(`branch_name`,`branch_ID`)VALUES (:branch_name,:branch_ID)";
$query = $conn -> prepare($sql);
$query->bindParam(':branch_name',$branch_name);
$query->bindParam(':branch_ID',$branch_ID);
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
function getbranchAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM branch WHERE status=:status ORDER BY id DESC");
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
function getBranchByID($branch_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM branch WHERE branch_ID=:branch_ID ");
$stmt->bindValue(':branch_ID',$branch_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
	foreach ($rows as $row ) {
		return $row->branch_name;
	}

}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifbranchExist($branch){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM branch WHERE branch_name=:branch_name AND status=:status ");
$stmt->bindValue(':branch_name',$branch);
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
function deactivatebranch($branch_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE branch SET status=:status WHERE branch_ID=:branch_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':branch_ID',$branch_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function generatebranchID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>