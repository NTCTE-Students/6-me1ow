<?php
$source = 'original.txt';
$dest = 'modified.txt';

if (file_exists($source)) {
    $content = file_get_contents($source);
    $new_content = str_replace('старое', 'новое', $content);
    file_put_contents($dest, $new_content);
    echo "Замена выполнена!";
} else {
    echo "Исходный файл не найден!";
}
?>