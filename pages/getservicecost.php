<?php require_once('include/session.php') ?>
<?php require_once('include/functions/service.php')?>
<?php

$service_ID = $_POST['id'];
$services=getServiceByID($service_ID);
foreach ($services as $service ) {
	$cost=$service->cost;
	 echo json_encode(array("cost"=>$cost));

}
 
?>