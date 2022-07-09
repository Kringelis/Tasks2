<?php
/**
 * A lowercase word is hiding amongst a crowd of uppercase letters!
 * Write a function that returns the hidden name.
 */
class hideAndSeek
{
    private string $crowd;

    public function __construct(string $crowd)
    {
        $this->crowd = $crowd;
    }

    public static function hideAndSeek(string $crowd)
    {
        $name = [];
        $letters = str_split($crowd);
        foreach ($letters as $letter){
            if (ctype_upper($letter)) continue;
            $name[] = $letter;
        }
        return ucfirst(implode('', $name));

    }
}

print_r(hideAndSeek::hideAndSeek('ASASAASDASDSDASASSDdesaASFASDASDASDAS'));
