<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$size = 10;

echo "<table border='1'>";
for ($i = 1; $i <= $size; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $size; $j++) {
        $result = $i * $j;
        if (isPrime($result)) {
            echo "<td style='background-color: yellow;'>$result</td>";
        } else {
            echo "<td>$result</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>