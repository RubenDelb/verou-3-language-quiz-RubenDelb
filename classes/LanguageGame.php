<?php

function pre($input)
{
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
class LanguageGame
{
    private array $words;
    public string $randomWord;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // create instances of the Word class to be added to the words array
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }
    }

    public function run(): void
    {
        // check for option A or B
        if (!isset($_POST["guessedAnswer"]) || empty($_POST["guessedAnswer"])){ // Option A: user visits site first time (or wants a new word)
            $this->randomWord();
        } else { // Option B: user has just submitted an answer    
            foreach($this->words as $wordObject) {
                if($wordObject->word === $_POST['randomWordCheck']){
                    $_SESSION['correctAnswer'] = $wordObject->answer;
                    echo $this->createMessage($wordObject);
                    return;    
                }
            }
        }
    }
    
    public function randomWord()
    {
        // select a random word for the user to translate
        $randomIndexNumber = rand(0, count($this->words)-1);
        $this->randomWord = strtolower($this->words[$randomIndexNumber]->word); 
        return $this->randomWord;
    }

    public function createMessage($wordObject) // Generate a message for the user that can be shown
    {
        // Verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        if ($wordObject->verify($_POST["guessedAnswer"])) {
            $message = "<h3> YAY! Your answer is correct! </h3>";
            $_SESSION['score']++ ;
        } else {
            $message = "<h3> Oh-No! Your answer is incorrect :-(  </h3>";
            echo '<script>alert("The correct translation for '.$_POST['randomWordCheck'].' is '.$_SESSION['correctAnswer'].'")</script>';
            $_SESSION['mistakes']++ ;
        }
        return $message;
    }
}