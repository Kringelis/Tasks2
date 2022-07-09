<?php
/**
 * Write a function that takes dog's age in human years as an argument and converts to dog years.
 * Return the result like so: "Your doggie is NN years old in dog years!"
 */


class pupperAge
{
    private int $age;
    private int $dogAge;

    public function __construct(int $age, int $dogAge)
    {
        $this->age = $age;
        $this->dogAge = $dogAge;
    }


    public static function pupperPrinter(int $dogAge)
    {
        $dogAge = $dogAge * 7;
        return "Your doggie is $dogAge years old in dog years";
    }
}


echo pupperAge::pupperPrinter(10);