<?php

namespace App\Factory;

use App\Entity\AccountStatement;
use App\Repository\AccountStatementRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<AccountStatement>
 *
 * @method        AccountStatement|Proxy                     create(array|callable $attributes = [])
 * @method static AccountStatement|Proxy                     createOne(array $attributes = [])
 * @method static AccountStatement|Proxy                     find(object|array|mixed $criteria)
 * @method static AccountStatement|Proxy                     findOrCreate(array $attributes)
 * @method static AccountStatement|Proxy                     first(string $sortedField = 'id')
 * @method static AccountStatement|Proxy                     last(string $sortedField = 'id')
 * @method static AccountStatement|Proxy                     random(array $attributes = [])
 * @method static AccountStatement|Proxy                     randomOrCreate(array $attributes = [])
 * @method static AccountStatementRepository|RepositoryProxy repository()
 * @method static AccountStatement[]|Proxy[]                 all()
 * @method static AccountStatement[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static AccountStatement[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static AccountStatement[]|Proxy[]                 findBy(array $attributes)
 * @method static AccountStatement[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static AccountStatement[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class AccountStatementFactory extends ModelFactory
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
            'account' => AccountFactory::all(),
            'balance' => self::faker()->randomFloat(2),
            'date' => self::faker()->dateTimeBetween('-1 month', '-1 week'),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(AccountStatement $accountStatement): void {})
        ;
    }

    protected static function getClass(): string
    {
        return AccountStatement::class;
    }
}
