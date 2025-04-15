<?php require_once 'connection1.php'?>

<?php 
    $query = "select * from pai";
    $result = mysqli_query($conn, $query);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pai Chart</title>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work',     11],


                            <?php
                                while ($chart = mysqli_fetch_assoc($result))
                                    {
                                        echo
                                    }
                            
                            ?>
                    
                    ]);

                    var options = {
                    title: 'My Daily Activities'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
                </script>


</head>
<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>