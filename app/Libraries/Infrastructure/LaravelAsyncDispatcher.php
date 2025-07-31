<?php

namespace App\Libraries\Infrastructure;

use App\Libraries\Api\AsyncCommand;
use App\Libraries\Api\AsyncDispatcher;
use App\Libraries\Infrastructure\GenericAsyncJob;

class LaravelAsyncDispatcher implements AsyncDispatcher
{
    public function dispatch(AsyncCommand $command): void
    {
        dispatch(new GenericAsyncJob($command));
    }
}