function distribuirNumero(numero, capacidad) {
    var totalGranjas = new Array(capacidad.length).fill(0); // Número de elementos en cada granja
  
    for (var i = 0; i < capacidad.length; i++) {
      console.log("Iteración:", i + 1);
      console.log("Número:", numero);
      console.log("Capacidad:", capacidad[i]);
      if (numero > 0) {
        if (i === capacidad.length - 1) {
          // Comprobar si estamos en la última iteración
          var cantidadGranjas = Math.ceil(numero / capacidad[i]); // Calcula la cantidad de granjas completas para la última capacidad
          totalGranjas[i] = cantidadGranjas; // Asigna la cantidad de granjas completas a la última posición en totalGranjas
          console.log("Cantidad de Granjas UltimaI:", cantidadGranjas);
        } else {
          // No es la última iteración
          var cantidadGranjas = Math.floor(numero / capacidad[i]); // Calcula la cantidad de granjas completas que se pueden asignar
          totalGranjas[i] = cantidadGranjas; // Asigna la cantidad de granjas completas a la posición correspondiente en totalGranjas
          numero -= cantidadGranjas * capacidad[i]; // Resta la cantidad de elementos asignados de la cantidad total
  
          
          console.log("Número Mod:", numero);
          console.log("Cantidad de Granjas:", cantidadGranjas);
        }
      }
    }
  
    return totalGranjas;
  }
  
  var capacidad = [12];
  
  for (var numero = 1; numero <= 50; numero++) {
    var resultado = distribuirNumero(numero, capacidad);
    console.log("Número:", numero);
    console.log("Resultado:", resultado);
    console.log("--------------------");
  }




  // En php
  function distribuirNumero($numero, $capacidad) {
    $totalGranjas = array_fill(0, count($capacidad), 0); // Número de elementos en cada granja

    for ($i = 0; $i < count($capacidad); $i++) {
        if ($numero > 0) {
            if ($i === count($capacidad) - 1) {
                // Comprobar si estamos en la última iteración
                $cantidadGranjas = ceil($numero / $capacidad[$i]); // Calcula la cantidad de granjas completas para la última capacidad
                $totalGranjas[$i] = $cantidadGranjas; // Asigna la cantidad de granjas completas a la última posición en totalGranjas
            } else {
                // No es la última iteración
                $cantidadGranjas = floor($numero / $capacidad[$i]); // Calcula la cantidad de granjas completas que se pueden asignar
                $totalGranjas[$i] = $cantidadGranjas; // Asigna la cantidad de granjas completas a la posición correspondiente en totalGranjas
                $numero -= $cantidadGranjas * $capacidad[$i]; // Resta la cantidad de elementos asignados de la cantidad total
            }
        }
    }

    return $totalGranjas;
}

$capacidad = array(12, 8, 4);

for ($numero = 1; $numero <= 50; $numero++) {
    $resultado = distribuirNumero($numero, $capacidad);
    echo "Número: " . $numero . "\n";
    echo "Resultado: " . json_encode($resultado) . "\n";
    echo "--------------------\n";
}




toast()
            ->success(implode(' ', $granjas_G_Nor))
            ->duration(10000)
            ->push();