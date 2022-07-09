<?php

/**
 * A group of friends have decided to start a secret society.
 * The name will be the first letter of each of their names, sorted in alphabetical order.
 * Create a function that takes in an array of names and returns the name of the secret society.
 */
class secretSociety
{
    private string $names;

    public function __construct(string $names)
    {
        $this->names = $names;
    }

    public static function secretSociety(array $names): string
    {
        $names = $names[0];
        $names = str_split($names);
        sort($names);
        return implode('', $names);
    }
}

echo secretSociety::secretSociety(['Bob', 'Snob', 'Pob']);