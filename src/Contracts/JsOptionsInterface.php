<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset\Contracts;

interface JsOptionsInterface extends ArrayAbleInterface
{
    public function getStrategy(): ?string;

    public function getInFooter(): bool;
}
