<?php
// ejecutar php mayor.php
    echo "Ingrese el primer número: ";
    $a = (int) fgets(STDIN);
    
    echo "Ingrese el segundo número: ";
    $b = (int) fgets(STDIN);
    
    echo "Ingrese el tercer número: ";
    $c = (int) fgets(STDIN);
    
    if ($a > $b) {
        if ($a > $c) {
            echo $a;
        } else {
            echo $c;
        }
    } else {
        if ($b > $c) {
            echo $b;
        } else {
            echo $c;
        }
    }
?>
