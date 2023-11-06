<?php
include 'formit.php';

class json extends formit
{
    private $formt = '.json';

    public function tabdil()
    {


        if (!file_exists($this->map)) {
            echo 'not is file';
            return false;
        }
        $m = $this->map . '\\' . $this->title . $this->formt;
        $array=['title'=>$this->title,
            'text'=>$this->text];
        file_put_contents($m, json_encode($array));
        return true;
    }


}