<?php

namespace App\Module\AboutMe\App;

use App\Module\AboutMe\App\ConstHobbieConfigurationInterface;
use App\Module\AboutMe\Model\Hobbie;
use App\Module\AboutMe\App\ImageProviderInterface;


class HobbieService //создает массив адекватных данных из картинок и названий
{
    private ConstHobbieConfigurationInterface $hobbieConfiguration;
    private ImageProviderInterface $imageProvider;
    private array $hobbies = [];  //var


    public function __construct(ConstHobbieConfigurationInterface $hobbieConfiguration, ImageProviderInterface $imageProvider)
    {
        $this->hobbieConfiguration = $hobbieConfiguration;
        $this->imageProvider = $imageProvider;

        foreach ($this->hobbieConfiguration::getHobbiesMap() as $value) //получить список хобби-заголовков
        {
            $this->addHobbie($value);
        }
    }

    public function getHobbies(): array
    {
        return $this->hobbies;
    }

    public function addHobbie(string $title): void
    {
        $photos = $this->imageProvider->getPhotosUrls($title);
        $hobbie = new Hobbie($title, $photos);
        $this->hobbies[] = $hobbie;
    }
}