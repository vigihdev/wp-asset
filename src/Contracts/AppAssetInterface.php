<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset\Contracts;

interface AppAssetInterface
{

    public function getBasepath(): string;

    public function getDepends(): array;

    public function getJs(): array;

    public function getCss(): array;

    public function getBaseUrl(): string;

    public function getVersion(): string;
}
