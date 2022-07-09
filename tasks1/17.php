<?php
/**
 * You and your friends are visiting a huge cave and one of you decides to yell "Hello". To your surprise the cave answers.
 * Create a function that takes two parameters the first parameter is the string to be repeated and the second
 * parameter is the number of times the string is to be repeated.
 */


class Cave {
    private string $hello;
    private int $times;

    public function __construct(string $hello, int $times)
    {
        $this->hello = $hello;
        $this->times = $times;
    }
    public static function echoes(int $times){
        return str_repeat('Hello! ', $times);
    }
}

echo Cave::echoes(13);