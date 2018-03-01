<?php
require_once ('regular.php');
if (isset($_POST['name']))
{
    if (preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $_POST['name']))
    {
        echo 'email is valid';
    }
    else
    {
        echo 'email is invalid';
    }
}