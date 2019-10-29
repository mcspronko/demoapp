<?php

declare(strict_types=1);

namespace Pronko\Test;

use PHPUnit\Framework\TestCase;
use Pronko\App;

class AppTest extends TestCase
{
    public function testRun()
    {
        $expected = "Hello World";
        $app = new App();

        $this->assertEquals($expected, $app->run());
    }
}