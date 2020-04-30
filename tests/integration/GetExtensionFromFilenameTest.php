<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Integration;

use function lewiscowles\Utils\FileSystem\Extension\getExtensionFromFilename;
use PHPUnit\Framework\TestCase;


class GetExtensionFromFilenameTest extends TestCase
{
    // Valid-Extension Tests

    /**
     * @test
     */
    public function emptyExtensionFromFilenameReturnsEmptyExtension() {
        $this->assertEquals(getExtensionFromFilename(""), "");
    }

    /**
     * @test
     */
    public function extensionFromFilenameReturnsBothPartsIfDualExtension() {
        $this->assertEquals(getExtensionFromFilename("test.tar.gz"), "tar.gz");
    }

    /**
     * @test
     */
    public function extensionFromFilenameReturnsSingularExtension() {
        $this->assertEquals(getExtensionFromFilename("test.docx"), "docx");
    }
}
