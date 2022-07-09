<?php
/**
 * You are organizing an event and asked people to add their name to a list, if they want to attend.
 * But, oh no, some people wrote their name twice.
 * Create a function that takes an array of items, removes all duplicate items and
 * returns a new array in the same sequential order as the old array (minus duplicates).
 */


class GuestList
{
    private array $list;

    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public static function doubleTrouble(array $list)
    {
        return array_unique($list);
    }
}

var_dump(GuestList::doubleTrouble(['janka', 'banka', 'janka', 'baranka']));