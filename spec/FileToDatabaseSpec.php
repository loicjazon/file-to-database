<?php

namespace spec\Nours88;

use Nours88\FileToDatabase;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FileToDatabaseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FileToDatabase::class);
    }
}
