<?php

namespace App\Controller;

use App\Entity\Account;
use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/api/accounts', name: 'accounts_')]
class AccountController extends AbstractController
{
    #[Route('/{id}', name: 'list')]
    public function list(EntityManagerInterface $entityManager, Client $client): JsonResponse
    {
        $accounts = $entityManager->getRepository(Account::class)->findBy(['owner' => $client->getId()]);
        return $this->json($accounts);
    }
}
