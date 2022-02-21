<?php

require('./Printeable.php');
require('./Color.php');

class Number implements Printeable
{
    const TYPE_COLOR_MAP = [
        NumberTypeEnum::LAST_NUMBER => Color::GREEN,
        NumberTypeEnum::DIVISIBLE_BY_3 => Color::RED,
        NumberTypeEnum::DIVISIBLE_BY_5 => Color::BLUE,
        NumberTypeEnum::DIVISIBLE_BY_3_AND_5 => Color::PURPLE,
        NumberTypeEnum::OTHER => Color::NONE
    ];

    public function __construct(
        private int $value,
        private int $type,
    ) {}

    public function getCodeColor(): int
    {
        return self::TYPE_COLOR_MAP[$this->type] ?? Color::NONE;
    }

    public function print(): void
    {
        $codeColor = $this->getCodeColor();
        $color = new Color($codeColor);
        
        echo "{$color->getCliCode()}{$this->value} ";
    }

    public function getValue(): int
    {
        return $this->value;
    }

}