<?php
$data = [
    ['Имя', 'Возраст', 'Город'],
    ['Анна', 28, 'Москва'],
    ['Иван', 35, 'Санкт-Петербург']
];

$file = fopen('output.csv', 'w');

foreach ($data as $row) {
    fputcsv($file, $row);
}
fclose($file);
echo "CSV-файл создан!";
?>