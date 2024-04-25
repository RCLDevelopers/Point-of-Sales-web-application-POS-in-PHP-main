<?php require_once('include/session.php') ?>
<?php require_once('include/functions/suppliers.php')?>
<?php require_once('include/functions/product.php')?>
<?php require_once('include/functions/sales.php')?>
<?php require_once('include/functions/customer.php')?>
<?php require_once('include/functions/purchase.php')?>
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
                    <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-plus"></i> ADD PURCHASE </h3>
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
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                $sales_ID='';
                $purchase_ID='';
                $invoice_no='';
                $supplier_ID='';
                $product_ID='';
                $purchase_details='Thank you';
                $date=date('Y-m-d');
                $total_discount='';
                $total_amount='';
                $amount_paid='';
                $amount_due='';
                 if (isset($_GET['guidID']) && !empty($_GET['guidID'])) {
                   $purchase_ID=$_GET['guidID'];
                   $invoice_no=$_GET['invoice_no'];
                   $supplier_ID=$_GET['supplier'];
                   $purchase_details=$_GET['det'];
                   $date=$_GET['date'];
                     $getPurchases=getPurchaseByID($purchase_ID);
                    if ( $getPurchases !=0) {
                      foreach ($getPurchases as $getPurchase) {
                         $total_discount=$getPurchase->total_discount;
                          $total_amount=$getPurchase->gtotal_amount;
                          $amount_paid=$getPurchase->amount_paid;
                          $amount_due=$getPurchase->amount_due;
                         // $due_amount=$getPurchase->due_amount;
                         //$amount_balance=$getPurchase->amount_balance;
                         //$sales_details=$getSale->detail;
                      }
                    }
                    
                }elseif(isset($_GET['purchaseID']) && !empty($_GET['purchaseID'])) {
                   $purchase_ID=$_GET['purchaseID'];
                   $invoice_no=$_GET['invoice_no'];
                   $supplier_ID=$_GET['supplier'];
                   $purchase_details=$_GET['det'];
                   $date=$_GET['date'];
                   $getPurchases=getPurchaseByID($purchase_ID);
                    if ( $getPurchases !=0) {
                      foreach ($getPurchases as $getPurchase) {
                         $total_discount=$getPurchase->total_discount;
                          $total_amount=$getPurchase->gtotal_amount;
                          $amount_paid=$getPurchase->amount_paid;
                          $amount_due=$getPurchase->amount_due;
                         // $due_amount=$getPurchase->due_amount;
                         //$amount_balance=$getPurchase->amount_balance;
                         //$sales_details=$getSale->detail;
                      }
                    }

                 }else{
                   echo '<script> window.location="manage_purchase" </script>';
                 }

                
              if (isset($_POST['submit'])) {
              
                $product_ID=$_POST['product_ID'];
                $quantity=$_POST['quantity'];
                $batch_Id=$_POST['batch_Id'];
                $supplier_price=$_POST['supplier_price'];
                $expiry_date=$_POST['expiry_date'];
                $total_price=$quantity * $supplier_price;
                $product_name=$_POST['productName'];
                $supplier_ID=$_GET['supplier'];
                $invoice_no=$_POST['invoice_no'];
                $discount=0;
                $date=$_POST['purchase_date'];
                $purchase_details=$_POST['purchase_details'];
               $check= checkifPurchaseproductalredySelected($product_ID,$purchase_ID,$batch_Id);
               if ($check ==1) {

               // echo '<script> window.location="add_purchase?purchaseID='.$purchase_ID.'&invoice_no='.$invoice_no.'&date='.$date.'&supplier='.$supplier_ID.'&det='.$purchase_details.'" </script>';;
                 # code...
               }else{

                echo $create= createTempPurchaseHistory($purchase_ID,$product_ID,$product_name,$supplier_ID,$quantity,$supplier_price,$discount,$expiry_date,$total_price,$batch_Id);
                if ($create =='success') {
                  //echo '<script> window.location="add_purchase?purchaseID='.$purchase_ID.'&invoice_no='.$invoice_no.'&date='.$date.'&supplier='.$supplier_ID.'&det='.$purchase_details.'" </script>';;
                }

                }
                }     
                 
             
            
              ?>

              <?php 
             
               if (isset($_POST['savePurchase'])) {
                 $invoice_no=$_GET['invoice_no'];
                 $purchase_ID=$_GET['purchaseID'];
                 $supplier_ID=$_GET['supplier'];
                 $purchase_date=$_GET['date'];
                 $details=$_GET['det'];
                 $total_amount=$_POST['grand_total'];
                 $paid_amount=$_POST['amount_paid'];
                 //$balance=$_POST['balance'];
                 $due_amount=$_POST['amount_due'];
                 $total_discount=$_POST['discount'];
                // $pay_status='';
                 
                 $create=updatePurchase($purchase_ID,$supplier_ID,$invoice_no,$purchase_date,$purchase_details,$total_discount,$total_amount,$paid_amount,$due_amount);
                 //update product quantity to deduct the previous qty
                 $getPurchaseDets=getPurchaseHistoryByPurchaseID($purchase_ID);
                 $upt='';
                 if ($getPurchaseDets !=0 ) {
                   foreach ($getPurchaseDets as $getPurchaseDet) {
                         $getMedQty=getQuantity($getPurchaseDet->product_ID);
                         $getQty=$getPurchaseDet->qty;
                         $newQty=$getMedQty - $getQty;
                        $upt=updateQuantityAfterPurchase($getPurchaseDet->product_ID,$newQty);

                    
                   }
                 }
                 $delete='';
                         if ($upt =='success') {
                        $delete=deletePurchaseHistoryByPurchaseID($purchase_ID);
                          
                         
                       }
                  if ($delete =='success') {
                    $getdatas=getTempPurchaseHistoryByPurchaseID($purchase_ID,$supplier_ID);
                     $del='';
                    if ($getdatas !=0) {

                       foreach ($getdatas as $getdata) {
                          $product_ID=$getdata->product_ID;
                          $quantity=$getdata->qty;
                          $supplier_price=$getdata->supplier_price;
                          $expiry_date=$getdata->expire_date;
                           $supplier_ID=$getdata->supplier_id;
                           $total_amount=$getdata->total_amount;
                           $batch_id=$getdata->batch_id;
                          //$actual_price=$getdata->actual_price;
                         
                          //$profit_amount=$getdata->total_profit;
                          $discount=0;
                          $total_discount=$discount;
                        $getqty=getQuantity($product_ID);
                        $new_quantity=$getqty+$quantity;
                       $updt=updateQuantityAfterPurchase($product_ID,$new_quantity);

                       if ($updt =='success') {
                            $createDetails= createPurchaseHistory($purchase_ID,$product_ID,$supplier_ID,$quantity,$supplier_price,$discount,$expiry_date,$total_amount,$batch_id);
                         $activity='updated a purchase with an invoice no '.$invoice_no;
                          createActivity_logs($activity);
                         if ($createDetails =='success') {
                           # code...
                          $del=deleteTempPurchaseTableByPurchaseID($purchase_ID);
                          // echo '<script> alert("Sales added Successfully") </script>';
                 
                    //echo '<script> window.location="add_sale" </script>';
                         }
                          }
                       }
                    }
                        
                      if ($del) {

                        echo '<script> alert("Purchase updated Successfully") </script>';
                 
                    // echo '<script> window.location="invoice.php?guidID='.$sales_ID.'" </script>';
                      }
                      
                      }else{
                     echo '<script> alert("Sorry! something went wrong Please try again") </script>';
                 
                    //echo '<script> window.location="add_sale?salesID='.$sales_ID.'&invoice_no='.$invoice_no.'" </script>';
                      
                      }


               }
               ?>
              <?php
              $shortName='';
              $supplier_price='';
              $actual_price='';
              $productName='';
              $available_quantity='';
              $expiry_date='';
              if (isset($_GET['med']) && !empty($_GET['med'])) {
                 $medID=$_GET['med'];
                $getproducts=getproductByID($medID);
                if ($getproducts !=0) {
                foreach ($getproducts as $getproduct ) {
                  $shortName=$getproduct->short_name ;
                  $selling_price=$getproduct->selling_price;
                  $supplier_price=$getproduct->actual_price;
                  $productName=$getproduct->product_name;
                  $available_quantity=$getproduct->quantity;
                  $expiry_date=$getproduct->expired_date;
                }
              }
              }


               if (isset($_POST['cancelPurchase'])) {
                 $dels=deleteTempPurchaseTableByPurchaseID($purchase_ID);
                 if ($dels =='success') {
                    echo '<script> window.location="manage_purchase" </script>';
                 }
              }
              ?>
              <form method="POST" action="edit_purchase?purchaseID=<?php echo $purchase_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&supplier=<?php echo $supplier_ID ?>&det=<?php echo $purchase_details ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row form-group">
                    <label for="name" class="col-md-2">Company</label>
                    <div class="col-md-4">
                      <select class="form-control select2" name="supplier_ID" id="supplier_ID" style="width:100%" onchange="getproductbySupplier(this.value)">
                        <?php
                        if (isset($_GET['supplier']) && !empty($_GET['supplier'])) {
                          $supplier_ID=$_GET['supplier'];
                          $getsuppliers=getSuppliersByID($supplier_ID);
                          if ($getsuppliers !=0) {
                             foreach ($getsuppliers as $getsupplier) {
                               ?>
                  <option value="<?php echo $getsupplier->supplier_ID ?>"><?php echo $getsupplier->supplier_name ?></option>
                  <?php 
                             }
                          }
                        }else{
                        ?>
                    <option value="">Select Company</option> 
                  <?php } ?>
                  <?php
                  $suppliers=getSuppliersAll();
                  if ( $suppliers !=0){
                  foreach ($suppliers as $supplier) { ?>
                  <option value="<?php echo $supplier->supplier_ID ?>"><?php echo $supplier->supplier_name ?></option>
                  <?php }
                  }
                  ?>
                 </select>
                    
                  </div>
                  <label for="name" class="col-md-2">Date</label>
                  <div class="col-md-4">
                     <input type="date" class="form-control" id="purchase_date" name="purchase_date" placeholder="Date" value="<?php echo $date?>" required>
                  </div>
                   
                </div>
                <div class="row form-group">
                    <label for="name" class="col-md-2">Invoice</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="Invoice" value="<?php echo $invoice_no?>" required>
                    
                  </div>
                  <label for="name" class="col-md-2">Details</label>
                  <div class="col-md-4">
                     <input type="text" class="form-control" id="purchase_details" name="purchase_details" placeholder="Detail" value="<?php echo $purchase_details?>" required>
                  </div>
                   
                </div>
                   <div class="row form-group">
                    
                    <table>

                    <tr>
                      <td>
                        
                        <span style="font-size: 9px;"><b>product</b></span>
                        <select class="form-control select2" name="product_ID" id="product_ID" style="width:200px" onchange="getproductDetails(this.value)">
                          <?php
                  if (isset($_GET['med']) && !empty($_GET['med'])) {
                  $medID=$_GET['med'];
                $getproducts=getproductByID($medID);
                if ($getproducts !=0) {
                     foreach ($getproducts as $getproduct) {
                       ?>
                  <option value="<?php echo $getproduct->product_ID ?>"><?php echo $getproduct->product_name ?></option>
                  <?php 
                     }
                 }
                }
                    
                 ?>

                  <?php
                  if (isset($_GET['supplier']) && !empty($_GET['supplier'])) {?>
                      <option value=""></option>
                      <?php
                  $supplier_ID=$_GET['supplier'];
                $getproducts=getproductBySupplierID($supplier_ID);
                if ($getproducts !=0) {

                     foreach ($getproducts as $getproduct) {
                       ?>
                  <option value="<?php echo $getproduct->product_ID ?>"><?php echo $getproduct->product_name ?></option>
                  <?php 
                     }
                 }
                }else{ ?>
                  <option value="">Select Company First</option>
               <?php }
                    
               
                  ?>
                 </select>
               </td>
                       <input type="hidden" name="actual_price" value="<?php echo $actual_price ?>">
                        <input type="hidden" name="productName" value="<?php echo $productName ?>">
                        <input type="hidden" class="form-control" id="shortName" name="shortName" placeholder="Short Name" value="<?php echo $shortName ?>" >
                        <input type="hidden" name="selling_price" value="<?php echo $selling_price ?>">
                   <td> 
                    <span style="font-size: 9px;"><b>Batch Id</b></span>
                    <input type="text" class="form-control" id="batch_Id" name="batch_Id" placeholder="Batch ID"  required ></td>
                    <td> 
                    <span style="font-size: 9px;"><b>Expiry Date</b></span>
                    <input type="date" class="form-control" id="expiry_date" name="expiry_date" placeholder="expiry date"  required ></td>
                    <td><span style="font-size: 9px;"><b>Stock</b></span> <input type="number" class="form-control"  max="<?php echo $available_quantity?>" placeholder="Avail Qty" value="<?php echo $available_quantity?>" disabled></td>
                      <td> <span style="font-size: 9px;"><b>Buying Price</b></span><input type="text" class="form-control" id="supplier_price" name="supplier_price" placeholder="" value="<?php echo $supplier_price ?>" ></td>
                      
                      <td><span style="font-size: 9px;"><b>Qty </b></span><input type="number" class="form-control" id="quantity" min="0" name="quantity"   placeholder="Qty" onchange="sumTotal(this.value)" onkeyup="sumTotal(this.value)" required></td>
                      <td><span style="font-size: 9px;"><b>Total Price</b></span> <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total" disabled></td>
                      <td> <br><button type="submit" name="submit" class="btn btn-success" style="background-color:#17A589 ;color: white">Add</button></td>
                       
                    </tr>
                  </table>
                  
                   
                </div>
              </div>
            </form>
                <form method="POST" action="edit_purchase?purchaseID=<?php echo $purchase_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&supplier=<?php echo $supplier_ID ?>&det=<?php echo $purchase_details ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                <table class="table" >
                  <tr style="background-color: #17A589;color: #fff">
                    <th>product</th>
                    <th>Batch Id</th>
                    <th>Expiry Date</th>
                     <th>Quantity</th>
                     <th>Supplier Price</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                  <?php
                   $sub_total=0;
              echo   $check= checkifTempPurchaseTableIsAlreadyUpdatedWithPurchaseDetails($purchase_ID,$supplier_ID);
                 if ($check ==1) {
                   # code...

                   $getdatas=getTempPurchaseHistoryByPurchaseID($purchase_ID,$supplier_ID);
                   $sub_total=0;
                   if ($getdatas !=0) {
                      foreach ($getdatas as $getdata) {
                        $medNames=getproductByID($getdata->product_ID);
                    if ($medNames !=0) {
                     foreach ($medNames as $medName) {

                        $sub_total +=$getdata->total_amount; ?>
                  <tr>
                    <td><?php echo $medName->product_name ?></td>
                    <td><?php echo $getdata->batch_id ?></td>
                    <td><?php echo date('d-m-Y',strtotime($getdata->expire_date)) ?></td>
                    <td><?php echo $getdata->qty ?></td>
                    <td ><?php echo $getdata->supplier_price ?></td>
                    <td ><?php echo $getdata->total_amount ?></td>
                    <td><a href="delete_temp_editingpurchase_table.php?id=<?php echo $getdata->id ?>&purchaseID=<?php echo $purchase_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&supplier=<?php echo $supplier_ID ?>&det=<?php echo $purchase_details ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="nav-icon fas fa-trash"></i></a></td>
                  </tr>
                      <?php }
                   }
                 }
               } 
             }else{
              $create='';
                 $getPurchaseDetails=getPurchaseHistoryByPurchaseID($purchase_ID);
                  if ($getPurchaseDetails !=0) {
                  foreach ($getPurchaseDetails as $getPurchaseDetail) {
                    $medNames=getproductByID($getPurchaseDetail->product_ID);
                    if ($medNames !=0) {
                     foreach ($medNames as $medName) {
                    echo   $create=createTempPurchaseHistory($getPurchaseDetail->purchase_ID,$medName->product_ID,$medName->product_name,$getPurchaseDetail->supplier_ID,$getPurchaseDetail->qty,$getPurchaseDetail->supplier_price,$getPurchaseDetail->discount,$getPurchaseDetail->expire_date,$getPurchaseDetail->total_amount,$getPurchaseDetail->batch_id);
                    
                     }
                    }
                      
                    }
                  }
                    if ($create =='success') {
                        echo '<script> window.location="edit_purchase?purchaseID='.$purchase_ID.'&invoice_no='.$invoice_no.'&date='.$date.'&supplier='.$supplier_ID.'&det='.$purchase_details.'" </script>';;
                      }
                 }

                  ?>
                  
                  <tr>
                    <td colspan="4"></td>
                    <td><b>Sub Total</b></td>
                    <td ><b><?php echo $sub_total.'.00';?></b>

                      <input type="hidden" name="sub_total" id="sub_total" value="<?php echo $sub_total ?>"></td>

                  </tr>
                  
                 
                  <tr>
                    <td colspan="4"></td>
                    <td><b>Total Discount</b></td>
                    <td align="right">
                      <input type="number" class="form-control" id="discount" min="0" name="discount"   placeholder="Discount" onchange="sumDiscount(this.value)" onkeyup="sumDiscount(this.value)" value="<?php echo $total_discount?>" width="20px" required>
                      <input type="hidden" name="discount" id="discount" value="<?php echo $total_discount?>">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="4"></td>
                    <td><b>Total</b></td>
                    <td ><input type="hidden" name="grand_total" id="grand_total" value="<?php echo $sub_total.'.00';?>"><div id="dispalyGrandTotal" style="font-weight: bold"><b><?php echo $sub_total.'.00';?></b></div></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td colspan="4"></td>
                    <td><b>Amount Paid</b></td>
                    <td><input type="number" class="form-control" id="amount_paid" min="0" name="amount_paid"   placeholder="amount Paid" onchange="calBalanceAndDue(this.value)" onkeyup="calBalanceAndDue(this.value)" value="<?php echo $amount_paid?>"  width="20px" required></td>
                  </tr>
                  <tr>
                    <td colspan="4"></td>
                    <td><b id="showBalance">amount Due</b></td>
                    <td><input type="number" class="form-control" id="due" min="0" name="due" value="<?php echo $amount_due?>"  disabled>
                      <input type="hidden" name="amount_due" id="amount_due" value="<?php echo $amount_due.'.00';?>" >
                      <input type="hidden" name="balance" id="balance">
                    </td>
                   
                  </tr>
                  
                </table>
                
              </div>
               <div class="card-footer">
                <?php if (isset($_GET['purchaseID']) && isset($_GET['invoice_no']) && !empty($_GET['purchaseID']) && !empty($_GET['invoice_no'])) { ?>
                <div class="row">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-2">
                    <button type="submit" name="savePurchase" class="btn btn-info" style="background-color:# ;color: white">Save</button>
                  </div>
                  <div class="col-md-4">
                    
                  </div>
                  <div class="col-md-3">

                      
                      
                       <button type="submit" class="btn btn-danger float-right" name="cancelPurchase">Cancel Purchase</button>
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
  function calBalanceAndDue(amount_paid){
    var grand_total=parseInt(document.getElementById('grand_total').value);
    var bal=0;
    var due=0;
    if (amount_paid >= grand_total) {
      bal=amount_paid - grand_total;
      //document.getElementById('showBalance').innerHTML='Change';
      document.getElementById('due').value=0;
    }else{
      due=grand_total -amount_paid;
    //document.getElementById('showBalance').innerHTML='Amount Due';
    document.getElementById('due').value=due;
    }
    
    document.getElementById('amount_due').value=due;
     document.getElementById('balance').value=bal;

  }
</script>
<script type="text/javascript">
 function getproductDetails(med){
  var sale_date=document.getElementById('purchase_date').value;
    var details=document.getElementById('purchase_details').value;
    var supplier_ID=document.getElementById('supplier_ID').value;
     var invoice=document.getElementById('invoice_no').value;
    window.location="edit_purchase?med="+med+"&supplier="+supplier_ID +"&purchaseID=<?php echo $purchase_ID ?>&invoice_no="+invoice +"&date="+sale_date+"&det="+details;
 }
</script>
<script type="text/javascript">
  function getproductbySupplier(supplier){
    //alert('testing')
    var sale_date=document.getElementById('purchase_date').value;
    var details=document.getElementById('purchase_details').value;
    var company=document.getElementById('supplier_ID').value;
     var invoice=document.getElementById('invoice_no').value;
    window.location="edit_purchase?supplier="+supplier +"&purchaseID=<?php echo $purchase_ID ?>&invoice_no="+invoice +"&date="+sale_date+"&det="+details;
   
  }
</script>
<script type="text/javascript">
  function sumDiscount(param){
  var sub_total=parseInt(document.getElementById('sub_total').value);
  var total_disc=sub_total- param;
  document.getElementById('dispalyGrandTotal').innerHTML='<b>'+total_disc+'.00</b>';
  document.getElementById('grand_total').value=total_disc;
  }
</script>
<script type="text/javascript">
  function sumTotal(param){
  var supplier_price=parseInt(document.getElementById('supplier_price').value);
  var total= supplier_price * param;
  //alert(total);
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
