<?php

namespace App\Device\Apple;


use App\Device\deviceFactory;
use App\Device\Phone;
use App\Device\Tablet;

class AppleFactory implements deviceFactory
{
    public function createPhone() : Phone
    {
        return new Iphone();
    }

    public function createTablet() : Tablet
    {
        return new Ipod();
    }
}