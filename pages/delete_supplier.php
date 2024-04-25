<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/suppliers.php');
if (isset($_GET['guidID'])) {
 $supplier_ID=$_GET['guidID'];
 $dec=deactivateSupplier($supplier_ID);
 if ($dec =='success') {
     $getNames=getSuppliersByID($supplier_ID);
 	if ($getNames !=0) {
 		foreach ($getNames as $getName ) {
 	$activity='Deleted Supplier with Name '.$getName->supplier_name ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Supplier deleted Successfully") </script>';
                 
     echo '<script> window.location="manage_suppliers" </script>';
 		}
 	}else{
 	echo '<script> window.location="manage_suppliers" </script>';
 	}
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_suppliers" </script>';
 }
}
?>