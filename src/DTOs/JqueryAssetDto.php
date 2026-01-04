<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset\DTOs;

use Vigihdev\WpAsset\Contracts\JqueryAssetInterface;

final class JqueryAssetDto implements JqueryAssetInterface
{

    public function __construct(
        private readonly string $basepath,
        private readonly string $js,
        private readonly string $baseUrl,
        private readonly string $version,
    ) {}

    public function getBasepath(): string
    {
        return $this->basepath;
    }

    public function getJs(): string
    {
        return $this->js;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getVersion(): string
    {
        return $this->version;
    }
}
