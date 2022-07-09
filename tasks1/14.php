<?php
/**
 * Write a function that takes the number of seconds and returns the digital format clock time as a string.
 * Time should be counted from 00:00:00.
 */


class Clock
{
    private string $time;

    public function __construct(string $time)
    {
        $this->time = $time;
    }

    public static function timeWillTell(string $seconds)
    {
        return gmdate('H:i:s', $seconds);
    }
}

echo Clock::timeWillTell('55885');