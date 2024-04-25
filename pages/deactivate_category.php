<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/category.php');
if (isset($_GET['guidID'])) {
 $category_ID=$_GET['guidID'];
 $dec=deactivateCategory($category_ID);
 if ($dec =='success') {
 	$getNames=getCategoryByID($category_ID);
 	$activity='Deleted Category with Name '.$getNames ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Category deactivated Successfully") </script>';
                 
     echo '<script> window.location="category" </script>';
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="category" </script>';
 }
}
?>