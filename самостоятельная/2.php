<?php
$filename = 'new_file.txt';
$data = "Hello, World!";

if (file_put_contents($filename, $data)) {
    echo "Данные успешно записаны!";
} else {
    echo "Ошибка записи!";
}
?>