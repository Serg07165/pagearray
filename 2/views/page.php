<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <style>
        .gallery-link {
            margin-top: 20px; 
            margin-bottom: 20px; 
            display: inline-block; 
            text-decoration: none; 
            font-size: 1.2em;
            color: #007BFF; 
        }

        .gallery-link:hover {
            text-decoration: underline; 
        }
    </style>
</head>
<body>
   <h1><?=$hello?></h1>
   <br>
   <a class="gallery-link" href="gallery.php">Перейти в галерею</a>
</body>
</html>
