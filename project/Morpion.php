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
        if($resultDiagonal != ""){
            return $resultDiagonal;
        }
        for($i = 0; $i < $nbLine;++$i){
            $result = $this->checkLineColumn($board);
            if(!isset($result)){
                $result = "tie";
            }
        }
        return $result;
    }
    private function checkDiagonalWinner(array $board) : string 
    {
        $nbLine = count($board);
        $nbElement = $nbLine-1;
        for($i = 0; $i < $nbLine ; ++$i){
            if ($board[$i][$i] != $board[$nbElement][$nbElement]){
                break;
            }
            if($i == $nbElement){
                $result =  $board[$nbElement][$nbElement];
            }  
        } 
        for($i = 0; $i < $nbLine ; ++$i){
            if ($board[0][$nbElement] != $board[$i][$nbElement-$i]){
                break;
            }
            if($i == $nbElement){
                $result = $board[$i][$nbElement-$i];
            } 
        }
        if(!isset($result)){
            $result = "";
        }
        return $result;
    }
    private function checkLineColumn(array $board) // : string to implement
    {
        $nbligne = count($board);
        $ligne = $nbligne-1;
        $k = 0;
        for($i = 0; $i,$k+2 < $nbligne;){
            if (($board[$k][$i] == $board[$k+1][$i]) && ($board[$k][$i] == $board[$ligne][$i])) {
                if ($k+2 == $ligne){
                    $str = $board[$k][$i];
                    return $str;
                }
            } 
            if (($board[$i][$k] == $board[$i][$k+1]) && ($board[$i][$k] == $board[$i][$ligne])) {
                if ($k+2 == $ligne){
                    $str = $board[$i][$k];
                    return $str;
                }
            } 
            if($k+2 == $ligne){
                if($i == $ligne){
                    break;
                }
                ++$i;
                $k = 0;
            }
            ++$k;
        }   
    }
    public function andTheWinnerIs($board): string
    {
        if(!is_array($board)){
            $board = $this->convertString($board);
        }
        $str = $this->checkWinner($board);
        return $str;     
    }
}    
