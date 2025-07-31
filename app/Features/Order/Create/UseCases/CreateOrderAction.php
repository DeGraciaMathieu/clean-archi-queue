<?php

namespace App\Features\Order\Create\UseCases;

use App\Libraries\Async\Api\AsyncDispatcher;
use App\Features\Order\Create\Services\CreateOrder;
use App\Features\Order\Create\UseCases\CreateOrderInput;
use App\Features\Order\Create\UseCases\CreateOrderOutput;

class CreateOrderAction
{
    public function __construct(
        private AsyncDispatcher $dispatcher,
    ) {}

    public function __invoke(CreateOrderInput $input): CreateOrderOutput
    {
        $this->dispatcher->dispatch(
            new CreateOrder($input->name, $input->description)
        );

        return new CreateOrderOutput();
    }
}