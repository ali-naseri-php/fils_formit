<?php
include 'formit.php';

class txt extends formit
{
    private $formt = '.txt';

    public function tabdil()
    {


        if (!file_exists($this->map)) {
            echo 'not is file';
            return false;
        }
        $m = $this->map . '\\' . $this->title . $this->formt;
        file_put_contents($m, "$this->title\n$this->text");
        return true;
    }


}