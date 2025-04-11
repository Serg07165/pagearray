<?php
$hello = "Hello World!";
$age = 15;

$content = file_get_contents('views/page.html');
$content = str_replace('{{ $hello }}', $hello, $content);
echo $content;
