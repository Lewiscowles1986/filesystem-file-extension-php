<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Legacy;

use function lewiscowles\Utils\FileSystem\Extension\fixExtensionIfNeeded;
use PHPUnit\Framework\TestCase;


class IntegrationTest extends TestCase
{
    // Fix-Extenson if Needed Tests

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

