<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Atlassian\Main;

class MainTest extends TestCase
{
    public function testItWorks(): void
    {
        $this->assertInstanceOf(Main::class, new Main());
    }
}
