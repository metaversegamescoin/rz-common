<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\State;

class StateData
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {}

    /**
     * @return StateData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            name: $data['name']
        );
    }
}
