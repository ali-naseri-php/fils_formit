<?php
include 'class/autolod.php';
$title=$_POST['title'];
$text= $_POST['text'];
$formit= $_POST['formt'];
$map= $_POST['map'];
if (file_exists("class/$formit.php"))
{
    $a= new $formit;
     $a->title=$title;
     $a->text=$text;
     $a->map=$map;
    $a->tabdil();

}

