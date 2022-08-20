<?php

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        for ($i=$numero1; $i < $numero2; $i++) { 
            
            if($i%2!=0){
                echo $i."<br>";
            }
            
        }
        
    }else{
        echo 'No hay valores en el get';
    }

?>