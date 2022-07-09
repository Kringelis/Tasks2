<?php
/**
 * Today you work at a store as the cashier, but 10 minutes before your lunch break, the cash register stops working.
 * Create a function that takes an array of objects (groceries) which calculates the total price and returns it as a number.
 * A grocery object has a product, a quantity and a price.
 */

class Grocer
{
    private string $name;
    private int $quan;
    private int $price;

    public function __construct(string $name, int $quan, int $price)
    {
        $this->name = $name;
        $this->quan = $quan;
        $this->price = $price;
    }

    public static function math(Grocer $item, int $price, int $quan)
    {
        return $quan * $price;
    }
}
$product1 = new Grocer('Orange', 5, 1);
$product2 = new Grocer('Apple', 15, 12);
$product3 = new Grocer('Gold Banana', 1, 500);

echo Grocer::math($product1, 5,1);
