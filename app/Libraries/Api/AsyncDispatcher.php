<?php

namespace App\Libraries\Api;

use App\Libraries\Api\AsyncCommand;

interface AsyncDispatcher
{
    public function dispatch(AsyncCommand $command): void;
}
