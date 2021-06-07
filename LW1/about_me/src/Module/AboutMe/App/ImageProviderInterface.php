<?php

namespace App\Module\AboutMe\App;

interface ImageProviderInterface
{
    public function getPhotosUrls(string $theme): array;
}