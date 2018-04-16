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
<!--<h5>Игра "угадай число"</h5>-->
<!--<form action="gameNumeric_handler.php" method="post">-->
<!--    <div class="form-group">-->
<!--        <label for="exampleInputEmail1">Введите число</label>-->
<!--        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ваше число" name="number">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-default" name="go">Submit</button>-->
<!--</form>-->
</body>
</html>
<?php
define('MAX_NUMBER', 100);

function simpleNumbers()
{
    $flag = null;
    echo 'Простые числа. <br>';
    for ($i = 2; $i < MAX_NUMBER; $i++)
    {
        for ($j = 2; $j < $i; $j++)
        {
            if ($i%$j != 0) continue;
            else
            {
                $flag = true;
                break;
            }
        }
        if (!$flag) echo $i.' ';
        $flag = false;
    }
}
simpleNumbers();

function simpleNumbers2()
{
    echo '<br>';
    echo 'Простые числа второй способ. <br>';
    for ($i = 0; $i < MAX_NUMBER; $i++)
    {
        if ($i%2 != 0 && $i%3 != 0 && $i%5 != 0 && $i%7 != 0)
            echo $i.' ';
    }
}
simpleNumbers2();

function chetNumber()
{
    echo '<br>Четные числа.';
    echo '<br>';
    $countNumber = 0;
    for ($i = 0; $i < MAX_NUMBER; $i++)
    {
        $randNumber = mt_rand(0,99);
        if ($randNumber%2 == 0)
        {
            echo $randNumber.' ';
            $countNumber++;
        }
    }
    echo '<br>Всего '.$countNumber.' четных чисел <br>';
}
chetNumber();

function oneAndFive()
{
    echo 'Числа в промежутке [1, 5] <br>';
    $oneCount = $twoCount = $threeCount = $fourCount = $fiveCount = 0;
    for ($i = 0; $i < MAX_NUMBER; $i++)
    {
        $randVar = mt_rand(1, 5);
        echo $randVar.' ';
        switch ($randVar)
        {
            case 1:
                $oneCount++;
                break;
            case 2:
                $twoCount++;
                break;
            case 3:
                $threeCount++;
                break;
            case 4:
                $fourCount++;
                break;
            case 5:
                $fiveCount++;
                break;
            default:
                echo 'Default.<br>';
        }
    }
    echo '<br>';
    echo 'Число вхождений: <br>';
    echo '1 - '.$oneCount.'<br>';
    echo '2 - '.$twoCount.'<br>';
    echo '3 - '.$threeCount.'<br>';
    echo '4 - '.$fourCount.'<br>';
    echo '5 - '.$fiveCount.'<br>';
}
oneAndFive();
?>