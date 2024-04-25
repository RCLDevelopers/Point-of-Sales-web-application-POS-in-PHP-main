<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/product.php');
if (isset($_GET['guidID'])) {
 $product_ID=$_GET['guidID'];
 $dec=deactivateproduct($product_ID);
 if ($dec =='success') {
     $getNames=getproductByID($product_ID);
 	if ($getNames !=0) {
 		foreach ($getNames as $getName ) {
 	$activity='Deleted product with Name '.$getName->product_name ;
 	 createActivity_logs($activity);
 	echo '<script> alert("product deleted Successfully") </script>';
                 
     echo '<script> window.location="manage_product" </script>';
 		}
 	}else{
 	echo '<script> window.location="manage_product" </script>';
 	}
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_product" </script>';
 }
}
?>