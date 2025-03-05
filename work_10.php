<?php
$array = [
    [78, 47, 1],
    [213, 5, 25],
];
echo "<table border='1' cellpadding='5' cellspacing='0'>";

foreach ($array as $row) {
    echo "<tr>";
    
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    
    echo "</tr>";
}
echo "</table>";