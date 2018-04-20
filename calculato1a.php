<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculations</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<form action="#" method="post" name="calculator">
    <input type="text" placeholder="первое число"  name=first><br>
    <input type="text" placeholder="второе число"  name=second><br>
    <label class="radio">
        <input type="radio" name="optionsRadios"  value="+">
        +
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios"  value="-">
        -
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios"  value="*">
        *
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios"  value="/">
        /
    </label><br>
    <div class="form-actions">
        <input type="submit" value="&nbsp;=&nbsp;" name="go" class="btn btn-primary">
        <input type="reset" value="Сброс" name="Сброс" class="btn">
    </div>
</form>
<?php
if (isset($_POST['go']))
{
    if (($_POST['first'] !== '') && ($_POST['second'] !== '') && ($_POST['optionsRadios']))
    {
        $first=$_POST['first'];
        $second=$_POST['second'];

        if ($_POST['optionsRadios'] == '+'){
            echo $_POST['first'] + $_POST['second'];}
        elseif ($_POST['optionsRadios'] == '+')
            echo $_POST['first'] - $_POST['second'];
        elseif ($_POST['optionsRadios'] == '-')
            echo $_POST['first'] * $_POST['second'];
        elseif ($_POST['optionsRadios'] == '/' && $_POST['second'] != 0)
            echo $_POST['first'] / $_POST['second'];
        elseif ($_POST['optionsRadios'] == '/' && $_POST['second'] == 0)
            echo 'division by zero.<br>';
        else echo 'Other.';
    }
    else
        {
            echo 'Заполните пустые строки';
        }
}
$array=array('BMW'=>array('color'=>'red','price'=>560),'VOLVO'=>array('color'=>'red','price'=>560),'PORSH'=>array('color'=>'red','price'=>560));
foreach ($array as $mashina=>$item){
    echo  $mashina.'<br>';
    foreach ($item as $sv=>$value){
        echo $sv.' '.$value.'<br>';
    }
}
$array = array();
for($i=0;$i<=100;$i++){
    if($i%3==0){
        $array[]=$i;
    }
}
foreach ($array as $value){
    if($value%5==0){
        echo $value.'<br>';
    }
}

?>
</body>
</html>