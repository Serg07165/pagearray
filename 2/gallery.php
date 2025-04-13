<?php
// массив с изображениями
$images = [
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    
</head>
<body>
<h1>Галерея изображений</h1>
<a class="link" href="index.php">Назад на главную</a>
    <div class="gallery">
    <?php
    // проверяем, существует ли переменная $images и является ли она массивом
    if (isset($images) && is_array($images) && count($images) > 0) {
        // цикл для отображения изображений
        foreach ($images as $image) {
            echo "<div class='image-container'>";
            echo "<img src='images/$image' alt='$image' />";
            echo "</div>";
        }
    } else {
        // сообщение, если нет изображений
        echo "<p>Изображения не найдены.</p>";
    }
    ?>
    </div>
</body>
</html>