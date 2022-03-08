<?php

class Word
{
    // add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $word;
    public string $answer;

    public function __construct(string $word, string $answer)
    {
        $this->word = strtolower($word);
        $this->answer = strtolower($answer);
    }

    public function verify(string $answer): bool
    {
        // Use this function to verify if the provided answer by the user matches the correct one
            if ($answer === $this->answer) {
                return true;
            } else {
                return false;
            }
    }
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
}
