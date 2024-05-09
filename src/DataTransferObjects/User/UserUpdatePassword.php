<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

class UserUpdatePassword
{
    public function __construct(
        public readonly string $password,
    ) {}

    /**
     * @param string $password
     * @return UserUpdatePassword
     */
    public static function fromArray(string $password): self
    {
        return new static($password);
    }
}
