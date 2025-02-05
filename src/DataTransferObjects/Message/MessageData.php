<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Message;

class MessageData
{
    public function __construct(
        public readonly string $title,
        public readonly int $createdBy,
        public readonly array $recipients,
        public readonly ?int $messageId,
        public readonly ?string $content,
        public readonly ?string $images,
    ) {}


    public static function fromArray(array $data): self
    {
        return new static(
            title: $data['title'],
            createdBy: $data['created_by'],
            recipients: $data['recipients'],
            messageId: $data['message_id']??null,
            content: $data['content'] ?? null,
            images: $data['images'] ?? null
        );
    }
}