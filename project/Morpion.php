<?php

final class Morpion
{
    private function convertString(string $board) : array
    {
        $array = str_split($board);
        $nbElement = count($array);
        $boardSize = sqrt($nbElement);

        return array_chunk($array, $boardSize, false);
    }

    private function isFinished(array $board) : bool
    {
        $nbLine = count($board);

        return array_reduce($board, function(bool $isBlank, array $line) use($nbLine) : bool {
            if (count($line) !== $nbLine || false !== array_search( '', $line)){
                $isBlank = false;
            }
            return $isBlank;
        }, true);
    }

    private function findDiagonalWinner(array $board, int $boardSize) : ?string
    {
        $latestDiagonalIndex = $boardSize-1;
        $winner = null;

        for ($firstDiagonalIndex = 0; $firstDiagonalIndex < $boardSize ; ++$firstDiagonalIndex) {
            if ($board[$firstDiagonalIndex][$firstDiagonalIndex] !== $board[$latestDiagonalIndex][$latestDiagonalIndex]) {
                break;
            }
            if ($firstDiagonalIndex === $latestDiagonalIndex) {
                $winner = $board[$latestDiagonalIndex][$latestDiagonalIndex];
            }
        }

        return $winner;
    }

    private function findAntiDiagonalWinner(array $board, int $boardSize) : ?string
    {
        $boardRotate = array_map('array_reverse', array_map(null, ...$board));
        
        return $this->findDiagonalWinner($boardRotate, $boardSize);
    }    

    private function findLineWinner(array $board, int $boardSize) : ?string
    {
        $lineO = array_fill(0, $boardSize, 'O');
        $lineX = array_fill(0, $boardSize, 'X');

        return array_reduce($board, function(?string $winner, array $line) use($lineO,$lineX) : ?string 
        {
            if ($line === $lineX || $line === $lineO) {
                $winner = $line[0];
            } 
            return $winner;     
        });
    }

    private function findColumnWinner(array $board, int $boardSize) : ?string
    {
        $boardRotate = array_map('array_reverse', array_map(null, ...$board));
        
        return $this->findLineWinner($boardRotate, $boardSize);
    }

    public function andTheWinnerIs(array|string $board): string
    {
        if (false === is_array($board)) {
            $board = $this->convertString($board);
        }

        if (false === $this->isFinished($board)) {
            return "In progress";
        }

        $boardSize = count($board);

        return
            $this->findDiagonalWinner($board, $boardSize)
            ?? $this->findAntiDiagonalWinner($board, $boardSize)
            ?? $this->findLineWinner($board, $boardSize)
            ?? $this->findColumnWinner($board, $boardSize)
            ?? "tie"
        ;
    }
}
