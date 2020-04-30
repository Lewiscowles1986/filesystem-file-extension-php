<?php declare(strict_types=1);
/**
 * @file
 */

namespace lewiscowles\Utils\FileSystem\Extension;


/**
 * isExtensionTooShort returns true for zero-length file extension
 *
 * @param string $extension a file name extension
 * @return bool
 */
function isExtensionTooShort(string $extension) : bool {
    return ( strlen($extension) < 1 );
}

/**
 * isDualPartExtension returns true for supported dual-part extensions
 *
 * Examples include compressed variants of files
 *
 * @param string $extension a file name extension
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
 * @param string $filename a filename (note: not path)
 * @return bool
 */
function isDotFile(string $filename) : bool {
    return (strpos($filename, '.', 0) === 0);
}
