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
        <input type="text" placeholder="Your name"  required name=arr[reg][firstname]><br>
        <input type="text" placeholder="Your surname"  required name=arr[reg][lastname]><br>
        <input type="text" placeholder="patronymic" required name="arr[reg][patronymiv]"><br>
        <input type="text" placeholder="phone" required name="arr[reg][phone]"><br>
        <input type="password" placeholder="password" required name=arr[reg][password] formmethod="post" ><br>
        <input type="file" name="userfile"><br><br>
        <span>Ваш пол:</span><br>
        <label for="m">male</label> <input type='radio' name="arr[reg][pol]" value="male"  id="m">
        <label for="z">female</label> <input type='radio' name="arr[reg][pol]" value="female"  id="z"><br>
        <span>Ваш город:</span><br>
        <select name="arr[gorod][]">
            <option value="Kiev">Kiev</option>
            <option value="Kharkov">Kharkiv</option>
            <option value="Lviv">Lviv
            <option value="Lutsck">Lutsk</option>
            <option value="Rovno">Rovno</option>
            <option value="Hmelnickii">Hmelnickii</option>
            <option value="Ternopil">Ternopil</option>
            <option value="Ivano-Francovsc">Ivano-Francovsc</option>
            <option value="Chercasy">Chercasy</option>
            <option value="Chernovci">Chernovci</option>
            <option value="Chernigov">Chernigov</option>
            <option value="Fastov">Fastov</option>
            <option value="Sarny">Sarny</option>
            <option value="Mirgorod">Mirgorod</option>
            <option value="Sumy">Sumy</option>
            <option value="Herdon">Herson</option>
            <option value="Odessa">Odessa</option>
            <option value="Nicolaev">Nicolaev</option>
            <option value="Kirovograd">Kirovograd</option>
            <option value="Uzgorod">Uzgorod</option>
            <option value="Mucachevo">Mucachevo</option>
            <option value="Hust">Hust</option>
            <option value="Solotvino">Solotvino</option>
            <option value="Dubno">Dubno</option>
            <option value="Irpen">Irpen</option>
            <option value="Bucha">Bucha</option>
        </select><br><br>
        <div class="form-actions">
            <input type="submit" value="Регистрация" name="go" class="btn btn-primary">
            <input type="reset" value="Сброс" name="Сброс" class="btn">
        </div>
    </div>
</form>
<?php
if (isset($_POST['go']))
{
    echo '<pre>';
    print_r($_POST['arr']);
    echo '</pre>';
    $array = $_POST['arr'];
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
    echo $array['gorod'][0].'<br>';
    echo $array['reg']['firstname'].'<br>';
    $someoneArray = [
            'registered'=>['age'=>27, 'job'=>'nothing'],
        'hobbies'=>['boxing', 'kickboxing', 'muai-tai', 'kosiki karate']
    ];
    echo $someoneArray['registered']['age'].'<br>';
}

function arrayExample()
{
    $web=array('HTML','CSS','JavaScript','PHP','MySQL');
    echo $web[0].' '; // выведет 'HTML'
    echo $web[2].' '; // выведет 'JavaScript'
    echo $web[3].' '; // выведет 'PHP'
    echo '<br>';
}

arrayExample();

function arrayExample2()
{
    $web=array(1=>'HTML',2=>'CSS',3=>'JavaScript',4=>'PHP',5=>'MySQL');
    echo $web[1].'<br>'; // HTML
    echo $web[2].'<br>'; // CSS
    echo $web[4].'<br>'; // PHP
    writeArray($web);
}

arrayExample2();

function arrayIndex()
{
    $day[]='Понедельник'; // индекс 0
    $day[]='Вторник'; // 1
    $day[]='Среда'; // 2
    $day[]='Четверг'; // 3
    $day[]='Пятница'; // 4
    $day[]='Суббота'; // 5
    $day[]='Воскресенье'; // 6
    writeArray($day);
    writeArrayDump($day);
}

function writeArray($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function writeArrayDump($arr)
{
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
}
arrayIndex();
// from lection5
function hello($name){
    echo "Hello, $name!";
//    global $name;
    $name = 'Vasya';
}

hello('Zack');
$name = 'Mike';

hello($name);
echo $name.'<br>';
// Здесь уже будет Vasya
echo 'Тернарная операция <br>';

function modulChisla($chislo)
{
    $chislo = $chislo < 0 ? -$chislo : $chislo;
    echo $chislo.'<br>';
}
$chislo_rand = mt_rand(-3,3);
//echo 'Было: '.$chislo_rand.' стало: '.modulChisla($chislo_rand);
modulChisla(-3);
echo $chislo_rand.'<br>';
echo modulChisla($chislo_rand);

// if a==true echo 'Hello' else echo 'false'
//$a = mt_rand(0,1);
//if ($a == 1)
//    $b = true;
//else $b = false;
//echo '$b = '.$b.'<br>';
$b = false;
echo '$b = '.$b.'<br>';
function ternarOperator($a)
{
    echo $a == true ? 'Hello<br>' : 'false<br>';
}
ternarOperator($b);
$variant = mt_rand(1,2);
echo '$variant = '.$variant.'<br>';
function ternarIf($var)
{
    $var = $var == 1 ? 'ножницы' : 'бумага';
    echo $var.'<br>';
}
ternarIf($variant);

function randGenerators()
{
    for ($i = 0; $i < 10; $i++)
    {
        echo rand(1,10).' ';
    }
    echo '<br>';
    for ($i = 0; $i < 10; $i++)
    {
        echo mt_rand(1,10).' ';
    }
}
randGenerators();
?>
</body>
</html>