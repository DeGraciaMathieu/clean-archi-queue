<?php

namespace App\Libraries\Api;

interface AsyncCommand
{
    public function execute(): void;
    public function getTries(): int;
    public function getTimeout(): int;
    public function getQueue(): ?string;
}
