<?php

namespace App\Telegram\Handlers;

use DefStudio\Telegraph\Facades\Telegraph;

readonly class LanguageResponseHandler implements CommandHandlerInterface
{
    public function __construct(private string $language)
    {
    }

    public function handle(): void
    {
        switch ($this->language) {
            case 'C':
                Telegraph::message("Отстаньте от деда")->send();
                break;
            case 'C++':
                Telegraph::message("А вы гурман:)")->send();
                break;
            case 'C#':
                Telegraph::message("Нормальное с решеточкой не назовут")->send();
                break;
            case 'Java':
                Telegraph::message("Больше классов, я вам говорю еще больше классов!")->send();
                break;
            case 'Python':
                Telegraph::message("А там, что есть ООП?!")->send();
                break;
            case 'PHP':
                Telegraph::message("Несомненно, сэр!")->send();
                break;
            case 'Ruby':
                Telegraph::message("Верните мой 2007...")->send();
                break;
        }
    }
}
