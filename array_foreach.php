<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
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
?>
<table>
    <thead>
    <tr>ФИО / Предметы</tr>
    <tr>математика </tr>
    <tr>физика </tr>
    <tr>химия </tr>
    <tr>русский </tr>
    <tr>средний бал </tr>
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
</body>
</html>