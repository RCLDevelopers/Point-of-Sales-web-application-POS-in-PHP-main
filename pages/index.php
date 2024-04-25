<?php require_once('include/session.php') ?>
<?php require_once('include/functions/config.php')?>
<?php require_once('include/fusionchart/fusioncharts.php')?>
<?php require_once('include/functions/reports.php')?>
<?php require_once('include/functions/preveleges.php')?>
<?php
$role_ID=$user_role;
$privilege_ID='View Dashboard';
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
<!-- <script  src="include/fusionchart/fusioncharts.js"></script>-->
 <script type="text/javascript" src="fusionchart/js/fusioncharts.js"></script>
<script type="text/javascript" src="fusionchart/js/themes/fusioncharts.theme.fusion.js"></script>
<!-- <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
        <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>-->
<style type="text/css">
        g[class^='raphael-group-'][class$='-creditgroup'] {
             display:none !important;
        }
    </style>
     
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
   <?php require_once('include/side_menu.php')?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    
      </div>
    </div>
    <!-- /.content-header -->
 <?php
              $Total_profit=0;
              $total_selling_cost=0;
              $total_buying_cost=0;
             $getReports=profitLossReportAll();
                      if ($getReports !=0) {
                        $x=0;
                        foreach ($getReports as $getReport ) {
                           $total_selling_cost +=$getReport->selling_price * $getReport->quantity;
                          $total_buying_cost +=$getReport->actual_price * $getReport->quantity;
                          $Total_profit += ($getReport->selling_price * $getReport->quantity)-($getReport->actual_price * $getReport->quantity);
                          $x++;
                        }
                      }

              $total_selling_cost ;
            $total_service_salesAll=0;
            $total_Service=0;
            $getReportServices= profitLossReportAllForService();
              if ($getReportServices !=0) {
                        $x=0;
                        foreach ($getReportServices as $getReportService ) {
                           $total_service_salesAll +=$getReportService->cost * $getReportService->quantity;
                         $total_Service +=$getReportService->total_price;
                          $x++;
                        }
                      }

                       $total_expenses=0;
                        $getExpenses=expensesReportAll();
                      if ($getExpenses !=0) {
                        $x=0;
                        foreach ($getExpenses as $getExpense ) {
                           $total_expenses +=$getExpense->amount;
                          $x++;

                         }
                       }
                       $total_Sales=0;
                       $getProductSalesReps=salesReportAll();
                       if ($getProductSalesReps !=0) {
                        $x=0;
                        foreach ($getProductSalesReps as $getProductSalesRep ) {
                           $total_Sales +=$getProductSalesRep->total_amount;
                          $x++;

                         }
                       }
                       $total_service_Sales=0;
                        $getserviceSaleReps=salesServiceReportAll();
                         if ($getserviceSaleReps !=0) {
                        $x=0;
                        foreach ($getserviceSaleReps as $getserviceSaleRep ) {
                           $total_service_Sales +=$getserviceSaleRep->total_amount;
                          $x++;

                         }
                       }
             ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-medical"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total product</span>
                <span class="info-box-number">
              <?php
             $getmed=$db->query("select * from product where status='Available'");
            echo $getmed->num_rows;
             ?>
            
          </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  <br>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Customers</span>
                <span class="info-box-number">
                 <?php
             $getcustomers=$db->query("select * from customer where status='Active'");
            echo $getcustomers->num_rows;
             ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                 <br>
                </span>
               </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning" style="text-align: center;">
             

              <div class="info-box-content">
                <span class="info-box-text"> TOTAL SALES</span>
                <span class="info-box-number">
                    <?php
                   $net_sales= $total_Sales + $total_service_Sales;
             
                echo 'Ksh '.number_format($net_sales,2);
             ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  <br>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
            

              <div class="info-box-content">
                <span class="info-box-text">Today's Sales</span>
                <span class="info-box-number">
            <?php
            $date=date('Y-m-d');
           $m=date('m');
           $d=date('d');
            $total_product_sales=0;
            $total_service_sales=0;
             $getsales=$db->query("select * from sales where MONTH(date_created)='$m' and DAY(date_created)='$d' and status='Active' ");
                while($sale=$getsales->fetch_array()){
                  
                 $total_product_sales +=$sale['total_amount'];
                }
                 $getServicesales=$db->query("select * from sales_service where MONTH(date_created)='$m' and DAY(date_created)='$d' and status='Active' ");
                while($getServicesale=$getServicesales->fetch_array()){
                 $total_service_sales +=$getServicesale['total_amount'];
                }
                  $total_product_sales .'<br>';
                     $total_service_sales .'<br>';
                $total=$total_product_sales+$total_service_sales;
                echo 'Ksh '.number_format($total,2);
             ?>
                </span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  <br>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
       
      
        <!-- /.row -->
        <div class="card-footer" style="background-color:">
           
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> </span>
                      <h5 class="description-header"><?php echo 'Ksh '. number_format($total_Sales,2) ?></h5>
                      <span class="description-text">TOTAL PRODUCT SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> </span>
                      <h5 class="description-header"><?php 
                       
                       echo 'Ksh '. number_format($total_service_Sales,2) ?></h5>
                      <span class="description-text">TOTAL SERVICES SALES</span>
                      <!--<h5 class="description-header"><?php //echo 'Ksh '. number_format($total_buying_cost,2) ?></h5>
                      <span class="description-text">TOTAL PRODUCT PURCHASE COST</span>-->
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> </span>
                     <h5 class="description-header">
                       <?php
                       

                       $PROFIT=$Total_profit- $total_expenses;
                      ?><?php echo 'Ksh '. number_format($total_expenses,2)?></h5>
                      <span class="description-text">TOTAL EXPENSES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> </span>
                      <h5 class="description-header">
                         <h5 class="description-header">
                          <?php  $np=($total_service_Sales + $total_Sales )-($total_buying_cost + $total_expenses); echo 'Ksh '. number_format($np,2); ?>
                            
                          </h5>
                      <span class="description-text">NET PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
             
                <!-- /.row -->
              </div>
              <br>
       <div class="row">

          <div class="col-md-7">
          
             <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Product Sales Over Time</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                  <?php

// Chart Configuration stored in Associative Array
$arrChartConfig = array(
        "chart" => array(
            "caption" => "Product Sales Over Time",
            "subCaption" => "In Ksh ",
            "xAxisName" => "Month",
            "yAxisName" => "Sales (Ksh)",
            "numberSuffix" => "",
            "theme" => "fusion"
        )
    );
    // An array of hash objects which stores data
     $year=date('Y');
$arrLabelValueData = array();
 $strQuery = "SELECT SUM(sales.total_amount) as TotalSales,MONTH(sales.date_created) as month FROM sales WHERE YEAR(sales.date_created)=$year GROUP BY MONTH(sales.date_created)";
        
        $arrLabelValueData = array();

        $result = $db->query($strQuery) or exit("Error code ({$db->errno}): {$db->error}");
        if ($result) {
            while($row = mysqli_fetch_array($result)) {
        array_push($arrLabelValueData, 
                  array(
                      "label" =>getMonthString($row["month"]),
                      "value" => $row["TotalSales"]
                  )
              );
            }
        }

    $arrChartConfig["data"] = $arrLabelValueData;

    // JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
    $jsonEncodedData = json_encode($arrChartConfig);

    // chart object
    $Chart = new FusionCharts("column2d", "MyFirstChart" , "100%", "300", "chart-container", "json", $jsonEncodedData);

    // Render the chart
    $Chart->render();
    ?>
                <div id="chart-container">Chart will render here!</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
            </div>
            <div class="col-md-5">
            <!-- PIE CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Sales By Product</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
               <!--   <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>-->
                </div>
              

        <?php
       $strQuery = "SELECT sales_details.product_ID, SUM(sales_details.total_price) as TotalSales,product.product_ID,product.product_name as productName FROM sales_details INNER JOIN product ON sales_details.product_ID=product.product_ID GROUP BY sales_details.product_ID";
        
        $labelValueArray = array();

        $result = $db->query($strQuery) or exit("Error code ({$db->errno}): {$db->error}");
        if ($result) {
            while($row = mysqli_fetch_array($result)) {
              array_push($labelValueArray, 
                  array(
                      "label" => $row["productName"],
                      "value" => $row["TotalSales"]
                  )
              );
            }
        }

        $chartConfigObj = array ( "chart" =>  
                            array( 
                                "caption" => "Sales by Product",
                                "xAxisName" => "Product",
                                "yAxisName" => "Total Sales", 
                                "numberSuffix" => "K", 
                                "theme" => "fusion"
                            )
                          );
        
        $chartConfigObj["data"] = $labelValueArray;

        $chartData = json_encode($chartConfigObj);

        // chart object
        $Chart = new FusionCharts("doughnut2d", "chart-1" , "100%", "400", "chart-containerr", "json", $chartData);

        // Render the chart
        $Chart->render();
    ?>
    <div id="chart-containerr"></div>
              </div>
              <!-- /.card-body -->
            </div>
            

          </div>
          
        </div>
        <!-- /.row -->
        <div class="row">

          <div class="col-md-7">
          
             <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Service Done Over Time</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                  <?php

// Chart Configuration stored in Associative Array
$arrChartConfig = array(
        "chart" => array(
            "caption" => "Service Sales Over Time",
            "subCaption" => "In Ksh ",
            "xAxisName" => "Month",
            "yAxisName" => "Sales (Ksh)",
            "numberSuffix" => "",
            "theme" => "fusion"
        )
    );
    // An array of hash objects which stores data
     $year=date('Y');
$arrLabelValueData = array();
 $strQuery = "SELECT SUM(sales_service.total_amount) as TotalSales,MONTH(sales_service.date_created) as month FROM sales_service WHERE YEAR(sales_service.date_created)=$year GROUP BY MONTH(sales_service.date_created)";
        
        $arrLabelValueData = array();

        $result = $db->query($strQuery) or exit("Error code ({$db->errno}): {$db->error}");
        if ($result) {
            while($row = mysqli_fetch_array($result)) {
        array_push($arrLabelValueData, 
                  array(
                      "label" =>getMonthString($row["month"]),
                      "value" => $row["TotalSales"]
                  )
              );
            }
        }

    $arrChartConfig["data"] = $arrLabelValueData;

    // JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
    $jsonEncodedData = json_encode($arrChartConfig);

    // chart object
    $Chart_s = new FusionCharts("column2d", "MySecondChart" , "100%", "300", "chart-container_s", "json", $jsonEncodedData);

    // Render the chart
    $Chart_s->render();
    ?>
                <div id="chart-container_s">Chart will render here!</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
            </div>
            <div class="col-md-5">
            <!-- PIE CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Service Sales</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
               <!--   <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>-->
                </div>
              

        <?php
       $strQuery = "SELECT sales_service_detail.service_ID, SUM(sales_service_detail.total_price) as TotalSales,service.service_ID,service.service_name as serviceName FROM sales_service_detail INNER JOIN service ON sales_service_detail.service_ID=service.service_ID GROUP BY sales_service_detail.service_ID";
        
        $labelValueArray = array();

        $result = $db->query($strQuery) or exit("Error code ({$db->errno}): {$db->error}");
        if ($result) {
            while($row = mysqli_fetch_array($result)) {
              array_push($labelValueArray, 
                  array(
                      "label" => $row["serviceName"],
                      "value" => $row["TotalSales"]
                  )
              );
            }
        }

        $chartConfigObj = array ( "chart" =>  
                            array( 
                                "caption" => "Sales by Service",
                                "xAxisName" => "Product",
                                "yAxisName" => "Total Sales", 
                                "numberSuffix" => "K", 
                                "theme" => "fusion"
                            )
                          );
        
        $chartConfigObj["data"] = $labelValueArray;

        $chartDataa = json_encode($chartConfigObj);

        // chart object
        $Chartserv = new FusionCharts("pie3d", "chart-2" , "100%", "400", "chart-container-service", "json", $chartDataa);

        // Render the chart
        $Chartserv->render();
    ?>
    <div id="chart-container-service">mmm</div>
  
              </div>
              <!-- /.card-body -->
            </div>
            

          </div>
          
        </div>
   
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
<?php //require_once('include/footer.php') ?>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
   // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
   // new Chart(areaChartCanvas, {
   //   type: 'line',
   //   data: areaChartData,
  //    options: areaChartOptions
   // })

    //-------------
    //- LINE CHART -
    //--------------
    //var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
   

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    //var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
   
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
  
  })
</script>
</body>
</html>
