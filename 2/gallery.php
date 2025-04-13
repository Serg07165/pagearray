<?php
// массив с изображениями
$images = [
    '01.jpg',
    '02.jpg',
    '03.jpg',
    '04.jpg',
    '05.jpg',
    '06.jpg',
    '07.jpg',
    '08.jpg'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .image-container {
            flex: 1 1 calc(25% - 10px);
            box-sizing: border-box;
        }
        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .link {
        margin-bottom: 20px; 
        display: inline-block; 
        text-decoration: none; 
        color: #007BFF; 
        }

        .link:hover {
            text-decoration: underline; 
        }
    </style>
</head>
<body>
<h1>Галерея изображений</h1>
<a class="link" href="index.php">Назад на главную</a>
    <div class="gallery">
    <?php
    // проверяем переменную $images существует и является ли она массивом
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