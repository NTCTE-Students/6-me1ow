<?php
$filename = 'log.txt';
$new_data = "Новая запись\n";

file_put_contents($filename, $new_data, FILE_APPEND);
echo "Данные добавлены!";
?>