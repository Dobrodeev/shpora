<?php
$arr=array();
$count=0;

for($i=0;$i<=50;$i++){

   $arr[$i]=(int)floor(mt_rand(1,100)/10);

    }





foreach ($arr as $value){
    if($value==0){
        $arr1[]=$value;
        $count=count($arr1);

    }
}


echo($count);


foreach ($arr as $value){
    if($value==0){
        $arr1[]=$value;
        $count=count($arr1);

    }
}





echo"<pre>";
print_r ($arr);
echo "<pre>";
asort($arr);
print_r($arr);
shuffle($arr);
print_r($arr);
for($i=0;$i<=count($arr);$i++)

if($arr[$i]==0){

    unset($arr[$i]);
}
asort($arr);
echo"<pre>";
print_r ($arr);
echo "<pre>";

echo count($arr)."<br>";
echo array_sum($arr);
shuffle($arr);
print_r($arr);
$arr2=array_flip($arr) ;
print_r($arr2);
ksort($arr2);
print_r($arr2);
echo"max". max($arr2)."<br>";
echo"min".min($arr2);

for($i=0;$i<count($arr2)*2;$i+=2){
    unset($arr2[$i]);

    
}
print_r($arr2);


//Дообовление 5 значений в конец
for($i=0;$i<5;$i++){


array_push($arr2,mt_rand(0,100));}

print_r ($arr2);







//удаление 5 саміх маленьких єлементов
for($i=0;$i<5;$i++) {
    $result = min($arr2);

    foreach ($arr2 as $key => $value) {
        if ($value == $result) {
          unset($arr2[$key]);


        }
    }
}
    print_r($arr2);
$arr3=array();
$arr3=$arr2;
function kvadrat($i){
    $i=ceil(pow($i,2)/10);
    return $i;

}


$arr4=array_map("kvadrat",$arr3);

print_r($arr4);
$array=array_merge($arr2,$arr4);
print_r($array);


    ?>



