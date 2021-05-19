<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Modules\App\HobbieService;
use App\View\AboutMe\AboutMePageView;
use App\Module\ImageProviderInterface;
use App\Modules\AboutMe\Infrastructure\ImageProvider;

class AboutMeController extends AbstractController
{
    public function page(): Response
    {
        $hobbies = new HobbieService();             //складывает в наборы
        $view = new AboutMePageView($hobbies);      //(Привязка к View)'

        return $this->render('base.html.twig', $view->getOptions());
    }
}