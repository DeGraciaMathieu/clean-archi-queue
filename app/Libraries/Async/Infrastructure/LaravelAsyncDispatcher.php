<?php

namespace App\Libraries\Async\Infrastructure;

use App\Libraries\Async\Api\AsyncCommand;
use App\Libraries\Async\Api\AsyncDispatcher;
use App\Libraries\Async\Infrastructure\GenericAsyncJob;

class LaravelAsyncDispatcher implements AsyncDispatcher
{
    public function dispatch(AsyncCommand $command): void
    {
        dispatch(new GenericAsyncJob($command));
    }
} 