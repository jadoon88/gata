<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DemoCatApiController extends AbstractController
{
    #[Route('/demo/api/cat', name: 'app_demo_cat_api', methods: ['POST'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DemoCatApiController.php',
        ]);
    }
}
