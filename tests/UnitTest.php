<?php

use function lewiscowles\Utils\FileSystem\Extension\{extensionIsTooSmall,hasNoExtension,dualPartExtension};
use PHPUnit\Framework\TestCase;


class UnitTest extends TestCase
{
    // Extension Size Tests
    
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
    
    // Has-Extension Tests
    
    /**
     * @test
     */
    public function hasNoExtensionTrueIfNoExtension() {
        $this->assertTrue(hasNoExtension("filewithnoextension"));
    }
    
    /**
     * @test
     */
    public function hasNoExtensionTrueIfDotFileWithoutExtension() {
        $this->assertTrue(hasNoExtension(".htaccess"));
    }
    
    /**
     * @test
     */
    public function hasNoExtensionFalseIfDotFileWithExtension() {
        $this->assertFalse(hasNoExtension(".htaccess.tar.gz"));
    }
    
    /**
     * @test
     */
    public function hasNoExtensionFalseIfHasExtension() {
        $this->assertFalse(hasNoExtension("test.docx"));
    }
    
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

