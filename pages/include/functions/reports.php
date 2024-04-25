<?php
include('config.php');
function salesReportByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales WHERE invoice_date>=:startDate and invoice_date<=:endDate AND status=:status ORDER BY id DESC");
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
function servicesalesReportByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_service WHERE invoice_date>=:startDate and invoice_date<=:endDate AND status=:status ORDER BY id DESC");
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
function salesReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales WHERE  status=:status ORDER BY id DESC");
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
function salesReportByDateCopy($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales WHERE invoice_date>=:startDate and invoice_date<=:endDate AND status=:status ORDER BY id DESC");
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
function salesServiceReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM sales_service WHERE  status=:status ORDER BY id DESC");
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
function stockReportByDate($startDate,$endDate){
try{
global $conn;
$status='Available';
$stmt = $conn->prepare("SELECT * FROM medicine WHERE registered_date>=:startDate and registered_date<=:endDate AND status=:status ORDER BY id DESC");
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
function stockReportAll(){
try{
global $conn;
$status='Available';
$stmt = $conn->prepare("SELECT * FROM medicine WHERE  status=:status ORDER BY id DESC");
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
function customerReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM customer WHERE  status=:status ORDER BY id DESC");
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
function customerReportByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM customer WHERE date_entered>=:startDate and date_entered<=:endDate AND status=:status ORDER BY id DESC");
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
function supplierReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM supplier WHERE  status=:status ORDER BY id DESC");
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
function supplierReportByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM supplier WHERE Date(date_entered)>=:startDate and Date(date_entered)<=:endDate AND status=:status ORDER BY id DESC");
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
function purchaseReportByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase WHERE purchase_date>=:startDate and purchase_date<=:endDate AND status=:status ORDER BY id DESC");
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
function purchaseReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM purchase WHERE  status=:status ORDER BY id DESC" );
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
function expensesReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM expenses WHERE  status=:status ORDER BY id DESC" );
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
function expensesReportByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT * FROM expenses WHERE expense_date>=:startDate and expense_date<=:endDate AND status=:status ORDER BY id DESC");
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
function profitLossReportByDate($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT sales_details.id,sales_details.quantity,sales_details.selling_price,sales_details.product_ID,sales_details.actual_price,sales_details.date_entered,sales_details.status,sales_details.total_discount, product.product_ID,product.product_name FROM sales_details INNER JOIN product ON sales_details.product_ID=product.product_ID  WHERE Date(sales_details.date_entered)>=:startDate and Date(sales_details.date_entered)<=:endDate AND sales_details.status=:status ORDER BY sales_details.id DESC");
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
function serviceSalesReportByDateCopy($startDate,$endDate){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT sales_service.id,sales_service.customer_ID,sales_service.invoice_no,sales_service.total_amount,sales_service.invoice_date,sales_service.date_created,sales_service.status,sales_service.total_discount, service.service_ID,service.service_name FROM sales_service INNER JOIN service ON sales_service.service_ID=service.service_ID  WHERE sales_service.date_created>=:startDate and sales_service.date_created<=:endDate AND sales_service.status=:status ORDER BY sales_service.id DESC");
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
function serviceSalesReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT sales_service.id,sales_service.customer_ID,sales_service.invoice_no,sales_service.total_amount,sales_service.paid_amount,sales_service.invoice_date,sales_service.date_created,sales_service.status,sales_service.total_discount FROM sales_service   WHERE sales_service.status=:status ORDER BY sales_service.id DESC");
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

function profitLossReportAll(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT sales_details.id,sales_details.quantity,sales_details.selling_price,sales_details.product_ID,sales_details.actual_price,sales_details.date_entered,sales_details.status,sales_details.total_discount, product.product_ID,product.product_name FROM sales_details INNER JOIN product ON sales_details.product_ID=product.product_ID WHERE  sales_details.status=:status ORDER BY sales_details.id DESC" );
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
function profitLossReportAllForService(){
try{
global $conn;
$status='Active';
$stmt = $conn->prepare("SELECT sales_service_detail.id,sales_service_detail.quantity,sales_service_detail.cost,sales_service_detail.service_ID,sales_service_detail.date_entered,sales_service_detail.status,sales_service_detail.total_price,sales_service_detail.total_discount, service.service_ID,service.service_name FROM sales_service_detail INNER JOIN service ON sales_service_detail.service_ID=service.service_ID WHERE  sales_service_detail.status=:status ORDER BY sales_service_detail.id DESC" );
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
function getMonthString($m){
    if($m==1){
        return "JAN";
    }else if($m==2){
        return "FEB";
    }else if($m==3){
        return "MAR";
    }else if($m==4){
        return "APR";
    }else if($m==5){
        return "MAY";
    }else if($m==6){
        return "JUN";
    }else if($m==7){
        return "JUL";
    }else if($m==8){
        return "AUG";
    }else if($m==9){
        return "SEP";
    }else if($m==10){
        return "OCT";
    }else if($m==11){
        return "NOV";
    }else if($m==12){
        return "DEC";
    }
}
?>