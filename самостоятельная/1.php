<?php
$filename = 'example.txt';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo nl2br($content); // nl2br для сохранения переносов строк
} else {
    echo "Ошибка: Файл $filename не найден!";
}
?>