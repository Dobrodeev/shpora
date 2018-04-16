<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
for ($x = 0; $x < 10; $x++)
    echo $x.' ';
echo '<br>';
//echo '<table border="1" width="50%" rules="all" class="table table-striped">';
echo '<table class="table table-striped table-bordered">';
for ($i = 1; $i < 10; $i++)
{
    echo '<tr>';
    for ($j = 1; $j < 10; $j++)
    {
        echo '<td>'.$i*$j.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
<h4>Пример формы</h4>
<form action="#" method="post" name="reg" class="form-horizontal" enctype="multipart/form-data">
    <div class="control-group">
        <input type="text" placeholder="Vase Imya"  required name=arr['reg']['firstname']><br>
        <input type="text" placeholder="Vasha Familia"  required name=arr['reg']['lastname']><br>
        <input type="password" placeholder="Parol" required name=arr['reg']['password'] formmethod="post" ><br>
        <input type="file" name="userfile"><br><br>
        <span>Ваш пол</span><br>
        <label for="m">male</label> <input type='radio' name="arr['reg'][pol]" value="male"  id="m">
        <label for="z">female</label> <input type='radio' name="arr['reg'][pol]" value="female"  id="z"><br>
        <span>Ваш город</span><br>
        <select name="arr[gorod][]">
            <option value="Kiev">Kiev</option>
            <option value="Kharkov">Kharkiv</option>
            <option value="Lviv">Lviv</option>
        </select><br><br>
        <div class="form-actions">
            <input type="submit" value="Регистрация" name="go" class="btn btn-primary">
            <input type="reset" value="Сброс" name="Сброс" class="btn">
        </div>
    </div>
</form>
<?php
if (isset($_POST['go'])) {
    echo '<pre>';
    print_r($_POST['arr']);
    echo '</pre>';
}
?>
</body>
</html>