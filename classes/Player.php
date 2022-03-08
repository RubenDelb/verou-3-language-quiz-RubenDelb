<?php

class Player
{
    // Add name and score
    public string $name;
    public int $score;

    public function __construct(string $name, int $score)
    {
        // Add 👤 automatically to their name
        $this->name = '👤' . $name;
        $this->score = $score;
    }
}