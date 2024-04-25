<?php require_once('include/session.php') ?>
<?php require_once('include/functions/suppliers.php')?>
<?php require_once('include/functions/purchase.php')?>
<?php// require_once('include/functions/category.php')?>
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

      <!--  <div class="row" style="padding-top: 15px;padding-bottom: 15px">
           <div class="col-md-12">
             <button type="submit" name="submit" class="btn btn-info" style="background-color: ;color: white">
              <a href="add_product" style="color:#fff"><i class="nav-icon fas fa-plus"></i> Add product</a></button>
           
              <br>
              
          </div>
        </div>-->
        
        <div class="row">
          
          
          <div class="col-md-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="color: #17A589;font-size:"><i class="nav-icon fas fa-hospital"></i> MANAGE PURCHASE RETURN</h3>
                <button type="submit" name="submit" class="btn btn-info float-right" style="background-color: ;color: white">
              <a href="add_purchase_return" style="color:#fff"><i class="nav-icon fas fa-plus"></i> Add Return</a></button>
              </div>
           
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <br>
                <table id="example1" class="table table-bordered table-striped text-nowrap " >
                <thead style="color:#17A589 ">
                  <tr>
                    <th class="all">#</th>
                    <th class="all">Invoice No</th>
                    <th class="all">Manufacturer Name</th>
                    <th class="all">Deduction</th>
                    <th class="all">Net Return</th>
                     
                    <th class="all"></th>
                  </tr>
                </thead>
                <tbody>
                     <?php
                     $total=0;
                      $getPurchases=getPurchaseReturnALL();
                      if ($getPurchases !=0) {
                        $x=0;
                        foreach ($getPurchases as $getPurchase ) {
                          $total+=$getPurchase->net_return;
                          $x++;?>
                           <tr>
                    <td><?php echo $x ?></td>
                    <td><?php echo $getPurchase->invoice_no ?></td>
                    <td>
                      <?php 
                    
                      $getSuppliers=getSuppliersByID($getPurchase->supplier_ID) ;
                    if ($getSuppliers !=0) {
                       foreach ($getSuppliers as $getSupplier) {
                          echo $getSupplier->supplier_name;
                       }
                    }
                  
                    ?>
                      
                    </td>
                   
                    
                  
                  <td><?php echo $getPurchase->total_deduction ?></td>
                  <td><?php echo $getPurchase->net_return ?></td>
                  
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        
                        <a href="return_purchase_invoice?returnID=<?php echo $getPurchase->purchase_return_ID ?>&purchaseID=<?php echo $getPurchase->purchase_ID ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        
                      </div>
                    </td>
                  </tr>
                     <?php   }
                      }
                     ?>
                  

                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="4" class="text-right"><b>Total</b></td>
                    <td colspan="2"><b><?php echo $total?></b></td>
                  </tr>
                </tfoot>
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
