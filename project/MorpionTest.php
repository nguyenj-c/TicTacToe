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
            'strDiag2' =>[
                 "XXOXOOOOX",
                 'O',
            ],
            'strDiag1' =>[
                "XXOOXOOOX",
                'X',
           ],
           'strDiag1_size4' =>[
            "XXOOOXOOOOXXXOOX",
            'X',
            ],
            'diag1' =>[
                [
                    ['X', 'O', 'O'],
                    ['O', 'X', 'O'],
                    ['O', 'O', 'X'],
                ],
                'X',
            ],
            'board-4_sample_diag_1' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'O', 'X'],
                    ['O', 'O', 'X', 'O'],
                    ['O', 'X', 'O', 'X'],
                ],
                'X',
            ],
            'board-4_sample_diag_2' =>[
                [
                    ['X', 'X', 'O', 'O'],
                    ['X', 'O', 'O', 'X'],
                    ['X', 'O', 'X', 'O'],
                    ['O', 'X', 'O', 'X'],
                ],
                'O',
            ],
            'board-5_sample_diag_2' =>[
                [
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'O', 'O', 'X','X'],
                    ['X', 'O', 'X', 'O','O'],
                    ['O', 'X', 'O', 'X','X'],
                    ['X', 'X', 'O', 'X','O'],
                ],
                'X',
            ],
            'board-5_sample_diag_1' =>[
                [
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'O', 'X', 'O','O'],
                    ['O', 'O', 'O', 'X','X'],
                    ['X', 'X', 'O', 'X','X'],
                ],
                'X',
            ],
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
                'O',
            ],            
            'board-3_sample-2' =>[
                [
                    ['X', 'X', 'O'],
                    ['O', 'O', 'O'],
                    ['O', 'X', 'X'],
                ],
                'O',
            ],
            'board-3_sample-3' =>[
                [
                    ['X', 'O', 'O'],
                    ['O', 'X', 'X'],
                    ['X', 'X', 'X'],
                ],
                'X',
            ],            
            'board-4_sample-1' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'X', 'X'],
                    ['O', 'O', 'O', 'X'],
                    ['O', 'X', 'O', 'O'],
                ],
                'X',
            ],
            'board-4_sample-2' =>[
                [
                    ['X', 'X', 'O', 'O'],
                    ['O', 'O', 'O', 'X'],
                    ['X', 'X', 'X', 'X'],
                    ['O', 'O', 'O', 'X'],
                ],
                'X',
            ],
            'board-5_sample_1' =>[
                [
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'O', 'O', 'O','O'],
                    ['O', 'O', 'X', 'X','X'],
                    ['X', 'X', 'X', 'X','X'],
                ],
                'X',
            ],  
            'strLine_size4' =>[
                "OXOOOOXXXOOXXXXX",
                'X',
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
                    ['X', 'X', 'O'],
                    ['O', 'X', 'X'],
                    ['X', 'X', 'O'],
                ],
                'X',    
            ],
            'column3' =>[
                [
                    ['O', 'O', 'X'],
                    ['O', 'X', 'X'],
                    ['X', 'O', 'X'],
                ],
                'X',   
            ],
            'board-4_sample_column-1' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'X', 'X'],
                    ['O', 'O', 'O', 'X'],
                    ['O', 'X', 'O', 'X'],
                ],
                'X',
            ],  
            'board-4_sample_column-2' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['X', 'X', 'O', 'O'],
                    ['O', 'O', 'O', 'X'],
                    ['O', 'X', 'O', 'X'],
                ],
                'O',
            ],
            'board-5_sample_column-1' =>[
                [
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'O', 'O', 'O','O'],
                    ['O', 'O', 'O', 'X','X'],
                    ['X', 'X', 'O', 'X','X'],
                ],
                'O',
            ], 
            'strLine_size4' =>[
                "XOOOXOXXOOOXXOXX",
                'O',
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
                    ['O', 'O', 'X', 'O'],
                    ['X', 'O', 'X', 'X'],
                    ['O', 'X', 'O', 'O'],
                ],
                'tie',
            ], 
            'board-4_sample_tie-2' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['O', 'X', 'O', 'O'],
                    ['X', 'O', 'O', 'X'],
                    ['O', 'X', 'X', 'O'],
                ],
                'tie',
            ],  
            'board-4_sample_tie-2' =>[
                [
                    ['X', 'X', 'O', 'X'],
                    ['O', 'X', 'O', 'O'],
                    ['X', 'O', 'O', 'X'],
                    ['O', 'X', 'X', 'O'],
                ],
                'tie',
            ],
            'board-5_sample_tie-1' =>[
                [
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'O', 'O', 'O','O'],
                    ['O', 'O', 'X', 'X','X'],
                    ['X', 'X', 'O', 'X','X'],
                ],
                'tie',
            ],
            'strTie_size4' =>[
                "XOOOXOXXOXOXXOXX",
                'tie',
            ],  
        ];
    }
    public function notFinished(){
        return [
            'board-3_sample_nf2' =>[
                [
                    ['O', '', 'O'],
                    ['X', 'X', ''],
                    ['', 'O', 'X'],
                ],
                'In progress',
            ],
            'board-4_sample_nf2' =>[
                [
                    ['O', '', 'O','O'],
                    ['X', 'X', '','X'],
                    ['', 'O', 'X','O'],
                    ['O', '', 'X','O'],
                ],
                'In progress',
            ],
            'board-4_sample_nf' =>[
                [
                    ['X', '', 'O', 'X'],
                    ['', 'O', 'X', 'O'],
                    ['X', 'O', '', 'X'],
                    ['', 'X', 'O', 'X'],
                ],
                'In progress',
            ],  
            'board-5_sample_nf' =>[
                [
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'X', 'O', 'O','X'],
                    ['X', 'O', '', 'O','O'],
                    ['O', 'O', 'X', 'X','X'],
                    ['X', 'X', 'O', 'X','X'],
                ],
                'In progress',
            ],
            'strTie_size4' =>[
                "XOOOXOXXOXOXOXX",
                'In progress',
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
    /**
     * @dataProvider notFinished
     */
    public function testNotFinished($grid, $winner)
    {
        $morpion = new Morpion();
        $this->assertEquals($morpion->andTheWinnerIs($grid), $winner);
    }
}
