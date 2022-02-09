<?php

namespace App\Repository;

use App\Entity\AuthorDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AuthorDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method AuthorDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method AuthorDetails[]    findAll()
 * @method AuthorDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AuthorDetails::class);
    }

    // /**
    //  * @return AuthorDetails[] Returns an array of AuthorDetails objects
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
    public function findOneBySomeField($value): ?AuthorDetails
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
