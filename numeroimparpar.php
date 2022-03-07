<?php
        $n1 = $_POST["n1"];
        
        if($n1%2==0)
        {
            echo "<font color=blue>" . "Número par";   
        }
        else
        {
            echo "<font color=#FF0000>" . "Número ímpar";    
        }
    ?>