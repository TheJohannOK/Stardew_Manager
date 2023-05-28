<div id="chartContainer" style="height: 370px; width: 100%;">
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function () {
         
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Top 10 Google Play Categories - till 2017"
            },
            axisY: {
                title: "Number of Apps"
            },
            data: [{
                type: "column",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
         
        }
        </script>
</div>
