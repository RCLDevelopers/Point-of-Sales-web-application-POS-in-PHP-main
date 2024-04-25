<?php
function createExpenses($expense,$amount,$expense_date,$description){
try{
$expense_ID=generateExpensesID();
global $conn;
$sql = "INSERT INTO `expenses`(`expense_ID`,`expense`,`amount`,`expense_date`,`description`)VALUES (:expense_ID,:expense,:amount,:expense_date,:description)";
$query = $conn -> prepare($sql);
$query->bindParam(':expense_ID',$expense_ID);
$query->bindParam(':expense',$expense);
$query->bindParam(':amount',$amount);
$query->bindParam(':expense_date',$expense_date);
$query->bindParam(':description',$description);
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
function updateExpenses($expense_ID,$expense,$amount,$expense_date,$description){
try{
//$expensesID=generateExpensesID();
global $conn;
$sql = "UPDATE expenses SET  expense =:expense, amount=:amount , expense_date=:expense_date , description=:description WHERE expense_ID=:expense_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':expense_ID',$expense_ID);
$query->bindParam(':expense',$expense);
$query->bindParam(':amount',$amount);
$query->bindParam(':expense_date',$expense_date);
$query->bindParam(':description',$description);
if($query ->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getExpensessAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM expenses WHERE  status=:status ORDER BY id DESC");
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
function getExpensesByID($expence_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM expenses WHERE expense_ID=:expense_ID ");
$stmt->bindValue(':expense_ID',$expence_ID);
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
function deactivateExpense($expense_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE expenses SET status=:status WHERE expense_ID=:expense_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':expense_ID',$expense_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function generateExpensesID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>