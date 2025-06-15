<?php
$filename = 'data.json';
$data = [];

if (file_exists($filename)) {
    $data = json_decode(file_get_contents($filename), true);
}

$new_item = ['id' => 101, 'name' => 'Новый элемент'];
$data[] = $new_item;

file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
echo "JSON-файл обновлен!";
?>