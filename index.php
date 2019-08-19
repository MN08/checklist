<?php

// $message = "selamat datang";

// file_put_contents("content.txt",$message,FILE_APPEND); //file append make data doesnt replace with the new one

// $content = file_get_contents("content.txt");

// echo $content;

$anggota = [
    ['nama' => 'huda', 'goldar' => 'A'],
    ['nama' => 'hud', 'goldar' => 'B'],
    ['nama' => 'hua', 'goldar' => 'O'],
    ['nama' => 'hda', 'goldar' => 'AB'],
];

$data = serialize($anggota);
file_put_contents("anggota.txt",$data);

$datas = json_encode($anggota);
file_put_contents("anggota_json.txt",$datas);

$output = file_get_contents("anggota.txt");
$output1 = file_get_contents("anggota_json.txt");

$file = unserialize($output);
print_r($file);

$file1 = json_decode($output1,true);
print_r($file1);

?>