<?php require_once('include/session.php') ?>
<?php require_once('include/functions/suppliers.php')?>
<?php require_once('include/functions/product.php')?>
<?php require_once('include/functions/sales.php')?>
<?php require_once('include/functions/customer.php')?>
<?php require_once('include/functions/service.php')?>
<?php require_once('include/functions/preveleges.php')?>
<?php
$role_ID=$user_role;
$privilege_ID='Add Sales';
 $getpres=getRolePrivilegesByRoleAndPrivilegesName($role_ID,$privilege_ID);// This Function can be found on include/function/config.php 
if ($getpres !=1) {
//require('access_denied.php');
echo '<script> window.location="access_denied" </script>';
exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <?php //require_once('include/head.php')?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!--<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../favicon.png" alt="Logo" height="60" width="60">
  </div>-->

  <!-- Navbar -->
 <?php require_once('include/top_nav.php')?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success elevation-4" style="color:white">
    <!-- Brand Logo -->
    <?php require_once('include/side_menu.php')?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
          <div class="card card-default">
             
              <div class="card-header" style="color: #17A589;font-size:">
                
                <div class="row">
                  <div class="col-md-4" >
                    <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-plus"></i> ADD SALES </h3>
                  </div>
                  <div class="col-md-8">
                      

                      <form name="clock" method="POST" action="#" style="font-size: 15px;font-weight: bold"><!--*****Clock******-->
                        <i class="fas fa-calendar icon-large"></i>
                      <?php
                      $Today = date('y:m:d',mktime());
                      $new = date('l, F d, Y', strtotime($Today));
                      echo $new;
                      ?>

                      <input style="width:150px;background: #17A589;color: #fff;border-radius: 5px;height: 30px;" readonly type="submit" class="trans" name="face" value="">
                      </form><!--*****Clock******-->
                  </div>
                </div>
              </div>
            </div>
           </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-md-12">
          

  <div class="card card-">

        <div class="card card-">
        <div class="card-header">

        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php
        $sales_ID='';
        $invoice_no='';
        $customer_ID='WalkIn';
        $sales_details='Thank you';
        $date=date('Y-m-d');
        
        if (isset($_GET['salesID']) && !empty($_GET['salesID'])) {
        $sales_ID=$_GET['salesID'];
        $invoice_no=$_GET['invoice_no'];
        $customer_ID=$_GET['customer'];
        $sales_details=$_GET['det'];
        $date=$_GET['date'];
        }else{
        $sales_ID=generateSalesID();
        $invoice_no= invoice_number();
        $customer_ID='WalkIn';
        $sales_details='Thank you';
        $date=date('Y-m-d');
        }
        if (isset($_POST['submit'])) {

        $service_ID=$_POST['service_ID'];
        $quantity=$_POST['quantity'];
      
        $cost=$_POST['cost'];
       
        $total_price=$quantity * $cost;
       
        $service_name=$_POST['serviceName'];

        $checkselecteds= checkifservicealredySelected($service_ID,$sales_ID,$invoice_no);
        if ($checkselecteds !=0) {
        foreach ($checkselecteds as $checkselected) {
        $quantity=$checkselected->quantity + $quantity;
        $total_price=$quantity * $selling_price;
          $update=updateTempServiceTableQty($service_ID,$sales_ID,$invoice_no,$quantity,$total_price);
        if ( $update =='success') {
        echo '<script> window.location="add_service_sale?salesID='.$sales_ID.'&invoice_no='.$invoice_no.'&date='.$date.'&customer='.$customer_ID.'&det='.$sales_details.'&customer_contact='.$_GET['customer_contact'].'" </script>';
        }
       
        }
        }else{
          $create=createTempServiceSaleTable($sales_ID,$invoice_no,$service_ID,$service_name,$quantity,$cost,$total_price);

       
        }
        }     



        ?>

        <?php 
       $customer_contact='';
        if (isset($_POST['saveSale'])) {
        $invoice_no=$_GET['invoice_no'];
        $sales_ID=$_GET['salesID'];
        $customer_ID=$_GET['customer'];
        $invoice_date=$_GET['date'];
        $details=$_GET['det'];
        $customer_contact=$_GET['customer_contact'];
        $total_amount=$_POST['grand_total'];
        $paid_amount=$_POST['amount_paid'];
        $balance=$_POST['balance'];
        $payment_method=$_POST['payment_method'];
        //$due_amount=$_POST['amount_due'];
         $due_amount=$total_amount - $paid_amount;
        $total_discount=$_POST['discount'];
        $pay_status='';
        if($total_amount > $paid_amount && $paid_amount!=0 ) {
        $pay_status='Partialy Paid';
        }elseif($paid_amount ==0){
        $pay_status='Unpaid';
        }elseif ($paid_amount >= $total_amount) {
        $pay_status='Paid';
        }
        $customer_name='';
           $getcustomers= getcustomerByID($customer_ID);
        if ($getcustomers !=0) {
        foreach ($getcustomers as $getcustomer ) { 
           $customer_name= $getcustomer->customer_name;
        }
        }
        $create=createServiceSales($sales_ID,$customer_ID,$invoice_no,$total_discount,$total_amount,$paid_amount,$due_amount,$pay_status,$balance,$invoice_date,$details,$payment_method);
        if ($create =='success') {
          sendSmsToCustomer($customer_contact,$customer_name,$paid_amount);
        $getdatas=getServiceSalesTempTableBySalesID($sales_ID,$invoice_no);
        $del='';
        if ($getdatas !=0) {

        foreach ($getdatas as $getdata) {
        $service_ID=$getdata->service_ID;
        $quantity=$getdata->quantity;
        $cost=$getdata->cost;
        $total_price=$getdata->total_price;
        $discount=0;
        $total_discount=0;
       
        $createDetails= createServiceSalesDetails($sales_ID,$service_ID,$quantity,$cost,$total_price,$discount,$total_discount);
        $activity='Made a Service sale with an invoice no '.$invoice_no;
        createActivity_logs($activity);
        if ($createDetails =='success') {
        # code...
        $del=deleteServiceSalesTempTableDetailsBySalesAndInvoiceID($sales_ID,$invoice_no);
         echo '<script> alert("Sales added Successfully") </script>';

        echo '<script> window.location="add_service_sale" </script>';
        }

        }
        }

        if ($del) {

        echo '<script> alert("Sales added Successfully") </script>';

        // echo '<script> window.location="invoice.php?guidID='.$sales_ID.'" </script>';
        }

        }else{
        echo '<script> alert("Sorry! something went wrong Please try again") </script>';

        //echo '<script> window.location="add_sale?salesID='.$sales_ID.'&invoice_no='.$invoice_no.'" </script>';

        }


        }
        ?>
        <?php
        
       
        $cost='';
        $serviceName='';
        $service_ID='';
        
        if (isset($_GET['service']) ) {
        $service_ID=$_GET['service'];
        
        $getservices=getServiceByID($service_ID);
        if ($getservices !=0) {
        foreach ($getservices as $getservice ) {
        $cost=$getservice->cost ;
        $serviceName=$getservice->service_name;
        
        
        }
        }
        

        }


        if (isset($_POST['cancelSale'])) {
        $dels=deleteSalesTempTableDetailsBySalesAndInvoiceID($sales_ID,$invoice_no);
        if ($dels =='success') {
        echo '<script> window.location="add_service_sale" </script>';
        }
        }

function sendSmsToCustomer($phone,$name,$amount){
    
    $customer_name='Customer';
    if ($name=='WalkIn' || $name=='') {
      $$customer_name ='Customer ';
    }else{
      $phone = (substr($phone, 0, 1) == "7") ? "254{$phone}" : $phone;
    $names = explode(" ", $name);
  $customer_name=$names[0]; // piece1
  $customer_name=strtoupper($customer_name);
    }
    $phone = (substr($phone, 0, 1) == "+") ? str_replace("+", "", $phone) : $phone;
    $phone = (substr($phone, 0, 1) == "0") ? preg_replace("/^0/", "254", $phone) : $phone;
    $phone = (substr($phone, 0, 1) == "7") ? "254{$phone}" : $phone;
    
  $curl = curl_init();

  curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://userapi.helomobile.co.ke/api/v2/SendBulkSMS',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "SenderId": "AlutaBrands",
  "ApiKey": "qH738nzV37LcgMaKAftVMz+nNqT2uR4t7CJUqIHcaIc=",
  "ClientId": "9e634b11-f8e5-4144-88d9-f90d39af48ed",
  "MessageParameters": [
      {
          "Number": '. $phone .',
          "Text": "Dear ' .$customer_name .', We have received your payment of Ksh '. $amount .'.Thank you for choosing Aluta Brands Media."
      }
  ]
  }',
  CURLOPT_HTTPHEADER => array(
  'Content-Type: application/json'
  ),
   ));
   $response = curl_exec($curl);
   curl_close($curl);
  return $response; 
   }
           
        ?>
         <?php
          $phone='';
           if(isset($_GET['customer_contact'])){ 
             $phone=$_GET['customer_contact'] ;
          }else{
             $phone= $customer_contact ;
          } 
            ?>
        <form method="POST" action="add_service_sale?salesID=<?php echo $sales_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&customer=<?php echo $customer_ID ?>&det=<?php echo $sales_details ?>&customer_contact=<?php echo $_GET['customer_contact']?>" class="form form-responsive" enctype="multipart/form-data">
        <div class="card-body">
        <div class="row form-group">
        <label for="name" class="col-md-2">Customer</label>
        <div class="col-md-4">
        <select class="form-control select2" name="customer_ID" id="customer_ID" onchange="getCustomerContact(this.value)" style="width:100%" >
        <?php if (isset($_GET['customer']) && $_GET['customer'] !='WalkIn') {
        $customer_ID=$_GET['customer'];

        $getcustomers=getcustomerByID($customer_ID);
        if ($getcustomers !=0) {
        foreach ($getcustomers as $getcustomer) { ?>
          <option value="<?php echo $getcustomer->customer_ID ?>"><?php echo $getcustomer->customer_name ?></option>
        <?php }
        }
        }elseif($customer_ID =='WalkIn'){ ?>
        <option value="WalkIn">Walking Customer</option> 
        <?php }?>
        <option value="WalkIn">Walking Customer</option> 
        <?php
        $customers=getcustomersAll();
        if ( $customers !=0){
        foreach ($customers as $customer) { ?>
        <option value="<?php echo $customer->customer_ID ?>"><?php echo $customer->customer_name ?></option>
        <?php }
        }
        ?>
        </select>

        </div>
        <label for="name" class="col-md-2">Date</label>
        <div class="col-md-4">
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Date" value="<?php echo $date?>" required>
        </div>

        </div>
          <div class="row form-group">
        <label for="name" class="col-md-2">Customer Contact</label>
        <div class="col-md-4">
          
        <input type="text" class="form-control" id="customer_contact" name="customer_contact" placeholder="Contact" value="<?php echo $phone ?>" required >
         
        </div>
        
           <label for="name" class="col-md-2">Details</label>
        <div class="col-md-4">
        <input type="text" class="form-control" id="sales_details" name="sales_details" placeholder="Detail" value="<?php echo $sales_details?>" required>
        </div>
        </div>
        <div class="row form-group">
        <label for="name" class="col-md-2">Invoice</label>
        <div class="col-md-4">
        <input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="Date" value="<?php echo $invoice_no?>" readonly>

        </div>
     

        </div>
        
        <table>

        <tr>
          
        <td>
          
       <span style="font-size: 9px;"><b>Service</b></span>
        <select class="form-control select2" name="service_ID" id="service_ID" style="width:200px" onchange="getserviceDetails(this.value)">
         
        <?php
        if (isset($_GET['service']) && !empty($_GET['service'])) {
        $serviceID=$_GET['service'];
        $getservices=getServiceByID($serviceID);
        if ($getservices !=0) {
        foreach ($getservices as $getservice) {
        ?>
        <option value="<?php echo $getservice->service_ID ?>"><?php echo $getservice->service_name ?></option>
        <?php 
        }
        }
        }else{ ?>
          <option value="">Select Service</option>
        <?php }

        

        $services=getAllservices();
        if ( $services !=0){
        foreach ($services as $service) { ?>
        <option value="<?php echo $service->service_ID ?>"><?php echo $service->service_name ?></option>
        <?php }
        }

        ?>
        </select>
        </td>
       

        
        <input type="hidden" name="serviceName" value="<?php echo $serviceName ?>">
       
        <input type="hidden" name="cost" id="cost" value="<?php echo $cost ?>">
        <td><span style="font-size: 9px;"><b>Price </b></span><input type="readonly" class="form-control" id="cost_price" min="0" name="cost_price"   placeholder="Cost" value="<?php echo $cost ?>"  required></td>

        <td><span style="font-size: 9px;"><b>Qty </b></span><input type="number" class="form-control" id="quantity" min="0" name="quantity"   placeholder="Quantity" onchange="sumTotal(this.value)" onkeyup="sumTotal(this.value)" required></td>
        <td><span style="font-size: 9px;"><b>Total Price</b></span> <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total" value="<?php echo $cost ?>" disabled></td>
        <td> <br><button type="submit" name="submit" class="btn btn-success" style="background-color:#17A589 ;color: white">Add</button></td>

        </tr>
        </table>


        </div>
        </div>
        </form>
        <form method="POST" action="add_service_sale?salesID=<?php echo $sales_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&customer=<?php echo $customer_ID ?>&det=<?php echo $sales_details ?>&customer_contact=<?php echo $_GET['customer_contact']?>" class="form form-responsive" enctype="multipart/form-data">
        <div class="card-body">
        <table class="table" >
        <tr style="background-color: #17A589;color: #fff">
        <th>Service Name</th>
        <th>Price /Cost </th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
        </tr>
        <?php
        $getdatas=getServiceSalesTempTableBySalesID($sales_ID,$invoice_no);
        $sub_total=0;
        if ($getdatas !=0) {
        foreach ($getdatas as $getdata) {
        $sub_total +=$getdata->total_price; ?>
        <tr>
        <td><?php echo $getdata->service_name ?></td>
        <td><?php echo $getdata->cost ?></td>
        <td><?php echo $getdata->quantity ?></td>
        <td ><?php echo $getdata->total_price ?></td>
        <td><a href="delete_temp_service_sale_table?id=<?php echo $getdata->id ?>&salesID=<?php echo $sales_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&customer=<?php echo $customer_ID ?>&det=<?php echo $sales_details ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="nav-icon fas fa-trash"></i></a></td>
        </tr>
        <?php }
        }
        ?>

        <tr>
        <td colspan="2"></td>
        <td><b>Sub Total</b></td>
        <td ><b><?php echo $sub_total.'.00';?></b>

        <input type="hidden" name="sub_total" id="sub_total" value="<?php echo $sub_total ?>"></td>
        </tr>


        <tr>
        <td colspan="2"></td>
        <td><b>Total Discount</b></td>
        <td align="right">
        <input type="number" class="form-control" id="discount" min="0" name="discount"   placeholder="Discount" onchange="sumDiscount(this.value)" onkeyup="sumDiscount(this.value)" value="0" width="20px" required>
        </td>
        </tr>
        <tr>
        <td colspan="2"></td>
        <td><b>Total</b></td>
        <td ><input type="hidden" name="grand_total" id="grand_total" value="<?php echo $sub_total.'.00';?>"><div id="dispalyGrandTotal" style="font-weight: bold"><b><?php echo $sub_total.'.00';?></b></div></td>
        </tr>
        <tr>
        <td colspan="2"></td>
        <td><b>Amount Paid</b></td>
        <td><input type="number" class="form-control" id="amount_paid" min="0" name="amount_paid"   placeholder="amount Paid" onchange="calBalanceAndDue(this.value)" onkeyup="calBalanceAndDue(this.value)"   width="20px" value="<?php echo $sub_total.'.00';?>" required></td>
        </tr>
        <tr>
        <td colspan="2"></td>
        <td><b id="showBalance">Balance</b></td>
        <td><input type="number" class="form-control" id="bal" min="0" value="0" name="bal"  disabled>
        <input type="hidden" name="amount_due" id="amount_due" value="<?php echo $sub_total.'.00';?>" >
        <input type="hidden" name="balance" id="balance">
        </td>

        </tr>
         <tr>
        <td colspan="2"></td>
        <td><b>Payment Method</b></td>
        <td>
           <select class="form-control select2" name="payment_method" id="payment_method" style="width:100%" >
            <option value="CASH">CASH</option>
            <option value="MPESA">MPESA</option>
          </select>
        </td>
        </tr>
        </table>

        </div>
        <div class="card-footer">
        <?php if (isset($_GET['salesID']) && isset($_GET['invoice_no']) && !empty($_GET['salesID']) && !empty($_GET['invoice_no'])) { ?>
        <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-2">
        <button type="submit" name="saveSale" class="btn btn-info" style="background-color:# ;color: white">Save</button>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-3">



        <button type="submit" class="btn btn-danger float-right" name="cancelSale">Cancel Sale</button>
        </div>
        </div>
        <?php }?>
        </div>
        </form>


        </div>

</div>
                    
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
   
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type="text/javascript">
 function getCustomerContact(id){
  //alert(id)
 if (id !=='' || id !=='WalkIn') {
   var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       // alert(this.responseText)
        document.getElementById("customer_contact").value = this.responseText;
      }
    };
    xmlhttp.open("GET", "get_customer_contact.php?id=" + id, true);
    xmlhttp.send();
    
  } else {
   // alert('not found')
   document.getElementById("customer_contact").value = "";
    return;
  }

  }
</script>
<script type="text/javascript">
  function addservicetotal(){
    var total=0;
    var service_qrt=parseInt(document.getElementById('service_count').value)
    var service_cost=parseInt(document.getElementById('service_cost').value)
    if ( service_cost > 0 ) {
         total= service_qrt * service_cost;
         document.getElementById('total_servicesales').value=total
         document.getElementById('total_servicesalesHiden').value=total
         
    }else{
      total= service_qrt * 1;
      document.getElementById('total_servicesales').value=total
      document.getElementById('total_servicesalesHiden').value=total
    }
  }
</script>
<script type="text/javascript">
  function calBalanceAndDue(amount_paid){
    var grand_total=parseInt(document.getElementById('grand_total').value);
    var bal=0;
    var due=0;
    if (amount_paid >= grand_total) {
      bal=amount_paid - grand_total;
      document.getElementById('showBalance').innerHTML='Change';
      document.getElementById('bal').value=bal;
    }else{
      due=grand_total -amount_paid;
    document.getElementById('showBalance').innerHTML='Amount Due';
    document.getElementById('bal').value=due;
    }
    
    document.getElementById('amount_due').value=due;
     document.getElementById('balance').value=bal;

  }
</script>
<script type="text/javascript">
  function getserviceDetails (id){
    //alert('testing')
    var sale_date=document.getElementById('sale_date').value;
    var details=document.getElementById('sales_details').value;
    var customer_ID=document.getElementById('customer_ID').value;
    var customer_contact=document.getElementById('customer_contact').value;
    document.getElementById("customer_contact").value =customer_contact;
    window.location="add_service_sale?service="+id +"&salesID=<?php echo $sales_ID ?>&invoice_no=<?php echo $invoice_no?>&customer="+customer_ID+"&date="+sale_date+"&det="+details+"&customer_contact="+customer_contact;
     
  }
</script>

<script type="text/javascript">
  function getproductByBatchDetails(batch){
   // alert('testing')
    var sale_date=document.getElementById('sale_date').value;
    var details=document.getElementById('sales_details').value;
    var customer_ID=document.getElementById('customer_ID').value;
    var customer_contact=document.getElementById('customer_contact').value;
    document.getElementById("customer_contact").value =customer_contact;
     var id=document.getElementById('product_ID').value;
    window.location="add_sale?service="+id +"&salesID=<?php echo $sales_ID ?>&invoice_no=<?php echo $invoice_no?>&customer="+customer_ID+"&date="+sale_date+"&det="+details+"&customer_contact="+customer_contact;
   
  }
</script>
<script type="text/javascript">
  function sumDiscount(param){
  var sub_total=parseInt(document.getElementById('sub_total').value);
  var total_disc=sub_total- param;
  document.getElementById('dispalyGrandTotal').innerHTML='<b>'+total_disc+'.00</b>';
  document.getElementById('grand_total').value=total_disc;
  document.getElementById('amount_paid').value=total_disc;
  
  }
</script>
<script type="text/javascript">
  function sumTotal(param){
    
   var cost=parseInt(document.getElementById('cost').value);
   
    var total= cost * param;
    
     document.getElementById('total_price').value=total;
   
}
</script>

<script language="javascript" type="text/javascript">

      //Clock

 var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;

   //Clock
       
 </script>
 <script>
    function getserviceCost (id) {
  
        $.ajax({
            url:"getservicecost.php",    //the page containing php script
            type: "post",    //request type,
            dataType: 'json',
            data: {id: id},
            success:function(result){
               
                document.getElementById('service_cost').value=result.cost //parseInt(result.cost) 
                var service_qrt=parseInt(document.getElementById('service_count').value);
                var total= service_qrt * result.cost;
                document.getElementById('total_servicesales').value=total
              document.getElementById('total_servicesalesHiden').value=total
            }
        });
    }
</script>
<!-- jQuery -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->

<script type="text/javascript">
          
              function preview_image(event){
                document.getElementById('output_image').style.display = "block";
                var reader=new FileReader();
                reader.onload = function(){
                  var output = document.getElementById('output_image');
                  output.src =reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
              }
        </script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<?php //require_once('include/footer.php') ?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
