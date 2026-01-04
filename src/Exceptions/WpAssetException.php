<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset\Exceptions;

use Exception;

final class WpAssetException extends Exception
{

    public static function directoryNotFound(string $directory): self
    {
        return new self("Directory not found: $directory");
    }

    public static function fileNotFound(string $file): self
    {
        return new self("File not found: $file");
    }
}
