<?php

namespace NumberComparator;

class Comparator
{
    private $result = '';

    public function compare($numberOne = 0, $numberTwo = 0, $operation = ''): string
    {

        if (
            !(is_numeric($numberOne)) ||
            !(is_numeric($numberTwo))
        ) {
            return json_encode('Invalid number!');
            die;
        }

        switch ($operation) {
            case 'greater':
                $this->result = ($numberOne > $numberTwo) ? $numberOne . ' is greater than ' . $numberTwo : $numberOne . ' is not greater than ' . $numberTwo;
                break;

            case 'lesser':
                $this->result = ($numberOne < $numberTwo) ? $numberOne . ' is lesser than ' . $numberTwo : $numberOne . ' is not lesser than ' . $numberTwo;
                break;

            case 'equal':
                $this->result = ($numberOne == $numberTwo) ? $numberOne . ' and ' . $numberTwo . ' are equals' : $numberOne . ' and ' . $numberTwo . ' are not equals';
                break;

            default:
                $this->result = 'Invalid option!';
                break;
        }

        return json_encode($this->result);
    }
}
