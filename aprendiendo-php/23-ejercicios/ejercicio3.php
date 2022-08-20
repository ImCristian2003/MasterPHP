<?php

    //EVALUAR SI LOS NUMEROS YA FUERON ENVIADOS
    if(isset($_POST['numero1']) && isset($_POST['numero2'])){
        //ASIGNACION DEL VALOR A LAS VARIABLES
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        //CONFIRMAR SI LAS VARIABLES EXISTEN
        if(isset($numero1) && isset($numero2)){
            //CREACION DE LA FUNCION PARA REALIZAR LAS OPERACIONES
            function realizar_operacion($numero1,$numero2){
                //CREACION DE LA VARIABLE RESULTADO
                $resultado = 0;
                //CONDICION PARA SABER SI LA OPERACION A EFECTUAR
                //CORRESPONDE A UNA SUMA
                if(isset($_POST['sumar'])){
                    $resultado = $numero1 + $numero2;
                }

                //CONDICION PARA SABER SI LA OPERACION A EFECTUAR
                //CORRESPONDE A UNA RESTA
                if(isset($_POST['restar'])){
                    $resultado = $numero1 - $numero2;
                }

                //CONDICION PARA SABER SI LA OPERACION A EFECTUAR
                //CORRESPONDE A UNA MULTIPLICACION
                if(isset($_POST['multiplicar'])){
                    $resultado = $numero1 * $numero2;
                }

                //CONDICION PARA SABER SI LA OPERACION A EFECTUAR
                //CORRESPONDE A UNA DIVISION
                if(isset($_POST['dividir'])){
                    //EVALUAR QUE EL DIVISOR NO SEA IGUAL A 0
                    if($numero2 != 0){
                        $resultado = $numero1 / $numero2;
                    }
                    else{
                        echo "No se puede dividir entre 0"."<br>";
                    }
                }
                
                //RETORNO DEL RESULTADO
                return "El resultado de la operacion es ".$resultado;

            }

        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
    <form action="" method="post">

        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <p>
            <input type="submit" value="Sumar" name="sumar">
            <input type="submit" value="Restar" name="restar">
            <input type="submit" value="Multiplicar" name="multiplicar">
            <input type="submit" value="Dividir" name="dividir">
        </p>

    </form>

    <?php

        //EVALUAR QUE LOS NUMEROS YA FUERON ENVIADOS
        if(isset($_POST['numero1']) && isset($_POST['numero2'])):

            //IMPRIMIR LA FUNCION
            echo realizar_operacion($numero1,$numero2);

        endif;
    
    ?>

</body>
</html>