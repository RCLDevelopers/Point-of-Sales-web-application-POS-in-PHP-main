<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/sales.php');
if (isset($_GET['guidID'])) {
 $sales_ID=$_GET['guidID'];
 $dec=deactivateSalesByID($sales_ID);
 echo $dec=deactivateSalesDetailsByID($sales_ID);
 if ($dec =='success') {
     $getNames=getSalesByID($sales_ID);
 	if ($getNames !=0) {
 	foreach ($getNames as $getName) {
 	$activity='Deleted sale with Invoice no '.$getName->invoice_no ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Sale deleted Successfully") </script>';
                 
    echo '<script> window.location="manage_sales" </script>';
 	 }
 	}else{
 	 echo '<script> window.location="manage_sales" </script>';
 	}
 }else{
 echo '<script> alert("Sorry! something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_sales" </script>';
 }
}
?>