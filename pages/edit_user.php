<?php require_once('include/session.php') ?>
<?php require_once('include/functions/user.php')?>
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
                     <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-user"></i> ADD USER </h3>
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
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">USER DETAILS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              if (isset($_POST['submit'])) {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                echo $role=$_POST['role'];
                $user_ID=$_GET['guidID'];
                $status=$_POST['status'];
                if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])){
                $image=$_FILES['file']['name'];
                $size=$_FILES['file']['size'];
                $type=$_FILES['file']['type'];
                $tmp_name=$_FILES['file']['tmp_name'];
                if(($type=='image/jpeg')||($type=='image/png')||($type=='image/gif')){
                $location='uploads/';
                if(move_uploaded_file($tmp_name,$location.$image)){
                      $save=updateWithImageUser($user_ID,$name,$email,$role,$phone,$image,$status);
                      if ($save =='success') {
                        $activity='Updated user Details for '.$name. '  with Email '.$email;
                        createActivity_logs($activity);
                        echo '<script> alert("User updated Successfully") </script>';
                 
                    //echo '<script> window.location="edit_user?guidID='.$user_ID.'" </script>';
                      
                      }else{
                     echo '<script> alert("Sorry! something went wrong Please try again") </script>';
                 
                   echo '<script> window.location="add_user" </script>';
                      
                      }
                    }else{
                    echo '<script> alert("Bad Format.Please choose the correct iamge format") </script>';
                 
                 echo '<script> window.location="add_user" </script>';
                      
                    }
                    }
                  }else{
                   // echo "not set";
                    //save without image
                   $save=updateWithoutImageUser($user_ID,$name,$email,$role,$phone,$status);
                    if ($save='success') {
                       $activity='Updated user Details for '.$name. '  with Email '.$email;
                        createActivity_logs($activity);
                  // echo '<script> alert("Password updated Successfully") </script>';
                 
                 echo '<script> window.location="edit_user?guidID='.$user_ID.'" </script>';
                 }
                  }
                }     
                 
             
            
              ?>
             
             <?php
              if (isset($_POST['changePassord'])) {
                 $password=md5($_POST['password']);
                 $user_ID=$_GET['guidID'];
               $update=updateUserPassword($user_ID,$password);
               if ($save='success') {
                   echo '<script> alert("User updated Successfully") </script>';
                 
                 echo '<script> window.location="edit_user?guidID='.$user_ID.'" </script>';
                 }else{
                   echo '<script> alert("Sorry!.Something went wrong.Please try again") </script>';
                 
                 echo '<script> window.location="edit_user?guidID='.$user_ID.'" </script>';
                 }
              }
             ?>
            </div>

          </div>
          
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Change Password</a>
                  </li>
                 
                  
                </ul>
              </div>
               <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                       <?php
              if (isset($_GET['guidID']) && !empty($_GET['guidID'])) { 
                 $userID=$_GET['guidID'];
                 $getUsers=getUserByID($userID);
                 if ($getUsers !=0) {
                   foreach ($getUsers as $getUser) {
                     
                 
                ?>
                
           
              <form method="POST" action="edit_user?guidID=<?php
              echo$_GET['guidID'] ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                  
                   <div class="row form-group">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-4">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $getUser->name ?>" placeholder="Enter Name">
                  </div>
                  <label for="email" class="col-md-2">Email </label>
                    <div class="col-md-4">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $getUser->email ?>" placeholder="Enter email">
                  </div>
                  </div>
                  <div class="row form-group">
                    <label for="phone" class="col-md-2">Phone No</label>
                    <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $getUser->phone ?>" placeholder="Enter Phone">
                  </div>
                 <label for="status" class="col-md-2">Status</label>
                    <div class="col-md-4">
                      <select class="form-control select2" style="width: 100%;" name="status" id="status">
                    <option value="<?php echo $getUser->status ?>"><?php echo $getUser->status ?></option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                  </select>
                    </div>
                  </div>
                   <div class="row form-group">
                    <label for="role" class="col-md-2">User Role</label>
                    <div class="col-md-4">
                    <select class="form-control select2" style="width: 100%;" name="role" id="role">
                    <option value="<?php echo $getUser->role ?>"><?php echo getRolesByID($getUser->role) ?></option>
                    <?php
                     $getRoles=getRolesAll();
                     if ($getRoles !=0) {
                        foreach ($getRoles as $getRole ) {?>
                          <option value="<?php echo $getRole->role_ID ?>"><?php echo $getRole->role ?></option>
                        <?php }
                     }
                    ?>
                  </select>
                  </div>
                  <label for="exampleInputEmail1" class="col-md-2">Image </label>
                    <div class="col-md-4">
                    <input type="file" name="file" accept="image/*" onchange="preview_image(event)" class="form-control" >
                    <br>
                     <?php
                      if ($getUser->image !='') { ?>
                        <img src="uploads/<?php echo $getUser->image ?>" class="img img-responsive" width="60px" height="60px" align="center" id="output_image" style="display: block" />
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
                 <?php   }
                 }
               }
              ?>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
              <form method="POST" action="edit_user?guidID=<?php
              echo$_GET['guidID'] ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row form-group">
                   
                  <label for="password" class="col-md-3">New Password </label>
                    <div class="col-md-8">
                    <input type="text" class="form-control" id="password" name="password"  placeholder="Enter New Password" required>
                  </div>
                  </div>
                </div>
                <div class="card-footer">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                      <button type="submit" name="changePassord" class="btn btn-success" style="background-color:#17A589 ;color: white">Submit</button>
                  </div>
                </div>
                
                </div>
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
