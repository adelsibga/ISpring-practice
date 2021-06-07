<?php

namespace App\Module\AboutMe\Infrastructure;

use App\Module\AboutMe\App\ConstHobbieConfigurationInterface;

class ConstHobbieConfiguration implements ConstHobbieConfigurationInterface
{
    public static function getHobbiesMap(): array //хранит массив заголовков
    {
        return [
            'АСБ_мужской_баскетбол',
            'Математика',
            'Готовка',
        ];
    }
}