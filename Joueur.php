<?php

class Joueur
{
    private $pieces = [
        "tour", "cavalier", "fou", "reine", "roi", "fou", "cavalier", "tour", "pion", "pion", "pion",
        "pion", "pion", "pion", "pion", "pion"
    ];

    public function setJoueur($pieces)
    {
        echo '<div class="column">';
        foreach ($pieces as $piece) {
            return '<div class = "blanc">' . $piece . '</<div>';
        }
        echo '</div>';
    }

    /**
     * Get the value of pieces
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Set the value of pieces
     *
     * @return  self
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;

        return $this;
    }
}
