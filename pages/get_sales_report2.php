<?php

    /* Include the `../src/fusioncharts.php` file that contains functions to embed the charts.*/
    //include("../includes/fusioncharts.php");
?>
<?php require_once('include/functions/config.php')?>
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
  
// Chart Configuration stored in Associative Array
$arrChartConfig = array(
        "chart" => array(
            "caption" => "Sales Over Time",
            "subCaption" => "In Ksh ",
            "xAxisName" => "Month",
            "yAxisName" => "Sales (Ksh)",
            "numberSuffix" => "",
            "theme" => "fusion"
        )
    );
    // An array of hash objects which stores data
  
$arrLabelValueData = array();
 $strQuery = "SELECT sales_details.product_ID, SUM(sales_details.total_price) as TotalSales,MONTH(sales_details.date_entered) as month,product.product_ID,product.product_name as productName FROM sales_details INNER JOIN product ON sales_details.product_ID=product.product_ID GROUP BY MONTH(sales_details.date_entered)";
        
        $arrLabelValueData = array();

        $result = $db->query($strQuery) or exit("Error code ({$db->errno}): {$db->error}");
        if ($result) {
            while($row = mysqli_fetch_array($result)) {
				array_push($arrLabelValueData, 
                  array(
                      "label" => date('F', mktime(0, 0, 0, $row["month"], 10)),
                      "value" => $row["TotalSales"]
                  )
              );
            }
        }

    $arrChartConfig["data"] = $arrLabelValueData;

    // JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
    $jsonEncodedData = json_encode($arrChartConfig);

    // chart object
    $Chart = new FusionCharts("column2d", "MyFirstChart" , "100%", "400", "chart-container", "json", $jsonEncodedData);

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