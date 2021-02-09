<?php

class Square{
    public $x_coord = null;
    public $y_coord = null;
    public $piece = null;

    public function __construct($x,$y,$piece = null)
    {
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece != null ? new Piece($piece) : null;
    }

    public function __toString()
    {
        $color = $this->isDark() ? "dark" : "light";
        return "<div class='{$color}'>" . $this->piece . "</div>";
    }

    public function isDark()
    {
        if(($this->x_coord + $this->y_coord) % 2 == 0){
            return true;
        }
        return false;
    }
}