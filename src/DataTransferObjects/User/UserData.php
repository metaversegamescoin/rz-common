<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\User;

use Metaversegamescoin\RzCommon\DataTransferObjects\Country\CountryData;
use Metaversegamescoin\RzCommon\DataTransferObjects\State\StateData;

class UserData
{
    public function __construct(
        public readonly int $id,
        public readonly ?string $email,
        public readonly ?string $name,
        public readonly ?string $first_name,
        public readonly ?string $last_name,
        public readonly ?string $username,
        public readonly ?string $email_verified_at,
        public readonly ?int $referrer_user_id,
        public readonly ?string $sex,
        public readonly ?string $status,
        public readonly ?string $mobile,
        public readonly ?string $gender,
        public readonly ?string $birth_date,
        public readonly ?string $bio,
        public readonly ?bool $is_banned,
        public readonly ?bool $is_set_password,

        public readonly ?CountryData $country,
        public readonly ?StateData $state,
    ) {}


    /**
     * @param array{id: int, email: string, name: ?string, first_name: ?string, last_name: ?string,
     *      username: ?string, email_verified_at: ?string, referrer_user_id: ?int, sex: ?string,
     *      status: ?string, mobile: ?string, gender: ?string, birth_date: ?string, bio: ?string,
     *     is_banned: ?bool,is_set_password: ?bool,
     *      country: ?array{
     *          id: int, sortname: string, name: string, phonecode: int,
     *      }, 
     *      state: ?array{
     *          id: int, name: string,
     *      },
     * } $data
     * @return UserData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            $data['id'],
            $data['email']??null,
            $data['name'] ?? null,
            $data['first_name'] ?? null,
            $data['last_name'] ?? null,
            $data['username'] ?? null,
            $data['email_verified_at'] ?? null,
            $data['referrer_user_id'] ?? null,
            $data['sex'] ?? null,
            $data['status'] ?? null,
            $data['mobile'] ?? null,
            $data['gender'] ?? null,
            $data['birth_date'] ?? null,
            $data['bio'] ?? null,
            is_bool($data['is_banned']??null) ?$data['is_banned']: null,
            is_bool($data['is_set_password']??null) ?$data['is_set_password']: null,

            isset($data['country']) ? new CountryData(
                id: $data['country']['id'],
                sortname: $data['country']['sortname'],
                name: $data['country']['name'],
                phonecode: $data['country']['phonecode'] 
            ) : null,
            isset($data['state']) ? new StateData(
                id: $data['state']['id'],
                name: $data['state']['name']
            ) : null,
        );
    }
}