<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

use Metaversegamescoin\RzCommon\DataTransferObjects\Country\CountryData;
use Metaversegamescoin\RzCommon\DataTransferObjects\State\StateData;

class UserData
{
    public function __construct(
        public readonly string $ulid,
        public readonly ?string $email,
        public readonly ?string $name,
        public readonly ?string $firstName,
        public readonly ?string $lastName,
        public readonly ?string $username,
        public readonly ?string $emailVerifiedAt,
        public readonly ?string $referrerUserUlid,
        public readonly ?string $sex,
        public readonly ?string $status,
        public readonly ?string $mobile,
        public readonly ?string $gender,
        public readonly ?string $birthDate,
        public readonly ?string $bio,
        public readonly ?bool $isBanned,
        public readonly ?bool $isSetPassword,

        public readonly ?CountryData $country,
        public readonly ?StateData $state,
    ) {}


    /**
     * @return UserData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            ulid: $data['ulid'],
            email: $data['email']??null,
            name: $data['name'] ?? null,
            firstName: $data['first_name'] ?? null,
            lastName: $data['last_name'] ?? null,
            username: $data['username'] ?? null,
            emailVerifiedAt: $data['email_verified_at'] ?? null,
            referrerUserUlid: $data['referrer_user_id'] ?? null,
            sex: $data['sex'] ?? null,
            status: $data['status'] ?? null,
            mobile: $data['mobile'] ?? null,
            gender: $data['gender'] ?? null,
            birthDate: $data['birth_date'] ?? null,
            bio: $data['bio'] ?? null,
            isBanned: is_bool($data['is_banned']??null) ?$data['is_banned']: null,
            isSetPassword: is_bool($data['is_set_password']??null) ?$data['is_set_password']: null,

            country: isset($data['country']) ? new CountryData(
                id: $data['country']['id'],
                sortName: $data['country']['sortname'],
                name: $data['country']['name'],
                phoneCode: $data['country']['phonecode'] 
            ) : null,
            state: isset($data['state']) ? new StateData(
                id: $data['state']['id'],
                name: $data['state']['name']
            ) : null,
        );
    }
}