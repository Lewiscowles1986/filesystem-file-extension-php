<?php declare(strict_types=1);
/**
 * @file
 */

namespace lewiscowles\Utils\FileSystem\Extension;


/**
 * fixExtensionIfNeeded returns extension from an extension and filename
 *
 * @param string $originalExtension the extension of the filename
 * @param string $filename the original filename (note: not path)
 * @return string
 */
function fixExtensionIfNeeded(string $originalExtension, string $filename) : string {
    if( isExtensionTooShort($originalExtension) ) {
        return getExtensionFromFilename($filename);
    }
    return $originalExtension;
}

/**
 * getExtensionFromFilename returns a file extension from a filename
 *
 * It takes into account dotfiles but returns true if they have an extension
 *
 * @param string $filename a filename (note: not path)
 * @return string
 */
function getExtensionFromFilename(string $filename) : string {
    $Parts = explode('.', $filename);
    $LowerParts = array_map('strtolower', $Parts);
    $LastPart = array_pop($LowerParts);

    if( isDualPartExtension($LastPart) ) {
        $PenultimatePart = array_pop($LowerParts);
        return "{$PenultimatePart}.{$LastPart}";
    } elseif( hasNoExtension($filename) ) {
        return "";
    }

    return $LastPart;
}

/**
 * hasNoExtension returns if a file has no file extension
 *
 * It takes into account dotfiles but returns true if they have an extension
 *
 * @param string $filename a filename (note: not path)
 * @return bool
 */
function hasNoExtension(string $filename) : bool {
    return (
        (strpos($filename, '.', 0) === FALSE)
        ||
        (
            (substr_count($filename, '.') < 2)
            &&
            isDotFile($filename)
        )
    );
}
