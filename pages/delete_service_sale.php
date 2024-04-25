<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/sales.php');
if (isset($_GET['guidID'])) {
 $sales_ID=$_GET['guidID'];
 $dec=deactivateServiceSalesByID($sales_ID);
 echo $dec=deactivateServiceSalesDetailsByID($sales_ID);
 if ($dec =='success') {
     $getNames=getServiceSalesByID($sales_ID);
 	if ($getNames !=0) {
 	foreach ($getNames as $getName) {
 	$activity='Deleted sale with Invoice no '.$getName->invoice_no ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Sale deleted Successfully") </script>';
                 
    echo '<script> window.location="manage_sales_service" </script>';
 	 }
 	}else{
 	 echo '<script> window.location="manage_sales_service" </script>';
 	}
 }else{
 echo '<script> alert("Sorry! something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_sales_service" </script>';
 }
}
?>