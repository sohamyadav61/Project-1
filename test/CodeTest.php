<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class CodeTest extends TestCase
{
    public function testDataDirectory()
    {
        $this->assertDirectoryExists('data');
    }

}