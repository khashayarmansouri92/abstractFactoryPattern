<?php
namespace App\Tests;

use App\Device\Apple\AppleFactory;
use App\Device\Phone;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreatePhone()
    {
        $apple = new AppleFactory();
        $phone = $apple->createPhone();

        $this->assertInstanceOf(Phone::class,$phone);
    }
}