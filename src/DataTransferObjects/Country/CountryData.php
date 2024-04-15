<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Country;

class CountryData
{
    public function __construct(
        public readonly int $id,
        public readonly string $sortname,
        public readonly string $name,
        public readonly int $phonecode,
    ) {}

    /**
     * @param array{id: int,sortname: string,name: string,phonecode: int} $data
     * @return CountryData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            $data['id'],
            $data['sortname'],
            $data['name'],
            $data['phonecode'],
        );
    }
}
