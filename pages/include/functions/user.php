<?php

include('config.php');
function createUser($name,$email,$role,$password,$phone,$image,$branch_ID){
try{
$userID=generateID();
global $conn;
$sql = "INSERT INTO `users`(`user_ID`,`name`,`email`,`role`,`password`,`phone`,`image`,`branch_ID`)VALUES (:user_ID,:name,:email,:role,:password,:phone,:image,:branch_ID)";
$query = $conn -> prepare($sql);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':role',$role);
$query->bindParam(':password',$password);
$query->bindParam(':phone',$phone);
$query->bindParam(':image',$image);
$query->bindParam(':user_ID',$userID);
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
function createUserWithoutImage($name,$email,$role,$password,$phone,$branch_ID){
try{
$userID=generateID();
global $conn;
$sql = "INSERT INTO `users`(`user_ID`,`name`,`email`,`role`,`password`,`phone`,`branch_ID`)VALUES (:user_ID,:name,:email,:role,:password,:phone,:branch_ID)";
$query = $conn -> prepare($sql);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':role',$role);
$query->bindParam(':password',$password);
$query->bindParam(':phone',$phone);
$query->bindParam(':user_ID',$userID);
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
function checkIfUserEmailalreadyExist($email){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM users WHERE email=:email AND status=:status");
$stmt->bindValue(':email',$email);
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
function updateWithImageUser($user_ID,$name,$email,$role,$phone,$image,$status){
try{
global $conn;
$sql = "UPDATE users SET name =:name, email
=:email, role=:role , phone=:phone,status=:status,image=:image WHERE user_ID=:user_ID";
$query= $conn->prepare($sql);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':role',$role);
$query->bindParam(':phone',$phone);
$query->bindParam(':image',$image);
$query->bindParam(':status',$status);
$query->bindParam(':user_ID',$user_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateWithoutImageUser($user_ID,$name,$email,$role,$phone,$status){
try{
global $conn;
$sql = "UPDATE users SET name =:name, email
=:email, role=:role , phone=:phone,status=:status WHERE user_ID=:user_ID";
$query = $conn->prepare($sql);
$query->bindParam(':name',$name);
$query->bindParam(':email',$email);
$query->bindParam(':role',$role);
$query->bindParam(':phone',$phone);
$query->bindParam(':status',$status);
$query->bindParam(':user_ID',$user_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateUserPassword($user_ID,$password){
try{
global $conn;
$sql = "UPDATE users SET password =:password WHERE user_ID=:user_ID";
$query = $conn->prepare($sql);
$query->bindParam(':password',$password);
$query->bindParam(':user_ID',$user_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getUserByID($userID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM users WHERE user_ID=:user_ID ");
$stmt->bindValue(':user_ID',$userID);
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
function getUsersAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM users ");
//$stmt->bindValue(':status',$status);
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
function deactivateUser($user_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE users SET status=:status WHERE user_ID=:user_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':user_ID',$user_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createRole($role){
try{
$roleID=generateID();
global $conn;
$sql = "INSERT INTO `roles`(`role`,`role_ID`)VALUES (:role,:role_ID)";
$query = $conn -> prepare($sql);
$query->bindParam(':role',$role);
$query->bindParam(':role_ID',$roleID);
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
function getRolesAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM roles WHERE status=:status ");
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
function getRolesByID($role_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM roles WHERE role_ID=:role_ID  ");
//$stmt->bindValue(':status',$status);
$stmt->bindValue(':role_ID',$role_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
	foreach ($rows as $row ) {
		return $row->role;
	}

}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifRoleExist($role){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM roles WHERE role=:role AND status=:status ");
$stmt->bindValue(':role',$role);
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
function deactivateRole($role_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE roles SET status=:status WHERE role_ID=:role_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':role_ID',$role_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createPrivileges($role,$privilege){
try{
$privilege_ID=generateID();
global $conn;
$check=checkifPrivileAndRoleExist($role,$privilege);
if ($check !=1) {
$sql = "INSERT INTO `privileges`(`role`,`privilege`)VALUES (:role,:privilege)";
$query = $conn -> prepare($sql);
$query->bindParam(':role',$role);
$query->bindParam(':privilege',$privilege);
$query->bindParam(':privilege_ID',$privilege_ID);
$query -> execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}else{
return "failed";	
}

}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createRole_Privileges($role_ID,$privilege_ID){
try{

global $conn;
//echo $update=checkifPrivilegeAndRoleExist($role_ID,$privilege_ID);

$sql = "INSERT INTO `role_privilege`(`role_ID`,`privilege_ID`)VALUES (:role_ID,:privilege_ID)";
$query = $conn-> prepare($sql);
$query->bindParam(':role_ID',$role_ID);
$query->bindParam(':privilege_ID',$privilege_ID);
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
function updatePrivileges($privilege_ID,$role,$privilege){
try{
global $conn;
$sql = "UPDATE privileges SET role=:role,privilege=:privilege, WHERE privilege_ID=:privilege_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':role',$role);
$query->bindParam(':privilege',$privilege);
$query->bindParam(':privilege_ID',$privilege_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getPrivilegesAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM privileges WHERE status=:status ");
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

function getRolePrivilegesByRoleAndPrivilegesID($role_ID,$privilege_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM role_privilege WHERE role_ID=:role_ID AND privilege_ID=:privilege_ID ");
$stmt->bindValue(':role_ID',$role_ID);
$stmt->bindValue(':privilege_ID',$privilege_ID);
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
function deletePreviousPrivilegis($role_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM role_privilege WHERE role_ID=:role_ID  ");
$count->bindParam(':role_ID',$role_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function checkifPrivilegeAndRoleExist($role_ID,$privilege_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM role_privilege WHERE role_ID=:role_ID AND privilege_ID=:privilege_ID  ");
$stmt->bindValue(':role_ID',$role_ID);
$stmt->bindValue(':privilege_ID',$privilege_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
echo $del=deletePreviousPrivilegis($role_ID,$privilege_ID);
if ($del =='success') {
	return 'save';
}else{
	return 'not save';
}
}else{
return 'save';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function deactivatePrivilege($privilege_ID){
try{
global $conn;
$status='Inactive';
$sql = "UPDATE privileges SET status=:status WHERE privilege_ID=:privilege_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':privilege_ID',$privilege_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function changePassword($password){
try{
global $conn;
$user_ID=$_SESSION['user_ID'];
$sql = "UPDATE users SET password=:password WHERE user_ID=:user_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':password',$password);
$query->bindParam(':user_ID',$user_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function generateID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}

?>