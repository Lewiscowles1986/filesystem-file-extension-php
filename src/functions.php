<?php

namespace lewiscowles\Utils\FileSystem\Extension;

function fixExtensionIfNeeded(string $originalExtension, string $filename) {
    if( extensionIsTooSmall($originalExtension) ) {
			return getExtensionFromFilename($filename);
    }
    return $originalExtension;
}

function extensionIsTooSmall(string $extension) {
    return ( strlen($extension) < 1 );
}

function getExtensionFromFilename(string $filename) {
    $Parts = explode('.', $filename);
    $LowerParts = array_map('strtolower', $Parts);
    $LastPart = array_pop($LowerParts);

    if( dualPartExtension($LastPart) ) {
        $PenultimatePart = array_pop($LowerParts);
        return "{$PenultimatePart}.{$LastPart}";
    } elseif( hasNoExtension($filename) ) {
        return "";
    }

    return $LastPart;
}

function isDotFile(string $filename) {
    return (strpos($filename, '.', 0) === 0);
}

function hasNoExtension(string $filename) {
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

function dualPartExtension(string $extension) {
    return in_array($extension, [
        'gz',
        'xz',
        'bz2',
    ], true);
}

