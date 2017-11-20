<?php

class DataProvider
{
    public function getNumbers($start = 0, $end = 100)
    {
        return range($start, $end);
    }
}