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

    private function isNotFinished(array $board) : string
    {
        $nbLine = count($board);
        
        foreach($board as $value) {
            $count = count($value);
        }

        if($count != $nbLine || $this->isBlankValue($board)){
            return "In progress";
        }

        return "";
    }

    private function isBlankValue(array $board) : bool
    {
        $nbLine = count($board);
        
        for ($i = 0; $i < $nbLine;++$i) {
            for ($k = 0; $k < $nbLine; ++$k) {
                if ($board[$i][$k] == '') {
                    return true;
                } 
            }
        }
        return false;
    }
    
    private function checkWinner(array $board) : string
    {
        $nbLine = count($board);
        $resultDiagonal = $this->checkDiagonalWinner($board);
        
        if ($resultDiagonal != "") {
            return $resultDiagonal;
        }

        $resultLine = $this->checkLineWinner($board);

        if ($resultLine != "") {
            return $resultLine;
        }
        return $this->checkColumnWinner($board);
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
    
    
    private function checkLineWinner(array $board) : string
    {
        $nbLine = count($board);
        $nbElement = $nbLine-1;
        $k = 0;
        
        for ($i = 0; $i < $nbLine;++$i) {

            for ($k = 0; $k < $nbLine; ++$k) {

                if (($board[$i][$k] != $board[$i][$nbElement])) {
                    break;
                } 
                if ($k == $nbElement) {
                        $result = $board[$i][$k];
                        break;                    
                }
            }    
        }
        
        if(!isset($result)){
            $result = "";
        }
        
        return $result; 
    }

    private function checkColumnWinner(array $board) : string
    {
        $nbLine = count($board);
        $nbElement = $nbLine-1;
        $k = 0;
        
        for ($i = 0; $i < $nbLine;++$i) {

            for ($k = 0; $k < $nbLine; ++$k) {
                if (($board[$k][$i] != $board[$nbElement][$i])) {
                    break;
                } 
                if ($k == $nbElement) {
                        $result = $board[$k][$i];
                        break;
                }
            }
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
        
        if($this->isNotFinished($board) != ""){
            return "In progress";
        }
        $result = $this->checkWinner($board);
        
        return $result;     
    }
}    
