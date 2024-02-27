<?php

namespace App\Factory;

use App\Entity\AccountTransaction;
use App\Repository\AccountTransactionRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<AccountTransaction>
 *
 * @method        AccountTransaction|Proxy                     create(array|callable $attributes = [])
 * @method static AccountTransaction|Proxy                     createOne(array $attributes = [])
 * @method static AccountTransaction|Proxy                     find(object|array|mixed $criteria)
 * @method static AccountTransaction|Proxy                     findOrCreate(array $attributes)
 * @method static AccountTransaction|Proxy                     first(string $sortedField = 'id')
 * @method static AccountTransaction|Proxy                     last(string $sortedField = 'id')
 * @method static AccountTransaction|Proxy                     random(array $attributes = [])
 * @method static AccountTransaction|Proxy                     randomOrCreate(array $attributes = [])
 * @method static AccountTransactionRepository|RepositoryProxy repository()
 * @method static AccountTransaction[]|Proxy[]                 all()
 * @method static AccountTransaction[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static AccountTransaction[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static AccountTransaction[]|Proxy[]                 findBy(array $attributes)
 * @method static AccountTransaction[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static AccountTransaction[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class AccountTransactionFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'debtor' => AccountFactory::random(),
            'creditor' => AccountFactory::random(),
            'currency' => CurrencyFactory::random(),
            'amount' => self::faker()->numberBetween(24, 550),
            'datetime' => self::faker()->dateTimeThisMonth,
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(AccountTransaction $accountTransaction): void {})
        ;
    }

    protected static function getClass(): string
    {
        return AccountTransaction::class;
    }
}
