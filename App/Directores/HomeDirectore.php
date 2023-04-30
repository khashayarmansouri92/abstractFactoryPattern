<?php
namespace App\Directores;

//use App\Abstract\Apple\AppleFactory;

use App\Abstract\Apple\AppleFactory;

class HomeDirectore
{
    public function getIphoneSizeScreen()
    {
        $apple = new AppleFactory();
    }
}


