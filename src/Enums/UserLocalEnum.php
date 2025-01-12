<?php

namespace Metaversegamescoin\RzCommon\Enums;

enum UserLocalEnum: string
{

    case FA = 'fa';

    case EN = 'en';

    case AR = 'ar';

    public function getLabel(): string
    {
        return match ($this) {
            self::FA => 'فارسی',
            self::EN => 'English',
            self::AR => 'العربية',
        };
    }
}
