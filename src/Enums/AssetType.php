<?php

declare(strict_types=1);

namespace Vigihdev\WpAsset\Enums;

enum AssetType: string
{
    case JQUERY_ASSET = 'jquery.asset';
    case APP_ASSET = 'app.asset';
}
