<?php
$source = 'original.txt';
$dest = 'copy.txt';

if (file_exists($dest)) {
    echo "Файл назначения уже существует!";
} elseif (copy($source, $dest)) {
    echo "Файл скопирован!";
} else {
    echo "Ошибка копирования!";
}
?>