<?php
include('config.php');

function getRolePrivilegesByRoleAndPrivilegesName($role_ID,$privilege){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT role_privilege.role_ID, role_privilege.privilege_ID, roles.role_ID,roles.role, privileges.id,privileges.privilege FROM role_privilege INNER JOIN roles ON role_privilege.role_ID=roles.role_ID INNER JOIN privileges ON privileges.id=role_privilege.privilege_ID WHERE role_privilege.role_ID=:role_ID AND privileges.privilege=:privilege_ID ");
$stmt->bindValue(':role_ID',$role_ID);
$stmt->bindValue(':privilege_ID',$privilege);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
foreach ($rows as $row) {
	return 1;
}
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}


?>