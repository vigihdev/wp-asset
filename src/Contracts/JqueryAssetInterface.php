<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset\Contracts;

interface JqueryAssetInterface
{

    public function getBasepath(): string;

    public function getJs(): string;

    public function getBaseUrl(): string;

    public function getVersion(): string;
}
