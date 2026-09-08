<?php
// Créer une fonction calcule() qui prend 3 paramètres : $a, $operation, $b
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+': return $a + $b;
        case '-': return $a - $b;
        case '*': return $a * $b;
        case '/': return $b != 0 ? $a / $b : 0;
        case '%': return $b != 0 ? $a % $b : 0;
        default: return 0;
    }
}
?>
