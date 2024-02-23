<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use App\Entity\Account;
use App\Entity\Transaction;
use Faker\Factory;
// use Faker\Generator;
use function Symfony\Component\Clock\now;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    protected $faker;

    public function load(ObjectManager $manager): void
    {
        $this->faker = Factory::create();

        $customer1 = new Customer();
        $customer1->setFirstName($this->faker->firstName);
        $customer1->setLastName($this->faker->lastName);

        $customer2 = new Customer();
        $customer2->setFirstName($this->faker->firstName);
        $customer2->setLastName($this->faker->lastName);

        $account1 = new Account();
        $account1->setAccountNumber("FI1398162541992777");
        $account1->setBalance(0); // 1230
        $account1->setCurrency("USD");
        $account1->setOwner($customer1);

//        for ($i = 0; $i < 3; $i++) {
//            $transaction = new Transaction();
//            if ($i == 0) {
//                $transaction->setAmount(1500);
//                $transaction->setBookingDate(now('-1 day'));
//            } elseif ($i == 1) {
//                $transaction->setAmount(1500);
//                $transaction->setBookingDate(now());
//            }
//            $transaction->setCreditor($customer1->getId());
//
//            $transaction->setDebtor($customer1->getId());
//            $transaction->setDescription($this->faker->text(150));
//        }

        // accounts for customer1
        $account2 = new Account();
        $account2->setAccountNumber("FI8076824917571817");
        $account2->setBalance(0); // 5500
        $account2->setCurrency("EUR");
        $account2->setOwner($customer1);

        $account3 = new Account();
        $account3->setAccountNumber("FI2568372512365934");
        $account3->setBalance(0); // 3022
        $account3->setCurrency("EUR");
        $account3->setOwner($customer1);

        $manager->persist($customer1);
        $manager->persist($customer2);

        $manager->persist($account1);
        $manager->persist($account2);
        $manager->persist($account3);

        // account for customer 2
        $account4 = new Account();
        $account4->setAccountNumber("FI2689576531375362");
        $account4->setBalance(0);
        $account4->setCurrency("EUR");
        $account4->setOwner($customer2);

        $account5 = new Account();
        $account5->setAccountNumber("FI7467311369513821");
        $account5->setBalance(0);
        $account5->setCurrency("EUR");
        $account5->setOwner($customer2);

        $manager->persist($account4);
        $manager->persist($account5);

        $manager->flush();
    }
}
