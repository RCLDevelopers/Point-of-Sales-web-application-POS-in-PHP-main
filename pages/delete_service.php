<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/service.php');
if (isset($_GET['guidID'])) {
 $service_ID=$_GET['guidID'];
 $dec=deactivateservice($service_ID);
 if ($dec =='success') {
 	$getNames=getServiceByID($service_ID);
 	if ($getNames !=0) {
 		foreach ($getNames as $getName ) {
 		 $activity='Deleted Service with Name '.$getName->service_name ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Service deleted Successfully") </script>';
                 
     echo '<script> window.location="manage_service" </script>';
 		}
 	}else{
 	echo '<script> window.location="manage_service" </script>';
 	}
 	
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_service" </script>';
 }
}
?>