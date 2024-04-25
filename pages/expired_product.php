<?php require_once('include/session.php') ?>
<?php require_once('include/functions/product.php')?>
<?php require_once('include/functions/suppliers.php')?>
<?php require_once('include/functions/category.php')?>
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
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        <!-- Small boxes (Stat box) -->

        <div class="row" style="padding-top: 15px;padding-bottom: 15px">
           <div class="col-md-12">
             <button type="submit" name="submit" class="btn btn-info" style="background-color: ;color: white">
              <a href="add_product" style="color:#fff"><i class="nav-icon fas fa-plus"></i> Add product</a></button>
             <button type="submit" name="submit" class="btn btn-info" style="background-color:#6610f2 ;color: white"><a href="product_expiring_soon" style="color:#fff"><i class="nav-icon fas fa-hospital"></i> product Expiring soon</a></button>
              <button type="submit" name="submit" class="btn btn-danger" style="background-color: ;color: white"><a href="expired_product" style="color:#fff"><i class="nav-icon fas fa-hospital-alt"></i>
              Expired product</a></button>
              <button type="submit" name="submit" class="btn btn-success" style="background-color:#17A589 ;color: white"><a href="product_out_of_stock" style="color:#fff"><i class="nav-icon fas fa-list"></i> Out of Stock</a></button>
              <br>
              
          </div>
        </div>
        
        <div class="row">
          
          
          <div class="col-md-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="color:red;font-size:"><i class="nav-icon fas fa-hospital"></i> EXPIRED product</h3>
              </div>
           
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <br>
                <table id="example1" class="table table-bordered table-striped text-nowrap " >
                <thead style="color:#17A589 ">
                  <tr>
                    <th class="all">#</th>
                    <th class="all">Batch No</th>
                    <th class="all">product Name</th>
                    <th class="all">Supplier</th>
                    <th class="all">Quantity Available</th>
                    <th class="all">Expiry Date</th>
                    
                  </tr>
                </thead>
                <tbody>
                     <?php
                       $getproducts=getExpiredproduct();
                      if ($getproducts !=0) {
                        $x=0;
                        foreach ($getproducts as $getproduct ) {
                          $meds=getproductByID($getproduct->product_ID);
                          if ($meds !=0) {
                            foreach ($meds as $med ) {
                          $x++;?>
                           <tr>
                    <td><?php echo $x ?></td>
                    <td><?php echo $getproduct->batch_id ?></td>
                    <td><?php echo $med->product_name ?></td>
                    
                   
                   
                  <td><?php $getSuppliers=getSuppliersByID($getproduct->supplier_ID);
                   if ($getSuppliers !=0) {
                      foreach ($getSuppliers as $getSupplier) {
                        echo $getSupplier->supplier_name;
                      }
                   }

                   ?></td>
                  <td><?php echo $getproduct->qty ?></td>
                  <td><?php echo date('d/m/Y',strtotime($getproduct->expire_date))  ?></td>
                   
                  </tr>
                     <?php   }
                      }
                    }
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
<!-- jQuery -->

<?php require_once('include/footer.php') ?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print"],
      "columnDefs" : [
        //hide the second & fourth column
        { 'visible': false, 'targets': [] }
    ],

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
<style type="text/css">
  .buttons{
    background-color: red;
  }
</style>
</body>
</html>
