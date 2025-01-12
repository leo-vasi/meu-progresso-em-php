<?php

function elevarNum($num, $potencia) {
    $result = 1;
    for($i = 1; $i <= $potencia; $i ++ ) {
        $result *= $num;
    }
    return $result;
}

echo elevarNum(2, 2) . "<br>";
echo elevarNum(4, 3) . "<br>";

?>