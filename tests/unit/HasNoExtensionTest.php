<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Unit;

use function lewiscowles\Utils\FileSystem\Extension\hasNoExtension;
use PHPUnit\Framework\TestCase;


class HasNoExtensionTest extends TestCase
{
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
}
