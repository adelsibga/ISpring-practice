<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{
  public function page(): Response
  {
      return $this->render('/about_me/index.html.twig');
  }
}