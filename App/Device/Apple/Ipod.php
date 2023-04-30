<?php

namespace App\Device\Apple;

use App\Device\Tablet;

class Ipod implements Tablet
{
    public function screen() : string
    {
        return 'IPhone screen 9 inches';
    }
}