<?php

final class Morpion
{
    function convertString($board)
    {
        if(strlen($board) == 9){
            $arr = str_split($board);
            $tableau = array_chunk($arr, 3, false);
            return $tableau;
        } else{
            return 'Format invalide';
        }
    }
    function verificarBoard($board)
    {
        if (is_array($board)) {
            return true;
        } else if(gettype($board) == 'string')  {
            return false;
        } else{
            return "";
        }
    }
    function verifDiagonale($board){
        $nbligne = count($board);
        $ligne = $nbligne-1;
        for($i = 0; $i < $ligne ; --$i){
            $k = $i;
            $j = $ligne;
            while($k != 1){
                if (($board[$k][$k] == $board[$j][$j]) && $k-1 == 0) {
                    $str = $board[$k][$k];
                    return $str;
                }
                if (($board[$k-$k][$k] == $board[$k+1-$k][$k-$k+1]) && $k-$k == 0) {
                    $str = $board[$k+1-$k][$k+1-$k];
                    return $str;
                }
                ++$k;
                --$j;
            }
        }
    } 
    function verifLine_Column($board){
        $nbligne = count($board);
        $ligne = $nbligne-1;
        for($i = 0; $i < $ligne; ++$i){
            $k = $ligne;
            $j = $i;
            while($k == $ligne){
                    if (($board[$k][$i] == $board[$j][$i])) {
                        if($j == $k){
                            $str = $board[$k][$i];
                            return $str;
                        }
                    } 
                    if(($board[$i][$k] == $board[$i][$j])) {
                        if($j == $k){
                            $str = $board[$i][$k];
                            return $str;
                        }
                    }
                    ++$j;
                    --$k;
            }
        } 
    }

    function andTheWinnerIs($board): string
    {
        if ($this->verificarBoard($board) == false) {
            $board2 = $this->convertString($board);
            $nbligne = count($board2);
            if($nbligne = 3){
                foreach ($board2 as $column) {     
                    if ($column[0] == $column[1] && $column[1] == $column[2]) {
                        $str = $column[0];
                        return $str;
                    }
                }
                $j = 0;
                for($i = 0; $i < 3; ++$i){
                    $k = $j;
                    if ($board2[$k][$i] == $board2[$k+1][$i] && $board2[$k+1][$i] == $board2[$k+2][$i]) {
                        $str = $board2[$k][$i];
                        return $str;
                    } 
                    ++$k;
                } 
                if ($board2[0][0] == $board2[1][1] && $board2[1][1] == $board2[2][2]) {
                    $str = $board2[1][1];
                    return $str;
                } else if ($board2[2][0] == $board2[1][1] && $board2[1][1] == $board2[0][2]) {
                    $str = $board2[1][1];
                    return $str;
                } else {
                    return "tie";
                }
            }         
            else if($nbligne > 3){
                $this->verifLine_Column($board);
                $this->verifDiagonale($board);
            }
        }
        else if ($this->verificarBoard($board) == true) {
            $nbligne2 = count($board);
            if($nbligne2 = 3){
                foreach ($board as $column) {     
                    if ($column[0] == $column[1] && $column[1] == $column[2]) {
                        $str = $column[0];
                        return $str;
                    }
                }
                $j = 0;
                for($i = 0; $i < 3; ++$i){
                    $k = $j;
                    if ($board[$k][$i] == $board[$k+1][$i] && $board[$k+1][$i] == $board[$k+2][$i]) {
                        $str = $board[$k][$i];
                        return $str;
                    } 
                    ++$k;
                } 
                if ($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
                    $str = $board[1][1];
                    return $str;
                } else if ($board[2][0] == $board[1][1] && $board[1][1] == $board[0][2]) {
                    $str = $board[1][1];
                    return $str;
                } else {
                    return "tie";
                }
            }
            else if($nbligne2 > 3){
                $this->verifLine_Column($board);
                $this->verifDiagonale($board);
            }
        }
        return "tie";
    }
}    
?>
