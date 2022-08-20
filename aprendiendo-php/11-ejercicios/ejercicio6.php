<?php

    $numero = 1;

    for ($j=1; $j <= 10; $j++) { 
        echo "<table border='0'>
                <tr>
                    <td>$numero * </td>
                    <td>$i = </td>
                    <td>".($numero*$i)."</td>
                </tr>";
    }

    for ($k=1; $k <= 10; $k++) { 
        
        for ($i=1; $i <= 10; $i++) { 
            echo "<table border='0'>
                <tr>
                    <td>$numero * </td>
                    <td>$i = </td>
                    <td>".($numero*$i)."</td>
                </tr>";
        }

        //echo '<hr>';

        $numero++;  

    }

?>