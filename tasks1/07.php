<?php
/**
 * You just returned home to find your mansion has been robbed!
 * Given an object of the stolen items, return the total amount of the burglary (number).
 * If nothing was robbed, return the string "Lucky you!".
 */



class House {
    private string $item;

    public function __construct(string $item)
    {
        $this->item = $item;
    }
    public static function burgular(array $item){
        if (count($item) === 0){
            return 'Lucky you!';
        }
        return count($item);
    }
}

echo House::burgular(['vase', 'tv', 'cat']);

