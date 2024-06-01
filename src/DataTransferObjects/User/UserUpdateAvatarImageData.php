<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

class UserUpdateAvatarImageData
{
    public function __construct(
        public readonly int $userId,
        public readonly string $imageUrl,
    ) {}


}
