<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Enums;

use App\Core\Helpers\EnumReadableTrait;

enum DeviceType: string
{

    use EnumReadableTrait;

    case DESKTOP = 'pc';
    case LAPTOP = 'laptop';
    case MOBILE = 'mobil';

}