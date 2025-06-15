<?php
$old = 'old_name.txt';
$new = 'new_name.txt';

if (file_exists($new)) {
    echo "Файл с новым именем уже существует!";
} elseif (rename($old, $new)) {
    echo "Файл переименован!";
} else {
    echo "Ошибка переименования!";
}
?>