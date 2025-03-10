<?php

namespace Test;

use App\GPUDecorator;
use App\OLEDScreenDecorator;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPUDecorator($laptop);

        $this->assertSame(600, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer, GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreenDecorator($laptop);

        $this->assertSame(500, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, OLED Screen", $laptopWithOLEDScreen->getDescription());
    }
}