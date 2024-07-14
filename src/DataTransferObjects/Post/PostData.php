<?php

declare(strict_types=1);

namespace Metaversegamescoin\RzCommon\DataTransferObjects\Post;

class PostData
{
    public function __construct(
        public readonly string $username,
        public readonly string $visibility,
        public readonly ?string $message,
        public readonly ?string $images,
        public readonly ?bool $is_locked_comments,
        public readonly ?bool $is_locked_post,
        public readonly ?array $post_data,
    ) {}


    public static function fromArray(array $data): self
    {
        return new static(
            $data['username'],
            $data['visibility'],
            $data['message'] ?? null,
                $data['images'] ?? null,
            $data['is_locked_comments'] ?? false,
            $data['is_locked_post'] ?? false,
            $data['post_data'] ?? [],
        );
    }
}