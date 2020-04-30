<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Unit;

use function lewiscowles\Utils\FileSystem\Extension\isDualPartExtension;
use PHPUnit\Framework\TestCase;


class IsDualPartExtensionTest extends TestCase
{
    /**
     * @test
     */
    public function notDualPartExtensionWithNoExtension() {
        $this->assertFalse(isDualPartExtension("filewithnoextension"));
    }

    /**
     * @test
     */
    public function notDualPartExtensionWithSingularExtension() {
        $this->assertFalse(isDualPartExtension("test.docx"));
    }

    /**
     * @test
     */
    public function isDualPartExtensionWithGZipTarball() {
        $this->assertTrue(isDualPartExtension("gz"));
    }
}

