<?php

namespace App\Module\AboutMe\Infrastructure;

use IvanUskov\ImageSpider\ImageSpider;
use App\Module\AboutMe\App\ImageProviderInterface;

class ImageProvider implements ImageProviderInterface
{
    private const QUANTITY_PHOTOS = 5;

    public function getPhotosUrls(string $theme): array
    {
        $urls = ImageSpider::find(urlencode($theme));
        return $this->randomizeAndLimit($urls);
    }

    private function randomizeAndLimit(array $urls): array
    {
        shuffle($urls);
        return array_slice($urls, 0, self::QUANTITY_PHOTOS);
    }
}