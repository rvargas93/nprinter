<?php

require('./Number.php');
require('./NumberTypeEnum.php');


class NumberBuilder
{

    public static function build(int $value, bool $last = false): Number
    {
        $divisibleByThere = $value % 3 === 0;
        $divisibleByFive = $value % 5 === 0;

        if ($last) {
            $type = NumberTypeEnum::LAST_NUMBER;

        } else if ($divisibleByThere && $divisibleByFive) {
            $type = NumberTypeEnum::DIVISIBLE_BY_3_AND_5;

        } else if ($divisibleByThere) {
            $type = NumberTypeEnum::DIVISIBLE_BY_3;

        } else if ($divisibleByFive) {
            $type = NumberTypeEnum::DIVISIBLE_BY_5;

        } else {
            $type = NumberTypeEnum::OTHER;
        }

        return new Number($value, $type);
    }

}