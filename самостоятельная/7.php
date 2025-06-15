<?php
$filename = 'temp.txt';

if (file_exists($filename)) {
    unlink($filename);
    echo "Файл удален!";
} else {
    echo "Файл не существует!";
}
?>