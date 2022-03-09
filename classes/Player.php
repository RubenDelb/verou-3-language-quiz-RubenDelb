<?php

class Player
{
    // Add name and score
    public string $name;
    public int $score;
    public int $mistakes;

    public function __construct(string $name, int $score, int $mistakes)
    {
        // Add 👤 automatically to their name
        $this->name = '👤' . $name;
        $this->score = $score;
        $this->mistakes = $mistakes;
    }
}

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['score'] = 0;
    $_SESSION['mistakes'] = 0;
}

if (isset($_SESSION['name'])) {
    $newPlayer = new Player($_SESSION['name'], $_SESSION['score'], $_SESSION['mistakes']);
    // pre($newPlayer);
}
