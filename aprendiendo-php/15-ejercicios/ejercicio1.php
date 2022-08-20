<?php

    function mostrarArray($numeros){

        $resultado = "";

        foreach($numeros as $numero){
            
            $resultado .= $numero."<br>";
        }

        return $resultado;

    }

    $numeros = [32,24,475,234,123,43,98,87];

    echo "<h1>Mostrar array</h1>";
    echo mostrarArray($numeros);

    echo "<h1>Ordenar array</h1>";
    // sort($numeros);
    echo mostrarArray($numeros);

    echo "<h1>Longitud Array</h1>";
    echo count($numeros)." Caracteres.";
    echo "<br>";
    var_dump($numeros);

    echo "<h1>Buscar array</h1>";
    echo "Posicion ".$result = array_search(87,$numeros);
    echo " = ";
    echo $numeros[$result];

    $numeroBuscar = 87;
    $encontrado = 0;

    for ($i=0; $i < 8; $i++) { 
        if($numeroBuscar==$numeros[$i]){
            $encontrado = $i;
        }
    }
    echo "<br>";
    echo "El numero ".$numeroBuscar." se encuentra en la posicion ".$encontrado; 

?>