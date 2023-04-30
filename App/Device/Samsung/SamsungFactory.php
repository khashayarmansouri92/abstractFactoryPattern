<?php

namespace App\Device\Samsung;

use App\Device\deviceFactory;
use App\Device\Phone;
use App\Device\Tablet;

class SamsungFactory implements deviceFactory
{
    public function createPhone() : Phone
    {
        return new Galaxy();
    }

    public function createTablet() : Tablet
    {
        return new GalaxyTab();
    }
}