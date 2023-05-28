<div>
    <h1 class="font-bold">¿Cuantos animales necesitas?</h1>

    <div class="py-8">
        <form onsubmit="return validarFormulario()">
            
            <table class="table-fixed border border-separate border-spacing-1 md:container w-full ">
                <thead>
                    <tr class="bg-slate-50">
                        <th>Animales</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Bucle para iterar sobre los animales -->
                    @foreach ($animals as $index => $animal)
                    <tr class="odd:bg-white even:bg-slate-50 ">
                        <td class="text-center">{{$animal->name}}</td>
                        <!-- Se asigna un identificador único a cada campo de entrada utilizando el índice -->
                        <td class="text-center"><input type="number" name="cantidad" id="cantidad{{$index}}" class="border-slate-200 w-full md:w-48 bg-transparent text-center rounded-full " value="0" oninput="limitarCantidad(this)"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container mx-auto text-center py-8 ">
                <label for="nombreGranja">Nombre de la granja:</label>
                <input type="text" id="nombreGranja" name="nombreGranja" class="border-slate-200 rounded-full" required>
            </div>
            <div class="text-center">
                <button type="submit" class="text-center border rounded-lg bg-sky-500/75 hover:bg-sky-500/100 p-2 ">Iniciar progreso</button>
            </div>

        </form>
    </div>
</div>

<script>
    // Función para limitar la cantidad a 0 si es menor que 0
    function limitarCantidad(input) {
        // Verificar si el valor ingresado es menor que 0
        if (input.value < 0 || input.value === "" ) {
            // Asignar automáticamente el valor de 0 al campo
            input.value = 0;
        }
    }

    // Función para validar el formulario antes de enviarlo
    function validarFormulario() {
        // Obtener el valor del campo "Nombre de la granja"
        var nombreGranja = document.getElementById("nombreGranja").value;
        // Verificar si el campo está vacío
        if (nombreGranja.trim() === "") {
            // Mostrar una alerta indicando que el campo no puede estar vacío
            alert("Por favor, ingresa el nombre de la granja.");
            return false; // Evitar el envío del formulario
        }
        // Obtener todos los campos de entrada con el nombre "cantidad"
        var inputs = document.getElementsByName("cantidad");
        // Iterar sobre cada campo de cantidad
        for (var i = 0; i < inputs.length; i++) {
            // Obtener el valor de cantidad y convertirlo a un número entero
            var cantidad = parseInt(inputs[i].value);
            // Verificar si la cantidad no es un número
            if (isNaN(cantidad)) {
                // Obtener el índice del campo afectado y el nombre del animal correspondiente en la tabla
                var index = inputs[i].id.replace("cantidad", "");
                var animal = document.querySelector("table tbody tr:nth-child(" + (parseInt(index) + 1) + ") td:first-child").textContent;
                // Mostrar una alerta con un mensaje que incluye el nombre del animal y la advertencia sobre la cantidad no válida
                alert("La cantidad de animales para '" + animal + "' debe ser un número entero positivo");
                return false;
            }
        }
        // Si todas las validaciones pasan, permitir enviar el formulario
        return true;
    }
</script>
