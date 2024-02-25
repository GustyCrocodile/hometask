<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/accounts', name: 'accounts_')]
class AccountController extends AbstractController
{
    #[Route('/{id}', name: 'list')]
    public function list(Client $client): JsonResponse
    {
        // dd($client);
        // if not found
        // json error message
        // i guess
        return $this->json([
            'message' => 'Welcome to your account controller!'
        ]);
    }
}
