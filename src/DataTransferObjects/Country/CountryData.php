<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Country;

class CountryData
{
    public function __construct(
        public readonly int $id,
        public readonly string $sortName,
        public readonly string $name,
        public readonly int $phoneCode,
    ) {}

    /**
     * @return CountryData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            sortName: $data['sortname'],
            name: $data['name'],
            phoneCode: $data['phonecode'],
        );
    }
}
