<?php

namespace App\Features\Order\Create\Services;

use App\Libraries\Api\AsyncCommand;

class CreateOrder implements AsyncCommand
{
    public function __construct(
        public string $name,
        public string $description,
    ) {}

    public function execute(): void
    {
        // create order here
    }

    public function getTries(): int
    {
        return 3;
    }

    public function getTimeout(): int
    {
        return 600;
    }

    public function getQueue(): ?string
    {
        return 'high-priority';
    }
}
