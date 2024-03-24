<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/google-docs-picker')]
    public function googleDocsPicker(): Response
    {
        return $this->render('google-docs-picker.html.twig');
    }
}
