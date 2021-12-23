<?php

final class Morpion
{
    function convertString($board)
    {
        $arr = str_split($board);
        $tableau = array_chunk($arr, 3, false);
        return $tableau;
    }

    function verifDiagonale($board){
        $nbligne = count($board);
        $ligne = $nbligne-1;
        for($i = 0; $i+1 < $nbligne ; ++$i){
            if ($board[$i][$i] == $board[$i+1][$i+1]){
                $str = $board[$i][$i];
                return $board[$i][$i];
            }else if ($board[0][$ligne] == $board[$i][$ligne-$i]){
                $str = $board[$i][$ligne-$i];
                return $board[$i][$ligne-$i];
            }else{
                break;
            }   
        } 
        return 'tie';
    }

    function verifLine_Column($board){
        $nbligne = count($board);
        $ligne = $nbligne-1;
        for($i = 0; $i < $nbligne; ++$i){
            for($j = $ligne; $j+1 < $nbligne; ++$j){
                if (($board[$i][$j] != $board[$i][$j+1])){
                    break;
                }
                if($i == $ligne){
                    $str = $board[$i][$j];
                }
            }
        } 
        for($i = 0; $i < $nbligne; ++$i){
            for($j = $ligne; $j+1 < $nbligne; ++$j){
                if (($board[$j][$i] != $board[$j+1][$i])){
                    break;
                }
                if($i  == $ligne){
                    $str = $board[$j][$i];
                    return $str;
                }
            }
        }
    } 
    function winner($board){
        $this->verifDiagonale($board);
        $this->verifLine_Column($board);
    }

    function andTheWinnerIs($board): string
    {
        if (!is_array($board)) {
            $board2 = $this->convertString($board);
            $nbligne = count($board2);
            $str = $this->verifDiagonale($board2);
            return $str;
        }
        $nbligne2 = count($board);
        $str1 = $this->verifLine_Column($board);
        $str = $this->verifDiagonale($board);
        if(isset($str)){
            $result = $str;
        }else if(isset($str1)){
            $result = $str1;
        }
        else
        {
            $result = "tie";
        }
        return $result;     
    }
}    
?>
