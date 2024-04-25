<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/purchase.php');
if (isset($_GET['guidID'])) {
 $purchase_ID=$_GET['guidID'];
 $dec=deactivatePurchase($purchase_ID);
 echo $dec=deactivatePurchaseHistory($purchase_ID);
 if ($dec =='success') {
     $getNames=getPurchaseByID($purchase_ID);
 	if ($getNames !=0) {
 	foreach ($getNames as $getName) {
 	$activity='Deleted Purchase with Invoice no '.$getName->invoice_no ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Purchase deleted Successfully") </script>';
                 
    echo '<script> window.location="manage_purchase" </script>';
 	 }
 	}else{
 	 echo '<script> window.location="manage_purchase" </script>';
 	}
 }else{
 echo '<script> alert("Sorry! something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_purchase" </script>';
 }
}
?>