<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Unit;

use function lewiscowles\Utils\FileSystem\Extension\isExtensionTooShort;
use PHPUnit\Framework\TestCase;


class IsTooExtensionShortTest extends TestCase
{
    /**
     * @test
     */
    public function extensionIsTooSmallIfEmpty() {
        $this->assertTrue(isExtensionTooShort(""));
    }

    /**
     * @test
     */
    public function extensionIsNotTooSmallIfNotEmpty() {
        $this->assertFalse(isExtensionTooShort("1"));
    }
}
