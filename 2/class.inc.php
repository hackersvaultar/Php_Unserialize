<?php

class Helper
{
public $dummy = "asdasd";
public $exec = "ls";

public function __wakeup()
    {
        system($this->exec);
    }
}

?>
