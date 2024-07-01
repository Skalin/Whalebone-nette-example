<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Enums;

use App\Core\Helpers\EnumReadableTrait;

enum OsType: string
{

    use EnumReadableTrait;

    case Windows = 'win';
    case Linux = 'lin';
    case MacOS = 'mac';
    case Android = 'android';
    case IOS = 'iOS';

}