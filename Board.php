<?php
require_once "Piece.php";
require_once "Square.php";

class Board {

    public $positions = null;

    public function __toString()
    {
       $board = "";
            for($row = 1; $row <= 8; $row++){
                $board .= "<div class='row'>";
                for($column = 1; $column <= 8; $column++){
                    if(isset($this->positions[$row][$column])){
                    $square = new Square($row, $column, $this->positions[$row][$column]);
                    } else {
                    $square = new Square($row, $column);
                    }
                    $board .= $square;
                }
                $board .= "</div>";
            }
       return $board;
    }

    public function __construct($multi_array)
    {
        $this->positions = $multi_array;
    }
}