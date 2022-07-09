<?php

/**
 * Create a function that takes two arguments: the final price and the discount percentage as integers.
 * Return the final price after the discount.
 */
class price
{
    private int $price;
    private int $discount;

    public function __construct(int $price, int $discount)
    {
        $this->price = $price;
        $this->discount = $discount;
    }

    public static function discount( int $price, int $discount) {
        return $price - ($discount / 10);
    }
}
echo price::discount(150, 20);
