<?php
function add($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new InvalidArgumentException("Both parameters must be numeric.");
    }
    
    return $a + $b;
}
?>
