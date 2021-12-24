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
    
    private function checkWinner(array $board) : string
    {
        $nbLine = count($board);
        $resultDiagonal = $this->checkDiagonalWinner($board);
        
        if ($resultDiagonal != "") {
            return $resultDiagonal;
        }
        
        return $this->checkLineColumnWinner($board);
    }
    private function checkDiagonalWinner(array $board) : string 
    {
        $nbLine = count($board);
        $nbElement = $nbLine-1;
        
        for ($i = 0; $i < $nbLine ; ++$i) {
            if ($board[$i][$i] != $board[$nbElement][$nbElement]) {
                break;
            }
            if($i == $nbElement){
                $result =  $board[$nbElement][$nbElement];
            }  
        }
        
        for($i = 0; $i < $nbLine ; ++$i){
            if ($board[0][$nbElement] != $board[$i][$nbElement-$i]) {
                break;
            }
            if ($i == $nbElement) {
                $result = $board[$i][$nbElement-$i];
            } 
        }
        
        if(!isset($result)){
            $result = "";
        }
        
        return $result;
    }
    private function checkLineColumnWinner(array $board) : string
    {
        $nbLine = count($board);
        $nbElement = $nbLine-1;
        $k = 0;
        
        for ($i = 0; $i,$k+2 < $nbLine;) {
            if (($board[$k][$i] == $board[$k+1][$i]) && ($board[$k][$i] == $board[$nbElement][$i])) {
                if ($k+2 == $nbElement){
                    $result = $board[$k][$i];
                }
            } 
            if (($board[$i][$k] == $board[$i][$k+1]) && ($board[$i][$k] == $board[$i][$nbElement])) {
                if ($k+2 == $nbElement){
                    $result = $board[$i][$k];
                }
            } 
            if ($k+2 == $nbElement){
                if ($i == $nbElement){
                    break;
                }
                ++$i;
                $k = 0;
            }
            ++$k;
        }
        
        if (!isset($result)) {
            $result = "tie";
        }
        
        return $result; 
    }
    
    public function andTheWinnerIs($board): string
    {
        if (!is_array($board)) {
            $board = $this->convertString($board);
        }
        
        $result = $this->checkWinner($board);
        
        return $result;     
    }
}    
