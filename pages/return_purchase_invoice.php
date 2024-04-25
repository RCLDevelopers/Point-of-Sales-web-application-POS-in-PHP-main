<?php require_once('include/session.php') ?>
<?php require_once('include/functions/purchase.php')?>
<?php require_once('include/functions/settings.php')?>
<?php require_once('include/functions/suppliers.php')?>
<?php require_once('include/functions/product.php')?>
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
                    <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-"></i>PURCHASE RETURN  INVOICE </h3>
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
            $purchase_ID='';
            $supplier='';
            $supplier_ID ='';
            $supplierPhone='';
            $supplierEmail='';
            $supplierAddress='';
            $invoice='';
            $invoice_date='';
            $details='';
            $Discount='';
            $sub_total=0;
            $total=0;
            $purchase_return_ID='';
            if (isset($_GET['purchaseID']) && isset($_GET['returnID'])) {
              $purchase_ID=$_GET['purchaseID'];
              $purchase_return_ID=$_GET['returnID'];
            }else{
              echo '<script> window.location="purchase_return" </script>';
            }
           $getPurchases=getPurchaseByID($purchase_ID);
           if ($getPurchases !=0) {
              foreach ($getPurchases as $getPurchase) {
                $invoice=$getPurchase->invoice_no;
                $invoice_date=$getPurchase->purchase_date;
                $details=$getPurchase->purchase_details;

                //$sub_total=$getSale->;
                 //$total=$getPurchase->total_amount;
                 //$Discount=$getPurchase->total_discount;
                 $getSuppliers=getSuppliersByID($getPurchase->supplier_ID);
               if ($getSuppliers !=0) {
                foreach ($getSuppliers as $getSupplier) {
                 $supplier=$getSupplier->supplier_name;
                 $supplier_ID =$getSupplier->supplier_ID;
                 $supplierPhone=$getSupplier->phone;
                  $supplierEmail=$getSupplier->email;
                  $supplierAddress=$getSupplier->address;

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

                  <h4>
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
                 <span style="color: #17A589"> <h3>INVOICED FROM</h3></span>
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
                  <span style="color: #17A589"> <h3>INVOICED TO</h3></span>
                  
                  <address>
                    <strong><?php echo $supplier ?></strong><br>
                   <?php echo $supplierAddress ?><br>
                    Phone: <?php echo $supplierPhone ?><br>
                    Email: <?php echo $supplierEmail ?>
                  </address>
                  Invoice Date: 
                <?php echo date('d F Y',strtotime($invoice_date)) ; ?>
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
                      <th>product Name</th>
                    <th>Returned Qty</th>
                     <th>Price</th>
                      <th>Deduction(%)</th>
                      <th>Total Deduction</th>
                      
                    <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      $total_deduction=0;
                      $getDetails=getPurchaseReturnDetailByID($purchase_return_ID);
                      if ($getDetails !=0) {
                        $x=0;
                         foreach ($getDetails as $getDetail) {
                      $x++;
                      $sub_total +=$getDetail->supplier_price * $getDetail->return_quantity;
                      $total_deduction +=$getDetail->total_deduction;
                       $products=getproductByID($getDetail->product_ID);
                       if ($products !=0) {
                         foreach ($products as $product ) {
                          ?>
                      <tr>
                      <td><?php echo $x;?></td>
                      <td><?php echo $product->product_name;?></td>
                      <td><?php echo $getDetail->return_quantity;?></td>
                      <td><?php echo$getDetail->supplier_price;?></td>
                      <td><?php echo $getDetail->deduction_percentage;?></td>
                      <td><?php echo $getDetail->total_deduction;?></td>
                      
                      <td><?php echo $getDetail->supplier_price * $getDetail->return_quantity;?></td>
                     </tr>
                       <?php
                           }
                           }
                           
                           }
                      }
                      ?>
                    
                    <tr>
                      <td colspan="5"><b>Total</b></td>
                      <td ><b><?php echo $total_deduction?></b></td>
                      
                      <td ><b><?php echo $sub_total?></b></td>
                    </tr>
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
                        <th style="width:50%">Sub Total:</th>
                        <td align="center"><?php echo $sub_total?></td>
                      </tr>
                      <tr>
                        <th style="width:50%">Deduction:</th>
                        <td align="center"><?php echo $total_deduction?></td>
                      </tr>
                      <!--<tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>-->
                      
                      <tr>
                        <th>Grand Total:</th>
                        <td align="center"><b><?php echo $sub_total - $total_deduction;?></b></td>
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
          </div><!-- /.col -->
        </div><!-- /.row -->
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
<script>
function printcontent(el){
var restorepage=document.body.innerHTML;
var printcontent=document.getElementById(el).innerHTML;
document.body.innerHTML=printcontent;
window.print();
document.body.innerHTML=restorepage;
}
</script>
<!-- ./wrapper -->
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
