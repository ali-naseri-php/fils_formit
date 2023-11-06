<?php
include 'class/autolod.php';
$title=$_POST['title'];
$text= $_POST['text'];
$formit= $_POST['formt'];
if (file_exists("class/$formit.php"))
{
    $a= new $formit;
    var_dump( $a);

}

