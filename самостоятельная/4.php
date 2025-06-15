<?php
$filename = 'multiline.txt';

if (file_exists($filename)) {
    $lines = count(file($filename));
    echo "Количество строк: $lines";
} else {
    echo "Файл не существует!";
}
?>