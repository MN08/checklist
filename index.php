<?php

$message = "selamat datang";

file_put_contents("content.txt",$message,FILE_APPEND); //file append make data doesnt replace with the new one

$content = file_get_contents("content.txt");

echo $content;

?>