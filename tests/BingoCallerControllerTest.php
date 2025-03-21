<?php

namespace Tests;

use App\Controllers\BingoCallerController;
use PHPUnit\Framework\TestCase;

class BingoCallerControllerTest extends TestCase
{
    public function testWhenNumberIsRange()
    {
        $bingoCaller = new BingoCallerController();
        $this->assertContains($bingoCaller->callNumber(), range(1, 75));
        
    }
}