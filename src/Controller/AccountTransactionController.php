<?php

namespace App\Controller;

use App\Entity\Account;
use App\Entity\AccountTransaction;
use App\Repository\AccountTransactionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/api/transactions', name: 'transactions_')]
class AccountTransactionController extends AbstractController
{
    #[Route('/{id}', name: 'list')]
    public function index(AccountTransactionRepository $transactionRepository, Account $account): JsonResponse
    {
        $transactions = $transactionRepository->findByAccount($account->getId());
        dd($transactions);

        return $this->json($transactions);
    }
}
