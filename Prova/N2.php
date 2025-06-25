<?php

 $A = 10;  
 $B = 2;

 if ($A > $B) {
    
    for ($i = $A; $i >= $B; $i -= 2) {
        echo $i . "\n";
    }
 } else {

    echo "O número A deve ser maior que o número B.";
}
?>