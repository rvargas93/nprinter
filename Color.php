<?php 

class color 
{
    const GREEN = 32;
    const RED = 31;
    const BLUE = 34;
    const PURPLE = 35;
    const NONE = 0;

    public function __construct(
        private int $codeColor
    ) {}

    public function getCliCode(): string
    {
        return "\e[{$this->codeColor}m";
    }
}