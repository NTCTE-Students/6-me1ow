<?php
$source_dir = __DIR__;
$backup_dir = 'backup_' . date('Y-m-d');

if (!is_dir($backup_dir)) {
    mkdir($backup_dir);
}

$files = scandir($source_dir);

foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        copy($file, "$backup_dir/$file");
    }
}
echo "Резервная копия создана!";
?>