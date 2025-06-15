<?php
$log_file = 'app.log';
$message = date('Y-m-d H:i:s') . " - Событие: Пользователь вошел в систему\n";
file_put_contents($log_file, $message, FILE_APPEND);
echo "Запись добавлена в лог!";
?>