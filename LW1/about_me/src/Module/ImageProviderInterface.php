<?php

namespace App\Module;

interface ImageProviderInterface
{
    public function getPhotosUrls(string $theme): array;
}