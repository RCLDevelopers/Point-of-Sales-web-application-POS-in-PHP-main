<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/branch.php');
if (isset($_GET['guidID'])) {
 $branch_ID=$_GET['guidID'];
 $dec=deactivatebranch($branch_ID);
 if ($dec =='success') {
 	$getNames=getbranchByID($branch_ID);
 	$activity='Deleted branch with Name '.$getNames ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Branch deactivated Successfully") </script>';
                 
     echo '<script> window.location="branch" </script>';
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="branch" </script>';
 }
}
?>