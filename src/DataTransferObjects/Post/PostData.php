<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Post;

class PostData
{
    public function __construct(
        public readonly string $username,
        public readonly string $visibility,
        public readonly ?string $message,
        public readonly ?array $images,
        public readonly ?bool $isLockedComments,
        public readonly ?bool $isLockedPost,
        public readonly ?array $postData,
    ) {}

    /**
     * @return PostData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            username: $data['username'],
            visibility: $data['visibility'],
            message: $data['message'] ?? null,
            images: $data['images'] ?? null,
            isLockedComments: $data['is_locked_comments'] ?? false,
            isLockedPost: $data['is_locked_post'] ?? false,
            postData: $data['post_data'] ?? [],
        );
    }
}