<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

use Metaversegamescoin\RzCommon\Enums\UserLocalEnum;

class UserUpdateProfileData
{
    public function __construct(
        public readonly int $userId,
        public readonly int $stateId,
        public readonly int $countryId,
        public readonly string $name,
        public readonly string $stateName,
        public readonly string $countryName,
        public readonly UserLocalEnum $local,
        public readonly ?int $timezoneId = null,
        public readonly ?string $timezoneOffset =null,
    ) {}


}
