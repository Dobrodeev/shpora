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
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
        +
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        -
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option3">
        *
    </label><br>
    <label class="radio">
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option4">
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
//    echo '<pre>';
//    print_r($_POST);
//    echo '</pre>';
    if ($_POST['optionsRadios']=='option1')
        echo $_POST['first']+$_POST['second'];
    elseif ($_POST['optionsRadios']=='option2')
        echo $_POST['first']-$_POST['second'];
    elseif ($_POST['optionsRadios']=='option3')
        echo $_POST['first']*$_POST['second'];
    elseif ($_POST['optionsRadios']=='option4' && $_POST['second']!=0)
        echo $_POST['first']/$_POST['second'];
    elseif ($_POST['optionsRadios']=='option4' && $_POST['second']==0)
        echo 'division by thero.<br>';
    else echo 'Other.';
}
?>
</body>
</html>
