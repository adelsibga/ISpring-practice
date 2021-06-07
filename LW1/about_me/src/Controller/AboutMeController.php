<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Module\AboutMe\App\HobbieService;
use App\View\AboutMe\AboutMePageView;

class AboutMeController extends AbstractController
{
    public function page(HobbieService $hobbieService): Response
    {
        $view = new AboutMePageView($hobbieService->getHobbies());      //(Привязка к View)'

        return $this->render('about_me\index.html.twig', $view->getOptions());
    }
}