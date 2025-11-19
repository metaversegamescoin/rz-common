<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Notification;

class NotificationData
{
    public function __construct(
        public readonly string $id,
        public readonly string $model,
        public readonly string $action,
        public readonly ?string $subAction,
        public readonly ?string $sourceService,
        public readonly string $notifiableType,
        public readonly string $notifiableUlid,
        public readonly ?string $message,
        public readonly array $data,
        public readonly ?string $readAt,
    ) {}

    public static function fromArray(array $data): self
    {
        return new static(
            id: $data['id'],
            model: $data['model'],
            action: $data['action'],
            subAction: $data['sub_action'] ?? null,
            sourceService: $data['source_service'] ?? null,
            notifiableType: $data['notifiable_type'],
            notifiableUlid: $data['notifiable_ulid'],
            message: $data['message'] ?? null,
            data: $data['data'] ?? [],
            readAt: $data['read_at'] ?? null,
        );
    }
}
