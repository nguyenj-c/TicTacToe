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

    function affichage($board)
    {
        if ($this->verificarBoard($board) == true) {
            echo '<table>';
            $boucle = 0;
            foreach ($board as $value) {
                echo '<tr>';
                foreach ($value as $player) {
                    $boucle += 1;
                    if ($boucle != 3) {
                        $boucle = 0;
                        echo '<td>';
                        print_r($player);
                        echo '</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</table>';
            echo"<br>";
        } else if ($this->verificarBoard($board) == false) {
            $tableau = $this->convertString($board);
            echo '<table>';
            $boucle = 0;
            foreach ($tableau as $value) {
                echo '<tr>';
                foreach ($value as $player) {
                    $boucle += 1;
                    if ($boucle != 3) {
                        $boucle = 0;
                        echo '<td>';
                        print_r($player);
                        echo '</td>';
                    }

                }
                echo '</tr>';
            }
            echo '</table>';
            echo"<br>";
        } else {
            echo "Ce n'est ni une chaîne de caractères ni un tableau";
        }
    }

    function andTheWinnerIs($board): string
    {
        if ($this->verificarBoard($board) == false) {
            $board2 = $this->convertString($board);
            //$this->affichage($board2);
            foreach ($board2 as $column) {     
                if ($column[0] == $column[1] && $column[1] == $column[2]) {
                    $str = $board[0];
                    return $str;
                }
            }
            $j = 0;
            for($i = 0; $i < 3; ++$i){
                $k = $j;
                if ($board2[$k][$i] == $board2[$k+1][$i] && $board2[$k+1][$i] == $board2[$k+2][$i]) {
                    $str = $board[$k][$i];
                    return $str;
                } 
                ++$k;
            } 
            if ($board2[0][0] == $board2[1][1] && $board2[1][1] == $board2[2][2]) {
                $str = $board[1][1];
                return $str;
            } else if ($board2[2][0] == $board2[1][1] && $board2[1][1] == $board2[0][2]) {
                $str = $board2[1][1];
                return $str;
            } else {
                return " tie";
            }
        }
        else if ($this->verificarBoard($board) == true) {
            //$this->affichage($board);
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
            } else{
                return "tie";
            }
        }else {
            return "tie";
        }
        return "tie";
    }
}
?>
