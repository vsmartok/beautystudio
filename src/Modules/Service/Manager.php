<?php

declare(strict_types=1);

namespace BeautyStudio\Modules\Service;

use BeautyStudio\Contracts\Registrable;

final class Manager implements Registrable
{
    /**
     * @var array<Registrable>
     */
    protected array $parts = [];

    public function __construct()
    {
        $this->parts = [
            new PostType(),
        ];
    }

    public function register(): void
    {
        foreach ($this->parts as $part) {
            $part->register();
        }
    }
}
