<?php

class TicTacToeTest extends PHPUnit\Framework\TestCase
{
    public function testInitiallyBoardIsEmpty()
    {
        $game = new TicTacToe;
        $this->assertTrue($game->isEmpty());
    }

    public function testSymbolCanBePlaced()
    {
        $game = new TicTacToe;
        $game->placeCross(0);

        $this->assertTrue($game->getField(0)->isCrossed());
    }

    public function testSymbolIsPlacedOnCorrectField()
    {
        $game = new TicTacToe;
        $game->placeCross(0);

        $this->assertTrue($game->getField(1)->isEmpty());
        $this->assertTrue($game->getField(2)->isEmpty());
        $this->assertTrue($game->getField(3)->isEmpty());
        $this->assertTrue($game->getField(4)->isEmpty());
        $this->assertTrue($game->getField(5)->isEmpty());
        $this->assertTrue($game->getField(6)->isEmpty());
        $this->assertTrue($game->getField(7)->isEmpty());
        $this->assertTrue($game->getField(8)->isEmpty());
    }

    public function testBoardIsNotEmptyWhenSymbolHasBeenPlaced()
    {
        $game = new TicTacToe;
        $game->placeCross(0);

        $this->assertFalse($game->isEmpty());
    }

    /*
    public function testHasNineFields()
    {
        $game = new TicTacToe;
        $this->assertEquals(9, $game->getNumberOfFields());
    }
    */
}
