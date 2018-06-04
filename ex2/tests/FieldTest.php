<?php

class FieldTest extends PHPUnit\Framework\TestCase
{
    /**
     * @var Field
     */
    private $field;

    protected function setUp()
    {
        $this->field = new Field;
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->field->isEmpty());
    }

    public function testCanBeMarkedWithCross()
    {
        $this->field->placeCross();

        $this->assertFalse($this->field->isEmpty());
        $this->assertTrue($this->field->isCrossed());
        $this->assertFalse($this->field->isCircled());
    }

    public function testCanBeMarkedWithCircle()
    {
        $this->field->placeCircle();

        $this->assertFalse($this->field->isEmpty());
        $this->assertTrue($this->field->isCircled());
    }

    public function testCircledFieldCannotBeCircled()
    {
        $this->field->placeCircle();

        $this->expectException(\Exception::class);

        $this->field->placeCircle();
    }

    public function testCircledFieldCannotBeCrossed()
    {
        $this->field->placeCircle();

        $this->expectException(\Exception::class);

        $this->field->placeCross();
    }

    public function testCrossedFieldCannotBeCrossed()
    {
        $this->field->placeCross();

        $this->expectException(\Exception::class);

        $this->field->placeCross();
    }

    public function testCrossedFieldCannotBeCircled()
    {
        $this->field->placeCross();

        $this->expectException(\Exception::class);

        $this->field->placeCircle();
    }
}
