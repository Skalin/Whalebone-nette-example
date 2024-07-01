<?php

declare(strict_types=1);


namespace App\Core\Helpers;

trait EnumReadableTrait
{

    /**
     * @return array<mixed>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

}