<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Unit;

use function lewiscowles\Utils\FileSystem\Extension\extensionIsTooSmall;
use PHPUnit\Framework\TestCase;


class ExtensionIsTooSmallTest extends TestCase
{
    /**
     * @test
     */
    public function extensionIsTooSmallIfEmpty() {
        $this->assertTrue(extensionIsTooSmall(""));
    }

    /**
     * @test
     */
    public function extensionIsNotTooSmallIfNotEmpty() {
        $this->assertFalse(extensionIsTooSmall("1"));
    }
}
