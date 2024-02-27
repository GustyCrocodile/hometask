<?php

namespace App\DataFixtures;

use App\Factory\AccountStatementFactory;
use App\Factory\AccountTransactionFactory;
use App\Factory\ClientFactory;
use App\Factory\CurrencyFactory;
use App\Factory\AccountFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        CurrencyFactory::createOne(['currency' => 'USD']);
        CurrencyFactory::createOne(['currency' => 'EUR']);
        CurrencyFactory::createOne(['currency' => 'GBP']);


        ClientFactory::createMany(3);
        AccountFactory::createMany(5);
        AccountTransactionFactory::createMany(10);
        //AccountStatementFactory::createMany(10);

        // $manager->flush();
    }
}
