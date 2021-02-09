<?php 

require_once "Piece.php";
require_once "Square.php";
require_once "Board.php";


$positions = [
    1 => [
        8 => 'r', // black rook standing in position 1-8 (A8)
        7 => 'p', 
        2 => 'P', // white pawn standing in position 1-2 (A2)
        1 => 'R'
    ],
    2 => [
        8 => 'n', 
        7 => 'p', 
        2 => 'P', 
        1 => 'N'
    ],
    3 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    4 => [8 => 'q', 7 => 'p', 2 => 'P', 1 => 'Q'],
    5 => [8 => 'k', 7 => 'p', 4 => 'P', 1 => 'K'],
    6 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    7 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
    8 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
];

    $board1 = new Board([

        1 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
    
        2 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
    
        3 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    
        4 => [8 => 'q', 7 => 'p', 2 => 'P', 1 => 'Q'],
    
        5 => [8 => 'k', 7 => 'p', 4 => 'P', 1 => 'K'],
    
        6 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    
        7 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
    
        8 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
    
    ]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:red">
    <div class="board">
        <?= $board1 ?>
    </div>
</body>

</html>