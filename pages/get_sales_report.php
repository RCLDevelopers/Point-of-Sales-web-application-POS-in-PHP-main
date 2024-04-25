<?php

    /* Include the `../src/fusioncharts.php` file that contains functions to embed the charts.*/
    //include("../includes/fusioncharts.php");
?>
<?php require_once('include/fusionchart/fusioncharts.php')?>
  <html>

    <head> 
        <title>FusionCharts | Chart Using Database (MySQL)</title>
        <!-- FusionCharts Library -->
        
         <script type="text/javascript" src="fusionchart/js/fusioncharts.js"></script>
<script type="text/javascript" src="fusionchart/js/themes/fusioncharts.theme.fusion.js"></script>
        <!--
            <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.gammel.js"></script>
            <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.zune.js"></script>
            <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.carbon.js"></script>
            <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.ocean.js"></script>
        -->
    </head>

    <body>

    <?php
        $hostdb = "localhost";  // MySQl host
        $userdb = "root";  // MySQL username
        $passdb = "";  // MySQL password
        $namedb = "aluta_brand";  // MySQL database name
        
        // Establish a connection to the database
        $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
        
        /*Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect */
        if ($dbhandle->connect_error) {
          exit("There was an error with your connection: ".$dbhandle->connect_error);
        }
        
        $strQuery = "SELECT sales_details.product_ID, SUM(sales_details.total_price) as TotalSales,product.product_ID,product.product_name as productName FROM sales_details INNER JOIN product ON sales_details.product_ID=product.product_ID GROUP BY sales_details.product_ID";
        
        $labelValueArray = array();

        $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
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
        $Chart = new FusionCharts("pie3d", "chart-1" , "600", "400", "chart-container", "json", $chartData);

        // Render the chart
        $Chart->render();
    ?>
        <h3>Chart Using Database (MySQL)</h3>
        <div id="chart-container">Chart will render here!</div>
        <br/>
        <br/>
        <a href="../index.php">Go Back</a>
    </body>

    </html>