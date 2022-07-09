<?php

/**
 * You have decided that you are an expert of love and want to start a dating service.
 * Given an array of women and an array of men,
 * return an array of pairs, with the first woman paired with the first man, second woman paired with the second man, etc.
 * If the array sizes don't match, return "Cupid is on vacation"
 */


class Lovers
{

    private array $men;
    private array $women;

    public function __construct(array $men, array $women)
    {

        $this->men = $men;
        $this->women = $women;
    }

    static public function cupid(array $men, array $women)
    {
        if (count($men) === count($women)) {
            return array_merge($men, $women);
        } else {
            return "Cupid is on vacation!";
        }

    }

}

var_dump(Lovers::cupid(['janka1', 'janka2'],['baranka']));