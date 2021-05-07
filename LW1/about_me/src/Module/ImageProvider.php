<?php

namespace App\Module;

use IvanUskov\ImageSpider\ImageSpider;

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