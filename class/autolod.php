<?php
function autolod($class)
{$class_file= __DIR__."/$class.php";
    include $class_file;

}
spl_autoload_register("autolod");