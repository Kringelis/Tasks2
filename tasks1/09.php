<?php
/**
 * A family want's to go on a vacation, but don't know what is the total amount of money they can spend on the trip.
 * Create the function that takes an array with objects and returns the sum of people's budgets.
 */

class Family
{
    private string $name;
    private int $age;
    private int $money;

    public function __construct(string $name, int $age, int $money)
    {
        $this->name = $name;
        $this->age = $age;
        $this->money = $money;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Calc extends Family
{
    /** @param Family[] $Family
     * @return int
     */
    public static function calc(array $Family): int
    {
        $budget = 0;
        foreach ($Family as $member) {
            $budget += $member->getMoney();
        }
        return $budget;
    }
}

$members = [
    [new Family('janka', 100, 150)],
    [new Family('baranka', 25, 100000)]];
print_r(Calc::calc($members));