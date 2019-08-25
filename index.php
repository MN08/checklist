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
        'status' => 0

    ];
    saveData($todos);
}

if(isset($_GET['status'])){
    $todos[$_GET['key']]['status']=$_GET['status'];
    saveData($todos);
}

if(isset($_GET['hapus'])){
    unset($todos[$_GET['key']]);
    saveData($todos);
}

function saveData($todos){
    file_put_contents("todo.txt",serialize($todos));
    header('Location:index.php');

}

print_r($todos);
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
        <td>
            <input type="checkbox" name="todo" onclick="window.location.href='index.php?status=<?php echo ($value['status']==1)?'0':'1' ?>&key=<?php echo $key;?>'"
            <?php if ($value['status']==1) echo 'checked'; ?>>
        </td>
        <td>
            <label>
            <?php
                if($value['status']==1){
                    echo '<del>'.$value['todo'].'</del>'; 
                }
                else{
                    echo $value['todo']; 
                }
            ?>
            </label>
        </td>
        <td>
        <a href="index.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('are sure want to remove this todo?')">delete</a>
        </td>
    </tr>
<?php endforeach?>
</table>

</div>

</body>
</html>