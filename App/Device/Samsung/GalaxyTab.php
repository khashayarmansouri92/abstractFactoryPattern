<?php

namespace App\Device\Samsung;

use App\Device\Tablet;

class GalaxyTab implements Tablet
{
    public function screen() : string
    {
        return 'GalaxyTab screen 9 inches';
    }
}