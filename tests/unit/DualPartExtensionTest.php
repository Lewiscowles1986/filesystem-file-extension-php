<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Unit;

use function lewiscowles\Utils\FileSystem\Extension\dualPartExtension;
use PHPUnit\Framework\TestCase;


class DualPartExtensionTest extends TestCase
{
    // Dual Part Extension Tests

    /**
     * @test
     */
    public function notDualPartExtensionWithNoExtension() {
        $this->assertFalse(dualPartExtension("filewithnoextension"));
    }

    /**
     * @test
     */
    public function notDualPartExtensionWithSingularExtension() {
        $this->assertFalse(dualPartExtension("test.docx"));
    }

    /**
     * @test
     */
    public function isDualPartExtensionWithGZipTarball() {
        $this->assertTrue(dualPartExtension("gz"));
    }
}

