<?php require_once('include/session.php') ?>
<?php require_once('include/functions/sales.php')?>
<?php require_once('include/functions/settings.php')?>
<?php require_once('include/functions/customer.php')?>
<?php require_once('include/functions/product.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pharmacy Management System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
       
              <?php
              $companyName='';
              $address='';
              $phone='';
              $email='';
              $logo='';
               $profiles=getCompanyProfileAll();
               if ($profiles !=0) {
                 foreach ($profiles as $profile) {
              $companyName=$profile->name;
              $address=$profile->address;
              $phone=$profile->contact;
              $email=$profile->email;
              $logo=$profile->logo;
                 }
               }
              ?>

            <!-- Main content -->
            <?php
            $sales_ID='';
            $customer='';
            $customer_ID ='';
            $customerPhone='';
            $custmEmail='';
            $customerAddress='';
            $invoice='';
            $invoice_date='';
            $details='';
            $Discount='';
            $sub_total=0;
            $total=0;
            if (isset($_GET['guidID']) && !empty($_GET['guidID'])) {
              $sales_ID=$_GET['guidID'];
            }else{
              echo '<script> window.location="manage_sales" </script>';
            }
           $getSales=getSalesByID($sales_ID);
           if ($getSales !=0) {
              foreach ($getSales as $getSale) {
                $invoice=$getSale->invoice_no;
                $invoice_date=$getSale->invoice_date;
                $details=$getSale->detail;
                //$sub_total=$getSale->;
                 $total=$getSale->total_amount;
                 $Discount=$getSale->total_discount;
                if ($getSale->customer_ID =='WalkIn') {
                  $customer='Walking Customer';
                   $customer_ID ='WalkIn';
                }else{
               $getCustomers=getcustomerByID($getSale->customer_ID);
               if ($getCustomers !=0) {
                foreach ($getCustomers as $getCustomer) {
                 $customer=$getCustomer->customer_name;
                 $customer_ID =$getCustomer->customer_ID;
                 $customerPhone=$getCustomer->phone;
                  $customerEmail=$getCustomer->email;
                  $customerAddress=$getCustomer->address;

               }
              }
            }
               
               ?>
                
             <?php }
           }
            ?>
            <div class="invoice p-3 mb-3" id="print">
              <!-- title row -->
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                  <h4 style="text-align: center;">
                    <img src="uploads/<?php echo $logo ?>"> 
                    <br><?php echo $companyName ?>
                    
                  </h4>
                </div>
                <div class="col-md-4">
                  <small class="float-right">Date: <?php echo date('d F Y') ?></small>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                 <span style="color: #17A589"> <h3>BILLING FROM</h3></span>
                  <address>
                    <strong><?php echo $companyName ?></strong><br>
                    <?php echo $address ?><br>
                    Phone: <?php echo $phone ?><br>
                    Email: <?php echo $email ?>
                  </address>
                  
                  <strong>Invoice No:</strong><br>
                 <strong> <?php echo $invoice?></strong>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <span style="color: #17A589"> <h3>BILLING TO</h3></span>
                  <?php if ($customer_ID =='WalkIn') {?>
                    <address>
                    <strong>Walking Customer</strong><br>
                   
                  </address>
                    Invoice Date: 
                <?php echo date('d F Y',strtotime($invoice_date)) ;?>
                 <?php }else{ ?>
                  <address>
                    <strong><?php echo $customer ?></strong><br>
                   <?php echo $customerAddress ?><br>
                    Phone: <?php echo $customerPhone ?><br>
                    Email: <?php echo $email ?>
                  </address>
                  Invoice Date: 
                <?php echo date('d F Y',strtotime($invoice_date)) ; }?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Discount</th>
                      <th>Total Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      $getDetails=getSalesDetailsBySalesID($sales_ID);
                      if ($getDetails !=0) {
                        $x=0;
                         foreach ($getDetails as $getDetail) {
                      $x++;
                      $sub_total +=$getDetail->total_price;
                       $products=getproductByID($getDetail->product_ID);
                       if ($products !=0) {
                         foreach ($products as $product ) {
                          ?>
                      <tr>
                      <td><?php echo $x;?></td>
                      <td><?php echo $product->product_name;?></td>
                      <td><?php echo $getDetail->quantity;?></td>
                      <td><?php echo $getDetail->selling_price;?></td>
                      <td><?php echo$getDetail->total_discount;?></td>
                      <td><?php echo $getDetail->total_price;?></td>
                     </tr>
                       <?php
                           }
                           }
                           
                           }
                      }
                      ?>
                    
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Comments:</p>
                  

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    <?php echo $details?>
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                 

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo $sub_total?></td>
                      </tr>
                      <!--<tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>-->
                      <tr>
                        <th>Total Discount</th>
                        <td><?php echo $Discount ?></td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td><?php echo $total ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                 
                  
                  <button type="button" class="btn btn-success float-left" style="margin-right: 5px;" onclick="printcontent('print')">
                    <i class="fas fa-ptint"></i> Print invoice
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
