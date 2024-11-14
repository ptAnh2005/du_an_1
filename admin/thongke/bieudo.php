<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê Theo Biểu Đồ Hình Tròn</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        /* Căn giữa phần tử chứa biểu đồ */
        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; /* Khoảng cách phía trên */
        }

        /* Thiết lập kích thước cho biểu đồ */
        #piechart {
            width: 100%;
            max-width: 1100px;
            height: 800px;
        }
    </style>
</head>
<body>

<h1>THỐNG KÊ THEO BIỂU ĐỒ HÌNH TRÒN</h1>

<div class="chart-container">
    <div id="piechart"></div>
</div>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $tk) {
                extract($tk);
                if ($i == $tongdm) {
                    $dauphay = "";
                } else {
                    $dauphay = ",";
                }
                echo "['" . $tk['tendm'] . "', " . $tk['countsp'] . "]" . $dauphay;
                $i++;
            }
            ?>
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'THỐNG KÊ SẢN PHẨM THEO DANH MỤC',
            'width': 1100,
            'height': 800
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>

</body>
</html>
