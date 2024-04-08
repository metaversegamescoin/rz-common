<?php

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

class UserData
{
    public function __construct(
        public readonly int $userId,
    ) {}

    /**
     * @param array{userId: int} $data
     * @return UserData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            $data['userId'],
        );
    }
}