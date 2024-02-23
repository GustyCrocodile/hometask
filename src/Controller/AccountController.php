<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Account;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(): JsonResponse
    {
        // example thing ???
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AccountController.php',
        ]);
    }

    #[Route('/account/{id}', name: 'customer_accounts')]
    public function show(EntityManagerInterface $entityManager, int $customer_id): JsonResponse
    {
        // $accounts
        return $this->json([
            'input' => $customer_id,
        ]);
    }


}
