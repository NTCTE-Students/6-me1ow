<?php
echo '<table border="1">';
$file = fopen('data.csv', 'r');

while (($row = fgetcsv($file)) !== false) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo '</tr>';
}
fclose($file);
echo '</table>';
?>