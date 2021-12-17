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
            $this->affichage($board2);
            foreach ($board2 as $column) {
                foreach ($column as $line) {
                    /*if ($board2[0][$line] == $board2[1][$line] && $board2[1][$line] == $board2[2][$line]) {
                        return $board2[0][$line] . " wins";*/
                }
                if ($column[0] == $column[1] && $column[1] == $column[2]) {
                    echo $board[$column][0] . $board[$column][1] . $board[$column][2] . " wins\n";
                }
            }
            if ($board2[0][0] == $board2[1][1] && $board2[1][1] == $board2[2][2]) {
                echo $board2[1][1] . " wins diag\n";
            } else if ($board2[2][0] == $board2[1][1] && $board2[1][1] == $board2[0][2]) {
                echo $board2[1][1] . " wins diag2\n";
            } else {
                echo " tie";
            }
        }
        else if ($this->verificarBoard($board) == true) {
            $this->affichage($board);
            foreach ($board as $column) {
                foreach ($column as $line) {
                    /*if ($column[$line] == $column[$line] && $column[$line] == $column[$line]) {
                        return $column[$line] . " wins";*/
                }
                if ($column[0] == $column[1] && $column[1] == $column[2]) {
                    echo $column[0] . $column[1] . $column[2] . " wins\n";
                }
            }
            if ($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
                echo $board[1][1] . " wins diag1\n";
            } else if ($board[2][0] == $board[1][1] && $board[1][1] == $board[0][2]) {
                echo $board[1][1] . " wins diag2\n";
            }

        }else {
            echo "tie\n";
        }
        return "";
    }
}
?>