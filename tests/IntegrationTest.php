<?php

use function lewiscowles\Utils\FileSystem\Extension\{fixExtensionIfNeeded,getExtensionFromFilename};
use PHPUnit\Framework\TestCase;


class IntegrationTest extends TestCase
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

