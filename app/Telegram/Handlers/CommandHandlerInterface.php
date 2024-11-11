<?php

namespace App\Telegram\Handlers;

interface CommandHandlerInterface
{
    public function handle(): void;
}

