<?php

namespace App\Telegram\Handlers;

use DefStudio\Telegraph\Facades\Telegraph;

class HelloWorldHandler implements CommandHandlerInterface
{
    public function handle(): void
    {
        Telegraph::message("Hello, world!")->send();
    }
}

