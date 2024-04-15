<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\State;

use Metaversegamescoin\RzCommon\DataTransferObjects\Country\CountryData;

class StateData
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}

    /**
     * @param array{id: int, sortname: string, name: string} $data
     * @return StateData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            $data['id'],
            $data['name']
        );
    }
}
