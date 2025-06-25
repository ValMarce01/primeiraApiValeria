<?php
 $valores = [12, 8, 20, 25, 4];

 $soma_pares = 0;

 foreach ($valores as $numero) {

    if ($numero % 2 == 0) {
    
        $soma_pares += $numero;
    }
}

echo "A soma dos números pares é: " . $soma_pares;
?>
