<?php require_once('include/session.php') ?>
<?php
require_once('include/functions/expenses.php');
if (isset($_GET['guidID'])) {
 $expense_ID=$_GET['guidID'];
 $dec=deactivateExpense($expense_ID);
 if ($dec =='success') {
 	$getNames=getExpensesByID($expense_ID);
 	if ($getNames !=0) {
 		foreach ($getNames as $getName ) {
 		 $activity='Deleted Expense with Name '.$getName->expense ;
 	 createActivity_logs($activity);
 	echo '<script> alert("Expense deleted Successfully") </script>';
                 
     echo '<script> window.location="manage_expenses" </script>';
 		}
 	}else{
 	echo '<script> window.location="manage_expenses" </script>';
 	}
 	
 }else{
 echo '<script> alert("Sorry!something went wrong.Please try agin") </script>';
                 
  echo '<script> window.location="manage_expenses" </script>';
 }
}
?>