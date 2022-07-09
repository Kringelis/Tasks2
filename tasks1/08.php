<?php
/**
 * You have decided to move to a new house and you have put all your stuff in boxes.
 * Unfortunately, you are not sure if they will fit in your car.
 * Given an array of boxes, create a function that returns the total volume of all those boxes combined together.
 * A box is represented by an array with three elements: length, width and height.
 *
 * Example:
 *
 * Input: [[2, 3, 2], [6, 6, 7], [1, 2, 1]]
 * Calculation: (2 x 3 x 2) + (6 x 6 x 7) + (1 x 2 x 1) = 12 + 252 + 2 = 266
 * Output: 266
 */
class Box
{
    private int $height;
    private int $length;
    private int $width;

    public function __construct(int $height, int $length, int $width)
    {
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }


    public static function boxVolume(array $box):int
    {
        $volumes = [];
        foreach ($box as $b) {
            $volumes[] = array_product($b);
        }
        return array_sum($volumes);
    }

}
echo Box::boxVolume([[2,3,2],[6,6,7],[1,2,1]]);