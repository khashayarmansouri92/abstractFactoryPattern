<?php

use App\Device\Apple\AppleFactory;

require_once ('vendor/autoload.php');

$apple = new AppleFactory();
$iphone = $apple->createPhone();

echo $iphone->screen();
