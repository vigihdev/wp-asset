<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset;

use Vigihdev\WpAsset\Contracts\AppAssetInterface;
use Vigihdev\WpAsset\Contracts\RegisterInterface;
use Vigihdev\WpAsset\DTOs\AppAssetDto;
use Vigihdev\WpAsset\Exceptions\WpAssetException;

final class AppAsset implements RegisterInterface
{

    /**
     * @param AppAssetDto $asset
     */
    public function __construct(
        private readonly AppAssetInterface $asset,
    ) {

        if (!is_dir($asset->getBasepath())) {
            WpAssetException::directoryNotFound((string)$asset->getBasepath());
        }
    }

    public function register(): void
    {
        // TODO: Implement register() method.
    }
}
