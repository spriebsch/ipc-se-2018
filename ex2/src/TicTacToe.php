<?php declare(strict_types=1);

class TicTacToe
{
    /**
     * @var Field[]
     */
    private $fields = [];

    public function __construct()
    {
        for ($i = 0; $i <= 8; $i++) {
            $this->fields[$i] = new Field;
        }
    }

    /*
    public function getNumberOfFields(): int
    {
        return 9;
    }
    */

    public function isEmpty(): bool
    {
        foreach ($this->fields as $field) {
            if (!$field->isEmpty()) {
                return false;
            }
        }

        return true;
    }

    public function placeCross(int $fieldNumber): void
    {
        $this->fields[$fieldNumber]->placeCross();
    }

    public function getField(int $fieldNumber): Field
    {
        return $this->fields[$fieldNumber];
    }
}
