<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/user.php');
if (isset($_GET['guidID'])) {
 $role_ID=$_GET['guidID'];
 $dec=deactivateRole($role_ID);
 if ($dec =='success') {
 	$getNames=getRolesByID($role_ID);
 	$activity='Deleted Role with Name '.$getNames ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Role deactivated Successfully") </script>';
                 
     echo '<script> window.location="role" </script>';
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="role" </script>';
 }
}
?>