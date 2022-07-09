<?php
/**
 * Write a function that takes 4 arguments: color, name, location, item and
 * returns a fortune prediction like so: "You will meet X in Y, and find Z in a N room together."
 */

class fortuneTeller {
    private string $color;
    private string $location;
    private string $name;
    private string $item;

    public function __construct(string $color, string $location, string $name, string $item)
    {
        $this->color = $color;
        $this->location = $location;
        $this->name = $name;
        $this->item = $item;
    }
    public static function fortuneTell(string $color, string $location, string $name, string $item){
        return "You will meet $name in $location, and find $item in a $color room together";
    }
}

echo fortuneTeller::fortuneTell('blue', 'Wonderland', 'Muris', 'chocolate');


