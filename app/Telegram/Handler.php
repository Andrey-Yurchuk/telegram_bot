<?php

namespace App\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Stringable;
use App\Telegram\Handlers\HelloWorldHandler;
use App\Telegram\Handlers\BestLanguageHandler;
use App\Telegram\Handlers\LanguageResponseHandler;


class Handler extends WebhookHandler
{
    public function handleCommand(string|Stringable $text): void
    {
        switch ((string)$text) {
            case '/hello':
                (new HelloWorldHandler())->handle();
                break;
            case '/best_language':
                (new BestLanguageHandler())->handle();
                break;
            default:
                $this->chat->message("Неизвестная команда: $text")->send();
        }
    }

    // region Language Handlers

    public function cLanguage(): void
    {
        (new LanguageResponseHandler('C'))->handle();
    }

    public function cppLanguage(): void
    {
        (new LanguageResponseHandler('C++'))->handle();
    }

    public function csharpLanguage(): void
    {
        (new LanguageResponseHandler('C#'))->handle();
    }

    public function javaLanguage(): void
    {
        (new LanguageResponseHandler('Java'))->handle();
    }

    public function pythonLanguage(): void
    {
        (new LanguageResponseHandler('Python'))->handle();
    }

    public function phpLanguage(): void
    {
        (new LanguageResponseHandler('PHP'))->handle();
    }

    public function rubyLanguage(): void
    {
        (new LanguageResponseHandler('Ruby'))->handle();
    }

    // endregion
}

