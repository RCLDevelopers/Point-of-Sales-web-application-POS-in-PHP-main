<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/user.php');
if (isset($_GET['guidID'])) {
 $user_ID=$_GET['guidID'];
 $dec=deactivateUser($user_ID);
 if ($dec =='success') {
     $getNames=getUserByID($user_ID);
 	if ($getNames !=0) {
 	foreach ($getNames as $getName) {
 	$activity='Activated User with Name '.$getName->name ;
 	 createActivity_logs($activity);
 	echo '<script> alert("User deactivated Successfully") </script>';
                 
    echo '<script> window.location="manage_user" </script>';
 	 }
 	}else{
 	 echo '<script> window.location="manage_user" </script>';
 	}
 }else{
 echo '<script> alert("Sorry! something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_user" </script>';
 }
}
?>