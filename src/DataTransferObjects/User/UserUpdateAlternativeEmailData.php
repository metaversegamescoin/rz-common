<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

class UserUpdateAlternativeEmailData
{
    public function __construct(
        public readonly string $userUlid,
        public readonly string $alternativeEmail,
    ) {}


}
