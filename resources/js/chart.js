<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
window.onload = function () {
         
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Rentabilidad animales"
        },
        axisY: {
            title: "Coste"
        },
        data: [{
            type: "bar",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
     
    }