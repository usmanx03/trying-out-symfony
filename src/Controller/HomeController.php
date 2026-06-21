<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(
        LoggerInterface $logger,
    ): Response
    {
        $logger->info("Request received.");

        for ($i = 0; $i < 100; $i++) {
            $randomNumbers[] = random_int(0, 1000000);
        }

        return $this->render('home.html.twig', compact('randomNumbers'));
    }
}
