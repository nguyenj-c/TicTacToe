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
        }else{
            return "";
        }
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
    }


    function verifLine_Column($board){
        $nbligne = count($board);
        $ligne = $nbligne-1;
        foreach($board as $value){
            for($i = 0; $i < $nbligne; ++$i){
                if (($value[$i] == $value[$ligne])){
                    $str = $value[$i];
                    return $value[$i];
                }
                else if(($board[$i][$value] == $board[$i][$ligne])){
                        $str = $board[$i][$value];
                        return $board[$i][$value];
                } 
                ++$j;
            }
        }     
    } 
        

    function andTheWinnerIs($board): string
    {
        if (!$this->verificarBoard($board)) {
            $board2 = $this->convertString($board);
            $nbligne = count($board2);
            if($nbligne >= 3){
                $str = $this->verifDiagonale($board2);
                return $str;
            }
        }
        else if ($this->verificarBoard($board)) {
            $nbligne2 = count($board);
            if($nbligne2 >= 3){
                $str1 = $this->verifDiagonale($board);
                $str = $this->verifDiagonale($board);
                if(isset($str1)){
                    $result = $str1;
                }else if(isset($str)){
                    $result = $str;
                }
                else
                {
                    $result = "tie";
                }
                return $result; 
            }
        }    
        return "tie";
    }
}    
?>
