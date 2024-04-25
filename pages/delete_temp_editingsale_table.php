<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/sales.php');
if (isset($_GET['id'])) {
$id=$_GET['id'];
 $sales_ID=$_GET['salesID'];
  $invoice_no=$_GET['invoice_no'];
  $customer_ID=$_GET['customer'];
  $sales_details=$_GET['det'];
  $date=$_GET['date'];
 $dec=deleteSalesTempTableDetailsByID($id,$sales_ID);
 if ($dec =='success') {
 	
 	//echo '<script> alert("Role deactivated Successfully") </script>';
                 
   echo '<script> window.location="edit_sale?salesID='.$sales_ID.'&invoice_no='.$invoice_no.'&date='.$date.'&customer='.$customer_ID.'&det='.$sales_details.'" </script>';
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="role" </script>';
 }
}
?>