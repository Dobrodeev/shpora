<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associated arrays</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php

$name[0] ="Петров";
$name[1] ="Иванов";
$name[2] ="Сидоров";
$name[3] ="Ветрова";
$name[4] ="Филатова";
$name[5] ="Бубнов";
$name[6] ="Пескова";
$name[7] ="Ленинов";

$matematika[0] ="4";
$matematika[1] ="4";
$matematika[2] ="5";
$matematika[3] ="2";
$matematika[4] ="4";
$matematika[5] ="4";
$matematika[6] ="5";
$matematika[7] ="4";

$fizika[0] ="3";
$fizika[1] ="5";
$fizika[2] ="3";
$fizika[3] ="3";
$fizika[4] ="4";
$fizika[5] ="3";
$fizika[6] ="5";
$fizika[7] ="3";

$himiya[0] ="3";
$himiya[1] ="4";
$himiya[2] ="4";
$himiya[3] ="3";
$himiya[4] ="4";
$himiya[5] ="3";
$himiya[6] ="4";
$himiya[7] ="3";

$russkiy[0] ="5";
$russkiy[1] ="5";
$russkiy[2] ="3";
$russkiy[3] ="4";
$russkiy[4] ="5";
$russkiy[5] ="4";
$russkiy[6] ="2";
$russkiy[7] ="5";

echo var_dump($name).'<br>';
echo var_dump($matematika).'<br>';
echo var_dump($fizika).'<br>';
echo var_dump($himiya).'<br>';
echo var_dump($russkiy).'<br>';
// Можно все запилить в один массив:
echo '<br><br>';
$marks = array(
    array(
        'name'=>'Петров',
        'subjects'=>array(
            'math'=>4,
            'physics'=>3,
            'chemistry'=>3,
            'russian'=>5
        ),
    ),
    array(
        'name'=>'Иванов',
        'subjects'=>array(
            'math'=>4,
            'physics'=>5,
            'chemistry'=>4,
            'russian'=>5
        ),
    ),
);
echo var_dump($marks).'<br>';
echo '<br><br>';
echo ' У Иванова по химии: '.$marks['Иванов']['chemistry'].'<br>';
echo $marks['1']['Иванов']['chemistry'].'<br>';
echo $marks['0']['Петров']['math'].'<br>';
$man=array(
        'name'=>'John',
    'lesson'=>array(
            'History'=>'E',
        'Biology'=>'D',
        'Theology'=>'A',
        'Bibliology'=>'B',
        'Boxing'=>'C'
    )
);
echo var_dump($man);
echo '<br><br>';
echo $man['John']['Boxing'].'<br>';
foreach ($man as $key=>$value)
{
    foreach ($value as $someone=>$something)
    {
        echo $someone.' - '.$something.'<br>';
    }
}

?>
<table>
    <thead>
    <tr>ФИО / Предметы  </tr>
    <tr>математика  </tr>
    <tr>физика  </tr>
    <tr>химия  </tr>
    <tr>русский  </tr>
    <tr>средний бал  </tr>
    </thead>
    <tbody>
    <?php

    foreach ($marks as $student)
    {
        echo '<tr>
             <td>'.$student['name'].'</td>
             <td>'.$student['subjects']['math'].'</td>
             <td>'.$student['subjects']['physics'].'</td>
             <td>'.$student['subjects']['chemistry'].'</td>
             <td>'.$student['subjects']['russian'].'</td>
             <td></td>
    </tr>';
    }
    ?>
    </tbody>
</table>
<?php

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
echo '<pre>';
print_r($c);
echo '</pre>';
//Таблица 1. Математические константы
//
//Константа	Значение	Описание
//M_PI	3.14159265358979323846	число пи
//M_E	2.7182818284590452354	число Эйлера
//M_LOG2E	1.4426950408889634074	log_2 e
//M_LOG10E	0.43429448190325182765	lg e
//M_LN2	0.69314718055994530942	ln 2
//M_LN10	2.30258509299404568402	ln 10
//M_PI_2	1.57079632679489661923	пи/2
//M_PI_4	0.78539816339744830962	пи/4
//M_1_PI	0.31830988618379067154	1/пи
//M_2_PI	0.63661977236758134308	2/пи
//M_SQRTPI	1.77245385090551602729	sqrt(пи) [4.0.2]
//M_2_SQRTPI	1.12837916709551257390	2/sqrt(пи)
//M_SQRT2	1.41421356237309504880	sqrt(2)
//M_SQRT3	1.73205080756887729352	sqrt(3) [4.0.2]
//M_SQRT1_2	0.70710678118654752440	1/sqrt(2)
//M_LNPI	1.14472988584940017414	ln пи [4.0.2]
//M_EULER	0.57721566490153286061	Постоянная эйлера [4.0.2]
$keys = array('M_PI', 'M_E', 'M_LOG2E', 'M_LOG10E', 'M_LN2', 'M_LN10', 'M_PI_2', 'M_PI_4', 'M_1_PI', 'M_2_PI',
    'M_SQRTPI', 'M_2_SQRTPI', 'M_SQRT2', 'M_SQRT3', 'M_SQRT1_2', 'M_LNPI', 'M_EULER');
$values = array(3.14159265358979323846, 2.7182818284590452354, 1.4426950408889634074, 0.43429448190325182765,
    0.69314718055994530942, 2.30258509299404568402, 1.57079632679489661923, 0.78539816339744830962,
    0.31830988618379067154, 0.63661977236758134308, 1.77245385090551602729, 1.12837916709551257390,
    1.41421356237309504880, 1.73205080756887729352, 0.70710678118654752440, 1.14472988584940017414,
    0.57721566490153286061);
$translates = array('число пи', 'число Эйлера', 'log_2 e', 'lg e', 'ln 2', 'ln 10', 'пи/2', 'пи/4', '1/пи', '2/пи',
    'sqrt(пи)', '2/sqrt(пи)', 'sqrt(2)', 'sqrt(3)', '1/sqrt(2)', 'ln пи', 'Постоянная эйлера');
$arr = array_combine($keys, $values);
$array2 = array_combine($translates, $arr);
echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
print_r($array2);
echo '</pre>';

$battle[]='Р';
$battle[]='Е';
$battle[]='С';
$battle[]='П';
$battle[]='У';
$battle[]='Б';
$battle[]='Л';
$battle[]='И';
$battle[]='К';
$battle[]='А';
foreach ($battle as $key=>$value)
{
    echo $key.' = '.$value.'<br>';
}
$battles['а']['а']=0;
$battles['б']['б']=0;
$battles['в']['в']=0;
$battles['г']['г']=0;
$battles['д']['д']=0;
$battles['е']['е']=0;
$battles['ж']['ж']=0;
$battles['з']['з']=0;
$battles['и']['и']=0;
$battles['й']['й']=0;

echo var_dump($battles);
echo '<pre>';
print_r($battles);
echo '</pre>';
foreach ($battles as $row)
{
    foreach ($row as $element)
    {
        echo $element;
    }
    echo '<br>';
}
$big_array['a'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['б'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['в'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['г'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['д'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['е'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['ж'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['з'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['и'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
$big_array['й'] = array(0 ,0 ,0, 0, 0, 0, 0, 0, 0, 0);
echo '<pre>';
print_r($big_array);
echo '</pre>';
foreach ($big_array as $row)
{
    foreach ($row as $element)
    {
        echo ' '.$element;
    }
    echo '<br>';
}
?>
</body>
</html>