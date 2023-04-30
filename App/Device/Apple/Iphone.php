<?php

namespace App\Device\Apple;

use App\Device\Phone;

class Iphone implements Phone
{
    public function screen() : string
    {
        return 'IPhone screen 6.5 inches';
    }
}