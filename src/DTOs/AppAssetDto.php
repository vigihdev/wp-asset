<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset\DTOs;

use Vigihdev\WpAsset\Contracts\AppAssetInterface;

final class AppAssetDto implements AppAssetInterface
{

    public function __construct(
        private readonly string $basepath,
        private readonly string $baseUrl,
        private readonly string $version,
        // private readonly JsOptionsInterface $jsOption,
        private readonly array $depends = [],
        private readonly array $js = [],
        private readonly array $css = []
    ) {}

    public function getBasepath(): string
    {
        return $this->basepath;
    }

    public function getDepends(): array
    {
        return $this->depends;
    }

    public function getJs(): array
    {
        return $this->js;
    }

    public function getCss(): array
    {
        return $this->css;
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
