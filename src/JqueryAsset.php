<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset;

use Vigihdev\WpAsset\Contracts\JqueryAssetInterface;
use Vigihdev\WpAsset\DTOs\JqueryAssetDto;
use Vigihdev\WpAssets\Contracts\RegisterInterface;

final class JqueryAsset implements RegisterInterface
{

    /**
     *
     * @param JqueryAssetDto $asset
     * @return void
     */
    public function __construct(
        private readonly JqueryAssetInterface $asset
    ) {}

    public function register(): void
    {
        // Register Jquery Asset
    }
}
