<?php

namespace App\Telegram\Handlers;

use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;

class BestLanguageHandler implements CommandHandlerInterface
{
    public function handle(): void
    {
        $question = 'Какой по вашему мнению самый лучший язык программирования?';

        $keyboard = Keyboard::make()->buttons([
            Button::make('C')->action('cLanguage'),
            Button::make('C++')->action('cppLanguage'),
            Button::make('C#')->action('csharpLanguage'),
            Button::make('Java')->action('javaLanguage'),
            Button::make('Python')->action('pythonLanguage'),
            Button::make('PHP')->action('phpLanguage'),
            Button::make('Ruby')->action('rubyLanguage'),
        ]);

        Telegraph::message($question)
            ->keyboard($keyboard)
            ->send();
    }
}
