<?php

namespace App\Device\Samsung;

use App\Device\Phone;

class Galaxy implements Phone
{
    public function screen() : string
    {
        return 'Samsung screen 6.7 inches';
    }
}