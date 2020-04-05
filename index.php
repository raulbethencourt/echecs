<?php

function setTable()
{
    // Function to set the table for each player
    function setJoueur($nb, $color)
    {
        $pieces = [
            "tour", "cavalier", "fou", "reine", "roi", "fou", "cavalier", "tour", "pion", "pion", "pion",
            "pion", "pion", "pion", "pion", "pion"
        ];
        $noir = '<div class="noir">';
        $blanc = '<div class="blanc">';
        $row = '<div class="row">';
        $div = '</div>';

        // Condition to change king and Queen position
        if ($color === 'NOIR') {
            $pieces[3] = 'roi';
            $pieces[4] = 'reine';
        }

        /* Condition to set player 1 
        We set with each for loop the row that starts in white and in black */ 
        if ($nb == 1) {
            echo  $row;
            for ($i = 0; $i < 8; $i++) {
                if ($i % 2 == 1) {
                    echo "$noir $pieces[$i] $color $div";
                } else {
                    echo "$blanc $pieces[$i] $color $div";
                }
            }
            echo $div;

            echo $row;
            for ($i = 8; $i < 16; $i++) {
                if ($i % 2 == 1) {
                    echo "$blanc $pieces[$i] $color $div";
                } else {
                    echo "$noir $pieces[$i] $color $div";;
                }
            }
            echo $div;
        
        /* Condition to set player 
        We use same way but we do countdown */
        } else {
            echo  $row;
            for ($i = 15; $i > 7; $i--) {
                if ($i % 2 == 1) {
                    echo "$blanc $pieces[$i] $color $div";
                } else {
                    echo "$noir $pieces[$i] $color $div";;
                }
            }
            echo $div;

            echo  $row;
            for ($i = 7; $i > -1; $i--) {
                if ($i % 2 == 1) {
                    echo "$noir $pieces[$i] $color $div";
                } else {
                    echo "$blanc $pieces[$i] $color $div";
                }
            }
            echo $div;
        }
    }

    // Function to set space between players
    function setRest()
    {
        $noir = '<div class="noir"></div>';
        $blanc = '<div class="blanc"></div>';
        $row = '<div class="row">';
        $div = '</div>';

        // same logic but we dont call the figures 
        for ($a = 0; $a < 2; $a++) {
            echo $row;
            for ($i = 0; $i < 8; $i++) {
                if ($i % 2 == 1) {
                    echo $noir;
                } else {
                    echo  $blanc;
                }
            }
            echo $div;

            echo $row;
            for ($i = 8; $i < 16; $i++) {
                if ($i % 2 == 1) {
                    echo  $blanc;
                } else {
                    echo $noir;
                }
            }
            echo $div;
        }
    }

    // We call the functions 
    setJoueur(1, 'NOIR');
    setRest();
    setJoueur(2, 'BLANC');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <h2>PLAYER 1</h2>
        <!-- We call setTable function -->
        <div id="table"><?= setTable() ?></div>
        <h2>PLAYER 2</h2>
    </div>
</body>

</html>