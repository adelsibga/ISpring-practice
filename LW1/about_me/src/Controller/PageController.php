<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Modules\AboutMe\Infrastructure\ImageProvider;

class PageController extends AbstractController
{
    public function page(): Response
    {
        $images = new ImageProvider();
        $firstPhotos = $images->getPhotosUrls('АСБ_мужской_баскетбол');
        $secondPhotos = $images->getPhotosUrls('Математика');
        $thirdPhotos = $images->getPhotosUrls('Готовка');
        return $this->render('/about_me/index.html.twig', [
            'firstPhotos' => $firstPhotos,
            'secondPhotos' => $secondPhotos,
            'thirdPhotos' => $thirdPhotos,
        ]);
    }
}