<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];
    $allowed = ['image/jpeg', 'image/png'];
    $max_size = 2 * 1024 * 1024; // 2MB

    if (in_array($file['type'], $allowed)) {
        if ($file['size'] <= $max_size) {
            move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
            echo "Файл загружен!";
        } else {
            echo "Файл слишком большой!";
        }
    } else {
        echo "Недопустимый тип файла!";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Загрузить">
</form>