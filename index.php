<?php

$todos = [];
if(file_exists('todo.txt')){
$file = file_get_contents("todo.txt");
$todos = unserialize($file);
}

if(isset($_POST['todo'])){
    $data = $_POST['todo'];
    $todos[] = [

        'todo' => $data,
        'status => 0'

    ];
    file_put_contents("todo.txt",serialize($todos));
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checklist App | Konyil</title>

<style>
body{
    background-color: #9f93b1;
}
.container{
    text-align : center;
}
hr{
    background-color : #eee;
    border : 0;
    height : 5px;
    width : 420px;
}
label{
    font-size :20px;
    color : darkgreen;
}
</style>
</head>
<body>
<div class="container">
<h1>Checklist App</h1>
<hr>
<br><br>
<form method ="POST">
    <label>have i done somthing ?</label><br><br>
    <input type="text" name="todo">
    <button type="submit">add</button>
</form>

<br><br>

<table align="center">
    <?php foreach ($todos as $key => $value) :?> 
    <tr>
    <td><input type="checkbox" name="check"></td>
    <td><label> <?php echo $value['todo']; ?></label></td>
    <td><a href="#">delete</a></td>
    </tr>
    <?php endforeach?>
</table>

</div>

</body>
</html>