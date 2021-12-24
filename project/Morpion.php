<?php

final class Morpion
{
    function convertString(string $board) : array
    {
        $array = str_split($board);
        $nbElement = count($array);
        $boardSize = sqrt($nbElement);
        return array_chunk($array, $boardSize, false); 
    }

    function verifCombi($board){
        $nbligne = count($board);
        $ligne = $nbligne-1;
        $diag = $this->diagonale($board);
        if(isset($diag)){
            return $diag;
        }
        for($i = 0; $i < $nbligne;++$i){
            $j = 0;
            return $this->line_column($board,$i,$j);
        }
    }
    function theWinner($board){
        $str = $this->verifCombi($board);
        if(!isset($str)){
            return 'tie';
        }
        return $str;

    }
    function diagonale($board){
        $nbligne = count($board);
        $ligne = $nbligne-1;
        for($i = 0; $i+1 < $nbligne ; ++$i){
            if ($board[$i][$i] != $board[$i+1][$i+1]){
                break;
            }
            if($i+1 == $ligne){
                return $board[$i+1][$i+1];
            }  
        } 
        for($i = 0; $i < $nbligne ; ++$i){
            if ($board[0][$ligne] != $board[$i][$ligne-$i]){
                break;
            }
            if($i == $ligne){
                return $board[0][$ligne];
            } 
        } 
    }
    function line_column($board){
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
    function andTheWinnerIs($board): string
    {
        if(!is_array($board)){
            $board = $this->convertString($board);
        }
        $nbligne = count($board);
        $str = $this->theWinner($board);
        return $str;     
    }
}    
?>
