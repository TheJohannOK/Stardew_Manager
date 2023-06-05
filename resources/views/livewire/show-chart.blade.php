<div id="chartContainer" style="" class="w-full h-96 p-2 ">

    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    
    

    <script >
        window.onload = function () {
            // Variable para almacenar los datos
            var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;
            var dataPointsReference = JSON.parse(JSON.stringify(dataPoints)); // Copia de dataPoints
            var intervals = <?php echo json_encode($intervals, JSON_NUMERIC_CHECK); ?>;

            // Grafico
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                
                axisY: {
                    title: "Coste"
                },
                data: [{
                    type: "bar",
                    dataPoints: dataPoints,
                }]
            });
            handleInputChange();
            chart.render();


            // Función para manejar cambios en los campos de entrada
            function handleInputChange() {
            var dias = document.getElementById('dias').value;
            var animales = document.getElementById('animales').value;
            var profesion = document.getElementById('profesion').value;

            //console.log('Profesión:', profesion);

            // Multiplicar el número de animales por cada iteración de dataPoints
            //dataPoints = JSON.parse(JSON.stringify(dataPointsReference)); // Restaurar los valores originales
            //console.log('Número de días:', dias);
            //console.log('Número de animales:', animales);
            //console.log('Profesión:', profesion);

            for (var i = 0; i < dataPoints.length; i++) {
                var intervalo = intervals[i];
                //console.log("Intervalo índice " + i + ": " + intervalo);

                var producciones = Math.floor(dias / intervalo);
                //console.log("Producciones " + i + ": " + producciones);

                if (profesion === 'ranchero') {
                    // Sumar un 10% al valor original
                    dataPoints[i].y = Math.floor(dataPointsReference[i].y * producciones * 1.1 * animales);
                } else if (profesion === 'artesano') {
                    // Sumar un 20% al valor original
                    dataPoints[i].y = Math.floor(dataPointsReference[i].y * producciones * 1.2 * animales);
                } else if (profesion === 'sin_profesion') {
                    // No se hace ninguna modificación
                    dataPoints[i].y = Math.floor(dataPointsReference[i].y * producciones * animales);
                }
            }

            // Imprimir los datos de dataPoints en la consola después de la multiplicación
            //console.log(dataPoints);
            //console.log(dataPointsReference);

            // Volver a renderizar el gráfico con los datos actualizados
            chart.render();
            }

            // Agregar eventos de cambio a los campos
            document.getElementById('dias').addEventListener('change', handleInputChange);
            document.getElementById('animales').addEventListener('change', handleInputChange);
            document.getElementById('profesion').addEventListener('change', handleInputChange);

            chart.render();
        };
    </script>

   
        
</div>

<div class="p-6 font-semibold text-orange-900 text-center md:flex ">
    <div class="p-2 " >
        <label for="dias">Número de días:</label>
        <input type="number" id="dias" name="dias" value="7" required min="0" class="border-white hover:border-orange-900 rounded-full text-center bg-amber-100">
    </div>

    <div class="p-2 ">
        <label for="animales">Número de animales:</label>
        <input type="number" id="animales" name="animales" value="1" required min="0" class="border-white hover:border-orange-900 rounded-full text-center bg-amber-100">
    </div>

    <div class="p-2 ">
        <label for="profesion">Elegir Profesión:</label>
        <select id="profesion" name="profesion" class="border-white hover:border-orange-900 rounded-full bg-amber-100">
            <option value="sin_profesion" selected >Sin Profesión</option>
            <option value="ranchero">Ranchero</option>
            <option value="artesano">Artesano</option>
        </select>
    </div>
</div>


