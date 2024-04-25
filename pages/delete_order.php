<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/orders.php');
if (isset($_GET['guidID'])) {
 $order_ID=$_GET['guidID'];
 $dec=deleteorder($order_ID);
 if ($dec =='success') {
 	
 		
 	echo '<script> alert("order deleted Successfully") </script>';
                 
     echo '<script> window.location="manage_orders" </script>';
 		
 	
 	
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_orders" </script>';
 }
}
?>