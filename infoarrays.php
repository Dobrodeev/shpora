<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
<?
$array1 = [13, 'кабель', true];
$array2 = ['city'=>'Kiev', 'institute'=>'KPI'];
$array3 = array(
	array('строчка1', 'strochka2', 'strochka3'),
	array('something1', 'textures', 'poliglot'),
	array('poligon', '3D Max', 'cebab')
);
$x1 = 13;
$x2 = 0.693;
$x3 = 'наука';
$x4 = false;

echo '<pre>';
echo var_dump($x1);
echo var_dump($x2);
echo var_dump($x3);
echo var_dump($x4);

echo var_dump($array1);
echo var_dump($array2);
echo var_dump($array3);

echo '</pre>';
// function series26()	
// {
// 	$k = rand(2, 3);
// 	$n = rand(8, 19);
// 	$arr=[];
// 	for($i = 0; $i < $n; $i++)
// 	{
// 		$arr[$i] = rand(11, 17);
// 		echo $arr[$i];
// 	}
// series26();

function series26()
{
	$k = rand(2, 3);
	$n = rand(8, 19);
	$arr=[];
	$arr_2=[];
	for($i = 0; $i < $n; $i++)
	{
		$arr[$i] = rand(11, 17);
		echo $arr[$i].' ';
		// echo $arr[$i]*$arr[$i].' ';
		// for($j = 0; $j < $n; $j++)
		// {
		// 	$arr_2[$j] *= $arr[$i];			
		// }
	}
	echo '<br>';
	for($j = 0; $j < $n; $j++)
	{
		
		echo $arr_2[$j].' ';
	}
	
	echo '<br>';
	echo ' всего чисел: '.$n.'<br>';
}
series26();
echo '<hr>';
function suma($parametr)
{
	$s = 0;
	$n = $parametr;
	for($i = 0; $i < $n; $i++)
	{
		$s += $i;
		echo $i.' ';
	}
	echo '<br>';
	echo ' Сумма '.$n.' первых чисел: '.$s.'<br>';
}
suma(19);

function proizvedenie($parametr)
{
	$p = 1;
	$n = $parametr;
	for($i = 1; $i < $n; $i++)
	{
		$p *= $i;
		echo $i.' ';
	}
	echo '<br>';
	echo ' Произведение '.$n.' первых чисел '.$p.'<br>';
}
proizvedenie(7);

function stepen($param_osnova, $param_step)
{
	$m = 1;
	$r = $param_osnova;
	$n = $param_step;
	for($i = 1; $i <= $n; $i++)
	{
		$m *= $r;
	}
	echo ' Степень числа '.$r.' = '.$m.'<br>';
}
stepen(7,2);

function game_pole($m)
{
	$n = $m;
	$arr = [];
	for($i = 1; $i < $n; $i++)
	{
		for($j = 1; $j < $n; $j++)
		{
			echo $arr[$i][$j].'<br>';
		}
	}
// game_pole(10);
// Морской бой
echo ' Морской бой<br>';
$battle=[];
$n=10;
for($i=0; $i < $n; $i++)
{
    for($j=0; $j < $n; $j++)
    {
       $battle[$i][$j] = 0;
    }
}
echo var_dump($battle);
echo '<br><br>';

foreach ($battle as $row)
{
    foreach ($row as $element)
    {
        echo ' '.$element;
    }
    echo '<br>';
}
// Программа нахождения n простых чисел
function simple_numbers($n)
{
	for($i = 2; $i < $n; $i++)
	{
		for($j = 2; $j < $i; $j++)
		{
			if(($i % $j) != 0) continue;
			else
			{
				$flag = true;
				break;
			}
		}
		if(!$flag) echo $i.' ';
		$flag = false;
	}
}

}
?>
</body>
</html>

