<?php

namespace App\Modules\AboutMe\Infrastructure;

class HobbiesRepository
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