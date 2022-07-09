<?php
/**
 * You're given a string of words.
 * You need to find the word "Nemo", and return a string like so: "I found Nemo at X!", X is the index of the word.
 * If you can't find Nemo, return "I can't find Nemo :(".
 */

class Sea
{
    private string $words;

    public function __construct(string $words)
    {

        $this->words = $words;
    }

    public static function findingNemo(string $input):string
    {
        if (strpos($input, 'Nemo')) {
            return 'I found Nemo!';
        } else {
            return "I can't find Nemo!";
        }
    }

}

echo Sea::findingNemo('askanskansasasasasa');


