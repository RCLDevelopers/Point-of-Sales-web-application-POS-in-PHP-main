<?php require_once('include/session.php') ?>
<?php require_once('include/functions/category.php')?>
<?php require_once('include/functions/preveleges.php')?>
<?php
$role_ID=$user_role;
$privilege_ID='Add Category';
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
  <?php require_once('include/head.php')?>
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
                      <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-list-alt"></i> CATEGORY</h3>
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
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              if (isset($_POST['submit'])) {
                $category_name=$_POST['category'];
                $check=checkifCategoryExist($category_name);
                if ($check ==1) {
                  echo '<script> alert("Category already exist") </script>';
                }else{
                    echo $save=createCategory($category_name);
                if ($save =='success') {
                  $activity='Create a new category with name '.$category_name;
                  createActivity_logs($activity);
                   echo '<script> alert("Added Category Successfully") </script>';
                 
                 echo '<script> window.location="category" </script>';
                }
             
                
              }
            }
              ?>
              <form method="POST" action="category">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category" required>
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
              </form>

            </div>

          </div>
          <div class="col-md-7">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $getCategorys=getCategoryAll();
                      if ($getCategorys !=0) {
                        $x=0;
                        foreach ($getCategorys as $getCategory) {
                        $x++;
                         ?>
                          <tr>
                            <td><?php echo $x ?></td>
                            <td><?php echo $getCategory->category_name?></td>
                            <td><a href="deactivate_category?guidID=<?php echo $getCategory->category_ID  ; ?>" onclick="return confirm('Delete Category?')"  class='btn btn-danger'><i class="fas fa-trash"></1> Delete</a></td>
                          </tr>
                          
                       <?php }
                      }
                    ?>
                    
                  </tbody>
                </table>
              </div>
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

<!-- jQuery -->
<?php require_once('include/footer.php') ?>
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
