<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

class UserActToAnotherUserData
{
    public function __construct(
        public readonly string $sourceUserUlid,
        public readonly string $destinationUserUlid,
    ) {}

    /**
     * @return UserData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            sourceUserUlid: $data['sourceUserUlid'],
            destinationUserUlid: $data['destinationUserUlid'],
        );
    }
}
