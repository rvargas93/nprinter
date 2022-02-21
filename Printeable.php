<?php

interface Printeable
{
    public function getCodeColor(): int;
    public function print(): void;
}