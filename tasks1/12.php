<?php

/**
 * You have decided to teach programming at a kindergarten, but you cannot understand half of what the children are saying.
 * Write a function that reverses all the words in a sentence that start with a particular letter.
 */

class Kids {
    private string $word;
    private string $letter;

    public function __construct(string $word, string $letter)
    {

        $this->word = $word;
        $this->letter = $letter;
    }
    public static function reverse(string $word, string $letter){
        if (strpos($word, $letter)){
            return strrev($word);
        } else {
            return $word;
        }
    }
}

echo Kids::reverse('lobotomija', 'a');