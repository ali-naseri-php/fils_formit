<?php
function autolod($class)
{
    $class_file = __DIR__ . "/$class.php";
    if (file_exists($class_file)) {
        include $class_file;
    }
}

spl_autoload_register("autolod");