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
        $isBlank = false;

        foreach ($board as $line) {
            $count = count($line);
            foreach ($line as $column) {
                if ($column === '') {
                    $isBlank = true;
                }
            }
        }
        if ($count === $nbLine && false === $isBlank){
            return true;
        }

        return false;
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

        for ($secondDiagonalIndex = 0; $secondDiagonalIndex < $boardSize ; ++$secondDiagonalIndex) {
            if ($board[0][$latestDiagonalIndex] !== $board[$secondDiagonalIndex][$latestDiagonalIndex-$secondDiagonalIndex]) {
                break;
            }
            if ($secondDiagonalIndex === $latestDiagonalIndex) {
                $winner = $board[$secondDiagonalIndex][$latestDiagonalIndex-$secondDiagonalIndex];
            }
        }

        return $winner;
    }


        private function findColumnLineWinner(array $board, int $boardSize,  bool $isLine) : ?string
    {
        $lastIndex = $boardSize-1;
        $winner = null;

        for ($columnIndex = 0; $columnIndex < $boardSize; ++$columnIndex) {
            for ($lineIndex = 0; $lineIndex < $boardSize; ++$lineIndex) {
                if($isLine == true){
                    if ($board[$columnIndex][$lineIndex] !== $board[$columnIndex][$lastIndex]) {
                        break;
                    }
                    if ($lineIndex === $lastIndex) {
                        $winner = $board[$columnIndex][$lineIndex];
                        break;
                    }
                } else{
                    if ($board[$lineIndex][$columnIndex] !== $board[$lastIndex][$columnIndex]) {
                        break;
                    }
                    if ($lineIndex === $lastIndex) {
                        $winner = $board[$lineIndex][$columnIndex];
                        break;
                    }
                }

            }    
        }

        return $winner;
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
            ?? $this->findColumnLineWinner($board, $boardSize, true)
            ?? $this->findColumnLineWinner($board, $boardSize, false)
            ?? "tie"
        ;
    }
}
