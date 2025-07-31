<?php

namespace App\Libraries\Infrastructure;

use App\Libraries\Api\AsyncCommand;

class GenericAsyncJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries;
    public int $timeout;

    public function __construct(
        private AsyncCommand $command,
    ) {
        $this->tries = $command->getTries();
        
        $this->timeout = $command->getTimeout();

        if ($queue = $command->getQueue()) {
            $this->onQueue($queue);
        }
    }

    public function handle(): void
    {
        $this->command->execute();
    }
}