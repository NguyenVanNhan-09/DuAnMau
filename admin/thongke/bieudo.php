<script src="https://www.gstatic.com/charts/loader.js"></script>
<div class="flex justify-center align-center heght-full">
    <div id="myChart" style="width:99%; height:100%;"></div>
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    // Set Data
    const data = google.visualization.arrayToDataTable([
        ['danhmuc', 'countsp'],
        <?php 
            foreach($listTk as $bieudo) {
                echo "['".$bieudo['tendm']."', ".$bieudo['countsp']."],";
            }
        ?>
    ]);

    // Set Options
    const options = {
        title: 'Số lượng sản phẩm theo danh mục'
    };

    // Draw
    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
}
</script>
