<?php

namespace Tests;

use ChainGenerator;
use Example;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ChainGeneratorTest extends TestCase
{
    /**
     * @dataProvider provideGenerateChain
     */
    public function testGenerateChain(string $start, string $end)
    {
    }

    public function provideGenerateChain()
    {
        yield [
            'cat',
            'dog',
        ];

        yield [
            'lead',
            'gold',
        ];
    }
}
