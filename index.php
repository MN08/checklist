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
    color : white;
}
</style>
</head>
<body>
<div class="container">
<h1>Checklist App</h1>
<hr>
<br><br>
<form action="">
    <label>have i done somthing ?</label><br><br>
    <input type="text" name="todo">
    <button type="submit">save</button>
</form>

<table>
    <tr>
    <td><input type="checkbox" name="check"></td>
    <td><label> todo 1</label></td>
    <td><a href="#">delete</a></td>
    </tr>
</table>

</div>

</body>
</html>