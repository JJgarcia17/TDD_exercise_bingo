<?php

namespace App\Controllers;

class BingoCallerController
{
    private $numbers = [];
    
    public function __construct()
    {
        $this->numbers = range(1, 75);
        shuffle($this->numbers);
    }

    public function callNumber()
    {
        return 0;
    }

}