<?php

namespace App\Repository;

use App\Entity\AccountTransaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AccountTransaction>
 *
 * @method AccountTransaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountTransaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountTransaction[]    findAll()
 * @method AccountTransaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountTransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountTransaction::class);
    }

    //    /**
    //     * @return AccountTransaction[] Returns an array of AccountTransaction objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AccountTransaction
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
