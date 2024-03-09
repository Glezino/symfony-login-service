<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\Mailer;

class EmailController extends AbstractController
{
    #[Route('/email', name: 'app_email')]
    public function index(Mailer $mailer): JsonResponse
    {
        $mailer->sendEmail("###@gmail.com", "Prueba" );
        return $this->json([
            'message' => 'Mensaje enviado!',
        ]);
    }

    #[Route('/email-welcome', name: 'app_emailwelcome')]
    public function welcome(Mailer $mailer): JsonResponse
    {
        $mailer->sendEmail("###@gmail.com", "Bienvenido!");
        return $this->json([
            'message' => 'Mensaje de welcome!',
        ]);
    }
}

