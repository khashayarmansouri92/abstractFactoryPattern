<?php

namespace App\Device;

interface deviceFactory
{
    public function createPhone() : Phone;
    public function createTablet() : Tablet;
}