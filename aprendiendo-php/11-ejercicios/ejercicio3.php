<?php

    /* ($i=1; $i <= 40; $i++) { 
        
        echo ($i*$i)."<br>";

    }*/

    $i = 1;

    while($i<=40){

        echo ($i*$i);
        
        if($i!=40){

            echo ', ';

        }

        $i++;

    }

?>