<?php require_once('include/session.php') ?>
<?php require_once('include/functions/suppliers.php')?>
<?php require_once('include/functions/category.php')?>
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
                    <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-plus"></i> ADD product </h3>
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
              if (!isset($_GET['guidID']) || empty($_GET['guidID'])) {
                echo '<script> window.location="manage_product" </script>';
              }
              if (isset($_POST['submit'])) {
                $product_ID=$_GET['guidID'];
                $product_name=$_POST['productName'];
                $supplier_id=$_POST['supplier'];
                $category=$_POST['category'];
                $quantity=$_POST['quantity'];
                $actual_price=$_POST['actual_price'];# buyong price
                $selling_price=$_POST['selling_price'];
                $status=$_POST['status'];
                  
                if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])){
                $image=$_FILES['file']['name'];
                $size=$_FILES['file']['size'];
                $type=$_FILES['file']['type'];
                $tmp_name=$_FILES['file']['tmp_name'];
                if(($type=='image/jpeg')||($type=='image/png')||($type=='image/gif')){
                $location='uploads/product/';
                if(move_uploaded_file($tmp_name,$location.$image)){
                   
                       # update
                      $update=updateproductWithImage($product_ID,$product_name,$supplier_id,$category,$quantity,$actual_price,$selling_price,$image,$status);
                       if ($update =='success') {
                        $activity='Updated product with name '.$product_name;
                          createActivity_logs($activity);
                        echo '<script> alert("product updated Successfully") </script>';
                 
                    echo '<script> window.location="edit_product" </script>';
                      
                      }else{
                     echo '<script> alert("Sorry! something went wrong Please try again") </script>';
                 
                   echo '<script> window.location="edit_product" </script>';
                      
                      }
                    

                      
                    }else{
                    echo '<script> alert("Bad Format.Please choose the correct iamge format") </script>';
                 
                 echo '<script> window.location="edit_product" </script>';
                      
                    }
                    }
                  }else{
                  
                    //update without logo
                      $update= updateproductWithoutIamage($product_ID,$product_name,$supplier_id,$category,$quantity,$actual_price,$selling_price,$status);
                     if($update =='success') {
                        $activity='Updated product with name '.$product_name;
                          createActivity_logs($activity);
                        echo '<script> alert("product updated Successfully") </script>';
                 
                   echo '<script> window.location="edit_product" </script>';
                      
                      }else{
                     echo '<script> alert("bbbb Sorry! something went wrong Please try again") </script>';
                 
                   echo '<script> window.location="edit_product" </script>';
                      
                      }

                     
                   
                  }
                }     
                 
             
            
              ?>
              <?php if (isset($_GET['guidID'])) {
                $product_ID=$_GET['guidID'];
                $getproducts=getproductByID($product_ID);
                if ($getproducts !=0) {
                   foreach ($getproducts as $getproduct) { ?>
               
              <form method="POST" action="edit_product?guidID=<?php echo $_GET['guidID'] ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                  
                   <div class="row form-group">
                    <div class="col-md-6">
                    <label for="name" class="">Product Name</label>
                    
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product Name" value="<?php echo $getproduct->product_name ?>">
                  </div>
                  <div class="col-md-6">
                  <label for="Supplier" class="">Supplier </label>
                   
                   <select class="form-control select2" style="width: 100%;" name="supplier" required>
                  
                   <?php
                     $getCurrentSuppliers=getSuppliersByID($getproduct->supplier_id);
                     if ($getCurrentSuppliers !=0) {
                        foreach ($getCurrentSuppliers as $getCurrentSupplier ) {?>
                          <option value="<?php echo $getCurrentSupplier->supplier_ID ?>"><?php echo $getCurrentSupplier->supplier_name ?></option>
                        <?php }
                     }
                    ?>
                    <?php
                     $getSuppliers=getSuppliersAll();
                     if ($getSuppliers !=0) {
                        foreach ($getSuppliers as $getSupplier ) {?>
                          <option value="<?php echo $getSupplier->supplier_ID ?>"><?php echo $getSupplier->supplier_name ?></option>
                        <?php }
                     }
                    ?>
                  </select>
                  
                  </div>
                </div>
              
                <div class="row form-group">
                    <div class="col-md-6">
                    <label for="category" class="">Categoty/Form</label>
                    
                     <select class="form-control select2" style="width: 100%;" name="category" required>
                   <option value="<?php echo $getproduct->category ?>"><?php echo getCategoryByID($getproduct->category) ?></option>
                    <?php
                     $getCategorys=getCategoryAll();
                     if ($getCategorys !=0) {
                        foreach ($getCategorys as $getCategory ) {?>
                          <option value="<?php echo $getCategory->category_ID ?>"><?php echo $getCategory->category_name ?></option>
                        <?php }
                     }
                    ?>
                  </select>
                  </div>
                  <div class="col-md-6">
                  <label for="logo" class="">Quantity </label>
                   
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" value="<?php echo $getproduct->quantity ?>">
                    
                  </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                    <label for="actual Price" class="">Buying Price</label>
                    
                    <input type="text" class="form-control" id="actual_price" name="actual_price" placeholder="Enter Buying Price" value="<?php echo $getproduct->actual_price ?>">
                  </div>
                  <div class="col-md-6">
                  <label for="Selling Price" class="">Selling Price</label>
                   
                   <input type="text" class="form-control" id="selling_price" name="selling_price" placeholder="Enter Selling Price" value="<?php echo $getproduct->selling_price ?>">
                  
                  
                  </div>
                </div>
                
                <div class="row form-group">
                    
                  <div class="col-md-6">
                    <label for="status" class="">Status</label>
                    
                   <select class="form-control select2" style="width: 100%;" name="status" id="status">
                    <option value="<?php echo $getproduct->status ?>"><?php echo $getproduct->status ?></option>
                    <option value="Available">Available</option>
                    <option value="Unavailable">Unavailable</option>
                  </select>
                  
                    
                  </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                    <label for="image" class="">Image(Optional) </label>
                   
                    <input type="file" name="file" accept="image/*" onchange="preview_image(event)" class="form-control" >
                    
                   
                  </div>
                  <div class="col-md-6">
                  
                     <?php
                      if ($getproduct->image !='') { ?>
                        <img src="uploads/product/<?php echo $getproduct->image ?>" class="img img-responsive" width="60px" height="60px" align="center" id="output_image" style="display: block" />
                      <?php }else{
                     ?>
                    <img src="" class="img img-responsive" width="60px" height="60px" align="center" id="output_image" style="display: none" />
                  <?php } ?>
                  
                  </div>
                </div>
              </div>
               <div class="card-footer">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                      <button type="submit" name="submit" class="btn btn-success" style="background-color:#17A589 ;color: white">Submit</button>
                       <button type="cancel" class="btn btn-danger float-right" >Cancel</button>
                  </div>
                </div>
                
                </div>
              </form>
              
                   
                 <?php  }
                }
              }
              ?>
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
