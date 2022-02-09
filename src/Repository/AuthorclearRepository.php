<?php

namespace App\Repository;

use App\Entity\Authorclear;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Authorclear|null find($id, $lockMode = null, $lockVersion = null)
 * @method Authorclear|null findOneBy(array $criteria, array $orderBy = null)
 * @method Authorclear[]    findAll()
 * @method Authorclear[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorclearRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Authorclear::class);
    }

    // /**
    //  * @return Authorclear[] Returns an array of Authorclear objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Authorclear
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
