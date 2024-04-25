<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/customer.php');
if (isset($_GET['guidID'])) {
 $customer_ID=$_GET['guidID'];
 $dec=deactivatecustomer($customer_ID);
 if ($dec =='success') {
 	$getNames=getcustomerByID($customer_ID);
 	if ($getNames !=0) {
 		foreach ($getNames as $getName ) {
 		 $activity='Deleted customer with Name '.$getName->customer_name ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Customer deleted Successfully") </script>';
                 
     echo '<script> window.location="manage_customers" </script>';
 		}
 	}else{
 	echo '<script> window.location="manage_customers" </script>';
 	}
 	
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_customers" </script>';
 }
}
?>