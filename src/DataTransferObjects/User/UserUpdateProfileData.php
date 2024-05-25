<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

class UserUpdateProfileData
{
    public function __construct(
        public readonly int $userId,
        public readonly int $stateId,
        public readonly int $countryId,
        public readonly string $name,
        public readonly string $stateName,
        public readonly string $countryName,
    ) {}


}
