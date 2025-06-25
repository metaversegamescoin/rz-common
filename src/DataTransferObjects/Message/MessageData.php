<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Message;

class MessageData
{
    public function __construct(
        public readonly string $title,
        public readonly string $createdByUlid,
        public readonly array $recipients,
        public readonly MessageModelData $modelData,
        public readonly ?string $messageId,
        public readonly ?string $content,
        public readonly ?array $images,
    ) {}

    /**
     * @return MessageData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            title: $data['title'],
            createdByUlid: $data['created_by_ulid'],
            recipients: $data['recipients'],
            modelData: MessageModelData::fromArray($data['model_data']??[]),
            messageId: $data['message_id']??null,
            content: $data['content'] ?? null,
            images: $data['images'] ?? null
        );
    }
}