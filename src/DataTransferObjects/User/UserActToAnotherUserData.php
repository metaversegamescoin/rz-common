<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

class UserActToAnotherUserData
{
    public function __construct(
        public readonly int $sourceUserId,
        public readonly int $destinationUserId,
    ) {}

    /**
     * @param array{sourceUserId: int, destinationUserId:int} $data
     * @return UserData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            $data['sourceUserId'],
            $data['destinationUserId'],
        );
    }
}
