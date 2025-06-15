<?php
$filename = 'text.txt';
$search = 'PHP';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    $count = substr_count($content, $search);
    echo "Найдено вхождений: $count";
} else {
    echo "Файл не найден!";
}
?>