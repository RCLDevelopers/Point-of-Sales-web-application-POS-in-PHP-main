<?php require_once('include/session.php') ?>
<?php require_once('include/functions/customer.php')?>
<?php

$customer_ID = $_REQUEST["id"];

$getcustomers= getcustomerByID($customer_ID);
if ($getcustomers !=0) {
foreach ($getcustomers as $getcustomer ) { 
	echo $getcustomer->phone;
}
}
?>