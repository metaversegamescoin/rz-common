<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Message;

use Metaversegamescoin\RzCommon\Enums\MessageModelType;

class MessageModelData
{
    public function __construct(
        public readonly MessageModelType $modelType,
        public readonly int $modelId,
    ) {}

    /**
     * @return MessageModelData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            modelType: $data['model_type'],
            modelId: $data['model_id'],
        );
    }
}