<?php

namespace App\Features\Order\Create\UseCases;

class CreateOrderInput
{
    public function __construct(
        public string $name,
        public string $description,
    ) {}
}
