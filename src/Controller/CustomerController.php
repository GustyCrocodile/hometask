<?php

namespace App\Controller;

use App\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

class CustomerController extends AbstractController
{
//    #[Route('/customer', name: 'app_customer')]
//    public function index(): JsonResponse
//    {
//        return $this->json([
//            'message' => 'Welcome to your new controller!',
//            'path' => 'src/Controller/CustomerController.php',
//        ]);
//    }

     #[Route('api/{customer_id}/accounts', name: 'app_customer')]
    public function show(EntityManagerInterface $entityManager, Customer $customer_id): JsonResponse
    {
        $customer = $entityManager->getRepository(Customer::class)->find($customer_id);
        $accounts = $customer->getAccounts()->toArray();
        $account_array = [];
        $i = 0;
        foreach ($accounts as $account) {
            $account_array[$i] = [
                'account_id' => $account->getId(),
                'iban' => $account->getAccountNumber(),
                'currency' => $account->getCurrency(),
                'balance' => $account->getBalance(),
            ];
            $i++;
        }

        return $this->json([
            'accounts' => $account_array,
        ]);
    }
}
