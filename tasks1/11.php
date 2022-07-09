<?php

/**
 * There's a great war between the even and odd numbers.
 * Many numbers already lost their life in this war and it's your task to end this.
 * You have to determine which group is larger: the even, or the odd. The larger group wins.
 * Create a function that takes an array of integers, sums the even and odd numbers seperately,
 * then returns "Odd numbers win by X" or "Even numbers win by X", X is survivors.
 * If both groups are equal, return "There are no winners"
 */
class War
{
    private int $odd;
    private int $even;

    public function __construct(int $odd, int $even)
    {
        $this->odd = $odd;
        $this->even = $even;
    }

    public static function war(array $numbers)
    {

        $odd = $numbers & 1;
        $even = !$numbers & 1;
        $oddArray = array_filter($numbers, function ($numbers){return $numbers & 1;});
        $evenArray = array_filter($numbers, function ($numbers){return (!$numbers & 1);});
        if (array_sum($evenArray) > array_sum($oddArray)) {
            return "Even win!";
        } else {
            return "Odd win!";
        }
    }
}

echo War::war([1,2,2,2,2,2,3,3,4,1,2,3]);