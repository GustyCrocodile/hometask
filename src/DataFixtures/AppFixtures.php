<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use App\Entity\Account;
use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Payment;

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

        $account1 = new Account();
        $account1->setAccountNumber("FI1398162541992777");
        $account1->setBalance(1230);
        $account1->setCurrency("USD");
        $account1->setOwner($customer1);

        $manager->persist($customer1);
        $manager->persist($account1);

        $manager->flush();
    }
}
