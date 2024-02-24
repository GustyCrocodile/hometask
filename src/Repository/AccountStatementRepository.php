<?php

namespace App\Repository;

use App\Entity\AccountStatement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AccountStatement>
 *
 * @method AccountStatement|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountStatement|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountStatement[]    findAll()
 * @method AccountStatement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountStatementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountStatement::class);
    }

    //    /**
    //     * @return AccountStatement[] Returns an array of AccountStatement objects
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

    //    public function findOneBySomeField($value): ?AccountStatement
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
