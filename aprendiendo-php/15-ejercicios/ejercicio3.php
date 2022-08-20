<?php

    $word = "";

    if(empty($word)){
        $word = "Hola sapo";

        echo "<b>".strtoupper($word)."</b>";

    }else{
        echo "La variable contiene almenos un caracter";
    }

?>