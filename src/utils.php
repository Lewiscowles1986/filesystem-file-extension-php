<?php declare(strict_types=1);

namespace lewiscowles\Utils\FileSystem\Extension;


/**
 * extensionIsTooSmall returns true for zero-length file extension
 *
 * @param string $extension
 * @return bool
 */
function extensionIsTooSmall(string $extension) : bool {
    return ( strlen($extension) < 1 );
}

/**
 * isDualPartExtension returns true for supported dual-part extensions
 * Examples include compressed variants of files
 *
 * @param string $extension
 * @return bool
 */
function isDualPartExtension(string $extension) : bool {
    return in_array($extension, [
        'Z',
        'gz',
        'xz',
        'bz2',
        'lzma',
    ], true);
}

/**
 * isDotFile returns true for filenames beginning with a dot / period character
 *
 * @param string $filename
 * @return bool
 */
function isDotFile(string $filename) : bool {
    return (strpos($filename, '.', 0) === 0);
}
