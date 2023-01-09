<?php

use PHPUnit\Framework\TestCase;
use NumberComparator\Comparator;

class ComparatorTest extends TestCase
{
    private $expected = '';

    public function testValidateNumber()
    {
        $this->expected = json_encode('Invalid number!');

        $comparator = new Comparator();
        $this->assertEquals($this->expected, $comparator->compare('a', 'b', 'greater'));
    }

    public function testCompareGreater()
    {
        $this->expected = json_encode('4 is greater than 1');

        $comparator = new Comparator();
        $this->assertEquals($this->expected, $comparator->compare(4, 1, 'greater'));
    }

    public function testCompareLesser()
    {
        $this->expected = json_encode('5 is lesser than 10');

        $comparator = new Comparator();
        $this->assertEquals($this->expected, $comparator->compare(5, 10, 'lesser'));
    }

    public function testCompareEquals()
    {
        $this->expected = json_encode('1 and 1 are equals');

        $comparator = new Comparator();
        $this->assertEquals($this->expected, $comparator->compare(1, 1, 'equal'));
    }
}
