<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
require 'Morpion.php';

final class MorpionTest extends TestCase
{
    public function winningDiagonals(){
        return [
            'diag2' =>[
                [
                    ['X', 'X', 'O'],
                    ['X', 'O', 'O'],
                    ['O', 'O', 'X'],
                ],
                'O',
            ],
            'strDiag1' =>[
                 "XXOXOOOOX",
                 'O',
            ],
 
            'diag1' =>[
                [
                    ['X', 'O', 'O'],
                    ['O', 'X', 'O'],
                    ['O', 'O', 'X'],
                ],
                'X',
            ]
        ];
    }
    public function winningLine(){
        return [
            'board-3_sample-1' =>[
                [
                    ['O', 'O', 'O'],
                    ['X', 'X', 'O'],
                    ['O', 'X', 'X'],
                ],
                'O'
            ],            
            'board-3_sample-2' =>[
                [
                    ['X', 'X', 'O'],
                    ['O', 'O', 'O'],
                    ['O', 'X', 'X'],
                ],
                'O'
            ],
            'board-3_sample-3' =>[
                [
                    ['X', 'X', 'O'],
                    ['O', 'X', 'X'],
                    ['O', 'O', 'O'],
                ],
                'O'
            ],
            'board-4_sample-1' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['O', 'X', 'X', 'X'],
                    ['O', 'O', 'O', 'O'],
                    ['O', 'X', 'O', 'X'],
                ],
                'O'
            ],
            'board-4_sample-2' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'X', 'X'],
                    ['O', 'O', 'O', 'X'],
                    ['O', 'X', 'O', 'O'],
                ],
                'X'
            ],           
        ];
    }
    public function winningColumn(){
        return [
            'column' =>[
                [
                    ['O', 'X', 'O'],
                    ['O', 'X', 'X'],
                    ['O', 'O', 'X'],
                ],
                'O',
            ],
            'column2' =>[
                [
                    ['X', 'O', 'X'],
                    ['X', 'O', 'O'],
                    ['O', 'O', 'X'],
                ],
                'O',    
            ],
            'column3' =>[
                [
                    ['O', 'X', 'O'],
                    ['X', 'X', 'O'],
                    ['X', 'O', 'O'],
                ],
                'O',   
            ],
            'board-4_sample_column-1' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'X', 'X'],
                    ['O', 'O', 'O', 'X'],
                    ['O', 'X', 'O', 'X'],
                ],
                'X'
            ],  
            'board-4_sample_column-2' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'O', 'O'],
                    ['O', 'O', 'O', 'X'],
                    ['O', 'X', 'O', 'X'],
                ],
                'O'
            ],
            
        ];
    }
    public function winningTie(){
        return [
            'tie1' =>[
                [
                    ['O', 'X', 'O'],
                    ['X', 'X', 'O'],
                    ['O', 'O', 'X'],
                ],
                'tie',
            ],
            'tie2' =>[
                [
                    ['X', 'X', 'O'],
                    ['O', 'O', 'X'],
                    ['X', 'O', 'X'],
                ],
                'tie',    
            ],
            'tie3' =>[
                [
                    ['O', 'X', 'O'],
                    ['O', 'X', 'X'],
                    ['X', 'O', 'O'],
                ],
                'tie',   
            ],
            'board-4_sample_tie-1' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'X', 'O'],
                    ['O', 'O', 'O', 'X'],
                    ['O', 'X', 'O', 'X'],
                ],
                'tie'
            ],  
        ];
    }
    /**
     * @dataProvider winningDiagonals
     */
    public function testWinningDiagonals($grid, $winner)
    {
        $morpion = new Morpion();
        $this->assertEquals($morpion->andTheWinnerIs($grid), $winner);
    }
    /**
     * @dataProvider winningLine
     */
    public function testWinningLine($grid, $winner)
    {
        $morpion = new Morpion();
        $this->assertEquals($morpion->andTheWinnerIs($grid), $winner);
    }
    /**
     * @dataProvider winningColumn
     */
    public function testWinningColumn($grid, $winner)
    {
        $morpion = new Morpion();
        $this->assertEquals($morpion->andTheWinnerIs($grid), $winner);
    }
    /**
     * @dataProvider winningTie
     */
    public function testWinningTie($grid, $winner)
    {
        $morpion = new Morpion();
        $this->assertEquals($morpion->andTheWinnerIs($grid), $winner);
    }
    /*function test(){
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
        echo($morpion->andTheWinnerIs($diag1));
        echo($morpion->andTheWinnerIs($diag2));
        echo($morpion->andTheWinnerIs($line));
        echo($morpion->andTheWinnerIs($column));
    }*/
}


?>
