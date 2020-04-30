<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Integration;

use function lewiscowles\Utils\FileSystem\Extension\fixExtensionIfNeeded;
use PHPUnit\Framework\TestCase;


class FixExtensionIfNeededTest extends TestCase
{
    /**
     * @test
     */
    public function extensionNotChangedIfEmptyWithFilenameWithoutExtension() {
        $this->assertEquals(fixExtensionIfNeeded("", "filewithoutext"), "");
    }

    /**
     * @test
     */
    public function extensionChangedIfEmptyWithSingularFilename() {
        $this->assertEquals(fixExtensionIfNeeded("", "test.docx"), "docx");
    }

    /**
     * @test
     */
    public function extensionChangedIfEmptyWithDualFilename() {
        $this->assertEquals(fixExtensionIfNeeded("", "archive.tar.gz"), "tar.gz");
    }

}

