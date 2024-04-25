<?php require_once('include/session.php') ?>
<?php require_once('include/functions/purchase.php')?>
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


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <br>
        <br>
        <div class="row">
          
          <div class="col-md-12">
          <div class="card card-">
              <div class="card-header">
              
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              $purchase_return_ID='';
              $purchase_ID=$_GET['purchaseID'];
              if (isset($_POST['submit'])) {
                $id=$_GET['id'];
                $purchase_return_ID=$_GET['returnID'];
                 $return_quantity=$_POST['return_quantity'];
                $deduction_percentage=$_POST['percent_deduction'];
                $total_deduction=$_POST['retn_deduction'];
                $total_return=$_POST['retn_total'];

               $update= updateTempPurchaseReturn($id,$purchase_return_ID,$return_quantity,$deduction_percentage,$total_deduction,$total_return);
               if ($update =='success') {
                 echo '<script> window.location="add_purchase_return?purchaseID='.$purchase_ID.'&purchaseReturnID='.$purchase_return_ID.'" </script>';
               }

              
            }
              ?>
               <form method="POST" action="edit_return_purchase_table?purchaseID=<?php echo $_GET['purchaseID'] ?>&id=<?php echo $_GET['id']?>&returnID=<?php echo $_GET['returnID'] ?>" class="form form-responsive" enctype="multipart/form-data">
                <div class="card-body">
                <table class="table" >
                  <tr style="background-color: #17A589;color: #fff">
                    <th>product Name</th>
                    <th>Supplier Price</th>
                    <th>Quantity</th>
                     <th>Return Quantity</th>
                      <th>Deduction(%)</th>
                      <th>Total Deduction</th>
                    <th>Return Total</th>
                    <th>Action</th>
                  </tr>
                  <?php
                  if (isset($_GET['id'])) {
                    # code...
                   $id=$_GET['id'];
                    $getdatas=getTempPurchaseReturnDetailByID($id);
                   $sub_total=0;
                   if ($getdatas !=0) {
                      foreach ($getdatas as $getdata) {
                        $sub_total +=$getdata->total_return; ?>
                  <tr>
                    <td><input type="text" class="form-control" name="" value="<?php echo $getdata->product_name ?>" id='product_name' readonly> </td>
                    <td><input type="text" class="form-control" name="supplier_price" value="<?php echo $getdata->supplier_price ?>" id='supplier_price' readonly></td>
                     <td><input type="text" class="form-control" name="" value="<?php echo $getdata->quantity ?>" id='quantity' readonly></td>
                    <td><input type="number" class="form-control" name="return_quantity" id="return_quantity" value="<?php echo $getdata->return_quantity ?>" onkeyup='calculateTotal()' onchange='calculateTotal()' min='0'></td>
                    <td><input type="number" class="form-control" name="percent_deduction" id="percent_deduction" value="<?php echo $getdata->deduction_percentage ?>" min='0'  onkeyup='calculateTotal()' onchange='calculateTotal()'></td>
                    <td ><input type="text" class="form-control" name="" value="<?php echo $getdata->total_deduction ?>" id='return_deduction'  readonly>
                      <input type="hidden" name="retn_deduction" id="retn_deduction">
                    </td>
                    <td ><input type="text" class="form-control" name="" value="<?php echo $getdata->total_return ?>" id='return_total'  readonly>
                      <input type="hidden" name="retn_total" id="retn_total">
                    </td>
                    <td><button type="submit" class="btn btn-success btn-sm" name="submit" ><i class="nav-icon fas fa-"></i>Save</button></td>
                  </tr>
                  <?php 
                   }
                  }
                }?>
              </table>
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

<!-- jQuery -->
<?php require_once('include/footer.php') ?>
<script type="text/javascript">
  function calculateTotal(){
   // alert(return_quantity)
   var return_quantity=parseInt( document.getElementById('return_quantity').value);
   var quantity= parseInt(document.getElementById('quantity').value);
   if (return_quantity < quantity ) {
    var supplier_price=parseInt( document.getElementById('supplier_price').value);
    
    var deduction=parseInt( document.getElementById('percent_deduction').value);
    if (deduction =='') {
      deduction=0;
    }
    var totalDeduction=0;
    var totalReturn= return_quantity * supplier_price;
     if (deduction !=0) {
      totalDeduction=(deduction/100)*totalReturn;
      totalReturn= totalReturn - totalDeduction;

     }
    // alert(totalReturn)
     document.getElementById('return_total').value=totalReturn
     document.getElementById('return_deduction').value=totalDeduction;
     document.getElementById('retn_deduction').value=totalDeduction;
     document.getElementById('retn_total').value=totalReturn;
   }else{
    alert('Return quantity can not be greater than the sold quantity');
   }
  }
</script>
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
