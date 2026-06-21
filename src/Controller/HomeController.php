<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $html = '<html><body><h1>Here are your 100 random numbers: <br></h1><ul>';

        for ($i = 0; $i < 100; $i++) {
            $randomNumber = random_int(0, 1000000);
            $html .= sprintf('<li>%s</li>', $randomNumber);
        }

        $html .= '</ul></body></html>';

        return new Response($html, Response::HTTP_OK, ['Content-Type' => 'text/html']);
    }
}
