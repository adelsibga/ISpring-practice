<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Module\ImageProvider;

class PageController extends AbstractController
{
  public function page(): Response
  {
	  $images = new ImageProvider();
	  $images->getUrls('cars');

	//  $firstTheme = $images->getPhotosUrls('Баскетбол');
      return $this->render('/about_me/index.html.twig', [
		  'test' => debug_zval_dump($images)
	  ]);
  }
}