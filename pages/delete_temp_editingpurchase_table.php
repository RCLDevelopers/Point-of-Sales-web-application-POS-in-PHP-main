<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/purchase.php');
if (isset($_GET['id'])) {
$id=$_GET['id'];
 $purchase_ID=$_GET['purchaseID'];
  $invoice_no=$_GET['invoice_no'];
  $supplier_ID=$_GET['supplier'];
  $purchase_details=$_GET['det'];
  $date=$_GET['date'];
 $dec=deleteTempPurchaseTableByID($id,$purchase_ID);
 if ($dec =='success') {
 	
 	//echo '<script> alert("Role deactivated Successfully") </script>';
                 
   echo '<script> window.location="edit_purchase?purchaseID='.$purchase_ID.'&invoice_no='.$invoice_no.'&date='.$date.'&supplier='.$supplier_ID.'&det='.$purchase_details.'" </script>';
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_purchase" </script>';
 }
}
?>