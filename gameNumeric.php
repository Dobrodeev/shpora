<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Numeric</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<h5>Игра "угадай число"</h5>
<form action="gameNumeric_handler.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Введите число</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ваше число" name="number">
    </div>
    <button type="submit" class="btn btn-default" name="go">Submit</button>
</form>
</body>
</html>
<?php
?>