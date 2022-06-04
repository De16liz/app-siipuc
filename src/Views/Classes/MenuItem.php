<?php

namespace App\Views\Classes;

class MenuItem{

    public string $value;
    public string $icon;
    public string $link;

    public function __construct(string $value, string $icon, string $link)
    {
        $this->value = $value;
        $this->icon = $icon;
        $this->link = $link;
    }


    public function echoValue():void{
        echo $this->value;
    }
    public function echoICon():void{
        echo $this->icon;
    }
    public function echoLink():void{
        echo $this->link;
    }
}