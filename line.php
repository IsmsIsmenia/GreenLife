<?php
    include "db.php";
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],

            <?php
                $query="select * from chart";
                $res=mysqli_query($conn,$query);
                    while($data=mysqli_fetch_array($res)){
                        $year=$data['year'];
                        $sale=$data['sale'];
                        $expense=$data['expenses'];
                    
            ?>
            ['<?php echo $year;?>',<?php echo $sale;?>,<?php echo $expense;?>],
            <?php
                }
            ?>
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
