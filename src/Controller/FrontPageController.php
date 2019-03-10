<?php declare (strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontPageController extends AbstractController
{
  public function showFrontPage() {
    return $this->render('frontpage.html.twig');
  }
}

