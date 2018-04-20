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
    <input type="text" placeholder="первое число" required name=first><br>
    <input type="text" placeholder="второе число" required name=second><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" value="+">
        +
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" value="-">
        -
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" value="*">
        *
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" value="/">
        /
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" value="%">
        %
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
        $x = $_POST['optionsRadios'];
        $fitst = $_POST['first'];
        $second = $_POST['second'];
        
        switch ($x)
        {
            case '+':
                echo $_POST['first']+$_POST['second'];
                break;
            case '-':
                echo $_POST['first']-$_POST['second'];
                break;
            case '*':
                echo $_POST['first']*$_POST['second'];
                break;
            case '/':
                if($_POST['second']!=0)
                {
                    echo $_POST['first']/$_POST['second'];
                }
                elseif ($_POST['second']==0)
                    echo 'division by zero.<br>';
                break;
            case '%':
                if ($_POST['second'] != 0)
                    echo $_POST['first'] % $_POST['second'];
                elseif ($_POST['second'] == 0)
                    echo 'division by zero.<br>';
                break;
            default: echo 'Other.<br>';
        }
    }
    else echo 'не выбрано действие';
}
?>
</body>
</html>