<?php

namespace App\Module;

use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider implements ImageProviderInterface
{
    private const QUANTITY_PHOTOS = 5;
    private array $urls;

    public function getUrls(string $theme): void        // получаем случайные фото по запросу
    {
        $this->urls = ImageSpider::find($theme);
    }

    public function getPhotosUrls(string $theme): array // получаем 5 случайных фото по теме
    {
        $this->getUrls($theme);
        for ($i = 0; $i < self::QUANTITY_PHOTOS; ++$i) {
            $length = count($this->urls);
            $index = rand(0, ($length - 1));
            $result[] = $this->urls[$index];
            unset($this->urls[$index]);                 // убираем из массива ссылку, чтобы не повторялась
        }

        return $result;
    }
}