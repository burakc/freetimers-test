<?php
use TestApp\Calculate;

class CalculateTest extends \PHPUnit\Framework\TestCase
{
    public function testCalculateBags()
    {
        $width = 20;
        $length = 12;
        $expected = 9;

        $instance = new Calculate();
        $instance->setMeasurementUnit('m');
        $instance->setDimensions($width, $length);
        $instance->setDepthMeasurementUnit('cm');
        $result = $instance->calculateBags();

        $this->assertEquals($expected, $result);
    }
}
