<?php

namespace App\Modules\App;

interface ImageProviderInterface
{
    public function getUrls(string $keywords);
}