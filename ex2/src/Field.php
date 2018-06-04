<?php

class Field
{
    private $symbol;

    public function isEmpty(): bool
    {
        return $this->symbol === null;
    }

    public function placeCross(): void
    {
        if (!$this->isEmpty()) {
            throw new \Exception('Losing power in the warp engines ...');
        }

        $this->symbol = 'X';
    }

    public function placeCircle(): void
    {
        if (!$this->isEmpty()) {
            throw new \Exception('Losing power in the warp engines ...');
        }

        $this->symbol = 'O';
    }

    public function isCrossed(): bool
    {
        return $this->symbol === 'X';
    }

    public function isCircled(): bool
    {
        return $this->symbol === 'O';
    }
}
