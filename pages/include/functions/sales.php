<?php
include('config.php');
function createSales($sales_ID,$customer_ID,$invoice_no,$total_discount,$total_amount,$paid_amount,$due_amount,$pay_status,$balance,$invoice_date,$details,$payment_method){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `sales`(`sales_ID`,`customer_ID`,`invoice_no`,`total_discount`,`total_amount`,`paid_amount`,`due_amount`,`pay_status`,`amount_balance`,`invoice_date`,`detail`,`payment_method`)VALUES (:sales_ID,:customer_ID,:invoice_no,:total_discount,:total_amount,:paid_amount,:due_amount,:pay_status,:amount_balance,:invoice_date,:detail,:payment_method)";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':total_amount',$total_amount);
$query->bindParam(':paid_amount',$paid_amount);
$query->bindParam(':due_amount',$due_amount);
$query->bindParam(':pay_status',$pay_status);
$query->bindParam(':amount_balance',$balance);
$query->bindParam(':invoice_date',$invoice_date);
$query->bindParam(':detail',$details);
$query->bindParam(':payment_method',$payment_method);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createServiceSales($sales_ID,$customer_ID,$invoice_no,$total_discount,$total_amount,$paid_amount,$due_amount,$pay_status,$balance,$invoice_date,$details,$payment_method){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "INSERT INTO `sales_service`(`sales_ID`,`customer_ID`,`invoice_no`,`total_discount`,`total_amount`,`paid_amount`,`due_amount`,`pay_status`,`amount_balance`,`invoice_date`,`detail`,`payment_method`)VALUES (:sales_ID,:customer_ID,:invoice_no,:total_discount,:total_amount,:paid_amount,:due_amount,:pay_status,:amount_balance,:invoice_date,:detail,:payment_method)";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':total_amount',$total_amount);
$query->bindParam(':paid_amount',$paid_amount);
$query->bindParam(':due_amount',$due_amount);
$query->bindParam(':pay_status',$pay_status);
$query->bindParam(':amount_balance',$balance);
$query->bindParam(':invoice_date',$invoice_date);
$query->bindParam(':detail',$details);
$query->bindParam(':payment_method',$payment_method);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateSales($sales_ID,$customer_ID,$invoice_no,$total_discount,$total_amount,$paid_amount,$due_amount,$pay_status,$balance,$invoice_date,$details,$payment_method){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE sales SET  customer_ID =:customer_ID, total_discount=:total_discount , total_amount=:total_amount,paid_amount=:paid_amount,due_amount=:due_amount,pay_status=:pay_status,amount_balance=:amount_balance,invoice_date=:invoice_date,detail=:detail, payment_method=:payment_method WHERE sales_ID=:sales_ID AND invoice_no=:invoice_no";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':total_amount',$total_amount);
$query->bindParam(':paid_amount',$paid_amount);
$query->bindParam(':due_amount',$due_amount);
$query->bindParam(':pay_status',$pay_status);
$query->bindParam(':amount_balance',$amount_balance);
$query->bindParam(':invoice_date',$invoice_date);
$query->bindParam(':detail',$details);
$query->bindParam(':payment_method',$payment_method);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateServiceSales($sales_ID,$customer_ID,$invoice_no,$total_discount,$total_amount,$paid_amount,$due_amount,$pay_status,$balance,$invoice_date,$details,$payment_method){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE sales_service SET  customer_ID =:customer_ID, total_discount=:total_discount , total_amount=:total_amount,paid_amount=:paid_amount,due_amount=:due_amount,pay_status=:pay_status,amount_balance=:amount_balance,invoice_date=:invoice_date,detail=:detail,payment_method=:payment_method WHERE sales_ID=:sales_ID AND invoice_no=:invoice_no";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':total_amount',$total_amount);
$query->bindParam(':paid_amount',$paid_amount);
$query->bindParam(':due_amount',$due_amount);
$query->bindParam(':pay_status',$pay_status);
$query->bindParam(':amount_balance',$amount_balance);
$query->bindParam(':invoice_date',$invoice_date);
$query->bindParam(':detail',$details);
$query->bindParam(':payment_method',$payment_method);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateQuantity($product_ID,$new_quantity,$soldQuantity){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE product SET  quantity =:quantity, sold_quantity=:sold_quantity WHERE product_ID=:product_ID ";
$query = $conn -> prepare($sql);
$query->bindParam(':quantity',$new_quantity);
$query->bindParam(':sold_quantity',$soldQuantity);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}

function updateTempSalesReturn($id,$sales_return_ID,$return_quantity,$percentage_deduction,$return_deduction,$total_return){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE temp_sales_return_table SET  return_quantity =:return_quantity, deduction_percentage=:deduction_percentage,return_deduction=:return_deduction,return_total=:return_total WHERE id=:id AND sales_return_ID=:sales_return_ID ";
$query = $conn -> prepare($sql);
$query->bindParam(':return_quantity',$return_quantity);
$query->bindParam(':deduction_percentage',$percentage_deduction);
$query->bindParam(':return_deduction',$return_deduction);
$query->bindParam(':return_total',$total_return);
$query->bindParam(':sales_return_ID',$sales_return_ID);
$query->bindParam(':id',$id);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateTempTableQty($product_ID,$sales_ID,$invoice_no,$quantity,$total_price){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE temp_sale_table SET  quantity =:quantity,total_price=:total_price WHERE product_ID=:product_ID AND sales_ID=:sales_ID AND invoice_no=:invoice_no ";
$query = $conn -> prepare($sql);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':total_price',$total_price);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateTempServiceTableQty($service_ID,$sales_ID,$invoice_no,$quantity,$total_price){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE temp_service_sale SET  quantity =:quantity,total_price=:total_price WHERE service_ID=:service_ID AND sales_ID=:sales_ID AND invoice_no=:invoice_no ";
$query = $conn -> prepare($sql);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':total_price',$total_price);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':service_ID',$service_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updatePurchaseAfterSalesReturnByBatch($product_ID,$batch,$return_quantity){
try{
//$purchase_ID=generatePurchaseID();
	$qty=getpurchaseQuantityByBatch($product_ID,$batch);
	$quantity=$return_quantity + $qty;
global $conn;
$sql = "UPDATE purchase_history SET  qty =:qty WHERE product_ID=:product_ID AND batch_id=:batch_id  ";
$query = $conn -> prepare($sql);
$query->bindParam(':qty',$quantity);
$query->bindParam(':batch_id',$batch);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updatePurchaseAfterSalesByBatch($product_ID,$batch,$sold_quantity){
try{
//$purchase_ID=generatePurchaseID();
	$qty=getpurchaseQuantityByBatch($product_ID,$batch);
	$newQuantity=$qty - $sold_quantity;
global $conn;
$sql = "UPDATE purchase_history SET  qty =:qty WHERE product_ID=:product_ID AND batch_id=:batch_id  ";
$query = $conn -> prepare($sql);
$query->bindParam(':qty',$newQuantity);
$query->bindParam(':batch_id',$batch);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success".$qty .'newQuantity '. $newQuantity;
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getpurchaseQuantityByBatch($product_ID,$batch){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase_history WHERE product_ID=:product_ID AND  batch_id=:batch_id");
$stmt->bindValue(':product_ID',$product_ID);
$stmt->bindParam(':batch_id',$batch);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
	foreach ($rows as $row) {
		return $row->qty;
	}
//return $rows;
}else{
return 0;
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifproductalredySelected($product_ID,$sales_ID,$invoice_no){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_sale_table WHERE product_ID=:product_ID AND  sales_ID=:sales_ID AND invoice_no=:invoice_no ");
$stmt->bindValue(':product_ID',$product_ID);
$stmt->bindParam(':sales_ID',$sales_ID);
$stmt->bindParam(':invoice_no',$invoice_no);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifservicealredySelected($service_ID,$sales_ID,$invoice_no){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_service_sale WHERE service_ID=:service_ID AND  sales_ID=:sales_ID AND invoice_no=:invoice_no ");
$stmt->bindValue(':service_ID',$service_ID);
$stmt->bindParam(':sales_ID',$sales_ID);
$stmt->bindParam(':invoice_no',$invoice_no);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}

function createSalesDetails($sales_ID,$product_ID,$quantity,$selling_price,$actual_price,$total_price,$profit_amount,$discount,$total_discount,$batchID){
try{
$sales_details_ID=generateSalesDetailsID();
global $conn;
$sql = "INSERT INTO `sales_details`(`sales_details_ID`,`sales_ID`,`product_ID`,`quantity`,`selling_price`,`actual_price`,`total_price`,`profit_amount`,`discount`,`total_discount`,`batch_id`)VALUES (:sales_details_ID,:sales_ID,:product_ID,:quantity,:selling_price,:actual_price,:total_price,:profit_amount,:discount,:total_discount,:batch_id)";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_details_ID',$sales_details_ID);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':selling_price',$selling_price);
$query->bindParam(':actual_price',$actual_price);
$query->bindParam(':total_price',$total_price);
$query->bindParam(':profit_amount',$profit_amount);
$query->bindParam(':discount',$discount);
$query->bindParam(':total_discount',$total_discount);
$query->bindParam(':batch_id',$batchID);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createServiceSalesDetails($sales_ID,$service_ID,$quantity,$cost,$total_price,$discount,$total_discount){
try{
$sales_details_ID=generateSalesDetailsID();
global $conn;
$sql = "INSERT INTO `sales_service_detail`(`sales_details_ID`,`sales_ID`,`service_ID`,`quantity`,`cost`,`total_price`,`discount`,`total_discount`)VALUES (:sales_details_ID,:sales_ID,:service_ID,:quantity,:cost,:total_price,:discount,:total_discount)";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_details_ID',$sales_details_ID);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':service_ID',$service_ID);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':cost',$cost);
$query->bindParam(':total_price',$total_price);
$query->bindParam(':discount',$discount);
$query->bindParam(':total_discount',$total_discount);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createSalesReturn($sales_return_ID,$customer_ID,$sales_ID,$invoice_no,$total_deduction,$total_amount){
try{
//$sales_ruturn_details_ID=generateSalesReturnDetailsID();
global $conn;
$sql = "INSERT INTO `sales_return`(`sales_return_ID`,`customer_ID`,`sales_ID`,`invoice_no`,`total_deduction`,`total_amount`)VALUES (:sales_return_ID,:customer_ID,:sales_ID,:invoice_no,:total_deduction,:total_amount)";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_return_ID',$sales_return_ID);
$query->bindParam(':customer_ID',$customer_ID);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':total_deduction',$total_deduction);
$query->bindParam(':total_amount',$total_amount);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createSalesReturnDetails($sales_return_ID,$product_ID,$return_quantity,$return_total,$deduction_total,$deduction_percentage,$selling_price){
try{
$sales_ruturn_details_ID=generateSalesReturnDetailsID();
global $conn;
$sql = "INSERT INTO `sales_return_details`(`sales_return_details_ID`,`sales_return_ID`,`product_ID`,`return_quantity`,`return_total`,`return_deduction`,`percent_deduction`,`selling_price`)VALUES (:sales_return_details_ID,:sales_return_ID,:product_ID,:return_quantity,:return_total,:return_deduction,:percent_deduction,:selling_price)";
$query = $conn -> prepare($sql);
$query->bindParam(':sales_return_details_ID',$sales_ruturn_details_ID);
$query->bindParam(':sales_return_ID',$sales_return_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':return_quantity',$return_quantity);
$query->bindParam(':return_total',$return_total);
$query->bindParam(':return_deduction',$deduction_total);
$query->bindParam(':percent_deduction',$deduction_percentage);
$query->bindParam(':selling_price',$selling_price);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createTempSalesReturnTable($sales_return_ID,$product_ID,$product_name,$quantity,$return_quantity,$return_total,$deduction_total,$selling_price,$batch){
try{
//$sales_ruturn_details_ID=generateSalesReturnDetailsID();
global $conn;
$sql = "INSERT INTO `temp_sales_return_table`(`sales_return_ID`,`product_ID`,`return_quantity`,`return_total`,`return_deduction`,`product_name`,`quantity`,`selling_price`,`batch_id`)VALUES (:sales_return_ID,:product_ID,:return_quantity,:return_total,:return_deduction,:product_name,:quantity,:selling_price,:batch_id)";
$query = $conn -> prepare($sql);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':sales_return_ID',$sales_return_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':return_quantity',$return_quantity);
$query->bindParam(':return_total',$return_total);
$query->bindParam(':return_deduction',$deduction_total);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':selling_price',$selling_price);
$query->bindParam(':batch_id',$batch);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createTempSaleTable($sales_ID,$invoice_no,$product_ID,$product_name,$product_shartName,$quantity,$selling_price,$actual_price,$total_price,$profit_amount,$batch){
try{
//$sales_temptable_ID=generateSalesDetailsID();
global $conn;
$sql = "INSERT INTO `temp_sale_table`(`sales_ID`,`product_ID`,`quantity`,`selling_price`,`actual_price`,`total_price`,`total_profit`,`invoice_no`,`product_name`,`product_shartName`,`batch_id`)VALUES (:sales_ID,:product_ID,:quantity,:selling_price,:actual_price,:total_price,:total_profit,:invoice_no,:product_name,:product_shartName,:batch_id)";
$query = $conn->prepare($sql);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':product_ID',$product_ID);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':selling_price',$selling_price);
$query->bindParam(':actual_price',$actual_price);
$query->bindParam(':total_price',$total_price);
$query->bindParam(':total_profit',$profit_amount);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':product_name',$product_name);
$query->bindParam(':product_shartName',$product_shartName);
$query->bindParam(':batch_id',$batch);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function createTempServiceSaleTable($sales_ID,$invoice_no,$service_ID,$service_name,$quantity,$cost,$total_price){
try{
//$sales_temptable_ID=generateSalesDetailsID();
global $conn;
$sql = "INSERT INTO `temp_service_sale`(`sales_ID`,`service_ID`,`quantity`,`cost`,`total_price`,`invoice_no`,`service_name`)VALUES (:sales_ID,:service_ID,:quantity,:cost,:total_price,:invoice_no,:service_name)";
$query = $conn->prepare($sql);
$query->bindParam(':sales_ID',$sales_ID);
$query->bindParam(':service_ID',$service_ID);
$query->bindParam(':quantity',$quantity);
$query->bindParam(':cost',$cost);
$query->bindParam(':total_price',$total_price);
$query->bindParam(':invoice_no',$invoice_no);
$query->bindParam(':service_name',$service_name);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function updateQuantityAfterSalesReturn($product_ID,$new_quantity){
try{
//$purchase_ID=generatePurchaseID();
global $conn;
$sql = "UPDATE product SET  quantity =:quantity WHERE product_ID=:product_ID ";
$query = $conn -> prepare($sql);
$query->bindParam(':quantity',$new_quantity);
$query->bindParam(':product_ID',$product_ID);
if($query->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function getSalesALL(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales WHERE status=:status ORDER BY id DESC");
$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getServiceSalesALL(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_service WHERE status=:status ORDER BY id DESC");
$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesByID($sales_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales WHERE sales_ID=:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getserviceSalesByID($sales_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_service WHERE sales_ID=:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getserviceSalesByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_service WHERE invoice_date>=:startDate and invoice_date<=:endDate AND status=:status ");
$stmt->bindValue(':startDate',$startDate);
$stmt->bindValue(':endDate',$endDate);
$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesReturnALL(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_return WHERE status=:status ORDER BY id DESC");
$stmt->bindValue(':status',$status);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesReturnByID($sales_return_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_return WHERE sales_return_ID=:sales_return_ID ");
$stmt->bindValue(':sales_return_ID',$sales_return_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesReturnDetailsByRetunID($sales_return_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_return_details WHERE sales_return_ID=:sales_return_ID ");
$stmt->bindValue(':sales_return_ID',$sales_return_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getTempSalesReturnDetailsByRetunID($sales_return_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_sales_return_table WHERE sales_return_ID=:sales_return_ID ");
$stmt->bindValue(':sales_return_ID',$sales_return_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getTempSalesReturnDetailsByID($id){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_sales_return_table WHERE id=:id ");
$stmt->bindValue(':id',$id);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesByInvoiceNo($invoice_no){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales WHERE invoice_no=:invoice_no ");
$stmt->bindValue(':invoice_no',$invoice_no);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesDetailsBySalesID($sales_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_details WHERE sales_ID=:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getServiceSalesDetailsBySalesID($sales_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_service_detail WHERE sales_ID=:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesTempTableBySalesID($sales_ID,$invoice_no){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_sale_table WHERE sales_ID=:sales_ID AND invoice_no=:invoice_no");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->bindValue(':invoice_no',$invoice_no);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getServiceSalesTempTableBySalesID($sales_ID,$invoice_no){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_service_sale WHERE sales_ID=:sales_ID AND invoice_no=:invoice_no");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->bindValue(':invoice_no',$invoice_no);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function getSalesDetailsBySalesDetailsID($sales_details_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_details WHERE sales_details_ID=:sales_details_ID ");
$stmt->bindValue(':sales_details_ID',$sales_details_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifReturnTempTablealredyExist($sales_return_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_sales_return_table WHERE sales_return_ID=:sales_return_ID ");
$stmt->bindValue(':sales_return_ID',$sales_return_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return 1;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifTemptableisalreadyupdatedwithSalesDetails($sales_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_sale_table WHERE sales_ID=:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return 1;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function checkifServiceTemptableisalreadyupdatedwithSalesDetails($sales_ID){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM temp_service_sale WHERE sales_ID=:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return 1;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function sumTotalProfitBySalesID($sales_ID){
try{
global $conn;
$stmt = $conn->prepare("SELECT sum(profit_amount) from sales_details where sales_ID =:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function sumTotalAmountBySalesID($sales_ID){
try{
global $conn;
$stmt = $conn->prepare("SELECT sum(total_price) from sales_details where sales_ID =:sales_ID ");
$stmt->bindValue(':sales_ID',$sales_ID);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$n=$stmt->rowCount() ;
if ($n > 0) {
return $rows;
}else{
return '0';
}
} catch(PDOException $e)
{
return "Error: " . $e->getMessage();
}
}
function deleteSalesDetailsBySalesDetailsID($sales_details_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM sales_details WHERE sales_details_ID=:sales_details_ID ");
$count->bindParam(':sales_details_ID',$sales_details_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteSalesTempTableDetailsByID($id,$sales_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_sale_table WHERE sales_ID=:sales_ID AND id=:id ");
$count->bindParam(':sales_ID',$sales_ID);
$count->bindParam(':id',$id);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteServiceSalesTempTableDetailsByID($id,$sales_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_service_sale WHERE sales_ID=:sales_ID AND id=:id ");
$count->bindParam(':sales_ID',$sales_ID);
$count->bindParam(':id',$id);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}

function deleteSalesReturnTempTableByID($sales_return_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_sales_return_table WHERE sales_return_ID=:sales_return_ID ");
$count->bindParam(':sales_return_ID',$sales_return_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteSalesTempTableDetailsBySalesAndInvoiceID($sales_ID,$invoice_no){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_sale_table WHERE sales_ID=:sales_ID AND invoice_no=:invoice_no ");
$count->bindParam(':sales_ID',$sales_ID);
$count->bindParam(':invoice_no',$invoice_no);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteServiceSalesTempTableDetailsBySalesAndInvoiceID($sales_ID,$invoice_no){
try{
global $conn;
$count=$conn->prepare("DELETE FROM temp_service_sale WHERE sales_ID=:sales_ID AND invoice_no=:invoice_no ");
$count->bindParam(':sales_ID',$sales_ID);
$count->bindParam(':invoice_no',$invoice_no);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteSalesByID($sales_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM sales WHERE sales_ID=:sales_ID ");
$count->bindParam(':sales_ID',$sales_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deactivateSalesByID($sales_ID){
try{
global $conn;
$status='Deleted';
$sql = "UPDATE sales SET status=:status WHERE sales_ID=:sales_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':sales_ID',$sales_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function deactivateServiceSalesByID($sales_ID){
try{
global $conn;
$status='Deleted';
$sql = "UPDATE sales_service SET status=:status WHERE sales_ID=:sales_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':sales_ID',$sales_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function deactivateSalesDetailsByID($sales_ID){
try{
global $conn;
$status='Deleted';
$sql = "UPDATE sales_details SET status=:status WHERE sales_ID=:sales_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':sales_ID',$sales_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function deactivateServiceSalesDetailsByID($sales_ID){
try{
global $conn;
$status='Deleted';
$sql = "UPDATE sales_service_detail SET status=:status WHERE sales_ID=:sales_ID";
$query = $conn -> prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':sales_ID',$sales_ID);
if($query -> execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
return "Error: " . $e->getMessage();
}
}
function deleteSalesDetailsBySalesID($sales_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM sales_details WHERE sales_ID=:sales_ID ");
$count->bindParam(':sales_ID',$sales_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function deleteServiceSalesDetailsBySalesID($sales_ID){
try{
global $conn;
$count=$conn->prepare("DELETE FROM sales_service_detail WHERE sales_ID=:sales_ID ");
$count->bindParam(':sales_ID',$sales_ID);
if($count->execute()){
return "success";
}else{
return "failed";
}
}catch(PDOException $e){
 return "Error: " . $e->getMessage();
}
}
function invoice_number(){//*****Outputting a New Voucher code*******

    $chars = "09302909209300923";

    srand((double)microtime()*1000000);

    $i = 1;

    $pass = '';

    while($i <=7){

      $num  = rand()%10;
      $tmp  = substr($chars, $num,1);
      $pass = $pass.$tmp;
      $i++;
    }
    return $pass;

  }
function generateSalesDetailsID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
function generateSalesReturnDetailsID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
function generateSalesReturnID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
function generateSalesID(){
 $rand = substr(number_format(time() * rand(),0,'',''),0,10);
 return $ID=md5($rand);
}
?>