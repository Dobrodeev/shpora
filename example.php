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

    $number = 5;
    $str = 'Мир';
//    echo "Привет $str !";
//    echo 'Привет '.$str.' !';
//    echo 'Привет " '.'$str" !';
    echo "Привет '$str'";
    echo '<br>';
    echo 'Привет "'.$str.'" !';
    //
//    DELETE FROM News WHERE name = 'имя';
    $table = 'News';
    $name_param = 'name';
    $value_param = 'имя';
    echo '<br>';
    $query = "DELETE FROM $table WHERE $name_param = '$value_param'";
    echo $query."<br>";
    $query = 'DELETE FROM ' .$table. ' WHERE ' .$name_param. '="'. $value_param. '"';
    echo $query."<br>";
    // $db_conn->query("UPDATE shedule SET time='$_GET['time']', monday='$_GET['monday']', tuesday='$_GET['tuesday']', wednesday='$_GET['wednesday']', thursday='$_GET['thursday']', friday='$_GET['friday']', saturday='$_GET['saturday']', sunday='$_GET['sunday']' WHERE id='$_GET['id']'");
    $get_time = 'get time';
    $get_monday = 'get_monday';
    $id_get = 'this id';
    $db_conn = "UPDATE shedule SET time='$get_time', monday='$get_monday' WHERE id='$id_get'";
    echo $db_conn.'<br>';
    $name = 'John';
    $message = 'шоб ты здох ';
    $time = '19:30';
    $id = 67;
    // $table = '';
    echo $message.$name.'<br>';
    echo 'UPDATE shedule SET time="'.$time.'" WHERE id="'.$id.'"<br>';
    $name_description = 'name-description';
    $link_img = 'name-link';    
    $sth = "UPDATE News SET description='$name_description', link='$link_img' WHERE name='$name'";
    echo $sth.'<br>';
    // $db_conn->query('DELETE FROM shedule WHERE id="' . $_GET['id'] . '"');
    // $getting = '$_GET['id']';
    $getting = 'get something';
    $db_conn = 'DELETE FROM shedule WHERE id="' . $getting . '"';
    echo $db_conn.'<br>';
    ?>
</body>
</html>
