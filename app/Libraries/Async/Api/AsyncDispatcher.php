<?php

namespace App\Libraries\Async\Api;

use App\Libraries\Async\Api\AsyncCommand;

interface AsyncDispatcher
{
    public function dispatch(AsyncCommand $command): void;
} 