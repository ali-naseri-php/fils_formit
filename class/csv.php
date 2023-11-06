<?php
include 'formit.php';

class csv extends formit
{


    private $formt = '.csv';

    public function tabdil()
    {


        if (!file_exists($this->map)) {
            echo 'not is file';
            return false;
        }
        $m = $this->map . '\\' . $this->title . $this->formt;
        file_put_contents($m, "name ,$this->title ,\n text ,$this->text");
        return true;

    }
}