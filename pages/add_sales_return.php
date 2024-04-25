<?php require_once('include/session.php') ?>
<?php require_once('include/functions/sales.php')?>
<?php require_once('include/functions/product.php')?>
<?php require_once('include/functions/purchase.php')?>
<?php require_once('include/functions/preveleges.php')?>
<?php
$role_ID=$user_role;
$privilege_ID='Add Sales Return';
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
                      <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-"></i> SALES RETUN FORM</h3>
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
          
          <div class="col-md-5">
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> invoice no</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              $invoice_no='';
              $customer_ID='';
              $sales_ID='';
               if (isset($_GET['salesID'])) {
                 $sales_ID= $_GET['salesID'];
                $getSales=getSalesByID($sales_ID);
                if ($getSales !=0) {
                foreach ($getSales as $getSale) {
                 $date=$getSale->invoice_date;
                 $invoice_no=$getSale->invoice_no;
                 $sales_details=$getSale->detail;
                 $customer_ID=$getSale->customer_ID;
                }
                }
               }
                      
              if (isset($_POST['saveReturn'])) {
                 echo $sales_ID= $_GET['salesID'];
                $sales_return_ID=$_GET['salesReturnID'];
                $total_deduction=$_POST['total_deduction'];
                $return_total=$_POST['return_total'];

            echo    $create=createSalesReturn($sales_return_ID,$customer_ID,$sales_ID,$invoice_no,$total_deduction,$return_total);
            $createDets='';
                if ($create =='success') {
                   $getdatas=getTempSalesReturnDetailsByRetunID($sales_return_ID);
                  if ($getdatas !=0) {
                    foreach ($getdatas as $getdata) {
                     echo $createDets=createSalesReturnDetails($sales_return_ID,$getdata->product_ID,$getdata->return_quantity,$getdata->return_total,$getdata->return_deduction,$getdata->deduction_percentage,$getdata->selling_price);
                 echo    $createDets=updatePurchaseAfterSalesReturnByBatch($getdata->product_ID,$getdata->batch_id,$getdata->return_quantity);
                     $currentStockOUT=getStockOUT($getdata->product_ID);
                     $newStockOUT=$currentStockOUT- $getdata->return_quantity;
                     updateStockOUT($getdata->product_ID,$newStockOUT);
                     $currentQrt=getQuantity($getdata->product_ID);
                     $new_quantity=$currentQrt + $getdata->return_quantity;
                     updateQuantityAfterSalesReturn($getdata->product_ID,$new_quantity);
                      
                    }
                    if ($createDets =='success') {
                      $del=deleteSalesReturnTempTableByID($sales_return_ID);
                      if ($del =='success') {
                        echo '<script> window.location="sales_return" </script>';
                      }
                    //   
                    }
                  }
                }
                
              
            }
              ?>
              <form method="POST" action="privilege">
                <div class="card-body">
                  
                  
                  <div class="form-group">
                  <label>Select Invoice</label>
                  <select class="form-control select2" style="width: 100%;" onchange="getInvoiceFunc(this.value)">
                     <?php
                  if (isset($_GET['salesID'])) {
                    $salesID= $_GET['salesID'];
                  $selectedinvoices=getSalesByID($salesID);
                  if ($selectedinvoices !=0) {
                    foreach ($selectedinvoices as $selectedinvoice ) { ?>
                     <option value="<?php echo $selectedinvoice->sales_ID ?>"><?php echo $selectedinvoice->invoice_no ?></option>
                    <?php }
                  }
                  
                   }else{
                    ?>
                     <option value="">Select Invoice</option>
                    <?php
                   }            
                ?>
                    <?php
                     $getSales=getSalesALL();
                     if ($getSales !=0) {
                        foreach ($getSales as $getSale ) {?>
                          <option value="<?php echo $getSale->sales_ID ?>"><?php echo $getSale->invoice_no ?></option>
                        <?php }
                     }
                    ?>
                  </select>
                </div>
               
                  
                </div>
               
              </form>
              <script type="text/javascript">
                function getInvoiceFunc(salesID){

                  window.location="add_sales_return?salesID="+salesID 
                }
              </script>
             
            </div>

          </div>
          <?php if (isset($_GET['salesID'])) { ?>
          <div class="col-md-12">
              <div class="card">
              <div class="card-header">

                
                    <?php
                    $salesReturnID='';
                    if (isset($_GET['salesReturnID']) && !empty($_GET['salesReturnID'])) {
                      $salesReturnID=$_GET['salesReturnID'];
                    }else{
                      $salesReturnID=generateSalesReturnID();
                    }
                  if (isset($_GET['salesID'])) {

                   $date='';
                   $invoice_no='';
                   $sales_details='';
                    
                      $sales_ID= $_GET['salesID'];
                      $getSales=getSalesByID($sales_ID);
                      if ($getSales !=0) {
                      foreach ($getSales as $getSale) {
                       $date=$getSale->invoice_date;
                       $invoice_no=$getSale->invoice_no;
                       $sales_details=$getSale->detail;
                      }
                      }
                
                  
                }            
              ?>
            </b>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <form method="POST" action="add_sales_return?salesID=<?php echo $sales_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&customer=<?php echo $customer_ID ?>&det=<?php echo $sales_details ?>&salesReturnID=<?php echo $salesReturnID ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row form-group">
                    <label for="name" class="col-md-2">Customer</label>
                    <div class="col-md-4">
                      <select class="form-control select2" name="customer_ID" id="customer_ID" style="width:100%" readonly>
                        <?php 
                        if (isset($_GET['salesID'])) {
                         $sales_ID=$_GET['salesID'];
                          $getSales=getSalesByID($sales_ID);
                          if ( $getSales !=0) {
                            foreach ($getSales as $getSale) { 
                               if ($getSale->customer_ID =='WalkIn') {
                                 ?>
                                <option value="WalkIn">Walking Customer</option>
                             <?php
                               }else{
                                echo $getcustomers=getcustomerByID($getSale->customer_ID);
                           if ($getcustomers !=0) {
                              foreach ($getcustomers as $getcustomer) { ?>
                                <option value="<?php echo $getcustomer->customer_ID ?>"><?php echo $getcustomer->customer_name ?></option>
                             <?php }
                           }
                         }
                            }
                          }
                         }
                        ?>
                     
                
                 </select>
                    
                  </div>
                  <label for="name" class="col-md-2">Invoice Date</label>
                  <div class="col-md-4">
                     <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Date" value="<?php echo $date?>" readonly>
                  </div>
                   
                </div>
                <div class="row form-group">
                    <label for="name" class="col-md-2">Invoice</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="Date" value="<?php echo $invoice_no?>" readonly>
                    
                  </div>
                  <label for="name" class="col-md-2">Details</label>
                  <div class="col-md-4">
                     <input type="text" class="form-control" id="sales_details" name="sales_details" placeholder="Detail" value="<?php echo $sales_details?>" readonly>
                  </div>
                   
                </div>
                   <div class="row form-group">
                    
                   
                  
                   
                </div>
              </div>
            </form>
               <form method="POST" action="add_sales_return?salesID=<?php echo $sales_ID ?>&invoice_no=<?php echo $invoice_no?>&date=<?php echo $date ?>&customer=<?php echo $customer_ID ?>&det=<?php echo $sales_details ?>&salesReturnID=<?php echo $salesReturnID ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                <table class="table" >
                  <tr style="background-color: #17A589;color: #fff">
                    <th>product Name</th>
                    <th>Selling Price</th>
                    <th>Quantity</th>
                     <th>Return Quantity</th>
                      <th>Deduction %</th>
                      <th>Total Deduction</th>
                    <th>Return Total</th>
                    <th>Action</th>
                  </tr>
                  <?php
                
                   if (isset($_GET['salesID'])) {
                    $sales_ID=$_GET['salesID'];
                    $check=  checkifReturnTempTablealredyExist($salesReturnID);
                if ($check ==0) {
                   $getDetails= getSalesDetailsBySalesID($sales_ID);
                   if ($getDetails !=0) {
                     foreach ($getDetails as $getDetail) {
                       $getMeds=getproductByID($getDetail->product_ID);
                       if ($getMeds !=0) {
                          foreach ($getMeds as $getMed ) {
                            $product_ID=$getMed->product_ID;
                            $product_name=$getMed->product_name;
                            $return_quantity=0;
                            $return_total=0;
                            $deduction_total=0;
                            $batch=$getDetail->batch_id;
                            echo $create=createTempSalesReturnTable($salesReturnID,$product_ID,$product_name,$getDetail->quantity,$return_quantity,$return_total,$deduction_total,$getDetail->selling_price,$batch);
                            if ($create =='success') {
                               echo '<script> window.location="add_sales_return?salesID='.$sales_ID.'&salesReturnID='.$salesReturnID.'" </script>';
                            }
                          }
                       }

                     }
                   }
                 }else{

                   $getdatas=getTempSalesReturnDetailsByRetunID($salesReturnID);
                   $sub_total=0;
                   $total_deduction=0;
                   if ($getdatas !=0) {
                      foreach ($getdatas as $getdata) {
                        $sub_total +=$getdata->return_total; 
                        $total_deduction +=$getdata->return_deduction ?>
                  <tr>
                    <td><?php echo $getdata->product_name ?></td>
                    <td><?php echo $getdata->selling_price ?></td>
                     <td><?php echo $getdata->quantity ?></td>
                    <td><?php echo $getdata->return_quantity ?></td>
                    <td><?php echo $getdata->deduction_percentage ?></td>
                    <td><?php echo $getdata->return_deduction ?></td>
                    <td ><?php echo $getdata->return_total ?></td>
                    <td><a href="edit_return_sale_table?id=<?php echo $getdata->id ?>&salesID=<?php echo $sales_ID ?>&returnID=<?php echo $salesReturnID ?>" class="btn btn-success btn-sm" ><i class="nav-icon fas fa-edit"></i></a></td>
                  </tr>
                      <?php
                 }
                  }
                 // createTempSalesReturnTable($sales_return_ID,$product_ID,$product_name,$quantity,$return_quantity,$return_total,$deduction_total);
 }
                   }
                  ?>
                  
                  <tr>
                    <td colspan="4"></td>
                    <td><b>Total</b></td>
                    <td ><b><?php echo $total_deduction.'.00';?></b>

                      <input type="hidden" name="total_deduction" id="total_deduction" value="<?php echo $total_deduction ?>"></td>
                      <td><b><?php echo $sub_total ;?>
                          <input type="hidden" name="return_total" id="return_total" value="<?php echo $sub_total ?>">
                    </td>
                  </tr>
                  
                 
                 
               
                  
                  
                </table>
                
              </div>
               <div class="card-footer">
                
                <div class="row">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-4">
                    <button type="submit" name="saveReturn" class="btn btn-info" style="background-color:# ;color: white">Save Changes</button>
                  </div>
                  <div class="col-md-2">
                    
                  </div>
                  <div class="col-md-3">

                      
                      
                       
                  </div>
                </div>
           
                </div>
              </form>
              </div>
            </div>
          </div>
        <?php } ?>
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
