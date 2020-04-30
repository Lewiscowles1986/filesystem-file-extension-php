<?php

namespace lewiscowles\Utils\FileSystem\Extension\Tests\Unit;

use function lewiscowles\Utils\FileSystem\Extension\isDotFile;
use PHPUnit\Framework\TestCase;


class IsDotFileTest extends TestCase
{
    /**
     * @test
     */
    public function notDotFileNoExtension() {
        $this->assertFalse(isDotFile("filewithnoextension"));
    }

    /**
     * @test
     */
    public function notDotFileWithExtension() {
        $this->assertFalse(isDotFile("test.docx"));
    }

    /**
     * @test
     */
    public function dotFileNoExtension() {
        $this->assertTrue(isDotFile(".htaccess"));
    }

    /**
     * @test
     */
    public function dotFileWithExtension() {
        $this->assertTrue(isDotFile(".test.docx"));
    }
}

