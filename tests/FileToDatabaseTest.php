<?php

use Nours88\FileToDatabase;
use PHPUnit\Framework\TestCase;

class FileToDatabaseTest extends TestCase
{
    public function testInstanceOfFileDatabase()
    {
        $this->assertInstanceOf(FileToDatabase::class, new FileToDatabase());
    }
}
