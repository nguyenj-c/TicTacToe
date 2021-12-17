<?php declare(strict_types=1);

/*
use PHPUnit\Framework\TestCase;
require 'Morpion.php';

final class MorpionTest extends TestCase
{
    function testMorpionType()
    {
        $morpion = new Morpion();
        $board = "OXXOOOXOX";
        $board2 = [
            ['O', 'X', 'X'],
            ['O', 'O', 'O'],
            ['X', 'O', 'X'],
        ];
        if(gettype($board) == 'string'){
            $board = $morpion->convertString($board);
        } else if()
        assertEquals($board,$board2);
    }
}
$test = new MorpionTest();
$test->testMorpionType();
*/
require 'Morpion.php';
final class MorpionTest{
    function test(){
        $morpion = new Morpion();
        $diag1 = [
            ['X', 'O', 'O'],
            ['O', 'X', 'O'],
            ['O', 'O', 'X'],
        ];
        $diag2 = "OOXOXXXOX";
        $line = [
            ['O', 'O', 'O'],
            ['X', 'X', 'O'],
            ['O', 'O', 'X'],
        ];
        $column = "XOXXOOXOO";
        $morpion->andTheWinnerIs($diag1);
        $morpion->andTheWinnerIs($diag2);
        $morpion->andTheWinnerIs($line);
        $morpion->andTheWinnerIs($column);

    }
}

?>